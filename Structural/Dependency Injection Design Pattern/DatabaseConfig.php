<?php

class DatabaseConfig
{
    private string $username;
    private string $password;
    private string $host;
    private string $port;
    private string $databaseName;

    public function __construct(string $username, string $password, string $host, string $port, string $databaseName)
    {
        $this->username = $username;
        $this->password = $password;
        $this->host = $host;
        $this->port = $port;
        $this->databaseName = $databaseName;
    }

    public function getUsername()
    {
        return $this->username;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function getHost()
    {
        return $this->host;
    }

    public function getPort()
    {
        return $this->port;
    }

    public function getDatabaseName()
    {
        return $this->databaseName;
    }
}
