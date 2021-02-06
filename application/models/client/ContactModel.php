<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Class : Contact Model
 * This Class manages requetes_visiteurs table data.
 */
class ContactModel extends CI_Model
{
    #This method reads visitors messages
    public function index($all = FALSE)
    {
        # code...
    }

    #This method stores visitor massage.
    public function store()
    {
        #validation
        $this->form_validation->set_rules('nom', 'Nom', 'trim|required|max_length[64]');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|max_length[64]');
        $this->form_validation->set_rules('sujet', 'Sujet', 'trim|required|max_length[128]');
        $this->form_validation->set_rules('message', 'Message', 'trim|required|max_length[512]');

        if ($this->form_validation->run() === FALSE) return 0;

        $formData = [
            'nom_visiteur'          => ucwords(html_escape($this->input->post('nom'))),
            'email_visiteur'        => html_escape($this->input->post('email')),
            'sujet_requete'         => html_escape($this->input->post('sujet')),
            'contenue_requete'      => html_escape($this->input->post('message')),
        ];

        $this->db->trans_start();
        $this->db->insert('requetes_visiteurs', $formData);
        $insertId = $this->db->insert_id();
        $this->db->trans_complete();
        return  $insertId;
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
    public function reply($visitorMail, $adminMessage)
    {
        # code...
    }
}
