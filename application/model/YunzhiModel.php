<?php
namespace app\model;
use think\Model;

class YunzhiModel extends Model
{
    public function __construct($data = [])
    {
        // 重写对应的数据表名
        if (empty($this->name)) {
            // 当前模型名
            $name = substr(get_class($this), 0, -strlen(config('model_suffix')));
            $this->name = basename(str_replace('\\', '/', $name));
        }

        // 使用默认数据进行项目初始化
        if (empty($data)) {
            $data = $this->data;
        }

        parent::__construct($data);
    }

    /**
     * @param $key
     * @param $value
     * @return $this
     * Create by Panjie@yunzhiclub.com
     */
    public function setData($key, $value)
    {
        // 标记字段更改
        if (!isset($this->data[$key]) || ($this->data[$key] != $value && !in_array($key, $this->change))) {
            $this->change[] = $key;
        }
        // 设置数据对象属性
        $this->data[$key] = $value;
        return $this;
    }

    /**
     * 重写 查找单条记录
     * 当返回值为null时，强制返回当前调用对象
     * @access public
     * @param mixed        $data  主键值或者查询条件（闭包）
     * @param array|string $with  关联预查询
     * @param bool         $cache 是否缓存
     * @return static
     * @throws exception\DbException
     */
    public static function get($data = null, $with = [], $cache = false)
    {
        $query = self::parseQuery($data, $with, $cache);
        $result = $query->find($data);
        if (null === $result) {
            $className = get_called_class();
            return new $className;
        } else {
            return $result;
        }
    }

    /**
     * 获取对象原始数据 如果不存在指定字段返回false
     * @access public
     * @param string $name 字段名 留空获取全部
     * @return mixed
     * @throws InvalidArgumentException
     */
    public function getData($name = null)
    {
        try {
            return parent::getData($name);
        } catch (\Exception $e) {
            return '';
        }
    }

    /**
     * 获取表的名称
     * @return   String                   
     * @author panjie panjie@mengyunzhi.com
     * @DateTime 2016-09-05T09:57:18+0800
     */
    public function getName()
    {
        return $this->name;
    }
}