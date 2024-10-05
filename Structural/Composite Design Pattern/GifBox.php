<?php

class GiftBox implements ProductsInterface, GiftProductsInterface
{
    /**
     * @var int
     */
    private $price;
    /**
     * @var int
     */
    private $getGift;
    public function __construct(int $price, int $getGift) {
        $this->price = $price;
        $this->getGift = $getGift;
    }
    public function getPrice() {
        return $this->giftPackagePrice() + $this->price;
    }

    public function giftPackagePrice() {
        return $this->getGift;
    }
}
// $item1 = new SimpleBox(300);
// $item2 = new SimpleBox(200);
// $package = new BigBox([$item2 , $item1]);
// $gift = new GiftBox(100, 50);
// $package->add($gift);
// $package->remove($gift);
// echo "The gift price is: " . $package->getPrice();
