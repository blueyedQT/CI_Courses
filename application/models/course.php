<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Course extends CI_Model {

	public function add_course($course) {
		$query = "INSERT INTO courses (name, description, created_at, updated_at) VALUES (?,?,?,?)";
		$values = array($course['name'], $course['description'], date("Y-m-d, H:i:s"), date("Y-m-d, H:i:s"));
		return $this->db->query($query, $values);
	}

}
?>