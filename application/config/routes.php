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

// website


$route['checkout'] = 'home/checkout';
$route['default_controller'] = 'home';








// admin
$route['logout'] = 'supper_admin/logout';
$route['admin'] = 'admin/index';
$route['login-check'] = 'admin/admin_login_check';
$route['dashboard'] = 'supper_admin/index';

$route['add-category'] = 'supper_admin/add_category';
$route['save-category'] = 'supper_admin/save_category';
$route['manage-category'] = 'supper_admin/manage_category';
$route['unpublish-category/(.+)'] = 'supper_admin/unpublish_category/$1';
$route['publish-category/(.+)'] = 'supper_admin/publish_category/$1';
$route['delete-category/(.+)'] = 'supper_admin/delete_category/$1';
$route['edit-category/(.+)'] = 'supper_admin/edit_category/$1';
$route['update-category'] = 'supper_admin/update_category';

$route['add-manufacture'] = 'supper_admin/add_manufacture';
$route['save-manufacture'] = 'supper_admin/save_manufacture';
$route['manage-manufacture'] = 'supper_admin/manage_manufacture';
$route['unpublish-manufacture/(.+)'] = 'supper_admin/unpublish_manufacture/$1';
$route['publish-manufacture/(.+)'] = 'supper_admin/publish_manufacture/$1';
$route['delete-manufacture/(.+)'] = 'supper_admin/delete_manufacture/$1';
$route['edit-manufacture/(.+)'] = 'supper_admin/edit_manufacture/$1';
$route['update-manufacture'] = 'supper_admin/update_manufacture';


$route['add-product'] = 'supper_admin/add_product';
$route['save-product'] = 'supper_admin/save_product';
$route['manage-product'] = 'supper_admin/manage_product';
$route['unpublish-product/(.+)'] = 'supper_admin/unpublish_product/$1';
$route['publish-product/(.+)'] = 'supper_admin/publish_product/$1';
$route['edit-product/(.+)'] = 'supper_admin/edit_product/$1';
$route['update-product'] = 'supper_admin/update_product';



$route['manage-invoice'] = 'invoice/manage_invoice';
















$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
