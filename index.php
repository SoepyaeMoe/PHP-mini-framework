<?php
require "core/bootstrap.php";
Route::load('routes.php')->direct(Request::uri(), $_SERVER['REQUEST_METHOD']);
