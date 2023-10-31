<?php
namespace AditumPayments\ApiSDK\Domains;

abstract class Charge {
    public const CHARGE_TYPE = "Undefined";

    public $products = NULL;
    public $customer = NULL;
    public $transactions = NULL;

    private $merchantChargeId = "";
    private $sessionId = "";
    private $source = 1;

    public function setMerchantChargeId($merchantChargeId) {
        $this->merchantChargeId = $merchantChargeId;
    }

    public function getMerchantChargeId() {
        return $this->merchantChargeId;
    }

    public function setSessionId($sessionId) {
        $this->sessionId = $sessionId;
    }

    public function getSessionId() {
        return $this->sessionId;
    }

    public function setSource($source) {
        return $this->$source;
    }

    public function getSource() {
        return $this->source;
    }

    abstract public function toString();
    abstract public function toJson();
}