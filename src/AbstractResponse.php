<?php

namespace shophy\campus;

/**
 * 抽象AbstractResponse类
 * @package shophy\campus;
 */
abstract class AbstractResponse extends AbstractModel
{
    // 用户通用信息
    // 值	说明
    // OrgUserId	用户在学校的唯一id
    // OpenUserId	用户在系统全局唯一的id
    // RoleId	角色id
    // OrgId	机构id
    
    // RoleId
    // 值	说明
    // 3	教育局
    // 11	学生
    // 12	老师
    // 13	家长
    // 14	校友
    // 15	退休教师
    // 16	其他人员
    // 51	学校管理员

    // DepartmentType
    // 值	说明
    // 1	学生
    // 2	教职工
    // 4	校友
    // 5	退休教师
    // 6	临时组
    // 7	虚拟组
    // 8	课程班
    // 9	上级单位
    // 10	教学班
}
