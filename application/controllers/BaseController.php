<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BaseController extends CI_Controller {

	#This method redirects index method in client/HomeController class
	public function index()
	{
		redirect(base_url('client/home'));
	}
}
