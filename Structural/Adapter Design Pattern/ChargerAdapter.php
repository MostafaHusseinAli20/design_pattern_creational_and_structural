<?php

class ChargerAdapter implements ChargerInterface
{
    /**
     * @var ThreePinCharger
     */
    private $threePin;

    public function __construct(ThreePinCharger $threePin)
    {
        $this->threePin = $threePin;
    }
    public function charge()
    {
        $this->threePin->plugnThreePin();
    }
}

$threePin = new ThreePinCharger();
$charge = new ChargerAdapter($threePin);
$charge->charge();
