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
        $config = Config::$databases['dev'];
        try
        {
            $this->pdo = new PDO('mysql:host='.$config['host'].';dbname='.$config['dbname'].';charset=utf8', $config['user'], $config['password']);
        }catch(PDOException $e)
        {
            if(Config::$debug >= 1){
                die($e->getMessage());
            }else{
                die('impossible to connect to the database');
            }

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

