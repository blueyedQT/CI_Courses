<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Courses extends CI_Controller {

	public function index() {
		$this->output->enable_profiler(TRUE); 
		$this->load->view('courses_index');
	}

	public function add() {
		if($this->input->post()) {
			$this->load->model('Course');
			$course_info = array("name" => "Biology", "description" => "Study of life");
			$add_course = $this->Course->add_course($course_info);
			if($add_course) {
				echo 'Course is added!';
			}
		}
	}
}