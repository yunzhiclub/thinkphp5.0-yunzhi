<?php
/**
 * Created by PhpStorm.
 * User:  zhangmengxiang
 * Date: 17/3/17
 * Time: 下午4:23
 */

namespace app\model;

/**
 * Class Details 上课详情
 * @package app\model;
 */

class DetailsModel extends YunzhiModel
{
	protected $StudentModel = NULL;
	protected $CourseModel = NULL;
	protected $PositionModel = NULL;
	protected $RegionModel = NULL;
	protected $AttachmentModel = NULL;

	protected $data = [
		"studentId" 	=>"",       //学号	
		"courseId"		=>0,		//课次ID
		"positionId"	=>0,		//位置ID
		"regionId"		=>0,		//区域ID
		"attachmentId"	=>0	    //附件ID
	];

	/**
     * 学生模型
     * @return StudentModel     
     */
    public function StudentModel()
    {
        if (is_null($this->StudentModel)) {
            
            $this->StudentModel = StudentModel::get((int)$this->getData('studentId'));
        }

        return $this->StudentModel;
    }

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

    /**
     * 位置模型
     * @return  PositionModel
     */
    public function PositionModel()
    {
    	if (is_null($this->PositionModel)) {
    		
    		$this->PositionModel = PositionModel::get($this->getData('positionId'));
    	}
    	return $this->PositionModel;
    }
    
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

	/**
     * 附件模型
     * @return AttachmentModel
     */
    public function AttachmentModel()
    {
        if (is_null($this->AttachmentModel)) {
            
            $this->AttachmentModel = AttachmentModel::get((int)$this->getData('attachmentId'));
        }

        return $this->AttachmentModel;
    }

}