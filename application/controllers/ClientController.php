<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ClientController extends CI_Controller
{

	/**
	 * This method loads client home page.
	 */
	public function index()
	{
		$indexData = [];
		$indexData['title'] = 'Acceuil';
		loadViews(
			['templates/client/header', 'client/home/index', 'templates/client/footer'],
			[$indexData, NULL, NULL]
		);
	}

	/**
	 * This method loads ducuments utiles page.
	 */
	public function docs()
	{
		$headerData['title'] = 'Documents utiles';
		$docsData['docsData'] = [];
		loadViews(
			['templates/client/header', 'client/docs/index', 'templates/client/footer'],
			[$headerData, $docsData, NULL]
		);
	}

	/**
	 * This method loads contact page.
	 */
	public function contact()
	{

		$headerData['title'] = 'Documents utiles';
		$docsData['docsData'] = [];
		loadViews(
			['templates/client/header', 'client/contact/index', 'templates/client/footer'],
			[$headerData, $docsData, NULL]
		);
	}

	/**
	 * Cette methode envera l'email au préposé à la gestion des mails externes.
	 */
	public function sendMail()
	{
		# code...
	}
}
