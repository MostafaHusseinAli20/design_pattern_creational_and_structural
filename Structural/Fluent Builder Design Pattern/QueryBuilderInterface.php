<?php

interface QueryBuilderInterface
{
    public function select(array $filed);
    public function from(string $table, string $alias);
    public function where(array $conditions);
}
