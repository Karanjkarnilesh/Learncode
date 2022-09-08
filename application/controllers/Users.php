<?php

use PhpParser\Node\Expr\Cast\Object_;

class Users extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_model');
    }
    public function index()
    {
        $this->load->view('welcome_message');
    }

    public function signup()
    {
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[users.email]');
        $this->form_validation->set_rules('profile', 'Document');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('confpwd', 'Password Confirmation', 'required|matches[password]');


        if ($this->form_validation->run() == TRUE) {
            $userdata = [
                'username' => $this->input->post("username"),
                'email' => $this->input->post("email"),
                'password' => sha1($this->input->post("password")),
                'profile' => '',
            ];
            $path = './upload/profile/';
            @mkdir('./upload/');
            @mkdir('./upload/profile');
            @mkdir($path);
            $config['upload_path']          = $path;
            $config['allowed_types'] = '*';
            $config['overwrite'] = TRUE;
            $config['encrypt_name'] = TRUE;
            $config['remove_spaces'] = TRUE;
            if (!is_dir($config['upload_path'])) die("THE UPLOAD DIRECTORY DOES NOT EXIST");
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('profile')) {
                $this->upload->display_errors();
            }
            $userdata['profile'] = $this->upload->data()['full_path'];
            if ($this->User_model->add($userdata)) {
                redirect('users/login');
            }
        }
        $this->load->view('user/signup');
    }
    public function login()
    {
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        if ($this->form_validation->run() == TRUE) {
            $data = [
                'email' => $this->input->post("email"),
                'password' => sha1($this->input->post("password")),
            ];

            $user = $this->User_model->getuser($data);

            if ($user) {
                $user=[
                    'user_id'=>$user[0]->user_id,
                    'user_profile'=>$user[0]->user_id,
                    'user_profile'=>$user[0]->profile,
                    'username'=>$user[0]->username,
                    'emai'=> $user[0]->email,
                ];
                $this->session->set_userdata('user',(Object)$user);
            }
        }
        $this->load->view('user/login');
    }
    public function logout()
    {
        $this->session->unset_userdata('user');
        $this->load->view('user/login');
    }
}
