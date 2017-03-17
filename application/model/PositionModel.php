<?php
/**
 * Created by PhpStorm.
 * User: zhangmengxiang
 * Date: 17/3/17
 * Time: 下午4:13
 */


namespace app\model;

/**
 * Class Position 位置
 * @package  app\model;
 */
class PositionModel extends YunzhiModel
{
	protected $RegionModel = NUll;

	protected $data = [
		"id" 			=>0,	//位置ID
		"regionId"		=>0,	//地区ID
		"rowsNum"  		=>0,	//排数
		"columnNum"		=>0		//列数		
	];

	/**
	 * 	区域模型
	 *  @return   RegionModel
	 */
	public function RegionModel()
	{
		if (is_null($this->RegionModel)) {
			
			$this->RegionModel = RegionModel::get($this->getData('regionId'));
		}

		return $this->RegionModel;
	}
}