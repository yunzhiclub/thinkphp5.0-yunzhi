<?php
/**
 * Created by PhpStorm.
 * User: panjie
 * Date: 17/3/17
 * Time: 下午2:22
 */

namespace app\model;

/**
 * Class Student 学生
 * @package app\model
 */
class StudentModel extends YunzhiModel
{
    protected $AttachmentModel = NULL;

    protected $data = [
        "id"           => "",       // 学号
        "name"         => "",       // 姓名
        "attachmentId" => 0
    ];

    /**
     * 附件模型
     * @return AttachmentModel
     * Create by panjie@yunzhiclub.com
     */
    public function AttachmentModel()
    {
        if (is_null($this->AttachmentModel)) {
            
            $this->AttachmentModel = AttachmentModel::get((int)$this->getData('attachmentId'));
        }

        return $this->AttachmentModel;
    }


}