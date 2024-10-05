<?php

class RealImage implements ImageInterface
{
    private $fileName;
    
    public function __construct($fileName)
    {
        $this->fileName = $fileName;
        $this->loadFromDisk();
    }
    public function display()
    {
        echo "Displaying : ". $this->fileName;   
    }

    private function loadFromDisk()
    {
        echo "Loading image from disk : ". $this->fileName;
    }
}
