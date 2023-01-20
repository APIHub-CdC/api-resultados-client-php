<?php

namespace CirculoDeCredito\ApiResultados\Client;

use CirculoDeCredito\ApiResultados\Client\Configuration;
use CirculoDeCredito\ApiResultados\Client\ApiException;
use CirculoDeCredito\ApiResultados\Client\ObjectSerializer;
use CirculoDeCredito\ApiResultados\Client\Api\ApiClient;
use CirculoDeCredito\ApiResultados\Client\Model\RequestExportarExpediente;
use CirculoDeCredito\ApiResultados\Client\Interceptor\MiddlewareEvents;
use CirculoDeCredito\ApiResultados\Client\Interceptor\KeyHandler;

use GuzzleHttp\Client as HttpClient;
use GuzzleHttp\HandlerStack;

class ApiResultadosApiTest extends \PHPUnit\Framework\TestCase
{
    private $username;
    private $password;
    private $apiKey;
    private $httpClient;
    private $config;

    public function setUp():void
    {
        $this->username = "";
	    $this->password = "";
        $this->apiKey = "";
	    $apiUrl = "";

        $keystorePassword    = "";
        $keystore            = "";
        $cdcCertificate      = "";

        $signer = new KeyHandler($keystore, $cdcCertificate, $keystorePassword);

        $events = new MiddlewareEvents($signer);
        $handler = HandlerStack::create();
        $handler->push($events->add_signature_header('x-signature'));
        $handler->push($events->verify_signature_header('x-signature'));

	    $this->config = new Configuration();
	    $this->config->setHost($apiUrl);

	    $this->httpClient = new HttpClient([
            'handler' => $handler
        ]);
    }

    public function testExportarExpediente() {

	    $requestPayload = new RequestExportarExpediente();
	    $requestPayload->setIdOtorgante("");
	    $requestPayload->setFolio();

        $response = null;

        try {

            $client = new ApiClient($this->httpClient, $this->config);
            $response = $client->exportarExpediente($this->apiKey, $this->username, $this->password, $requestPayload);

            print("\n".$response);
        
        } catch(ApiException $exception) {
            print("\nHTTP request failed, an error ocurred: ".($exception->getMessage()));
            print("\n".$exception->getResponseObject());
        }

        $this->assertNotNull($response);
    }
}
