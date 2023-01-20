<?php

namespace CirculoDeCredito\ApiResultados\Client\Model;

use \ArrayAccess;
use CirculoDeCredito\ApiResultados\Client\ObjectSerializer;

class RechazoObject implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;
    
    protected static $RCCPMModelName = 'RechazoObject';
    
    protected static $RCCPMTypes = [
        'tipo_rechazo' => 'string',
        'descripcion_rechazo' => 'string',
        'ingresado' => 'object'
    ];
    
    protected static $RCCPMFormats = [
        'tipo_rechazo' => null,
        'descripcion_rechazo' => null,
        'ingresado' => null
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
        'tipo_rechazo' => 'tipoRechazo',
        'descripcion_rechazo' => 'descripcionRechazo',
        'ingresado' => 'ingresado'
    ];
    
    protected static $setters = [
        'tipo_rechazo' => 'setTipoRechazo',
        'descripcion_rechazo' => 'setDescripcionRechazo',
        'ingresado' => 'setIngresado'
    ];
    
    protected static $getters = [
        'tipo_rechazo' => 'getTipoRechazo',
        'descripcion_rechazo' => 'getDescripcionRechazo',
        'ingresado' => 'getIngresado'
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
        $this->container['tipo_rechazo'] = isset($data['tipo_rechazo']) ? $data['tipo_rechazo'] : null;
        $this->container['descripcion_rechazo'] = isset($data['descripcion_rechazo']) ? $data['descripcion_rechazo'] : null;
        $this->container['ingresado'] = isset($data['ingresado']) ? $data['ingresado'] : null;
    }
    
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['tipo_rechazo'] === null) {
            $invalidProperties[] = "'tipo_rechazo' can't be null";
        }
        if ($this->container['descripcion_rechazo'] === null) {
            $invalidProperties[] = "'descripcion_rechazo' can't be null";
        }
        if ($this->container['ingresado'] === null) {
            $invalidProperties[] = "'ingresado' can't be null";
        }
        return $invalidProperties;
    }
    
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }
    
    public function getTipoRechazo()
    {
        return $this->container['tipo_rechazo'];
    }
    
    public function setTipoRechazo($tipo_rechazo)
    {
        $this->container['tipo_rechazo'] = $tipo_rechazo;
        return $this;
    }
    
    public function getDescripcionRechazo()
    {
        return $this->container['descripcion_rechazo'];
    }
    
    public function setDescripcionRechazo($descripcion_rechazo)
    {
        $this->container['descripcion_rechazo'] = $descripcion_rechazo;
        return $this;
    }
    
    public function getIngresado()
    {
        return $this->container['ingresado'];
    }
    
    public function setIngresado($ingresado)
    {
        $this->container['ingresado'] = $ingresado;
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
