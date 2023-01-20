<?php

namespace CirculoDeCredito\ApiResultados\Client\Model;

use \ArrayAccess;
use CirculoDeCredito\ApiResultados\Client\ObjectSerializer;

class LaeObject implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;
    
    protected static $RCCPMModelName = 'LaeObject';
    
    protected static $RCCPMTypes = [
        'prestamo_personal' => 'CirculoDeCredito\ApiResultados\Client\Model\MatrizLaeObject[]',
        'tarjeta_credito' => 'CirculoDeCredito\ApiResultados\Client\Model\MatrizLaeObject[]',
        'tarjeta_departamental' => 'CirculoDeCredito\ApiResultados\Client\Model\MatrizLaeObject[]'
    ];
    
    protected static $RCCPMFormats = [
        'prestamo_personal' => null,
        'tarjeta_credito' => null,
        'tarjeta_departamental' => null
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
        'prestamo_personal' => 'prestamoPersonal',
        'tarjeta_credito' => 'tarjetaCredito',
        'tarjeta_departamental' => 'tarjetaDepartamental'
    ];
    
    protected static $setters = [
        'prestamo_personal' => 'setPrestamoPersonal',
        'tarjeta_credito' => 'setTarjetaCredito',
        'tarjeta_departamental' => 'setTarjetaDepartamental'
    ];
    
    protected static $getters = [
        'prestamo_personal' => 'getPrestamoPersonal',
        'tarjeta_credito' => 'getTarjetaCredito',
        'tarjeta_departamental' => 'getTarjetaDepartamental'
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
        $this->container['prestamo_personal'] = isset($data['prestamo_personal']) ? $data['prestamo_personal'] : null;
        $this->container['tarjeta_credito'] = isset($data['tarjeta_credito']) ? $data['tarjeta_credito'] : null;
        $this->container['tarjeta_departamental'] = isset($data['tarjeta_departamental']) ? $data['tarjeta_departamental'] : null;
    }
    
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['prestamo_personal'] === null) {
            $invalidProperties[] = "'prestamo_personal' can't be null";
        }
        if ($this->container['tarjeta_credito'] === null) {
            $invalidProperties[] = "'tarjeta_credito' can't be null";
        }
        if ($this->container['tarjeta_departamental'] === null) {
            $invalidProperties[] = "'tarjeta_departamental' can't be null";
        }
        return $invalidProperties;
    }
    
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }
    
    public function getPrestamoPersonal()
    {
        return $this->container['prestamo_personal'];
    }
    
    public function setPrestamoPersonal($prestamo_personal)
    {
        $this->container['prestamo_personal'] = $prestamo_personal;
        return $this;
    }
    
    public function getTarjetaCredito()
    {
        return $this->container['tarjeta_credito'];
    }
    
    public function setTarjetaCredito($tarjeta_credito)
    {
        $this->container['tarjeta_credito'] = $tarjeta_credito;
        return $this;
    }
    
    public function getTarjetaDepartamental()
    {
        return $this->container['tarjeta_departamental'];
    }
    
    public function setTarjetaDepartamental($tarjeta_departamental)
    {
        $this->container['tarjeta_departamental'] = $tarjeta_departamental;
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
