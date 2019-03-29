<?php

/**
 * This controller handles the guest views.
 */
class Home extends CI_Controller
{
    public function index()
    {
        $this->load->view('layouts/main', ['main_view' => 'home/index']);
    }
}
