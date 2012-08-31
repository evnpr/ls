<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class E extends Templates {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
            $data = array("location"=>"index");
            $this->add_view("main", "adrian/views/home", $data);
            $this->add_content("page_title", "Codeigniter Layout");
            $this->render('default');
	}

        public function order()
        {
            $data = array("location"=>"order");
            $this->add_view("main", "adrian/views/page2", $data);
            $this->add_content("page_title", "Codeigniter Layout");
            $this->render('page2');
        }
	

	public function gallery()
        {
             $data = array("location"=>"gallery");
           $this->add_view("main", "adrian/views/gallery", $data);
            $this->add_content("page_title", "Codeigniter Layout");
            $this->render('gallery');
        }
	
	public function contact()
        {
             $data = array("location"=>"contact");
           $this->add_view("main", "adrian/views/contact", $data);
            $this->add_content("page_title", "Codeigniter Layout");
            $this->render('default');
        }
	
	
	public function manufacturer()
        {
             $data = array("location"=>"index");
           $this->add_view("main", "adrian/views/pageman", $data);
            $this->add_content("page_title", "Codeigniter Layout");
            $this->render('manufacturer');
        }
	
	public function manufacturer_body()
        {
             $data = array("location"=>"body");
           $this->add_view("main", "adrian/views/pageman-body", $data);
            $this->add_content("page_title", "Codeigniter Layout");
            $this->render('manufacturer');
        }
	
	public function manufacturer_head()
        {
             $data = array("location"=>"head");
           $this->add_view("main", "adrian/views/pageman-head", $data);
            $this->add_content("page_title", "Codeigniter Layout");
            $this->render('manufacturer');
        }
		
	    
    
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
