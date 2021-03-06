<?php
//System : PsychoMVC
//File : PsychoView.php
//Author : Twiceworld PHP
//Description : View class
class PsychoView {
    public $url;
    public $sys_cmd;
    public $db;
    public function __construct($url,$sys_cmd,$db)
    {
        $this->sys_cmd = $sys_cmd;
        $this->url = $url;
        $this->db = $db;
    }
    public function render($view = "")
    {
        include_once $this->url->base_path() . "app" . DS . "views" . DS . $view . ".php";
    }
    public function render_error()
    {
        include_once $this->base_path() . "app" . DS . "system" . DS . "page" . DS . "error.php";
    }
}