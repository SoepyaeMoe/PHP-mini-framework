<?php
require "core/bootstrap.php";
// require "core/Helper/functions.php";
Route::load('routes.php')->direct(Request::uri(), $_SERVER['REQUEST_METHOD']);
