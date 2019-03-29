<?php

/**
 * This controller handles project management.
 */
class Projects extends CI_Controller
{
    public function __construct(Type $foo = null)
    {
        parent::__construct();
        if (!$this->session->userdata('logged_in')) {
            $this->session->set_flashdata('flash_danger', 'Please login to view this page');
            redirect('home');
        }
    }

    public function index()
    {
        $user_id = $this->session->userdata('user_id');
        $this->load->view('layouts/main', [
            'main_view' => 'projects/index',
            'projects' => $this->project_model->get_projects($user_id),
        ]);
    }

    public function create()
    {
        $this->form_validation->set_rules('name', 'Name', 'trim|required');
        $this->form_validation->set_rules('body', 'Description', 'trim|required');

        if ($this->form_validation->run() == false) {
            $this->load->view('layouts/main', ['main_view' => 'projects/create']);
        } else {
            $project = $this->project_model->create_project([
                'user_id' => $this->session->userdata('user_id'),
                'name' => $this->input->post('name'),
                'body' => $this->input->post('body'),
            ]);

            if ($project) {
                $this->session->set_flashdata('flash_success', 'Your project has been created');
                redirect('projects/show/'.$project->id);
            }
        }
    }
    public function show($id)
    {
        $user_id = $this->session->userdata('user_id');
        $project = $this->project_model->get_project($id, $user_id);
        if (!$project) {
            $this->denied_message();

            return redirect('projects');
        }
        $complete_tasks = $this->project_model->get_tasks($id, $user_id, ['is_complete' => true]);
        $incomplete_tasks = $this->project_model->get_tasks($id, $user_id, ['is_complete' => false]);
        $this->load->view('layouts/main', [
            'main_view' => 'projects/show',
            'project' => $project,
            'complete_tasks' => $complete_tasks,
            'incomplete_tasks' => $incomplete_tasks,
        ]);
    }

    public function edit($id)
    {
        $user_id = $this->session->userdata('user_id');
        $project = $this->project_model->get_project($id, $user_id);
        if (!$project) {
            $this->denied_message();

            return redirect('projects');
        }
        $this->form_validation->set_rules('name', 'Name', 'trim|required');
        $this->form_validation->set_rules('body', 'Description', 'trim|required');

        if ($this->form_validation->run() == false) {
            $this->load->view('layouts/main', ['main_view' => 'projects/edit', 'project' => $project]);
        } else {
            $data = [
                'name' => $this->input->post('name'),
                'body' => $this->input->post('body'),
            ];
            if ($this->project_model->update_project($id, $data, $user_id)) {
                $this->session->set_flashdata('flash_success', 'Your project has been updated');
                redirect('projects/show/'.$project->id);
            } else {
                $this->denied_message();
                redirect('projects');
            }
        }
    }

    public function delete($id)
    {
        $user_id = $this->session->userdata('user_id');
        $project = $this->project_model->get_project($id, $user_id);
        if (!$project) {
            $this->denied_message();

            return redirect('projects');
        }
        if ($this->project_model->delete_project($id, $user_id)) {
            $this->session->set_flashdata('flash_success', 'Your project has been deleted');
        } else {
            $this->denied_message();
        }
        redirect('projects');
    }

    private function denied_message()
    {
        $this->session->set_flashdata('flash_danger', 'That project does not exist or you do not have permission');
    }
}
