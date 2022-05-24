<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/userguide3/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'admin_controller';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

//When user press login btton than go to dashboard
$route['dashboard'] = "admin_controller/gotodashboard";

//Sign up page load when click sign up link
$route['sign-up'] = 'admin_controller/sign_up_page_load';

//Go back login page route
$route['log-in'] = 'admin_controller/index';

//when click sign up button than go back login page
$route['login'] = 'admin_controller/sign_up';

//add student info
$route['add-student'] = 'admin_controller/add_student';


//database data delete
$route['delete'] = 'admin_controller/delete';

//database data update
$route['update'] = 'admin_controller/update';


//Second page link here all source
$route['course-details'] = 'admin_controller/course_details';

//add course
$route['add-course'] = 'admin_controller/add_course';