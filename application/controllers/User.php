<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function index()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['title'] =  'My Profile';
        // $this->load->view('templates/auth_header', $data);
        $this->load->view('user/index', $data);
        // $this->load->view('templates/auth_footer');
    }
}
