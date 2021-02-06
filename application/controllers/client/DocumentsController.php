<?php
defined('BASEPATH') or exit('No direct script access allowed');

class DocumentsController extends CI_Controller
{
	/**
	 * This method loads ducuments utiles page.
	 */
	public function index()
	{
		$headerData['title'] = 'Documents utiles';
		$documentsData['documentsData'] = [];
		loadViews(
			['templates/client/header', 'client/documents/index', 'templates/client/footer'],
			[$headerData, $documentsData, NULL]
		);
	}
}
