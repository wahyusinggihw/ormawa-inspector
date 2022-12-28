<?php

class Services extends Users
{
    public function __construct()
    {
        parent::__construct();
    }

    public function roleCatcher()
    {
        $role = $_SESSION['role'];
        $data = $this->findOneUser([
            'role' => $role,
        ]);
        if (empty($data)) {
            // echo ("<script>alert('Login gagal');</script>");
        } else {
            if ($data->role == $role) {
                return $data->role;
            } else {
                return false;
            }
        }
    }
}
