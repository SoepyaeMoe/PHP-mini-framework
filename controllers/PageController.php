<?php

class PageController
{
    public function index()
    {
        $users = DB::table('users')->get();
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
    public function about()
    {
        return view('about');
    }
}
