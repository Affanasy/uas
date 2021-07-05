<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

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
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('template/header');
        $this->load->view('home/web1');
        $this->load->view('template/footer');
	}
    public function web2()
	{
		$this->load->view('template/header');
        $this->load->view('home/web2');
        $this->load->view('template/footer');
	}
	public function komen()
	{
		
        $this->load->view('home/komen');
        
	}
	public function about()
	{
		$this->load->view('template/header');
        $this->load->view('home/about');
        $this->load->view('template/footer');
	}
	public function alkhawarizmi()
	{
		$this->load->view('template/header');
        $this->load->view('home/web3');
        $this->load->view('template/footer');
	}
	public function alkindi()
	{
		$this->load->view('template/header');
        $this->load->view('home/web4');
        $this->load->view('template/footer');
	}
	public function alfarabi()
	{
		$this->load->view('template/header');
        $this->load->view('home/web5');
        $this->load->view('template/footer');
	}
	public function ibnu()
	{
		$this->load->view('template/header');
        $this->load->view('home/web6');
        $this->load->view('template/footer');
	}

	public function arrazhi()
	{
	$this->load->view('template/header');
    $this->load->view('home/web8');
    $this->load->view('template/footer');
	}

}

