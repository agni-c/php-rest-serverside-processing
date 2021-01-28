<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

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
		$this->load->view('welcome_message');
	}
	public function datatable()
	{
		$this->load->database();

		// params comming form data grid
		$draw = intval($this->input->post("draw"));
		$start = intval($this->input->post("start"));
		$length = intval($this->input->post("length"));
		$order = $this->input->post("order");
		$search = $this->input->post("search");
		$search = $search['value'];
		$col = 0;
		$dir = "";
		//  param checking
		if (!empty($order)) {
			foreach ($order as $o) {
				$col = $o['column'];
				$dir = $o['dir'];
			}
		}
		if ($dir != "asc" && $dir != "desc") {
			$dir = "desc";
		}
		$valid_columns = array(
			0 => 'id',
			1 => 'title',
			2 => 'description',
			3 => 'created_at',			
		);
		if (!isset($valid_columns[$col])) {
			$order = null;
		} else {
			$order = $valid_columns[$col];
		}
		if ($order != null) {
			$this->db->order_by($order, $dir);
		}
		if (!empty($search)) {
			$x = 0;
			foreach ($valid_columns as $sterm) {
				if ($x == 0) {
					$this->db->like($sterm, $search);
				} else {
					$this->db->or_like($sterm, $search);
				}
				$x++;
			}
		}
		//pagination
		$this->db->limit($length, $start);
		$items = $this->db->get("items");
		$data = array();
		//row data model
		foreach ($items->result() as $rows) {

			$data[] = array(
				$rows->id,
				$rows->title,
				$rows->description,
				$rows->created_at,
				'<a href="#" class="btn btn-warning mr-1">Edit</a>
                 <a href="#" class="btn btn-danger mr-1">Delete</a>'
			);
		}
		$total_items = $this->totalItems();
		$output = array(
			"draw" => $draw,
			"recordsTotal" => $total_items,
			"recordsFiltered" => $total_items,
			"data" => $data
		);
		echo json_encode($output);
		exit();
	}
	public function totalItems()
	{
		$query = $this->db->select("COUNT(*) as num")->get("items");
		$result = $query->row();
		if (isset($result)) return $result->num;
		return 0;
	}
}
