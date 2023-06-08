<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'auth';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route["gramasurya"] = 'gramasurya/Auth';
$route["pracetak"] = 'pracetak/SuratOrder';
$route["cetak"] = 'cetak/DisplayUmum';
$route["finishing"] = 'finishing/display';
