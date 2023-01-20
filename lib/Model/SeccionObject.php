<?php

namespace CirculoDeCredito\ApiResultados\Client\Model;

use \ArrayAccess;
use CirculoDeCredito\ApiResultados\Client\ObjectSerializer;

class SeccionObject implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;
    
    protected static $RCCPMModelName = 'SeccionObject';
    
    protected static $RCCPMTypes = [
        'nombre_seccion' => 'string',
        'preguntas' => 'CirculoDeCredito\ApiResultados\Client\Model\PreguntaObject[]'
    ];
    
    protected static $RCCPMFormats = [
        'nombre_seccion' => null,
        'preguntas' => null
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
        'nombre_seccion' => 'nombreSeccion',
        'preguntas' => 'preguntas'
    ];
    
    protected static $setters = [
        'nombre_seccion' => 'setNombreSeccion',
        'preguntas' => 'setPreguntas'
    ];
    
    protected static $getters = [
        'nombre_seccion' => 'getNombreSeccion',
        'preguntas' => 'getPreguntas'
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
        $this->container['nombre_seccion'] = isset($data['nombre_seccion']) ? $data['nombre_seccion'] : null;
        $this->container['preguntas'] = isset($data['preguntas']) ? $data['preguntas'] : null;
    }
    
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['nombre_seccion'] === null) {
            $invalidProperties[] = "'nombre_seccion' can't be null";
        }
        if ($this->container['preguntas'] === null) {
            $invalidProperties[] = "'preguntas' can't be null";
        }
        return $invalidProperties;
    }
    
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }
    
    public function getNombreSeccion()
    {
        return $this->container['nombre_seccion'];
    }
    
    public function setNombreSeccion($nombre_seccion)
    {
        $this->container['nombre_seccion'] = $nombre_seccion;
        return $this;
    }
    
    public function getPreguntas()
    {
        return $this->container['preguntas'];
    }
    
    public function setPreguntas($preguntas)
    {
        $this->container['preguntas'] = $preguntas;
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
