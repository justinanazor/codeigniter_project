<?php
defined('BASEPATH') or exit('No direct script access allowed');

$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

// $routes['route_url'] = 'controller_name/function_name';
$route['abouts'] = 'welcome/demo';

// route of the PageController
$route['home'] = 'pagecontroller/index';
$route['abt'] = 'pagecontroller/aboutus';

// $route['route_url/(datatype)'] = 'controller_name/function_name/$1';
$route['blog/(:any)'] = 'pagecontroller/blog/$1';
$route['pagedemo'] = 'pagecontroller/demo';

// route of the studentsController
$route['stud'] = 'studentscontroller/index';

// ___________________________________
// route of the employees ( eg.edit or update, and delete)
$route['employees'] = 'frontend/employeecontroller/index';
$route['employees/add'] = 'frontend/employeecontroller/create';
$route['employees/store'] = 'frontend/employeecontroller/store_info';
$route['employees/view/(:any)']='frontend/employeecontroller/view/$1';
$route['employees/edit/(:any)']='frontend/employeecontroller/edit/$1';
$route['employees/update/(:any)']='frontend/employeecontroller/update/$1';
// $route['employees/delete/(:any)']='frontend/employeecontroller/delete/$1';

// For confirm delete action
$route['employees/confirmdelete/(:any)']['DELETE']='frontend/employeecontroller/delete/$1';
