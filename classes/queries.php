<?php

class queries extends database {
    public $result;

    /**
     * CRUD Query Method
     *
     * @param [type] $query
     * @param array $params
     * @return void
     */
    public function data($query, $params = []) {
        if(empty($params)) {
            $this->result = $this->connection->prepare($data);
            return $this->result->execute();
        } else {
            $this->result = $this->connection->prepare($data);
            return $this->result->execute($params);
        }
    }
    
    /**
     * Row Count Method
     *
     * @return void
     */
    public function row_count() {
        return $this->result->row_count();
    }

    /**
     * Fetch Single Row
     *
     * @return void
     */
    public function fetch() {
        return $this->result->fetch(PDO::FETCH_OBJ);
    }

    /**
     * Fetch All Rows
     *
     * @return void
     */
    public function fetchAll() {
        return $this->result->fetchAll(PDO::FETCH_OBJ);
    }
}

?>