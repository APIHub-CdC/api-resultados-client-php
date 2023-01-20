<?php

namespace CirculoDeCredito\ApiResultados\Client\Model;

use \ArrayAccess;
use CirculoDeCredito\ApiResultados\Client\ObjectSerializer;

class ResponseExportarExpediente implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;
    
    protected static $RCCPMModelName = 'ResponseExportarExpediente';
    
    protected static $RCCPMTypes = [
        'message' => 'CirculoDeCredito\ApiResultados\Client\Model\MessageObject',
        'numero_folio' => 'string',
        'fecha_registro' => 'string',
        'url_zip_file' => 'string',
        'formularios' => 'CirculoDeCredito\ApiResultados\Client\Model\FormularioObject[]',
        'fico_score' => 'CirculoDeCredito\ApiResultados\Client\Model\FicoObject',
        'fis_score' => 'CirculoDeCredito\ApiResultados\Client\Model\FisObject',
        'fintech_score' => 'CirculoDeCredito\ApiResultados\Client\Model\FintechObject',
        'lae_score' => 'CirculoDeCredito\ApiResultados\Client\Model\LaeObject',
        'indicadores' => 'CirculoDeCredito\ApiResultados\Client\Model\IndicadorObject[]',
        'rechazos' => 'CirculoDeCredito\ApiResultados\Client\Model\RechazoObject[]',
        'rechazos_directos' => 'CirculoDeCredito\ApiResultados\Client\Model\RechazoDirectoObject[]'
    ];
    
    protected static $RCCPMFormats = [
        'message' => null,
        'numero_folio' => null,
        'fecha_registro' => null,
        'url_zip_file' => null,
        'formularios' => null,
        'fico_score' => null,
        'fis_score' => null,
        'fintech_score' => null,
        'lae_score' => null,
        'indicadores' => null,
        'rechazos' => null,
        'rechazos_directos' => null
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
        'message' => 'message',
        'numero_folio' => 'numeroFolio',
        'fecha_registro' => 'fechaRegistro',
        'url_zip_file' => 'urlZipFile',
        'formularios' => 'formularios',
        'fico_score' => 'ficoScore',
        'fis_score' => 'fisScore',
        'fintech_score' => 'fintechScore',
        'lae_score' => 'laeScore',
        'indicadores' => 'indicadores',
        'rechazos' => 'rechazos',
        'rechazos_directos' => 'rechazosDirectos'
    ];
    
    protected static $setters = [
        'message' => 'setMessage',
        'numero_folio' => 'setNumeroFolio',
        'fecha_registro' => 'setFechaRegistro',
        'url_zip_file' => 'setUrlZipFile',
        'formularios' => 'setFormularios',
        'fico_score' => 'setFicoScore',
        'fis_score' => 'setFisScore',
        'fintech_score' => 'setFintechScore',
        'lae_score' => 'setLaeScore',
        'indicadores' => 'setIndicadores',
        'rechazos' => 'setRechazos',
        'rechazos_directos' => 'setRechazosDirectos'
    ];
    
    protected static $getters = [
        'message' => 'getMessage',
        'numero_folio' => 'getNumeroFolio',
        'fecha_registro' => 'getFechaRegistro',
        'url_zip_file' => 'getUrlZipFile',
        'formularios' => 'getFormularios',
        'fico_score' => 'getFicoScore',
        'fis_score' => 'getFisScore',
        'fintech_score' => 'getFintechScore',
        'lae_score' => 'getLaeScore',
        'indicadores' => 'getIndicadores',
        'rechazos' => 'getRechazos',
        'rechazos_directos' => 'getRechazosDirectos'
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
        $this->container['message'] = isset($data['message']) ? $data['message'] : null;
        $this->container['numero_folio'] = isset($data['numero_folio']) ? $data['numero_folio'] : null;
        $this->container['fecha_registro'] = isset($data['fecha_registro']) ? $data['fecha_registro'] : null;
        $this->container['url_zip_file'] = isset($data['url_zip_file']) ? $data['url_zip_file'] : null;
        $this->container['formularios'] = isset($data['formularios']) ? $data['formularios'] : null;
        $this->container['fico_score'] = isset($data['fico_score']) ? $data['fico_score'] : null;
        $this->container['fis_score'] = isset($data['fis_score']) ? $data['fis_score'] : null;
        $this->container['fintech_score'] = isset($data['fintech_score']) ? $data['fintech_score'] : null;
        $this->container['lae_score'] = isset($data['lae_score']) ? $data['lae_score'] : null;
        $this->container['indicadores'] = isset($data['indicadores']) ? $data['indicadores'] : null;
        $this->container['rechazos'] = isset($data['rechazos']) ? $data['rechazos'] : null;
        $this->container['rechazos_directos'] = isset($data['rechazos_directos']) ? $data['rechazos_directos'] : null;
    }
    
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['message'] === null) {
            $invalidProperties[] = "'message' can't be null";
        }
        if ($this->container['numero_folio'] === null) {
            $invalidProperties[] = "'numero_folio' can't be null";
        }
        if ($this->container['fecha_registro'] === null) {
            $invalidProperties[] = "'fecha_registro' can't be null";
        }
        if ($this->container['url_zip_file'] === null) {
            $invalidProperties[] = "'url_zip_file' can't be null";
        }
        if ($this->container['formularios'] === null) {
            $invalidProperties[] = "'formularios' can't be null";
        }
        if ($this->container['fico_score'] === null) {
            $invalidProperties[] = "'fico_score' can't be null";
        }
        if ($this->container['fis_score'] === null) {
            $invalidProperties[] = "'fis_score' can't be null";
        }
        if ($this->container['fintech_score'] === null) {
            $invalidProperties[] = "'fintech_score' can't be null";
        }
        if ($this->container['lae_score'] === null) {
            $invalidProperties[] = "'lae_score' can't be null";
        }
        if ($this->container['indicadores'] === null) {
            $invalidProperties[] = "'indicadores' can't be null";
        }
        if ($this->container['rechazos'] === null) {
            $invalidProperties[] = "'rechazos' can't be null";
        }
        if ($this->container['rechazos_directos'] === null) {
            $invalidProperties[] = "'rechazos_directos' can't be null";
        }
        return $invalidProperties;
    }
    
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
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
    
    public function getNumeroFolio()
    {
        return $this->container['numero_folio'];
    }
    
    public function setNumeroFolio($numero_folio)
    {
        $this->container['numero_folio'] = $numero_folio;
        return $this;
    }
    
    public function getFechaRegistro()
    {
        return $this->container['fecha_registro'];
    }
    
    public function setFechaRegistro($fecha_registro)
    {
        $this->container['fecha_registro'] = $fecha_registro;
        return $this;
    }
    
    public function getUrlZipFile()
    {
        return $this->container['url_zip_file'];
    }
    
    public function setUrlZipFile($url_zip_file)
    {
        $this->container['url_zip_file'] = $url_zip_file;
        return $this;
    }
    
    public function getFormularios()
    {
        return $this->container['formularios'];
    }
    
    public function setFormularios($formularios)
    {
        $this->container['formularios'] = $formularios;
        return $this;
    }
    
    public function getFicoScore()
    {
        return $this->container['fico_score'];
    }
    
    public function setFicoScore($fico_score)
    {
        $this->container['fico_score'] = $fico_score;
        return $this;
    }
    
    public function getFisScore()
    {
        return $this->container['fis_score'];
    }
    
    public function setFisScore($fis_score)
    {
        $this->container['fis_score'] = $fis_score;
        return $this;
    }
    
    public function getFintechScore()
    {
        return $this->container['fintech_score'];
    }
    
    public function setFintechScore($fintech_score)
    {
        $this->container['fintech_score'] = $fintech_score;
        return $this;
    }
    
    public function getLaeScore()
    {
        return $this->container['lae_score'];
    }
    
    public function setLaeScore($lae_score)
    {
        $this->container['lae_score'] = $lae_score;
        return $this;
    }
    
    public function getIndicadores()
    {
        return $this->container['indicadores'];
    }
    
    public function setIndicadores($indicadores)
    {
        $this->container['indicadores'] = $indicadores;
        return $this;
    }
    
    public function getRechazos()
    {
        return $this->container['rechazos'];
    }
    
    public function setRechazos($rechazos)
    {
        $this->container['rechazos'] = $rechazos;
        return $this;
    }
    
    public function getRechazosDirectos()
    {
        return $this->container['rechazos_directos'];
    }
    
    public function setRechazosDirectos($rechazos_directos)
    {
        $this->container['rechazos_directos'] = $rechazos_directos;
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
