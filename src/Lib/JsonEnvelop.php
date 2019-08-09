<?php
namespace jamesluo\smsbai\Lib;
class JsonEnvelop {
    public $header;
    public $body;

    /**
     * @return unknown
     */
    public function getBody() {
        return $this->body;
    }

    /**
     * @return unknown
     */
    public function getHeader() {
        return $this->header;
    }

    /**
     * @param unknown_type $body
     */
    public function setBody($body) {
        $this->body = $body;
    }

    /**
     * @param unknown_type $header
     */
    public function setHeader($header) {
        $this->header = $header;
    }

}
