<?php

class queries extends database {
    public $result;
    public function data($query, $params = []) {
        if(empty($params)) {
            $this->result = $this->connection->prepare($data);
            return $this->result->execute();
        } else {
            $this->result = $this->connection->prepare($data);
            return $this->result->execute($params);
        }
    }
}

?>