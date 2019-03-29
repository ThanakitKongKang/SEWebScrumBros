<?php

/**
 * This controller handles user login/logout and sign up.
 */
class Users extends CI_Controller
{
    public function register()
    {
        $this->form_validation->set_rules('first_name', 'First name', 'trim|required|min_length[2]');
        $this->form_validation->set_rules('last_name', 'Last name', 'trim|required|min_length[2]');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[users.email]');
        $this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[2]|is_unique[users.username]');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[2]');

        if ($this->form_validation->run() == false) {
            return $this->load->view('layouts/main', ['main_view' => 'users/register']);
        }
        $user = $this->user_model->create_user();
        if ($user) {
            $this->session->set_flashdata('flash_success', 'Your account has been created. You are now signed in.');
            $this->session->set_userdata([
                'user_id' => $user->id,
                'username' => $user->username,
                'logged_in' => true,
            ]);
        }
        redirect('home');
    }

    public function login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $user_id = $this->user_model->login_user($username, $password);

        if (!$user_id) {
            $this->session->set_flashdata('flash_danger', 'Invalid username or password');

            return redirect('home');
        }

        $this->session->set_userdata([
            'user_id' => $user_id,
            'username' => $username,
            'logged_in' => true,
        ]);
        $this->session->set_flashdata('flash_success', 'You are now logged in');

        redirect('projects');
    }

    public function logout()
    {
        $this->session->sess_destroy();
        $this->session->set_flashdata('flash_success', 'You are now logged out');
        redirect('home');
    }
}
