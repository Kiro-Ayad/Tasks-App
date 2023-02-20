<?php

use Requests\request;
use Sessions\Session;

require_once 'inc/connection.php';
require_once 'classes/request.php';
require_once 'classes/session.php';
require_once 'classes/validation/validation.php';

$request = new request;
$session = new Session;
$validation = new validation;