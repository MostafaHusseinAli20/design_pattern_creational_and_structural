<?php

class DatabaseConnection
{
    private $config;

    public function __construct(DatabaseConfig $config)
    {
        $this->config = $config;
    }

    public function connect()
    {
        return sprintf(
            'mysql://%s:%s@%s:%s/%s',
            $this->config->getUsername(),
            $this->config->getPassword(),
            $this->config->getHost(),
            $this->config->getPort(),
            $this->config->getDatabaseName()
        );
    }
}

$config = new DatabaseConfig('localhost', 'root', 'root', '80', 'development');
$connection = new DatabaseConnection($config);
echo $connection->connect();
