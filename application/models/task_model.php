<?php

/**
 *
 */
class Task_model extends CI_Model
{
    public function create_task($data)
    {
        $this->db->insert('tasks', $data);

        return $this->db->get_where('tasks', ['id' => $this->db->insert_id()])->row();
    }

    public function get_tasks($user_id, $options = [])
    {
        $input = ['user_id' => $user_id];
        if ($options['is_complete']) {
            $input['is_complete'] = true;
        } elseif ($options['is_complete'] == false) {
            $input['is_complete'] = false;
        }

        return $this->db->get_where('tasks', $input)->result();
    }

    public function get_task($id, $user_id)
    {
        return $this->db->get_where('tasks', ['id' => $id, 'user_id' => $user_id])->row();
    }

    public function update_task($id, $data, $user_id)
    {
        return $this->db->where(['id' => $id, 'user_id' => $user_id])->update('tasks', $data);
    }

    public function delete_task($id, $user_id)
    {
        return $this->db->where(['id' => $id, 'user_id' => $user_id])->delete('tasks');
    }

    public function toggle_completion($id, $user_id)
    {
        $task = $this->db->get_where('tasks', ['id' => $id, 'user_id' => $user_id])->row();
        $data['is_complete'] = !$task->is_complete;

        return $this->db->where(['id' => $id, 'user_id' => $user_id])->update('tasks', $data);
    }
}
