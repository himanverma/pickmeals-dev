<?php

class ErrorsController extends AppController {
    public $name = 'Errors';

    public function beforeFilter() {
        parent::beforeFilter();
        echo "exception";
        exit;
        $this->Auth->allow('error404');
    }

    public function error404() {
        //$this->layout = 'default';
    }
}