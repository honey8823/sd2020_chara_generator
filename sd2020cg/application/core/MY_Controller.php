<?php defined('BASEPATH') OR exit('No direct script access allowed');
class MY_Controller extends CI_Controller {
	/**
	 * Constructor
	 *
	 * @access	public
	 */
	public function __construct()
	{
		parent::__construct();
	}

	public function view($template_name, $data_list = array())
	{
		$data_list['template_head']    = $this->load->view("common/head", NULL, TRUE);
		$data_list['template_js']      = $this->load->view("common/js", NULL, TRUE);
		$data_list['template_header']  = $this->load->view("common/header", NULL, TRUE);
		$data_list['template_sidebar'] = $this->load->view("common/sidebar", NULL, TRUE);
		$this->load->view($template_name, $data_list);
	}
}

class PublicController extends MY_Controller {

	/**
	 * Constructor
	 *
	 * @access	public
	 */
	public function __construct()
	{
		parent::__construct();
	}
}

class UserController extends MY_Controller {

	/**
	 * Constructor
	 *
	 * @access	public
	 */
	public function __construct()
	{
		parent::__construct();
	}
}
