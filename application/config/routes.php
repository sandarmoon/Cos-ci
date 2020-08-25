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
|	https://codeigniter.com/user_guide/general/routing.html
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
$route['default_controller'] = 'FrontEndCtrl';
$route['doc'] = 'welcome';
$route['dashboard'] = 'BackendCtrl';


//category routes
$route['category'] = 'backend/CategoryCtrl';
$route['category/create'] = 'backend/CategoryCtrl/create';
$route['category/store'] = 'backend/CategoryCtrl/store';
$route['category/edit/:num'] = 'backend/CategoryCtrl/edit';
$route['category/update'] = 'backend/CategoryCtrl/update';
$route['category/delete/:num'] = 'backend/CategoryCtrl/delete';

//brand routes
$route['brand'] = 'backend/BrandCtrl';
$route['brand/create'] = 'backend/BrandCtrl/create';
$route['brand/store'] = 'backend/BrandCtrl/store';
$route['brand/edit/:num'] = 'backend/BrandCtrl/edit';
$route['brand/update'] = 'backend/BrandCtrl/update';
$route['brand/delete/:num'] = 'backend/BrandCtrl/delete';


// $route['404_override'] = '';

// $route['translate_uri_dashes'] = FALSE;

// $route['hello']='HelloCtrl/index';

// $route['suggest']='SuggestCtrl/index';

// $route['suggest/create']='SuggestCtrl/create';

// $route['suggest/store']='SuggestCtrl/store';

// $route['suggest/delete/:num']='SuggestCtrl/delete';

// $route['suggest/edit/:num']='SuggestCtrl/edit';

// $route['suggest/update']='SuggestCtrl/update';

// $route['suggest/detail/:num']='SuggestCtrl/detail';












