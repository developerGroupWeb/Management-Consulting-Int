<?php


abstract class Db
{
    private  $instance = null;
    private $pdo,
        $query,
        $error = false,
        $results,
        $count = 0;

    protected function setDb()
    {
        try
        {
            $this->pdo = new PDO('mysql:host=localhost; dbname=babor; charset=utf8', 'root', '');
        }catch(PDOException $e)
        {
            die($e->getMessage());
        }
    }

    /**
     * @return null
     */
    protected function getInstance()
    {
        if(($this->instance) == null)
        {
            $this->setDb();
        }
        return $this->pdo;
    }

}