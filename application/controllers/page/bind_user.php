<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * 绑定账号
*/
class Bind_user extends CI_Controller {

    function __Construct()
    {
        parent::__construct();
        Auth_filter::check_auth();
    }

	public function index() {
        $this->load->library('smarty_service');
		$this->smarty_service->view('bind_user.tpl');
	}
}
