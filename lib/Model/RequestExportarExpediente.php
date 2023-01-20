<?php

namespace CirculoDeCredito\ApiResultados\Client\Model;

use \ArrayAccess;
use CirculoDeCredito\ApiResultados\Client\ObjectSerializer;

class RequestExportarExpediente implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;
    
    protected static $RCCPMModelName = 'RequestExportarExpediente';
    
    protected static $RCCPMTypes = [
        'id_otorgante' => 'string',
        'folio' => 'int'
    ];
    
    protected static $RCCPMFormats = [
        'id_otorgante' => null,
        'folio' => 'int64'
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
        'id_otorgante' => 'idOtorgante',
        'folio' => 'folio'
    ];
    
    protected static $setters = [
        'id_otorgante' => 'setIdOtorgante',
        'folio' => 'setFolio'
    ];
    
    protected static $getters = [
        'id_otorgante' => 'getIdOtorgante',
        'folio' => 'getFolio'
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
        $this->container['id_otorgante'] = isset($data['id_otorgante']) ? $data['id_otorgante'] : null;
        $this->container['folio'] = isset($data['folio']) ? $data['folio'] : null;
    }
    
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['id_otorgante'] === null) {
            $invalidProperties[] = "'id_otorgante' can't be null";
        }
        if ((mb_strlen($this->container['id_otorgante']) > 8)) {
            $invalidProperties[] = "invalid value for 'id_otorgante', the character length must be smaller than or equal to 8.";
        }
        if ((mb_strlen($this->container['id_otorgante']) < 8)) {
            $invalidProperties[] = "invalid value for 'id_otorgante', the character length must be bigger than or equal to 8.";
        }
        if (!preg_match("/^[\\w\\d]*$/", $this->container['id_otorgante'])) {
            $invalidProperties[] = "invalid value for 'id_otorgante', must be conform to the pattern /^[\\w\\d]*$/.";
        }
        if ($this->container['folio'] === null) {
            $invalidProperties[] = "'folio' can't be null";
        }
        if (($this->container['folio'] > 999999)) {
            $invalidProperties[] = "invalid value for 'folio', must be smaller than or equal to 999999.";
        }
        if (($this->container['folio'] < 1)) {
            $invalidProperties[] = "invalid value for 'folio', must be bigger than or equal to 1.";
        }
        return $invalidProperties;
    }
    
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }
    
    public function getIdOtorgante()
    {
        return $this->container['id_otorgante'];
    }
    
    public function setIdOtorgante($id_otorgante)
    {
        if ((mb_strlen($id_otorgante) > 8)) {
            throw new \InvalidArgumentException('invalid length for $id_otorgante when calling RequestExportarExpediente., must be smaller than or equal to 8.');
        }
        if ((mb_strlen($id_otorgante) < 8)) {
            throw new \InvalidArgumentException('invalid length for $id_otorgante when calling RequestExportarExpediente., must be bigger than or equal to 8.');
        }
        if ((!preg_match("/^[\\w\\d]*$/", $id_otorgante))) {
            throw new \InvalidArgumentException("invalid value for $id_otorgante when calling RequestExportarExpediente., must conform to the pattern /^[\\w\\d]*$/.");
        }
        $this->container['id_otorgante'] = $id_otorgante;
        return $this;
    }
    
    public function getFolio()
    {
        return $this->container['folio'];
    }
    
    public function setFolio($folio)
    {
        if (($folio > 999999)) {
            throw new \InvalidArgumentException('invalid value for $folio when calling RequestExportarExpediente., must be smaller than or equal to 999999.');
        }
        if (($folio < 1)) {
            throw new \InvalidArgumentException('invalid value for $folio when calling RequestExportarExpediente., must be bigger than or equal to 1.');
        }
        $this->container['folio'] = $folio;
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
