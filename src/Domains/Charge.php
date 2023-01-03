<?php
namespace AditumPayments\ApiSDK\Domains;
use AditumPayments\ApiSDK\Enum\OperationSource;

abstract class Charge {
    public const CHARGE_TYPE = "Undefined";

    public $products = NULL;
    public $customer = NULL;
    public $transactions = NULL;

    private $merchantChargeId = "";
    private $sessionId = "";

    private $operationSource = OperationSource::Gateway;

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

    abstract public function toString();
    abstract public function toJson();

	/**
	 * @return OperationSource 
	 */
	public function getOperationSource() {
		return $this->operationSource;
	}
	
	/**
	 * @param int $operationSource from AditumPayments\ApiSDK\Enum\OperationSource
	 * @return self
	 */
	public function setOperationSource(int $operationSource): self {
		$this->operationSource = $operationSource;
		return $this;
	}
}