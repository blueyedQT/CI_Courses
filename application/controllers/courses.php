<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Courses extends CI_Controller {

	public function index() {
		$this->output->enable_profiler(TRUE); 
		$this->load->model('Course');
		$courses = $this->Course->get_all_courses();
		$display['courses'] = $courses;
		$this->load->view('courses_index', $display);
	}

	public function add() {
		if($this->input->post()) {
			$this->load->model('Course');
			$course_info = array('name' => $this->input->post('name'), 
								'description' => $this->input->post('description'));
			$add_course = $this->Course->add_course($course_info);
			if($add_course) {
				echo 'Course is added!';
			}
		}
	}

	public function destroy($id) {
		$this->output->enable_profiler(TRUE);
		$this->load->model('Course');
		$course = $this->Course->get_course_by_id($id);
		$display['course'] = $course;
		$this->load->view('destroy', $display);
	}

	public function delete($id) {
		$this->output->enable_profiler(TRUE);
		$this->load->model('Course');
		$this->
	}
}