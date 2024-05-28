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
    public function rowCount() {
        return $this->result->rowCount();
    }
}

?>