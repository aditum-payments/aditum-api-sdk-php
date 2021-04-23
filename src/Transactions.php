<?php

namespace AditumPayments\ApiSDK;

class Transactions {

    private $acquirer = NULL;
    private $amount = "";
    private $paymentType = "";
    private $installmentNumber = 1;
    private $instructions = "";
    
    public $card = NULL;

    public function __construct() {
        $this->card = new Card;
    }

    public function setAcquirer($acquirer) {
        $this->acquirer = $acquirer;
    }

    public function getAcquirer() {
        return ($this->acquirer)? $this->acquirer : AcquirerCode::ADITUM_ECOM;
    }

    public function setAmount($amount) {
        $this->amount = $amount;
    }

    public function getAmount() {
        return $this->amount;
    }

    public function getPaymentType() {
        return $this->paymentType;
    }

    public function setPaymentType($paymentType) {
        $this->paymentType = $paymentType;
    }

    public function setInstallmentNumber($installmentNumber) {
        $this->installmentNumber = $installmentNumber;
    }

    public function getInstallmentNumber() {
        return $this->installmentNumber;
    }

    public function setInstructions($instructions) {
        $this->instructions = $instructions;
    }

    public function getInstructions() {
        return $this->instructions;
    }
}