<?php

    abstract class AbstractPage {
        
        protected $title;
        protected $meta_desc;
        protected $meta_keywords;

        protected $params = [];

        public function __construct()
        {

        }
        
        public function getTitle() {
            return $this->title;
        }

        public function getMetaDesc() {
            return $this->meta_desc;
        }

        public function getMetaKey() {
            return $this->meta_keywords;
        }

        public function getParams() {
            return $this->params;
        }
        
    }

?>