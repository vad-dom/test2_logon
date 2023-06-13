<?php

    class MainController {

        private $view;

        public function __construct() {
            $this->view = new View(DIR_TMPL);
        }

        private function action($page_name, $dir = '') {
            $page = 'Page'.$page_name;
            $page = new $page();

            $page_params = $page->getParams();
            $content = $this->view->render($page_params, $dir.DIRECTORY_SEPARATOR.$page_name, true);

            $params = [];
            $params['title'] = $page->getTitle();
            $params['meta_desc'] = $page->getMetaDesc();
            $params['meta_keywords'] = $page->getMetaKey();
            $params['content'] = $content;
            $params += $page_params;
            $this->view->render($params, MAIN_LAYOUT);
        }
        
        public function action404() {
            header('HTTP/1.1 404 Not Found');
            header('Status: 404 Not Found');
            $this->action('404');
        }
        
        public function actionIndex() {
            $this->action('index');
        }

        public function actionUserData() {
            $this->action('userdata');
        }
      
    }

?>