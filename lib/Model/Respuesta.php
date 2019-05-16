<?php

namespace APIHub\Client\Model;

use \ArrayAccess;
use \APIHub\Client\ObjectSerializer;

class Respuesta implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    protected static $apihubModelName = 'Response';

    protected static $apihubTypes = [
        'vectores_nivel' => '\APIHub\Client\Model\Vectores[]'
    ];

    protected static $apihubFormats = [
        'vectores_nivel' => null
    ];

    public static function apihubTypes()
    {
        return self::$apihubTypes;
    }

    public static function apihubFormats()
    {
        return self::$apihubFormats;
    }

    protected static $attributeMap = [
        'vectores_nivel' => 'vectoresNivel'
    ];

    protected static $setters = [
        'vectores_nivel' => 'setVectoresNivel'
    ];

    protected static $getters = [
        'vectores_nivel' => 'getVectoresNivel'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    public function getModelName()
    {
        return self::$apihubModelName;
    }

    protected $container = [];

    public function __construct(array $data = null)
    {
        $this->container['vectores_nivel'] = isset($data['vectores_nivel']) ? $data['vectores_nivel'] : null;
    }

    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['vectores_nivel'] === null) {
            $invalidProperties[] = "'vectores_nivel' can't be null";
        }
        return $invalidProperties;
    }

    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }

    public function getVectoresNivel()
    {
        return $this->container['vectores_nivel'];
    }

    public function setVectoresNivel($vectores_nivel)
    {
        $this->container['vectores_nivel'] = $vectores_nivel;
        return $this;
    }
    
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}
