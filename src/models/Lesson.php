<?php

namespace shophy\campus\models;

use shophy\campus\AbstractResponse;

class Lesson extends AbstractResponse
{
    public $ClassId; //班级id 111
    public $CourseId; //课程id 111
    public $TeacherId; //教师id 123
    public $Type; //1行政班，2课程班
    public $ScheduleId; //课表id 1
    public $WeekDay; // 周几
    public $WeekStart; //开始周 1
    public $WeekEnd; //结束周 12
    public $LessonTime; //上课时间 8:00-9:00
    public $WeekPeriod; //周期：每周， 单周， 双周    
    public $CourseName; //学科名 高一数学
    public $Teacher; //教师名 测试老师
    public $BuildName; //教学楼名 逸夫楼
    public $RoomName; //教室名 101教室
    public $LessonId; //节次id 逗号间隔 1,2


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

        if (array_key_exists('CourseId', $param) && $param['CourseId'] !== null) {
            $this->CourseId = $param['CourseId'];
        }

        if (array_key_exists('TeacherId', $param) && $param['TeacherId'] !== null) {
            $this->TeacherId = $param['TeacherId'];
        }

        if (array_key_exists('Type', $param) && $param['Type'] !== null) {
            $this->Type = $param['Type'];
        }

        if (array_key_exists('ScheduleId', $param) && $param['ScheduleId'] !== null) {
            $this->ScheduleId = $param['ScheduleId'];
        }

        if (array_key_exists('WeekDay', $param) && $param['WeekDay'] !== null) {
            $this->WeekDay = $param['WeekDay'];
        }

        if (array_key_exists('WeekStart', $param) && $param['WeekStart'] !== null) {
            $this->WeekStart = $param['WeekStart'];
        }

        if (array_key_exists('WeekEnd', $param) && $param['WeekEnd'] !== null) {
            $this->WeekEnd = $param['WeekEnd'];
        }

        if (array_key_exists('LessonTime', $param) && $param['LessonTime'] !== null) {
            $this->LessonTime = $param['LessonTime'];
        }

        if (array_key_exists('WeekPeriod', $param) && $param['WeekPeriod'] !== null) {
            $this->WeekPeriod = $param['WeekPeriod'];
        }

        if (array_key_exists('CourseName', $param) && $param['CourseName'] !== null) {
            $this->CourseName = $param['CourseName'];
        }

        if (array_key_exists('Teacher', $param) && $param['Teacher'] !== null) {
            $this->Teacher = $param['Teacher'];
        }

        if (array_key_exists('BuildName', $param) && $param['BuildName'] !== null) {
            $this->BuildName = $param['BuildName'];
        }

        if (array_key_exists('RoomName', $param) && $param['RoomName'] !== null) {
            $this->RoomName = $param['RoomName'];
        }

        if (array_key_exists('LessonId', $param) && $param['LessonId'] !== null) {
            $this->LessonId = $param['LessonId'];
        }
    }
}
