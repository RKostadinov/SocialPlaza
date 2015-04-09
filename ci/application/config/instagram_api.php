<?php

$config['instagram_client_name']	= 'SocialPlaza';
$config['instagram_client_id']		= '139f4c82603643519941e15eb3e026ea';
$config['instagram_client_secret']	= '471bc0a7a75b4a46ba704d6834ef0d60';
$config['instagram_callback_url']	= 'http://socialplaza.info/ci/Authorize/get_code';
$config['instagram_website']		= 'http://socialplaza.info';
$config['instagram_description']	= '';
	
/**
 * Instagram provides the following scope permissions which can be combined as likes+comments
 * 
 * basic - to read any and all data related to a user (e.g. following/followed-by lists, photos, etc.) (granted by default)
 * comments - to create or delete comments on a user’s behalf
 * relationships - to follow and unfollow users on a user’s behalf
 * likes - to like and unlike items on a user’s behalf
 * 
 */
$config['instagram_scope'] = 'basic';

// There was issues with some servers not being able to retrieve the data through https
// If you have this problem set the following to FALSE 

$config['instagram_ssl_verify']		= TRUE;
