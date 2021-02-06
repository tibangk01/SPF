<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ContactController extends CI_Controller
{
    #This method loads contact view.
    public function index()
    {
        $headerData['title'] = 'Contact';
        $contactData['contactData'] = [];
        loadViews(
            ['templates/client/header', 'client/contact/index', 'templates/client/footer'],
            [$headerData, $contactData, NULL]
        );
    }

    #This method saves visitor messages
    public function store()
    {
        $this->load->model('client/contactModel');
        if ($this->contactModel->store() !== 0) {
            $this->session->set_flashdata('visitor_message_sent', 'Votre message a été bien enregistré. Nous vous répondrons bientôt.');
        }
        $this->index();
    }

    #This method shows selected visitor message
    public function show($id)
    {
        # code...
    }

    #This method closes visitor message reply
    public function patch($id)
    {
        # code...
    }

    #This method deletes selected visitor message
    public function delete($id)
    {
        # code...
    }

    /**
     * This method reply visitor's mail
     * @param {string} $visitorEmail
     * @param {object} $adminMessage
     */
    public function reply($visitorEmail, $adminMessage)
    {
        # code...
    }
}
