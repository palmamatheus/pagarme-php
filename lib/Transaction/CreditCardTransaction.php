<?php

namespace PagarMe\Sdk\Transaction;

class CreditCardTransaction extends AbstractTransaction
{
    const PAYMENT_METHOD = 'credit_card';

    /**
     * @var \PagarMe\Sdk\Card\Card
     */
    public $card;

    /**
     * @var int
     */
    public $installments;

    /**
     * @var boolean
     */
    public $capture;

    /**
     * @var string
     */
    public $cardCvv;

    /**
     * @var boolean
     */
    public $async;

    /**
     * @param array $transactionData
     */
    public function __construct($transactionData)
    {
        parent::__construct($transactionData);
        $this->paymentMethod = self::PAYMENT_METHOD;
    }

    /**
     * @return int
     * @codeCoverageIgnore
     */
    public function getCardId()
    {
        return $this->card->getId();
    }

    /**
     * @return string
     * @codeCoverageIgnore
     */
    public function getCardHash()
    {
        return $this->card->getHash();
    }

    /**
     * @return int
     * @codeCoverageIgnore
     */
    public function getInstallments()
    {
        return $this->installments;
    }

    /**
     * @return string
     * @codeCoverageIgnore
     */
    public function getCardCvv()
    {
        return $this->cardCvv;
    }

    /**
     * @return boolean
     * @codeCoverageIgnore
     */
    public function isCapturable()
    {
        return (bool) $this->capture;
    }

    /**
     * @return boolean
     * @codeCoverageIgnore
     */
    public function getAsync()
    {
        return $this->async;
    }
}
