<?php

namespace shophy\campus\models;

use shophy\campus\AbstractResponse;

class GetCourseScheduleResponse extends AbstractResponse
{
    // 班级架构id 123
    public $ClassId;
    // Course 学科信息
    public $Course;
    // Teacher 教师信息
    public $Teacher;
    // Room 教室信息
    public $Room;
    // 开始周 1
    public $WeekStart;
    // 结束周 50
    public $WeekEnd;
    // 周期：1 每周，2 单周，3 双周
    public $WeekPeriod;
    // 节次信息
    public $Lessons;

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists('ClassId', $param) && $param['ClassId'] !== null) {
            $this->ClassId = $param['ClassId'];
        }

        if (array_key_exists('Course', $param) && $param['Course'] !== null) {
            $this->Course = new Course();
            $this->Course->deserialize($param['Course']);
        }

        if (array_key_exists('Teacher', $param) && $param['Teacher'] !== null) {
            $this->Teacher = [];
            foreach ($param['Teacher'] as $key => $value){
                $obj = new Teacher();
                $obj->deserialize($value);
                array_push($this->Teacher, $obj);
            }
        }

        if (array_key_exists('Room', $param) && $param['Room'] !== null) {
            $this->Room = new Room();
            $this->Room->deserialize($param['Room']);
        }

        if (array_key_exists('WeekStart', $param) && $param['WeekStart'] !== null) {
            $this->WeekStart = $param['WeekStart'];
        }

        if (array_key_exists('WeekEnd', $param) && $param['WeekEnd'] !== null) {
            $this->WeekEnd = $param['WeekEnd'];
        }

        if (array_key_exists('WeekPeriod', $param) && $param['WeekPeriod'] !== null) {
            $this->WeekPeriod = $param['WeekPeriod'];
        }

        if (array_key_exists('Lessons', $param) && $param['Lessons'] !== null) {
            $this->Lessons = [];
            foreach ($param['Lessons'] as $key => $value){
                $obj = new Lesson();
                $obj->deserialize($value);
                array_push($this->Lessons, $obj);
            }
        }
    }
}
