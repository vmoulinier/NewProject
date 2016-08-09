<?php

class Home extends Controller
{
    public function index()
    {
        $this->view('home/_index');
    }

    public function profile()
    {
        $this->view('user/edit_profile');
    }

    public function userpics()
    {
        $this->php('userpics');
    }
    
    public function registerajax()
    {
        $this->php('register');
    }

    public function loginajax()
    {
        $this->php('login');
    }

    public function logout()
    {
        $this->view('user/logout');
    }


}