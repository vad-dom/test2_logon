<?php

    class PageIndex extends AbstractPage {
        
        public function __construct()
        {
            parent::__construct();
            $this->title = 'Авторизация Тест';
            $this->meta_desc = 'Тестовая авторизация пользователя';
            $this->meta_keywords = 'тест, авторизация, пользователь';

            $this->params['css_file'] = 'css/main.css';
            $this->params['js_file'] = '../js/event_handlers.js';

            session_start();
            if (isset($_SESSION['user_data'])) {
                header("Location: /userdata");
                exit();
            }
        }
        
    }

?>