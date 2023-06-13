<?php

    class UserData extends Model {

        public function __construct()
        {
            parent::__construct('test_users');
        }

        public function getUserByLoginPswd($login, $pswd) {
            $params = ['login' => $login, 'password' => $pswd];
            return $this->getFilteredData($params, false, ['name', 'img_path', 'birthday']);
        }

    }
    
?>