<?php

class BigBox implements ProductsInterface, ActionsInterface
{
    /**
     * @var ProductInterface[]
     */
    private $products;
    public function __construct(array $products)
    {
        $this->products = $products;
    }

    public function getPrice()
    {
        $totalPrice = 0;
        foreach ($this->products as $product) {
            $totalPrice += $product->getPrice();
        }
        return $totalPrice;
    }

    public function add(ProductsInterface $product)
    {
        $this->products[] = $product;
    }

    public function remove(ProductsInterface $product)
    {
        $this->products = array_filter($this->products, function ($productItem) use ($product) {
            if ($productItem != $product) {
                return $productItem;
            }
            return null;
        });
    }
}
// $item1 = new SimpleBox(300);
// $item2 = new SimpleBox(200);
// $item3 = new SimpleBox(100);
// $big = new BigBox([$item1, $item2]);
// $big->add($item3);
// $big->remove($item3);
// echo "Total price of big box: " . $big->getPrice();
