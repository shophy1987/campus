<?php

namespace shophy\campus;

use shophy\campus\common\Utils;
use shophy\campus\common\HttpUtils;
use shophy\campus\exception\ApiException;

/**
 * 智慧校园2.0 sdk基础类
 * @package shophy\campus
 */
class Campus
{
    const API_PROTOCAL = 'https://';
    const API_DOMAIN = 'oapi.campus.qq.com';
    const SUCCESS_OK = 'OK';

    public $orgId;
    private $appId;
    private $secretId;
    private $secretKey;

    /**
     * sdk基础类
     * @param string $secretId
     * @param string $secretKey
     */
    function __construct($appId, $secretId, $secretKey, $orgId=0)
    {
        Utils::checkNotEmptyStr($appId, "appId");
        Utils::checkNotEmptyStr($secretId, "secretId");
        Utils::checkNotEmptyStr($secretKey, "secretKey");

        $this->appId = $appId;
        $this->orgId = $orgId;
        $this->secretId = $secretId;
        $this->secretKey = $secretKey;
    }

    /**
     * @param string $action  方法名
     * @param array $request  参数列表
     * @return mixed
     * @throws ApiException
     */
    public function __call($action, $request)
    {
        return $this->doRequest($action, $request[0]);
    }
    
    private function doRequest($action, $request)
    {
        try {
            $responseData = null;
            switch ($request->method()) {
                case 'GET': 
                    $responseData = $this->getRequest($action, $request);
                    break;
                case 'POST':
                    $responseData = $this->postRequest($action, $request);
                    break;
                default:
                    throw new ApiException('Method only support (GET, POST)');
                    break;
            }

            if ( !Utils::notEmptyStr($responseData))    throw new ApiException('empty response');

            $responseData = json_decode($responseData, true/*to array*/);
            if ($responseData === false || (isset($responseData['ErrorCode']) && strtoupper($responseData['ErrorCode']) != self::SUCCESS_OK)) {
                throw new ApiException($responseData['ErrorCode'].':'.$responseData['ErrorMsg']);
            }

            return $this->returnResponse($action, $responseData['Data'] ?? $responseData);
        } catch (\Exception $e) {
            if (!($e instanceof ApiException)) {
                throw new ApiException($e->getMessage());
            } else {
                throw $e;
            }
        }
    }

    /**
     * @throws ApiException
     */
    private function getRequest($action, $request)
    {
        $params = $this->serializeRequest($action, $request);
        $url = $this->formatRequestData($action, $request, $params);

        return HttpUtils::httpGet($url);
    }

    /**
     * @throws ApiException
     */
    private function postRequest($action, $request)
    {
        $params = [];
        $postData = $this->serializeRequest($action, $request);
        $url = $this->formatRequestData($action, $request, $params, $postData);

        return HttpUtils::httpPost($url, $postData);
    }

    private function serializeRequest($action, $request)
    {
        $data = $request->serialize();
        array_key_exists('AppId', $data) && $data['AppId'] = $this->appId;
        array_key_exists('OrgId', $data) && $data['OrgId'] = $this->orgId;
        array_key_exists('Action', $data) && $data['Action'] = ucfirst($action);
        array_key_exists('SecretId', $data) && $data['SecretId'] = $this->secretId;
        array_key_exists('SecretKey', $data) && $data['SecretKey'] = $this->secretKey;

        return $data;
    }

    /**
     * @param array $params 接口参数
     * @param array $postData post数据
     * @return string $path 接口请求地址
     */
    private function formatRequestData($action, $request, &$params=[], &$postData=[])
    {
        $path = $request->path();
        $method = $request->method();

        if ($request->isSign()) {
            $params['Action'] = ucfirst($action);
            $params['AppId'] = $this->appId;
            $params['OrgId'] = $this->orgId ?? 0;
            $params['SecretId'] = $this->secretId;
            $params['Nonce'] = rand();
            $params['Timestamp'] = time();
            $params['Sign'] = self::signRequestData($this->secretKey, $method, self::API_DOMAIN.$path, $params, json_encode($postData));
        }

        return self::API_PROTOCAL.self::API_DOMAIN.$path.(empty($params) ? '' : ('?'.http_build_query($params)));
    }

    public static function signRequestData($secretKey, $method, $url, $params, $body)
    {
        Utils::checkNotEmptyStr($secretKey, "secretKey");
        if (!is_string($body))  throw new ParameterException('sign body must be an string');
        if (!is_array($params)) throw new ParameterException('sign params must be an array');

        // params 需要排序
        ksort($params);

        $rawStr = $method.$url."?".http_build_query($params);

        if ($method == "POST" || $method == "PUT") {
            $rawStr = $rawStr."&Data=".$body;
        }
        
        // 2. hmac_sha1 签名
        $key = utf8_encode($secretKey);
        $msg = utf8_encode($rawStr);

        // 16 进制字符串
        $b16encoded = hash_hmac("sha1", $msg, $key, false);

        return urlencode($b16encoded);
    }

    public function returnResponse($action, $response)
    {
        $respClass = "shophy\\campus\\models\\".ucfirst($action)."Response";
        $obj = new $respClass();
        $obj->deserialize($response);
        return $obj;
    }
}
