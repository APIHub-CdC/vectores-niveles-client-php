<?php

namespace APIHub\Client;

use \GuzzleHttp\Client;
use \GuzzleHttp\HandlerStack;

use \APIHub\Client\ApiException;
use \APIHub\Client\Interceptor\KeyHandler;
use \APIHub\Client\Interceptor\MiddlewareEvents;

class VectoresDeNivelesApiTest extends \PHPUnit_Framework_TestCase
{
    protected $apiInstance;
    protected $signer;

    public function setUp()
    {
        $password = getenv('KEY_PASSWORD');
        $this->signer = new \APIHub\Client\Interceptor\KeyHandler(null, null, $password);
        $events = new \APIHub\Client\Interceptor\MiddlewareEvents($this->signer);
        $handler = \GuzzleHttp\HandlerStack::create();
        $handler->push($events->add_signature_header('x-signature'));
        $handler->push($events->verify_signature_header('x-signature'));

        $client = new \GuzzleHttp\Client([
            'handler' => $handler,
            'verify' => false
        ]);
        $this->apiInstance = new \APIHub\Client\Api\VectoresDeNivelesApi($client);
    }

    public function testGetValidador(){
        $x_api_key = "your_api_key";
        $username = "your_username";
        $password = "your_password";

        $request = new \APIHub\Client\Model\Peticion();
        $request->setTipoNegocio("XXXX");
        $request->setTipoContrato("XX");

        $persona = new \APIHub\Client\Model\Persona();
        $persona->setPrimerNombre("XXXXXXXXX");
        $persona->setSegundoNombre("XXXXXXXXX");
        $persona->setApellidoPaterno("XXXXXXXXX");
        $persona->setApellidoMaterno("XXXXXXXXX");
        $persona->setApellidoAdicional("XXXXXXXXX");
        $persona->setFechaNacimiento("YYYY-MM-DD");
        $persona->setRfc("XXXXXXXXX");
        $persona->setCurp("XXXXXXXXX");

        $domicilio = new \APIHub\Client\Model\Domicilio();
        $domicilio->setDireccion("XXXXXXXXX");
        $domicilio->setColonia("XXXXXXXXX");
        $domicilio->setCiudad("XXXXXXXXX");
        $domicilio->setCodigoPostal("XXXXX");
        $domicilio->setMunicipio("XXXXXXXXX");
        $domicilio->setEstado("XXX");
        
        $persona->setDomicilio($domicilio);
        $request->setPersona($persona);

        try {
            $result = $this->apiInstance->getValidador($x_api_key, $username, $password, $request);
            $this->signer->close();
            print_r($result);
        } catch (Exception $e) {
            echo 'Exception when calling VectoresDeNivelesApi->getValidador: ', $e->getMessage(), PHP_EOL;
        }
    }
}
