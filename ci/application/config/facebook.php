<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
$config['facebook_app_id'] = '928591323857638';
$config['facebook_api_secret'] = '21f79c35adf4e5fa3e7a8c1adf0a1fa6';
$config['facebook']['api_id'] = '928591323857638';
$config['facebook']['app_secret'] = '21f79c35adf4e5fa3e7a8c1adf0a1fa6';
$config['facebook']['redirect_url'] = 'http://localhost/ci/login/facebook';
$config['facebook']['permissions'] = array(
    'email',
    'user_location',
    'user_birthday'
);