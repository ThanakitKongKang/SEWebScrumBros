<?php

/**
 * This controller handles task management.
 */
class Tasks extends CI_Controller
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
        $complete_tasks = $this->task_model->get_tasks($user_id, ['is_complete' => true]);
        $incomplete_tasks = $this->task_model->get_tasks($user_id, ['is_complete' => false]);
        $this->load->view('layouts/main', [
            'main_view' => 'tasks/index',
            'complete_tasks' => $complete_tasks,
            'incomplete_tasks' => $incomplete_tasks,
        ]);
    }

    /**
     * Create a task for a project. If the current user does not own the project,
     * show the access denied message.
     *
     * @param [type] $project_id [description]
     * @returns [type] [description]
     */
    public function create($project_id)
    {
        $user_id = $this->session->userdata('user_id');
        $project = $this->project_model->get_project($project_id, $user_id);
        if (!$project) {
            $this->session->set_flashdata('flash_danger', 'That project does not exist or you do not have permission');

            return redirect('projects');
        }
        $this->form_validation->set_rules('name', 'Name', 'trim|required');
        $this->form_validation->set_rules('body', 'Description', 'trim|required');

        if ($this->form_validation->run() == false) {
            $this->load->view('layouts/main', ['main_view' => 'tasks/create', 'project' => $project]);
        } else {
            $task = $this->task_model->create_task([
                'user_id' => $this->session->userdata('user_id'),
                'project_id' => $project_id,
                'name' => $this->input->post('name'),
                'body' => $this->input->post('body'),
                'due_date' => $this->input->post('due_date') ?: date('Y-m-d'),
            ]);

            if ($task) {
                $this->session->set_flashdata('flash_success', 'Your task has been created');
                redirect('tasks/show/'.$task->id);
            }
        }
    }
    public function show($id)
    {
        $user_id = $this->session->userdata('user_id');
        $task = $this->task_model->get_task($id, $user_id);
        if (!$task) {
            $this->denied_message();

            return redirect('tasks');
        }
        $project = $this->project_model->get_project($task->project_id, $user_id);
        $this->load->view('layouts/main', ['main_view' => 'tasks/show', 'task' => $task, 'project' => $project]);
    }

    public function edit($id)
    {
        $user_id = $this->session->userdata('user_id');
        $task = $this->task_model->get_task($id, $user_id);
        if (!$task) {
            $this->denied_message();

            return redirect('tasks');
        }
        $project = $this->project_model->get_project($task->project_id, $user_id);
        $this->form_validation->set_rules('name', 'Name', 'trim|required');
        $this->form_validation->set_rules('body', 'Description', 'trim|required');

        if ($this->form_validation->run() == false) {
            $this->load->view('layouts/main', ['main_view' => 'tasks/edit', 'task' => $task, 'project' => $project]);
        } else {
            $data = [
                'name' => $this->input->post('name'),
                'body' => $this->input->post('body'),
                'due_date' => $this->input->post('due_date'),
            ];
            if ($this->task_model->update_task($id, $data, $user_id)) {
                $this->session->set_flashdata('flash_success', 'Your task has been updated');
                redirect('tasks/show/'.$task->id);
            } else {
                $this->denied_message();
                redirect('tasks');
            }
        }
    }

    public function delete($id)
    {
        $user_id = $this->session->userdata('user_id');
        $task = $this->task_model->get_task($id, $user_id);
        if (!$task) {
            $this->denied_message();

            return redirect('tasks');
        }
        if ($this->task_model->delete_task($id, $user_id)) {
            $this->session->set_flashdata('flash_success', 'Your task has been deleted');
        } else {
            $this->denied_message();
        }
        redirect('projects/show/'.$task->project_id);
    }

    public function toggle_completion($id)
    {
        $user_id = $this->session->userdata('user_id');
        $task = $this->task_model->get_task($id, $user_id);
        if (!$task) {
            $this->denied_message();

            return redirect('tasks');
        }
        if ($task->is_complete) {
            $this->session->set_flashdata('flash_success', '<strong>'.$task->name.'</strong> has been marked incomplete');
        } else {
            $this->session->set_flashdata('flash_success', '<strong>'.$task->name.'</strong> has been completed');
        }
        $this->task_model->toggle_completion($id, $user_id);
        redirect('projects/show/'.$task->project_id);
    }

    private function denied_message()
    {
        $this->session->set_flashdata('flash_danger', 'That task does not exist or you do not have permission');
    }
}
