<?php

class Database
{
    private $pdo = null;
    public function __construct($hostname, $databaseName, $user, $password)
    {
        $this->pdo = new PDO('mysql:host=' . $hostname . ';dbname=' . $databaseName, $user, $password);
    }

    public function Query($queryString, $params = array())
    {
        $query = $this->pdo->prepare($queryString);
        if (count($params) > 0)
        {
            $i = 1; // PDO starts binding values from 1
            foreach ($params as $param)
            {
                $query->bindValue($i, $param);
                ++$i;
            }
        }

        if ($query->execute())
        {
            return $query->fetchAll(PDO::FETCH_OBJ);
        }
        else
        {
            die("Error in sql statement: " . $queryString . "<br> Params: " . $params);
        }

        return null;
    }
}