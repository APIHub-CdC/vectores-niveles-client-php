<?php

namespace APIHub\Client\Model;

use \ArrayAccess;
use \APIHub\Client\ObjectSerializer;

class Vectores implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    protected static $apihubModelName = 'vectores';

    protected static $apihubTypes = [
        'num_actualiza' => 'int',
        'tipo_negocio' => 'string',
        'clave_otorgante' => 'string',
        'ccrednumcta' => 'string',
        'clave_tipo_contrato' => 'string',
        'fecha_monto_pago_maximo' => 'string',
        'monto_pago_maximo' => 'float',
        'monto_pago_promedio' => 'float',
        'fecha_saldo_maximo' => 'string',
        'saldo_maximo' => 'float',
        'saldo_promedio' => 'float',
        'fecha_saldo_vencido_maximo' => 'string',
        'saldo_vencido_maximo' => 'float',
        'saldo_vencido_promedio' => 'float'
    ];

    protected static $apihubFormats = [
        'num_actualiza' => null,
        'tipo_negocio' => null,
        'clave_otorgante' => null,
        'ccrednumcta' => null,
        'clave_tipo_contrato' => null,
        'fecha_monto_pago_maximo' => null,
        'monto_pago_maximo' => null,
        'monto_pago_promedio' => null,
        'fecha_saldo_maximo' => null,
        'saldo_maximo' => null,
        'saldo_promedio' => null,
        'fecha_saldo_vencido_maximo' => null,
        'saldo_vencido_maximo' => null,
        'saldo_vencido_promedio' => null
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
        'num_actualiza' => 'numActualiza',
        'tipo_negocio' => 'tipoNegocio',
        'clave_otorgante' => 'claveOtorgante',
        'ccrednumcta' => 'ccrednumcta',
        'clave_tipo_contrato' => 'claveTipoContrato',
        'fecha_monto_pago_maximo' => 'fechaMontoPagoMaximo',
        'monto_pago_maximo' => 'montoPagoMaximo',
        'monto_pago_promedio' => 'montoPagoPromedio',
        'fecha_saldo_maximo' => 'fechaSaldoMaximo',
        'saldo_maximo' => 'saldoMaximo',
        'saldo_promedio' => 'saldoPromedio',
        'fecha_saldo_vencido_maximo' => 'fechaSaldoVencidoMaximo',
        'saldo_vencido_maximo' => 'saldoVencidoMaximo',
        'saldo_vencido_promedio' => 'saldoVencidoPromedio'
    ];

    protected static $setters = [
        'num_actualiza' => 'setNumActualiza',
        'tipo_negocio' => 'setTipoNegocio',
        'clave_otorgante' => 'setClaveOtorgante',
        'ccrednumcta' => 'setCcrednumcta',
        'clave_tipo_contrato' => 'setClaveTipoContrato',
        'fecha_monto_pago_maximo' => 'setFechaMontoPagoMaximo',
        'monto_pago_maximo' => 'setMontoPagoMaximo',
        'monto_pago_promedio' => 'setMontoPagoPromedio',
        'fecha_saldo_maximo' => 'setFechaSaldoMaximo',
        'saldo_maximo' => 'setSaldoMaximo',
        'saldo_promedio' => 'setSaldoPromedio',
        'fecha_saldo_vencido_maximo' => 'setFechaSaldoVencidoMaximo',
        'saldo_vencido_maximo' => 'setSaldoVencidoMaximo',
        'saldo_vencido_promedio' => 'setSaldoVencidoPromedio'
    ];

    protected static $getters = [
        'num_actualiza' => 'getNumActualiza',
        'tipo_negocio' => 'getTipoNegocio',
        'clave_otorgante' => 'getClaveOtorgante',
        'ccrednumcta' => 'getCcrednumcta',
        'clave_tipo_contrato' => 'getClaveTipoContrato',
        'fecha_monto_pago_maximo' => 'getFechaMontoPagoMaximo',
        'monto_pago_maximo' => 'getMontoPagoMaximo',
        'monto_pago_promedio' => 'getMontoPagoPromedio',
        'fecha_saldo_maximo' => 'getFechaSaldoMaximo',
        'saldo_maximo' => 'getSaldoMaximo',
        'saldo_promedio' => 'getSaldoPromedio',
        'fecha_saldo_vencido_maximo' => 'getFechaSaldoVencidoMaximo',
        'saldo_vencido_maximo' => 'getSaldoVencidoMaximo',
        'saldo_vencido_promedio' => 'getSaldoVencidoPromedio'
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
        $this->container['num_actualiza'] = isset($data['num_actualiza']) ? $data['num_actualiza'] : null;
        $this->container['tipo_negocio'] = isset($data['tipo_negocio']) ? $data['tipo_negocio'] : null;
        $this->container['clave_otorgante'] = isset($data['clave_otorgante']) ? $data['clave_otorgante'] : null;
        $this->container['ccrednumcta'] = isset($data['ccrednumcta']) ? $data['ccrednumcta'] : null;
        $this->container['clave_tipo_contrato'] = isset($data['clave_tipo_contrato']) ? $data['clave_tipo_contrato'] : null;
        $this->container['fecha_monto_pago_maximo'] = isset($data['fecha_monto_pago_maximo']) ? $data['fecha_monto_pago_maximo'] : null;
        $this->container['monto_pago_maximo'] = isset($data['monto_pago_maximo']) ? $data['monto_pago_maximo'] : null;
        $this->container['monto_pago_promedio'] = isset($data['monto_pago_promedio']) ? $data['monto_pago_promedio'] : null;
        $this->container['fecha_saldo_maximo'] = isset($data['fecha_saldo_maximo']) ? $data['fecha_saldo_maximo'] : null;
        $this->container['saldo_maximo'] = isset($data['saldo_maximo']) ? $data['saldo_maximo'] : null;
        $this->container['saldo_promedio'] = isset($data['saldo_promedio']) ? $data['saldo_promedio'] : null;
        $this->container['fecha_saldo_vencido_maximo'] = isset($data['fecha_saldo_vencido_maximo']) ? $data['fecha_saldo_vencido_maximo'] : null;
        $this->container['saldo_vencido_maximo'] = isset($data['saldo_vencido_maximo']) ? $data['saldo_vencido_maximo'] : null;
        $this->container['saldo_vencido_promedio'] = isset($data['saldo_vencido_promedio']) ? $data['saldo_vencido_promedio'] : null;
    }

    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }

    public function getNumActualiza()
    {
        return $this->container['num_actualiza'];
    }

    public function setNumActualiza($num_actualiza)
    {
        $this->container['num_actualiza'] = $num_actualiza;

        return $this;
    }

    public function getTipoNegocio()
    {
        return $this->container['tipo_negocio'];
    }

    public function setTipoNegocio($tipo_negocio)
    {
        $this->container['tipo_negocio'] = $tipo_negocio;

        return $this;
    }

    public function getClaveOtorgante()
    {
        return $this->container['clave_otorgante'];
    }

    public function setClaveOtorgante($clave_otorgante)
    {
        $this->container['clave_otorgante'] = $clave_otorgante;

        return $this;
    }

    public function getCcrednumcta()
    {
        return $this->container['ccrednumcta'];
    }

    public function setCcrednumcta($ccrednumcta)
    {
        $this->container['ccrednumcta'] = $ccrednumcta;

        return $this;
    }

    public function getClaveTipoContrato()
    {
        return $this->container['clave_tipo_contrato'];
    }

    public function setClaveTipoContrato($clave_tipo_contrato)
    {
        $this->container['clave_tipo_contrato'] = $clave_tipo_contrato;

        return $this;
    }

    public function getFechaMontoPagoMaximo()
    {
        return $this->container['fecha_monto_pago_maximo'];
    }

    public function setFechaMontoPagoMaximo($fecha_monto_pago_maximo)
    {
        $this->container['fecha_monto_pago_maximo'] = $fecha_monto_pago_maximo;

        return $this;
    }

    public function getMontoPagoMaximo()
    {
        return $this->container['monto_pago_maximo'];
    }

    public function setMontoPagoMaximo($monto_pago_maximo)
    {
        $this->container['monto_pago_maximo'] = $monto_pago_maximo;

        return $this;
    }

    public function getMontoPagoPromedio()
    {
        return $this->container['monto_pago_promedio'];
    }

    public function setMontoPagoPromedio($monto_pago_promedio)
    {
        $this->container['monto_pago_promedio'] = $monto_pago_promedio;

        return $this;
    }

    public function getFechaSaldoMaximo()
    {
        return $this->container['fecha_saldo_maximo'];
    }

    public function setFechaSaldoMaximo($fecha_saldo_maximo)
    {
        $this->container['fecha_saldo_maximo'] = $fecha_saldo_maximo;

        return $this;
    }

    public function getSaldoMaximo()
    {
        return $this->container['saldo_maximo'];
    }

    public function setSaldoMaximo($saldo_maximo)
    {
        $this->container['saldo_maximo'] = $saldo_maximo;

        return $this;
    }

    public function getSaldoPromedio()
    {
        return $this->container['saldo_promedio'];
    }

    public function setSaldoPromedio($saldo_promedio)
    {
        $this->container['saldo_promedio'] = $saldo_promedio;

        return $this;
    }

    public function getFechaSaldoVencidoMaximo()
    {
        return $this->container['fecha_saldo_vencido_maximo'];
    }

    public function setFechaSaldoVencidoMaximo($fecha_saldo_vencido_maximo)
    {
        $this->container['fecha_saldo_vencido_maximo'] = $fecha_saldo_vencido_maximo;

        return $this;
    }

    public function getSaldoVencidoMaximo()
    {
        return $this->container['saldo_vencido_maximo'];
    }

    public function setSaldoVencidoMaximo($saldo_vencido_maximo)
    {
        $this->container['saldo_vencido_maximo'] = $saldo_vencido_maximo;

        return $this;
    }

    public function getSaldoVencidoPromedio()
    {
        return $this->container['saldo_vencido_promedio'];
    }

    public function setSaldoVencidoPromedio($saldo_vencido_promedio)
    {
        $this->container['saldo_vencido_promedio'] = $saldo_vencido_promedio;

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