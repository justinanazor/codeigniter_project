<?php

defined('BASEPATH') or exit('No direct script access allowed');

class EmployeeController extends MY_Controller
{
	public function index()
	{
		$this->load->view('template/header');
		// To call employee details from db via Model--------------------------------
		$this->load->model('Employee_model');
		$data['employee'] = $this->Employee_model->get_employee();
		$this->load->view('frontend/employee', $data);
		// Second method to calll employee detail via model--------------------------------
		// $employee = $this->Employee_model->get_employee();
		// $this->load->view('frontend/employee', ['employee' => $employee]);
		$this->load->view('template/footer');
	}
	public function create()
	{
		$this->load->view('template/header');
		$this->load->view('frontend/create_employee');
		$this->load->view('template/footer');
	}
	public function store_info()
	{
		// form validation rules
		$this->form_validation->set_rules('full_name', 'Full name', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		$this->form_validation->set_rules('address', 'Address', 'required');
		$this->form_validation->set_rules('phone_no', 'Phone No', 'required');
		if ($this->form_validation->run()) {

			$data = [
				'full_name' => $this->input->post('full_name'),
				'email' => $this->input->post('email'),
				'address' => $this->input->post('address'),
				'phone_no' => $this->input->post('phone_no'),
			];

			$this->load->model('Employee_model');
			$this->Employee_model->insert_employee($data);
			redirect(base_url('employees'));
		} else {
			$this->create();
		}
	}
	public function edit($id)
	{
		$this->load->model('Employee_model');
		$data['employee']=$this->Employee_model->edit_employee($id);
		// if (empty($employee)) {
		// 	show_404();
		// }
		$this->load->view('template/header');
		$this->load->view('frontend/edit', $data);
		$this->load->view('template/footer');
	}
	public function view($id)
	{
		$this->load->model('Employee_model');
		$data['employee']=$this->Employee_model->view_employee($id);
		$this->load->view('template/header');
		$this->load->view('frontend/view', $data);
		$this->load->view('template/footer');
	}

	public function update($id){
		// form validation rules
		$this->form_validation->set_rules('full_name', 'Full name', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		$this->form_validation->set_rules('address', 'Address', 'required');
		$this->form_validation->set_rules('phone_no', 'Phone No', 'required');
		if ($this->form_validation->run()):
			$data = [
				'full_name' => $this->input->post('full_name'),
				'email' => $this->input->post('email'),
				'address' => $this->input->post('address'),
				'phone_no' => $this->input->post('phone_no'),
			];
			$this->load->model('Employee_model');
			$this->Employee_model->update_employee($data, $id);
			redirect(base_url('employees'));
		else:
			$this->edit($id); 
		endif;
	}
	public function delete($id){
		$this->load->model('Employee_model');
		$this->Employee_model->delete_employee($id);
		redirect(base_url('employees'));
	}
}
