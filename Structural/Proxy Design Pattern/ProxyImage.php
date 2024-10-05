<?php


class ProxyImage implements ImageInterface
{
    private $realImage;
    private $fileName;
    public function __construct($fileName)
    {
        $this->fileName = $fileName;
    }
    public function display()
    {
        if ($this->realImage == null) {
            $this->realImage = new RealImage($this->fileName);
        }
        $this->realImage->display();
    }
}

// $proxy = new ProxyImage("test.jpg");
// echo $proxy->display();
