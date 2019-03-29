<?php

/**
 *
 */
class Project_model extends CI_Model
{
    public function create_project($data)
    {
        $this->db->insert('projects', $data);

        return $this->db->get_where('projects', ['id' => $this->db->insert_id()])->row();
    }

    public function get_projects($user_id)
    {
        return $this->db->get_where('projects', ['user_id' => $user_id])->result();
    }

    public function get_project($id, $user_id)
    {
        return $this->db->get_where('projects', ['id' => $id, 'user_id' => $user_id])->row();
    }

    public function update_project($id, $data, $user_id)
    {
        return $this->db->where(['id' => $id, 'user_id' => $user_id])->update('projects', $data);
    }

    public function delete_project($id, $user_id)
    {
        $this->db->where(['project_id' => $id])->delete('tasks');

        return $this->db->where(['id' => $id, 'user_id' => $user_id])->delete('projects');
    }

    public function get_tasks($id, $user_id, $options = [])
    {
        $input = ['project_id' => $id, 'user_id' => $user_id];
        if ($options['is_complete']) {
            $input['is_complete'] = true;
        } elseif ($options['is_complete'] == false) {
            $input['is_complete'] = false;
        }

        return $this->db->get_where('tasks', $input)->result();
    }
}
