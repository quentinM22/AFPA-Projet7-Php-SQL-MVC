<?php


class Manager
{
    protected function dbConnect()
    {
        $db = new \PDO('mysql:host=localhost;dbname=mission7;charset=utf8', 'root', 'root');
        return $db;
    }
}