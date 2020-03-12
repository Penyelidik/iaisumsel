<?php
class My404 extends My_Controller
{
   public function __construct()
   {
       parent::__construct();
   }
   public function index()
   {
       $this->output->set_status_header('404');
       $data["title"] = '404 Page Not Found';
	  
       $this->errorku($data);
       
   }
}