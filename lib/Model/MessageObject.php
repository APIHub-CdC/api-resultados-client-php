<?php

namespace CirculoDeCredito\ApiResultados\Client\Model;

use \ArrayAccess;
use CirculoDeCredito\ApiResultados\Client\ObjectSerializer;

class MessageObject implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;
    
    protected static $RCCPMModelName = 'MessageObject';
    
    protected static $RCCPMTypes = [
        'accepted' => 'bool',
        'message' => 'string'
    ];
    
    protected static $RCCPMFormats = [
        'accepted' => null,
        'message' => null
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
        'accepted' => 'accepted',
        'message' => 'message'
    ];
    
    protected static $setters = [
        'accepted' => 'setAccepted',
        'message' => 'setMessage'
    ];
    
    protected static $getters = [
        'accepted' => 'getAccepted',
        'message' => 'getMessage'
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
        $this->container['accepted'] = isset($data['accepted']) ? $data['accepted'] : null;
        $this->container['message'] = isset($data['message']) ? $data['message'] : null;
    }
    
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['accepted'] === null) {
            $invalidProperties[] = "'accepted' can't be null";
        }
        if ($this->container['message'] === null) {
            $invalidProperties[] = "'message' can't be null";
        }
        return $invalidProperties;
    }
    
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }
    
    public function getAccepted()
    {
        return $this->container['accepted'];
    }
    
    public function setAccepted($accepted)
    {
        $this->container['accepted'] = $accepted;
        return $this;
    }
    
    public function getMessage()
    {
        return $this->container['message'];
    }
    
    public function setMessage($message)
    {
        $this->container['message'] = $message;
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
