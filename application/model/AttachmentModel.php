<?php
/**
 * Created by PhpStorm.
 * User: panjie
 * Date: 17/3/17
 * Time: 下午2:32
 */

namespace app\model;


class AttachmentModel extends YunzhiModel
{
    protected $data = [
        "id"       => 0,
        "name"     => "",   // 上传名称
        "saveName" => "",   // 保存名称
        "sha1"     => "",
        "md5"      => ""
    ];

}