<?php
/**
 * Created by PhpStorm.
 * User: zhangmengxiang
 * Date: 17/3/17
 * Time: 下午4:36
 */

namespace app\model;

/**
 * Class Course 课次
 * @package app\model;
 */

class CourseModel extends YunzhiModel
{
	protected $data = [
		"id"		=>0,	//课次ID
		"beginTime"	=>0,	//开始时间	
		"endTime"	=>0		//结束时间
	];
}