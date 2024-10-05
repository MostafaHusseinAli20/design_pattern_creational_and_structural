<?php

class StorageMapper
{
    private $data;

    public function __construct(array $data)
    {
        $this->data = $data;
    }

    public function find(int $id)
    {
        return $this->data[$id];
    }

    public function save(array $user)
    {
        $this->data[] = $user;
        return true;
    }
}
