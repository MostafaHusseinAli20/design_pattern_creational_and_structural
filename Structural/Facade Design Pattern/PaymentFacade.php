<?php

class PaymentFacade
{
    private $bankSystem;
    private $sendConfirmation;
    public function __construct()
    {
        $this->bankSystem = new BankSystem();
        $this->sendConfirmation = new SendNotifycation();
    }

    public function paymentProcess()
    {
        echo $this->bankSystem->checkBalance() . "<br>";
        echo $this->bankSystem->transferPayment() . "<br>";
        echo $this->sendConfirmation->sendConfirmation();
    }
}
$facade = new PaymentFacade();
$facade->paymentProcess();
