<?php

namespace CirculoDeCredito\ApiResultados\Client\Model;

use \ArrayAccess;
use CirculoDeCredito\ApiResultados\Client\ObjectSerializer;

class IndicadorObject implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;
    
    protected static $RCCPMModelName = 'IndicadorObject';
    
    protected static $RCCPMTypes = [
        'nombre_indicador' => 'string',
        'valor' => 'string'
    ];
    
    protected static $RCCPMFormats = [
        'nombre_indicador' => null,
        'valor' => null
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
        'nombre_indicador' => 'nombreIndicador',
        'valor' => 'valor'
    ];
    
    protected static $setters = [
        'nombre_indicador' => 'setNombreIndicador',
        'valor' => 'setValor'
    ];
    
    protected static $getters = [
        'nombre_indicador' => 'getNombreIndicador',
        'valor' => 'getValor'
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
        $this->container['nombre_indicador'] = isset($data['nombre_indicador']) ? $data['nombre_indicador'] : null;
        $this->container['valor'] = isset($data['valor']) ? $data['valor'] : null;
    }
    
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['nombre_indicador'] === null) {
            $invalidProperties[] = "'nombre_indicador' can't be null";
        }
        if ($this->container['valor'] === null) {
            $invalidProperties[] = "'valor' can't be null";
        }
        return $invalidProperties;
    }
    
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }
    
    public function getNombreIndicador()
    {
        return $this->container['nombre_indicador'];
    }
    
    public function setNombreIndicador($nombre_indicador)
    {
        $this->container['nombre_indicador'] = $nombre_indicador;
        return $this;
    }
    
    public function getValor()
    {
        return $this->container['valor'];
    }
    
    public function setValor($valor)
    {
        $this->container['valor'] = $valor;
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
