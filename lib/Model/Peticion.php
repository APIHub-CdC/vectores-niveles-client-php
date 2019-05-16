<?php

namespace APIHub\Client\Model;

use \ArrayAccess;
use \APIHub\Client\ObjectSerializer;

class Peticion implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    protected static $apihubModelName = 'Peticion';

    protected static $apihubTypes = [
        'tipo_negocio' => 'string',
        'tipo_contrato' => 'string',
        'persona' => '\APIHub\Client\Model\Persona'
    ];

    protected static $apihubFormats = [
        'tipo_negocio' => null,
        'tipo_contrato' => null,
        'persona' => null
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
        'tipo_negocio' => 'tipoNegocio',
        'tipo_contrato' => 'tipoContrato',
        'persona' => 'persona'
    ];

    protected static $setters = [
        'tipo_negocio' => 'setTipoNegocio',
        'tipo_contrato' => 'setTipoContrato',
        'persona' => 'setPersona'
    ];

    protected static $getters = [
        'tipo_negocio' => 'getTipoNegocio',
        'tipo_contrato' => 'getTipoContrato',
        'persona' => 'getPersona'
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

    const TIPO_NEGOCIO__1 = '0001';
    const TIPO_NEGOCIO__2 = '0002';
    const TIPO_NEGOCIO__3 = '0003';
    const TIPO_NEGOCIO__4 = '0004';
    const TIPO_NEGOCIO__5 = '0005';
    const TIPO_NEGOCIO__6 = '0006';
    const TIPO_NEGOCIO__7 = '0007';
    const TIPO_NEGOCIO__8 = '0008';
    const TIPO_NEGOCIO__9 = '0009';
    const TIPO_NEGOCIO__10 = '0010';
    const TIPO_NEGOCIO__11 = '0011';
    const TIPO_NEGOCIO__12 = '0012';
    const TIPO_NEGOCIO__13 = '0013';
    const TIPO_NEGOCIO__14 = '0014';
    const TIPO_NEGOCIO__15 = '0015';
    const TIPO_NEGOCIO__16 = '0016';
    const TIPO_NEGOCIO__17 = '0017';
    const TIPO_NEGOCIO__18 = '0018';
    const TIPO_NEGOCIO__19 = '0019';
    const TIPO_NEGOCIO__20 = '0020';
    const TIPO_NEGOCIO__21 = '0021';
    const TIPO_NEGOCIO__22 = '0022';
    const TIPO_NEGOCIO__23 = '0023';
    const TIPO_NEGOCIO__24 = '0024';
    const TIPO_NEGOCIO__25 = '0025';
    const TIPO_NEGOCIO__26 = '0026';
    const TIPO_NEGOCIO__27 = '0027';
    const TIPO_NEGOCIO__28 = '0028';
    const TIPO_NEGOCIO__29 = '0029';
    const TIPO_NEGOCIO__30 = '0030';
    const TIPO_NEGOCIO__31 = '0031';
    const TIPO_NEGOCIO__32 = '0032';
    const TIPO_NEGOCIO__33 = '0033';
    const TIPO_NEGOCIO__34 = '0034';
    const TIPO_NEGOCIO__35 = '0035';
    const TIPO_NEGOCIO__36 = '0036';
    const TIPO_NEGOCIO__37 = '0037';
    const TIPO_NEGOCIO__38 = '0038';
    const TIPO_NEGOCIO__39 = '0039';
    const TIPO_NEGOCIO__40 = '0040';
    const TIPO_NEGOCIO__41 = '0041';
    const TIPO_NEGOCIO__42 = '0042';
    const TIPO_NEGOCIO__43 = '0043';
    const TIPO_NEGOCIO__44 = '0044';
    const TIPO_NEGOCIO__45 = '0045';
    const TIPO_NEGOCIO__46 = '0046';
    const TIPO_NEGOCIO__47 = '0047';
    const TIPO_NEGOCIO__48 = '0048';
    const TIPO_NEGOCIO__49 = '0049';
    const TIPO_NEGOCIO__50 = '0050';
    const TIPO_NEGOCIO__51 = '0051';
    const TIPO_NEGOCIO__52 = '0052';
    const TIPO_CONTRATO_AA = 'AA';
    const TIPO_CONTRATO_HB = 'HB';
    const TIPO_CONTRATO_AB = 'AB';
    const TIPO_CONTRATO_HE = 'HE';
    const TIPO_CONTRATO_AE = 'AE';
    const TIPO_CONTRATO_HV = 'HV';
    const TIPO_CONTRATO_AM = 'AM';
    const TIPO_CONTRATO_LC = 'LC';
    const TIPO_CONTRATO_AR = 'AR';
    const TIPO_CONTRATO_MC = 'MC';
    const TIPO_CONTRATO_AV = 'AV';
    const TIPO_CONTRATO_NG = 'NG';
    const TIPO_CONTRATO_BC = 'BC';
    const TIPO_CONTRATO_PB = 'PB';
    const TIPO_CONTRATO_BL = 'BL';
    const TIPO_CONTRATO_PC = 'PC';
    const TIPO_CONTRATO_BR = 'BR';
    const TIPO_CONTRATO_PE = 'PE';
    const TIPO_CONTRATO_CA = 'CA';
    const TIPO_CONTRATO_PG = 'PG';
    const TIPO_CONTRATO_CC = 'CC';
    const TIPO_CONTRATO_PQ = 'PQ';
    const TIPO_CONTRATO_CF = 'CF';
    const TIPO_CONTRATO_PM = 'PM';
    const TIPO_CONTRATO_CO = 'CO';
    const TIPO_CONTRATO_PN = 'PN';
    const TIPO_CONTRATO_PP = 'PP';
    const TIPO_CONTRATO_ED = 'ED';
    const TIPO_CONTRATO_SH = 'SH';
    const TIPO_CONTRATO_EQ = 'EQ';
    const TIPO_CONTRATO_TC = 'TC';
    const TIPO_CONTRATO_FF = 'FF';
    const TIPO_CONTRATO_TD = 'TD';
    const TIPO_CONTRATO_FI = 'FI';
    const TIPO_CONTRATO_TG = 'TG';
    const TIPO_CONTRATO_FT = 'FT';
    const TIPO_CONTRATO_TS = 'TS';
    const TIPO_CONTRATO_GS = 'GS';
    const TIPO_CONTRATO_VR = 'VR';
    const TIPO_CONTRATO_OT = 'OT';
    const TIPO_CONTRATO_NC = 'NC';
    
    public function getTipoNegocioAllowableValues()
    {
        return [
            self::TIPO_NEGOCIO__1,
            self::TIPO_NEGOCIO__2,
            self::TIPO_NEGOCIO__3,
            self::TIPO_NEGOCIO__4,
            self::TIPO_NEGOCIO__5,
            self::TIPO_NEGOCIO__6,
            self::TIPO_NEGOCIO__7,
            self::TIPO_NEGOCIO__8,
            self::TIPO_NEGOCIO__9,
            self::TIPO_NEGOCIO__10,
            self::TIPO_NEGOCIO__11,
            self::TIPO_NEGOCIO__12,
            self::TIPO_NEGOCIO__13,
            self::TIPO_NEGOCIO__14,
            self::TIPO_NEGOCIO__15,
            self::TIPO_NEGOCIO__16,
            self::TIPO_NEGOCIO__17,
            self::TIPO_NEGOCIO__18,
            self::TIPO_NEGOCIO__19,
            self::TIPO_NEGOCIO__20,
            self::TIPO_NEGOCIO__21,
            self::TIPO_NEGOCIO__22,
            self::TIPO_NEGOCIO__23,
            self::TIPO_NEGOCIO__24,
            self::TIPO_NEGOCIO__25,
            self::TIPO_NEGOCIO__26,
            self::TIPO_NEGOCIO__27,
            self::TIPO_NEGOCIO__28,
            self::TIPO_NEGOCIO__29,
            self::TIPO_NEGOCIO__30,
            self::TIPO_NEGOCIO__31,
            self::TIPO_NEGOCIO__32,
            self::TIPO_NEGOCIO__33,
            self::TIPO_NEGOCIO__34,
            self::TIPO_NEGOCIO__35,
            self::TIPO_NEGOCIO__36,
            self::TIPO_NEGOCIO__37,
            self::TIPO_NEGOCIO__38,
            self::TIPO_NEGOCIO__39,
            self::TIPO_NEGOCIO__40,
            self::TIPO_NEGOCIO__41,
            self::TIPO_NEGOCIO__42,
            self::TIPO_NEGOCIO__43,
            self::TIPO_NEGOCIO__44,
            self::TIPO_NEGOCIO__45,
            self::TIPO_NEGOCIO__46,
            self::TIPO_NEGOCIO__47,
            self::TIPO_NEGOCIO__48,
            self::TIPO_NEGOCIO__49,
            self::TIPO_NEGOCIO__50,
            self::TIPO_NEGOCIO__51,
            self::TIPO_NEGOCIO__52,
        ];
    }
    
    public function getTipoContratoAllowableValues()
    {
        return [
            self::TIPO_CONTRATO_AA,
            self::TIPO_CONTRATO_HB,
            self::TIPO_CONTRATO_AB,
            self::TIPO_CONTRATO_HE,
            self::TIPO_CONTRATO_AE,
            self::TIPO_CONTRATO_HV,
            self::TIPO_CONTRATO_AM,
            self::TIPO_CONTRATO_LC,
            self::TIPO_CONTRATO_AR,
            self::TIPO_CONTRATO_MC,
            self::TIPO_CONTRATO_AV,
            self::TIPO_CONTRATO_NG,
            self::TIPO_CONTRATO_BC,
            self::TIPO_CONTRATO_PB,
            self::TIPO_CONTRATO_BL,
            self::TIPO_CONTRATO_PC,
            self::TIPO_CONTRATO_BR,
            self::TIPO_CONTRATO_PE,
            self::TIPO_CONTRATO_CA,
            self::TIPO_CONTRATO_PG,
            self::TIPO_CONTRATO_CC,
            self::TIPO_CONTRATO_PQ,
            self::TIPO_CONTRATO_CF,
            self::TIPO_CONTRATO_PM,
            self::TIPO_CONTRATO_CO,
            self::TIPO_CONTRATO_PN,
            self::TIPO_CONTRATO_PP,
            self::TIPO_CONTRATO_ED,
            self::TIPO_CONTRATO_SH,
            self::TIPO_CONTRATO_EQ,
            self::TIPO_CONTRATO_TC,
            self::TIPO_CONTRATO_FF,
            self::TIPO_CONTRATO_TD,
            self::TIPO_CONTRATO_FI,
            self::TIPO_CONTRATO_TG,
            self::TIPO_CONTRATO_FT,
            self::TIPO_CONTRATO_TS,
            self::TIPO_CONTRATO_GS,
            self::TIPO_CONTRATO_VR,
            self::TIPO_CONTRATO_OT,
            self::TIPO_CONTRATO_NC,
        ];
    }
    
    protected $container = [];

    public function __construct(array $data = null)
    {
        $this->container['tipo_negocio'] = isset($data['tipo_negocio']) ? $data['tipo_negocio'] : null;
        $this->container['tipo_contrato'] = isset($data['tipo_contrato']) ? $data['tipo_contrato'] : null;
        $this->container['persona'] = isset($data['persona']) ? $data['persona'] : null;
    }

    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getTipoNegocioAllowableValues();
        if (!is_null($this->container['tipo_negocio']) && !in_array($this->container['tipo_negocio'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'tipo_negocio', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getTipoContratoAllowableValues();
        if (!is_null($this->container['tipo_contrato']) && !in_array($this->container['tipo_contrato'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'tipo_contrato', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        return $invalidProperties;
    }

    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }

    public function getTipoNegocio()
    {
        return $this->container['tipo_negocio'];
    }

    public function setTipoNegocio($tipo_negocio)
    {
        $allowedValues = $this->getTipoNegocioAllowableValues();
        if (!is_null($tipo_negocio) && !in_array($tipo_negocio, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'tipo_negocio', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['tipo_negocio'] = $tipo_negocio;

        return $this;
    }

    public function getTipoContrato()
    {
        return $this->container['tipo_contrato'];
    }

    public function setTipoContrato($tipo_contrato)
    {
        $allowedValues = $this->getTipoContratoAllowableValues();
        if (!is_null($tipo_contrato) && !in_array($tipo_contrato, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'tipo_contrato', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['tipo_contrato'] = $tipo_contrato;

        return $this;
    }

    public function getPersona()
    {
        return $this->container['persona'];
    }

    public function setPersona($persona)
    {
        $this->container['persona'] = $persona;

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


