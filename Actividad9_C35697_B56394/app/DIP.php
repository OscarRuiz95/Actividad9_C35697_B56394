<?php

namespace App;

interface ConnectionInterface
{
    public function connect(): string;
}

class DbConnection implements ConnectionInterface
{
    public function connect(): string
    {
        return "Conectado a la base de datos";
    }
}

class PasswordReminder
{
    public function __construct(
        private ConnectionInterface $dbConnection
    ) {}

    public function remind(): string
    {
        return $this->dbConnection->connect();
    }
}