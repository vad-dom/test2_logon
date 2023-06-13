<?php

    class PageIndex extends AbstractPage {
        
        public function __construct()
        {
            parent::__construct();
            $this->title = 'Авторизация Тест';
            $this->meta_desc = 'Тестовая авторизация пользователя';
            $this->meta_keywords = 'тест, авторизация, пользователь';

            $ds = DIRECTORY_SEPARATOR;
            $this->params['css_file'] = 'css'.$ds.'main.css';
            $this->params['js_file'] = '..'.$ds.'js'.$ds.'event_handlers.js';

            session_start();
            if (isset($_SESSION['user_data'])) {
                header("Location: /userdata");
                exit();
            }
        }
        
    }

?>