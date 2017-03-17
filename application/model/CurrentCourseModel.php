<?php
/**
 * Created by PhpStorm.
 * User: zhangmengxiang
 * Date: 17/3/17
 * Time: 下午4:43
 */

namespace app\model;

/**
 * Class CurrentCourse 当前课次
 * @package app\model;
 */

class CurrentCourseModel extends YunzhiModel
{
	protected $CourseModel = NUll;

	protected $data = [
		"courseId" 		=>0 	//课次ID
	];

	/**
     * 课次模型
     * @return CourseModel
     */
    public function CourseModel()
    {
    	if (is_null($this->CourseModel)) {
    		
    		$this->CourseModel = CourseModel::get($this->getData('courseId'));
    	}

    	return $this->CourseModel;
    }
}