<?php
defined('BASEPATH') or exit('No direct script access allowed');

class HomeController extends CI_Controller
{
	/**
	 * This method loads client home page.
	 */
	public function index()
	{
		$indexData['title'] = 'Accueil';
		loadViews(
			['templates/client/header', 'client/home/index', 'templates/client/footer'],
			[$indexData, NULL, NULL]
		);
	}
}
