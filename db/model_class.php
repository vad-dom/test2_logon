<?php

    require_once 'db_config.php';

    abstract class Model {

        protected $db;
        protected $table_name;

        public function __construct($table_name) {
            $this->db = DataBase::getDB();
            $this->table_name = $table_name;
        }

        private function selectData($select_fields = null) {
            if (isset($select_fields)) {
                $field_list = '';
                foreach ($select_fields as $field)
                    $field_list .= "`$field`, ";
                $field_list = substr($field_list, 0, -2);
            } else {
                $field_list = '*';
            }
            $query = "SELECT $field_list FROM `".$this->table_name.'`';
            return $query;
        }

        private function getFilter($params, $logic_or = false) {
            $where = '';
            if ($logic_or) $logic = ' OR ';
            else $logic = ' AND ';
            foreach ($params as $p) {
                if (!empty($where)) $where .= $logic;
                $where .= "`$p` = :$p";
            }
            return " WHERE $where";
        }

        protected function getFilteredData($params, $logic_or = false, $select_fields = null, $fetch = 'fetch') {
                $query = $this->selectData($select_fields);
                $query .= $this->getFilter(array_keys($params), $logic_or);
                return $this->db->pdoQuery($query, $params, $fetch, 'fetch');
        }

    }

?>