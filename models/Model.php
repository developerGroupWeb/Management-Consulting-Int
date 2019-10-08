<?php


class Model extends Db
{

    private
        $query,
        $error = false,
        $results,
        $count = 0;


    /**
     * @param $sql
     * @param array $params
     * @return $this
     */
    function query($sql, $params = [])
    {
        $this->error = false;
        if($this->query = $this->getInstance()->prepare($sql))
        {
            $x = 1;
            if(count($params))
            {
                foreach ($params as $param)
                {
                    $this->query->bindValue($x, $param);
                    $x++;
                }
            }
        }
        if($this->query->execute()){
            $this->results = $this->query->fetchAll(PDO::FETCH_OBJ);
            $this->count   = $this->query->rowCount();
        }else
        {
            $this->error = true;
        }
        return $this;
    }

    /**
     * @param $action
     * @param $table
     * @param array $where
     * @return $this|bool
     */
    // [ORDER BY id DESC]
    private function action($action, $table, $where = []){

        if(gettype($where) == 'array' && count($where) === 3){

            $operators = ['=', '<', '>', '<=', '>='];

            $field    = $where[0];
            $operator = $where[1];
            $value    = $where[2];

            if(in_array($operator, $operators)){

                $sql = "{$action} FROM {$table} WHERE {$field} {$operator} ? ";

                if(!$this->query($sql, [$value])->error()){

                    return $this;
                }
            }
        }else{

            $sql = "{$action} FROM {$table}";
            if(!$this->query($sql, [])->error()){

                return $this;
            }

        }
        return false;
    }

    /**
     * @param $action
     * @param $table
     * @param $orderBy
     * @return $this
     */
    private function actionBy($action, $table, $orderBy){

        $order = (gettype($orderBy) == 'string' && strlen($orderBy) > 8) ? $orderBy : '';
        $sql = "{$action} FROM {$table} $order";
        if(!$this->query($sql, [])->error()){

            return $this;
        }
    }

    /**
     * @param $action
     * @param $table
     * @param array $where
     * @param null $orderBy
     * @return $this
     */
    private function actionOneBy($action, $table, $where = [], $orderBy = null)
    {
        $order = (gettype($orderBy) == 'string' && strlen($orderBy) > 8) ? $orderBy : '';

        if (gettype($where) == 'array' && count($where) === 3) {

            $operators = ['=', '<', '>', '<=', '>='];

            $field = $where[0];
            $operator = $where[1];
            $value = $where[2];

            if (in_array($operator, $operators)) {

                $sql = "{$action} FROM {$table} WHERE {$field} {$operator} ? $order";

                if (!$this->query($sql, [$value])->error()) {

                    return $this;
                }
            }
        }
    }

    /**
     * @param $action
     * @param $table
     * @param array $wheres
     * @return $this|bool
     */
    private function builderAction($action, $table, $wheres = []){

        if(count($wheres) === 7){
            $operators = ['=', '<', '>', '<=', '>=', 'AND', 'OR'];

            $field_first    = $wheres[0];
            $field_second    = $wheres[4];
            $operator_first = $wheres[1];
            $operator_second = $wheres[5];
            $value_first    = $wheres[2];
            $value_second    = $wheres[6];
            $logique  = strtoupper($wheres[3]);

            if(in_array($operator_first, $operators) && in_array($operator_second, $operators) && in_array($logique, $operators)){

                $sql = "{$action} FROM {$table} WHERE {$field_first} {$operator_first} ?  {$logique} {$field_second} {$operator_second} ?";

                if(!$this->query($sql, [$value_first, $value_second])->error()){

                    return $this;
                }
            }
        }
        return false;
    }


    /**
     * @param $table
     * @param $where
     * @return bool|Db
     */
    function get($table, $where){

        return $this->action('SELECT *', $table, $where);
    }

    /**
     * @param $table
     * @return bool|Db
     */
    function findAll($table){
        return $this->action('SELECT *', $table);
    }

    /**
     * @param $table
     * @param $orderBy
     * @return bool|Db
     */
    function findBy($table, $orderBy){
        return $this->actionBy('SELECT *', $table, $orderBy);
    }

    /**
     * @param $table
     * @param $where
     * @param $orderBy
     * @return bool|Db
     */
    function findOneBy($table, $where, $orderBy){
        return $this->actionOneBy('SELECT *', $table, $where, $orderBy);
    }

    /**
     * @param $table
     * @param $wheres
     * @return bool|Db
     */
    function builderGet($table, $wheres){
        return $this->builderAction('SELECT *', $table, $wheres);
    }

    /**
     * @param $table
     * @param array $fields
     * @return bool
     */
    function insert($table, $fields = []){

        $keys   = array_keys($fields);
        $values = '';
        $x      = 1;

        foreach ($fields as $field){

            $values .=  '?';

            if($x < count($fields)){

                $values .= ', ';
            }
            $x++;
        }

        $sql  = "INSERT INTO {$table}(`".implode('`,`', $keys)."`) VALUES({$values})";
        //return $fields; die(1);
        if(!$this->query($sql, $fields)->error()){

            return true;
        }

        return false;
    }

    function skip(){

    }

    /**
     * @param $table
     * @param $where
     * @param array $fields
     * @return bool
     */
    function update($table, $where, $fields = []){

        $pattern = "/^[0-9]+$/";
        $column = (preg_match($pattern, $where) == 1) ? 'id' : 'email';

        $set = '';
        $x   =  1;

        foreach ($fields as $name => $value){

            $set .= "{$name} = ?";

            if($x < count($fields)){

                $set .= ', ';
            }
            $x++;
        }


        $sql = "UPDATE {$table} SET {$set} WHERE {$column} = {$where}";
        //return $sql;
        if(!$this->query($sql, $fields)->error()){

            return true;
        }

        return false;
    }


    /**
     * @return mixed
     */
    function results(){

        return $this->results;
    }

    /**
     * @return mixed
     */
    function first(){

        return $this->results()[0];
    }

    /**
     * @param $table
     * @param $where
     * @return bool|Db
     */
    function delete($table, $where){
        return $this->action('DELETE', $table, $where);
    }

    /**
     * @return int
     */
    function count(){

        return $this->count;
    }

    /**
     * @return bool
     */
    function error()
    {
        return $this->error;
    }

    /**
     * @param $name
     * @param $args
     */
    public function __call($name, $args){

        echo $name," doesn't exist in this class";
    }



}