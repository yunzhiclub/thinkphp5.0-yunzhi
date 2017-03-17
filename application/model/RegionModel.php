<?php
/**
 * Created by PhpStorm.
 * User: zhangmengxiang
 * Date: 17/3/17
 * Time: 下午4:30
 */

namespace app\model;

/**
 * Class Region 区域
 * @package app\model;
 */

class RegionModel extends YunzhiModel
{
	protected $data = [
		"id" 			=>0,	//区域ID
		"title"			=>"",	//区域名称
		"totalRows"		=>0,	//总排数	
		"totalColumns"	=>0		//总列数	
	];
}