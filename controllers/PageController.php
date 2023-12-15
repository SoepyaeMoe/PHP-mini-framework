<?php

class PageController
{
    public function index()
    {
        $users = App::get('database')->selectAll('users');
        $data['users'] = $users;
        return view('index', $data);
    }
    public function name()
    {
        App::get('database')->insert([
            'name' => $_POST['name'],
        ], 'users');

        header('location:/');

    }
}