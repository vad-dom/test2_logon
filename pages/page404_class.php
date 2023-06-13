<?php

    class Page404 extends AbstractPage {
        
        public function __construct()
        {
            parent::__construct();
            $this->title = 'Страница не найдена - 404';
            $this->meta_desc = 'Запрошенная страница не существует';
            $this->meta_keywords = 'страница не найдена, страница не существует, 404';
        }
        
    }

?>