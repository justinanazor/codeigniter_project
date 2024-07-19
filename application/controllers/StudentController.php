<?php
defined('BASEPATH') or exit('No direct script access allowed');
class StudentController extends MY_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Student_model');
	}
	public function index()
	{
		// $this->load->model('Student_model', 'dix');
		$student = $this->Student_model->student_data();
		$class = $this->Student_model->student_class();


		echo "Student name is: " . $student . ".<br>His class is: " . $class;
	}
	}
