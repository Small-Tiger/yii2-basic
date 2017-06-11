<?php
/**
 * Created by PhpStorm.
 * User: zhengpenglin
 * Date: 2016/8/17
 * Time: 11:19
 */

namespace data\client\Transport;

use yii\helpers\Inflector;

trait PropertyTrait
{

    /**
     * 根据传入配置数据设置当前对象的属性
     * @param $config
     */
    protected function configure($config = [])
    {
        foreach ($config as $name => $value) {
            $setter = 'set' . Inflector::camelize($name);
            if (method_exists($this, $setter)) {
                $this->$setter($value);
            } else {
                if ($this->canSetProperty($name)) {
                    $this->$name = $value;
                }
            }
        }
    }

    /**
     * Returns a value indicating whether a property can be set.
     * A property is writable if:
     *
     * - the class has a setter method associated with the specified name
     *   (in this case, property name is case-insensitive);
     * - the class has a member variable with the specified name (when `$checkVars` is true);
     *
     * @param string $name the property name
     * @param boolean $checkVars whether to treat member variables as properties
     * @return boolean whether the property can be written
     * @see canGetProperty()
     */
    private function canSetProperty($name, $checkVars = true)
    {
        return method_exists($this, 'set' . $name) || $checkVars && property_exists($this, $name);
    }


}