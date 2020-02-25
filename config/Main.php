<?php


class Main
{
    protected $admin = 0;

    public function checkAdmin()
    {
       return $this->admin;

    }

    public function adminLogin()
    {
        $_SESSION['admin_enter'] = 1;
        $this->admin = 1;
        return true;
    }


    public function adminLogout()
    {
        if (isset($_SESSION['admin_enter']) && $this->admin === 1) {
            serialize($_SESSION['admin_enter']);
            $this->admin = 0;
        }
        return true;
    }
}

