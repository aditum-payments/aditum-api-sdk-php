<?php

namespace AditumPayments\ApiSDK\Enum;
/**
 * [Enum]: Defines basic OperationSourceEnum for Gateway transactions from AditumSDK.
 */
abstract class OperationSource
{
    /**
     * Invalid and unset value.
     * @var integer
     */
    public const Undefined = 0;

    /**
     * Transaction was made by an e-commerce gateway.
     * @var integer
     */
    public const Gateway = 1;

    /**
     * Transaction was originated by a Magento virtual store.
     * @var integer
     */
    public const Magento = 14;

    /**
     * Transaction was originated by a Opencart virtual store.
     * @var integer
     */
    public const Opencart = 17;

    /**
     * Transaction was originated by a WooCommerce virtual store.
     * @var integer
     */
    public const WooCommerce = 18;
}