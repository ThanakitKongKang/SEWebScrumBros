<?php

/**
 *
 */
class User_model extends CI_Model
{
    /**
     * Adds a user in the database given specific input.
     *
     * @returns array|false User associative array or false.
     */
    public function create_user()
    {
        $this->db->insert('users', [
            'first_name' => $this->input->post('first_name'),
            'last_name' => $this->input->post('last_name'),
            'email' => $this->input->post('email'),
            'username' => $this->input->post('username'),
            'password' => password_hash($this->input->post('password'), PASSWORD_BCRYPT, ['cost' => 10]),
        ]);

        return $this->db->get_where('users', ['id' => $this->db->insert_id()])->row();
    }

    /**
     * Find a user by username and verify their password.
     * If there is a match, return the user's ID, othwerwise return false.
     *
     * @param string $username The user's username
     * @param string $password The user's password
     * @returns int|false
     */
    public function login_user($username, $password)
    {
        if (!$username && $password) {
            return false;
        }
        $this->db->where(['username' => $username]);
        $user = $this->db->get('users')->row(0);

        if (!$user) {
            return false;
        }
        $db_password = $user->password;

        if (password_verify($password, $db_password)) {
            return $user->id;
        }

        return false;
    }
}
