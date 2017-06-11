<?php
/**
 * Created by PhpStorm.
 * User: zhengpenglin
 * Date: 2016/4/22
 * Time: 18:07
 */

namespace Fb\Base;


//use yii\helpers\Inflector;

use yii\base\Model;

class BaseEntity extends Model
{
//    public function __call($name, $params)
//    {
//        switch (substr($name, 0, 3)) {
//            case 'get' :
//                $property = Inflector::camel2id(substr($name,3),"_");
//                if(property_exists($this, $property)){
//                    return $this->$property;
//                }
//        }
//        throw new \Exception('Calling unknown method: ' . get_class($this) . "::$name()");
//    }
//
//    public function __get($name)
//    {
//        $getter = 'get' . Inflector::camelize($name);
//
//        if (method_exists($this, $getter)) {
//            // read property, e.g. getName()
//            return $this->$getter();
//        } else {
//            if ($this->canGetProperty($name)) {
//                return $this->$name;
//            }
//        }
//
//        if (method_exists($this, 'set' . $name)) {
//            throw new \Exception('Getting write-only property: ' . get_class($this) . '::' . $name);
//        } else {
//            throw new \Exception('Getting unknown property: ' . get_class($this) . '::' . $name);
//        }
//    }
//
//    public function canGetProperty($name, $checkVars = true)
//    {
//        return method_exists($this, 'get' . $name) || $checkVars && property_exists($this, $name);
//    }
//
//    private function canSetProperty($name, $checkVars = true)
//    {
//        return method_exists($this, 'set' . $name) || $checkVars && property_exists($this, $name);
//    }

}