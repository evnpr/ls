<?php
 
class Templates extends CI_Controller {
 
    private $content_areas;
 
    function __construct(){
        parent::__construct();
    }
 
    function add_view($content_area, $view, $data = array()){
        $this->add_content($content_area, $this->load->view($view, $data, TRUE));
    }
 
    function add_content($content_area, $content){
        $this->content_areas[$content_area] = $content;
    }
 
    function render($layout){
        $this->load->view('layouts/'.$layout, $this->content_areas);
    }
 
}

