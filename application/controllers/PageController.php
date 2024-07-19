<?php
defined('BASEPATH') or exit('No direct script access allowed');

class PageController extends MY_Controller
{
	public function index()
	{
		echo "This is index - Home_url of the PageController not linked to the view but linked to route";
		// $this->load->view('');
	}

	public function aboutus()
	{
		echo "this is aboutus method declared in the PageController";
	}

	// public function blog($blog_url = '')
	public function blog($blog_url = '')
	{
		// echo $blog_url;
		$this->load->view('blogview');
	}
	public function demo()
	{
		$this->load->model('Student_model');
		$title = $this->Student_model->demo();
		// $data['title'] = "This is a title called from controller to view";

		$data['title'] = $title;
		$data['bofy'] = "Welcome to my life channel";
		$this->load->view('demopage', $data);
	}
}
