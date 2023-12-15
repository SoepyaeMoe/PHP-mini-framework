<?php
function dd($data)
{
    echo "<pre>";
    die(var_dump($data));
}
function dp($data)
{
    echo "<pre>";
    die(print_r($data));
}
function view($name, $data = [])
{
    extract($data);
    require "views/$name.view.php";
}
