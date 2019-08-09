<?php
namespace  jamesluo\smsbai\Lib;
class AuthHeader {
    public $username;
    public $password;
    public $target;
    public $token;
    public $action = "API-SDK";
    public $accessToken;
    public $account_type;

    /**
     * @return unknown
     */
    public function getAction() {
        return $this->action;
    }

    /**
     * @param unknown_type $action
     */
    public function setAction($action) {
        $this->action = $action;
    }
    /**
     * @return unknown
     */
    public function getAccessToken() {
        return $this->accessToken;
    }

    /**
     * @return unknown
     */
    public function getAccount_type() {
        return $this->account_type;
    }

    /**
     * @return unknown
     */
    public function getPassword() {
        return $this->password;
    }

    /**
     * @return unknown
     */
    public function getTarget() {
        return $this->target;
    }

    /**
     * @return unknown
     */
    public function getToken() {
        return $this->token;
    }

    /**
     * @return unknown
     */
    public function getUsername() {
        return $this->username;
    }

    /**
     * @param unknown_type $accessToken
     */
    public function setAccessToken($accessToken) {
        $this->accessToken = $accessToken;
    }

    /**
     * @param unknown_type $account_type
     */
    public function setAccount_type($account_type) {
        $this->account_type = $account_type;
    }

    /**
     * @param unknown_type $password
     */
    public function setPassword($password) {
        $this->password = $password;
    }

    /**
     * @param unknown_type $target
     */
    public function setTarget($target) {
        $this->target = $target;
    }

    /**
     * @param unknown_type $token
     */
    public function setToken($token) {
        $this->token = $token;
    }

    /**
     * @param unknown_type $username
     */
    public function setUsername($username) {
        $this->username = $username;
    }

}
