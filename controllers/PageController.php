<?php
namespace controllers;

use core\App;
use database\DB;

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
            'name' => request('name'),
        ], 'users');

        return redirect('/');
    }
    public function about()
    {
        return view('about');
    }
}
