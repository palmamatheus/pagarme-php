<?php

namespace PagarMe\Sdk\Transaction;

class BoletoTransaction extends AbstractTransaction
{
    const PAYMENT_METHOD = 'boleto';

    /**
     * @var string
     */
    public $boletoUrl;

    /**
     * @var string
     */
    public $boletoBarcode;

    /**
     * @var \DateTime
     */
    public $boletoExpirationDate;

    /**
     * @var boolean
     */
    public $async;

    /**
     * @var string
     */
    public $boletoInstructions;

    /**
     * @param array $transactionData
     */
    public function __construct($transactionData)
    {
        parent::__construct($transactionData);
        $this->paymentMethod = self::PAYMENT_METHOD;
    }

    /**
     * @return \DateTime
     * @codeCoverageIgnore
     */
    public function getBoletoExpirationDate()
    {
        return $this->boletoExpirationDate;
    }

    /**
     * @return string
     * @codeCoverageIgnore
     */
    public function getBoletoUrl()
    {
        return $this->boletoUrl;
    }

    /**
     * @return string
     * @codeCoverageIgnore
     */
    public function getBoletoBarcode()
    {
        return $this->boletoBarcode;
    }

    /**
     * @return boolean
     * @codeCoverageIgnore
     */
    public function getAsync()
    {
        return $this->async;
    }

    /**
     * @return string
     * @codeCoverageIgnore
     */
    public function getBoletoInstructions()
    {
        return $this->boletoInstructions;
    }
}
