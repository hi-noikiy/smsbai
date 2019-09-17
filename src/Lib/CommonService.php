<?php
namespace jamesluo\smsbai\Lib;
class CommonService {
    public $productline;
    public $version;
    public $serviceName;

    public $serviceurl = '';
    public $authHeader;

    public $isJson = true;
    public $soapClient;
    public $soap_headers = array ();
    public $json_result;
    public $json_string;
    /**
     * @return unknown
     */
    public function getIsJson() {
        return $this->isJson;
    }

    /**
     * @param unknown_type $isJson
     */
    public function setIsJson($isJson) {
        $this->isJson = $isJson;
    }

    /**
     * @return unknown
     */
    public function getAuthHeader() {
        return $this->authHeader;
    }

    /**
     * @return unknown
     */
    public function getServiceurl() {
        return $this->serviceurl;
    }

    /**
     * @param unknown_type $authHeader
     */
    public function setAuthHeader($authHeader) {
        $this->authHeader = $authHeader;
    }

    /**
     * @param unknown_type $serviceurl
     */
    public function setServiceurl($serviceurl) {
        $this->serviceurl = $serviceurl;
    }

    //public $url;
    public function __construct($productline, $version, $serviceName,$config) {
        $this->productline = $productline;
        $this->version = $version;
        $this->serviceName = $serviceName;
        $this->setServiceurl($config['url']);
        $this->authHeader = new AuthHeader ( );
        $this->authHeader->setUsername ( $config['username'] );
        $this->authHeader->setPassword ( $config['password'] );
        $this->authHeader->setToken ( $config['token'] );
        $this->authHeader->setTarget ( $config['target'] );
        $this->authHeader->setAccessToken( $config['accesstoken'] );

    }

    public function executeJson($method, $request) {
        try{
            $ch = curl_init ();

            $url = $this->serviceurl . '/json/' . $this->productline . '/' . $this->version . '/' . $this->serviceName . '/' . $method;
            //echo $url;
            curl_setopt ( $ch, CURLOPT_URL, $url );
            curl_setopt ( $ch, CURLOPT_RETURNTRANSFER, true );
            curl_setopt ( $ch, CURLOPT_POST, true );

            $jsonEv = new JsonEnvelop ( );

            $jsonEv->setBody ( $request );
            $jsonEv->setHeader ( $this->authHeader );
            $data = json_encode ( $jsonEv );
            curl_setopt ( $ch, CURLOPT_POSTFIELDS, $data ); //$data是每个接口的json字符串
            curl_setopt ( $ch, CURLOPT_SSL_VERIFYPEER, false ); //不加会报证书问题
            curl_setopt ( $ch, CURLOPT_SSL_VERIFYHOST, false ); //不加会报证书问题
            curl_setopt ( $ch, CURLOPT_HTTPHEADER, array ('Content-Type: application/json; charset=utf-8' ) );

            $this->json_string = curl_exec ( $ch );
            curl_close ($ch );
            $this->json_result = json_decode ( $this->json_string );
            if(isset($this->json_result)&&isset($this->json_result->body)) {
                return $this->json_result->body;
            }else{
                return $this->json_result;
            }
        }catch (\Exception $e){
            var_dump($e);
        }
    }
    public function executeSoap($method, $request) {
        $this->soapClient = new \SoapClient ( $this->serviceurl . '/sem/' . $this->productline . '/' . $this->version . '/' . $this->serviceName . '?wsdl', array ('trace' => TRUE, 'connection_timeout' => 30 ) );

        // Prepare SoapHeader parameters
        $sh_param = array ('username' => $this->authHeader->getUsername(), 'password' => $this->authHeader->getPassword(), 'token' => $this->authHeader->getToken(), 'target' => $this->authHeader->getTarget(),'accesstoken' => $this->authHeader->getAccesstoken() );
        $headers = new \SoapHeader ( 'http://api.baidu.com/sem/common/v2', 'AuthHeader', $sh_param );

        // Prepare Soap Client
        $this->soapClient->__setSoapHeaders ( array ($headers ) );
        $arguments = array (get_class ( $request ) => $request );

        return $this->soapClient->__soapCall ( $method, $arguments, null, null, $this->soap_headers );
    }
    public function execute($method, $request) {
        if ($this->isJson) {
            return $this->executeJson ( $method, $request );
        } else {
            return $this->executeSoap ( $method, $request );
        }
    }
    public function getSoapHeader() {
        return $this->soap_headers;
    }
    public function getJsonHeader() {
        if(isset($this->json_result)&&isset($this->json_result->header)){
            return $this->json_result->header;
        }else{
            return null;
        }
    }
    public function getJsonEnv() {
        return $this->json_result;
    }
    public function getJsonStr() {
        return $this->json_string;
    }
}
