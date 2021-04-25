<?php
namespace AditumPayments\ApiSDK;

abstract class Charge {
    public $customer = NULL;
    public $transactions = NULL;

    public const CHARGE_TYPE = "Undefined";

    abstract public function toString();
    abstract public function toJson();
}