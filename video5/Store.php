<?php
namespace App;

class Store
{
    protected $myBankApi;

    public function __construct(PaymentProcessor $paymentProcessor)
    {
        $this ->myBankApi = $paymentProcessor;
    }

      public function purchase()
      
      {
        
        $this->paymentProcessor->charge();
      }
    }

