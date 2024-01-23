<?php

//merupakan class controller utama
class Controller {
    public function view($view, $data = [])
    {
        require_once '../app/views/template/header.php';
        require_once '../app/views/' . $view . '.php';
        require_once '../app/views/template/footer.php';
        
    }

    public function model($model)
    {
        require_once '../app/models/' . $model . '.php';
        return new $model;
    }

    

}