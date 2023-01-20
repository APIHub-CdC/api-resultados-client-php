<?php

namespace CirculoDeCredito\ApiResultados\Client\Model;

use \ArrayAccess;
use CirculoDeCredito\ApiResultados\Client\ObjectSerializer;

class FintechRazonObject implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;
    
    protected static $RCCPMModelName = 'FintechRazonObject';
    
    protected static $RCCPMTypes = [
        'clave' => 'string',
        'descripcion' => 'string'
    ];
    
    protected static $RCCPMFormats = [
        'clave' => null,
        'descripcion' => null
    ];
    
    public static function RCCPMTypes()
    {
        return self::$RCCPMTypes;
    }
    
    public static function RCCPMFormats()
    {
        return self::$RCCPMFormats;
    }
    
    protected static $attributeMap = [
        'clave' => 'clave',
        'descripcion' => 'descripcion'
    ];
    
    protected static $setters = [
        'clave' => 'setClave',
        'descripcion' => 'setDescripcion'
    ];
    
    protected static $getters = [
        'clave' => 'getClave',
        'descripcion' => 'getDescripcion'
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
        return self::$RCCPMModelName;
    }
    
    
    
    protected $container = [];
    
    public function __construct(array $data = null)
    {
        $this->container['clave'] = isset($data['clave']) ? $data['clave'] : null;
        $this->container['descripcion'] = isset($data['descripcion']) ? $data['descripcion'] : null;
    }
    
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['clave'] === null) {
            $invalidProperties[] = "'clave' can't be null";
        }
        if ($this->container['descripcion'] === null) {
            $invalidProperties[] = "'descripcion' can't be null";
        }
        return $invalidProperties;
    }
    
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }
    
    public function getClave()
    {
        return $this->container['clave'];
    }
    
    public function setClave($clave)
    {
        $this->container['clave'] = $clave;
        return $this;
    }
    
    public function getDescripcion()
    {
        return $this->container['descripcion'];
    }
    
    public function setDescripcion($descripcion)
    {
        $this->container['descripcion'] = $descripcion;
        return $this;
    }
    
    #[\ReturnTypeWillChange]
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }
    
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }
    
    #[\ReturnTypeWillChange]
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }
    
    #[\ReturnTypeWillChange]
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }
    
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) {
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}
