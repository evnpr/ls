<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends Templates {

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
            $data = array("text"=>"optional data variable if wanted for the views");
            $this->add_view("main", "welcome_message", $data);
            $this->add_content("page_title", "Codeigniter Layout");
            $this->render('default');
	}

        public function test()
        {
            $username = $this->db->query("SELECT * FROM profile WHERE id=2")->row()->username;
            echo $username;
        }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
