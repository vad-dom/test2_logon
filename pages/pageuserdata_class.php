<?php

    class PageUserData extends AbstractPage {
        
        public function __construct()
        {
            parent::__construct();
            $this->title = 'Данные пользователя';
            $this->meta_desc = 'Вывод информации о пользователе после авторизации';
            $this->meta_keywords = 'информация, пользователь';

            $ds = DIRECTORY_SEPARATOR;
            $this->params['css_file'] = 'css'.$ds.'main.css';
            $this->params['js_file'] = '..'.$ds.'js'.$ds.'auth_success.js';

            session_start();
            if (!isset($_SESSION['user_data'])) {
                header("Location: /");
                exit();
            }

            $this->params['user_name'] = $_SESSION['user_data']['user_name']?? false;
            $this->params['user_birthday'] = $_SESSION['user_data']['user_birthday']?? false;
            $this->params['user_img_path'] = $_SESSION['user_data']['user_img_path']?? false;

            if (isset($_SESSION['auth_success'])) $this->params['auth_success'] = 'auth_success';
            else $this->params['auth_success'] = 'display_none';
            unset($_SESSION['auth_success']);
        }
        
    }

?>