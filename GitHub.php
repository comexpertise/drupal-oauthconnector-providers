<?php
/*
 * @see https://developer.github.com/v3/oauth/
 * @see https://developer.github.com/v3/users/
 * @see https://developer.github.com/v3/users/emails/
 * Configure your app here: https://github.com/settings/applications/new
 */
 
$provider = new stdClass();
$provider->disabled = FALSE; /* Edit this to true to make a default provider disabled initially */
$provider->api_version = 1;
$provider->name = 'github';
$provider->title = 'GitHub';
$provider->url = 'https://api.github.com';
$provider->consumer_advanced = array(
  'oauth2' => 1,
  'signature method' => 'HMAC-SHA1',
  'authentication realm' => '',
  'request token endpoint' => '/oauth/request_token',
  'authorization scope' => 'user',
  'authorization endpoint' => 'https://github.com/login/oauth/authorize',
  'access token endpoint' => 'https://github.com/login/oauth/access_token',
);
$provider->mapping = array(
  'fields' => array(
    'uid' => array(
      'resource' => 'https://api.github.com/user',
      'method post' => 0,
      'field' => 'id',
      'querypath' => FALSE,
      'sync_with_field' => '',
    ),
    'email' => array(
      'resource' => 'https://api.github.com/user/emails',
      'method post' => 0,
      'field' => '0.email',
      'querypath' => FALSE,
      'sync_with_field' => 'mail',
    ),
    'name' => array(
      'resource' => 'https://api.github.com/user',
      'method post' => 0,
      'field' => 'name',
      'querypath' => FALSE,
      'sync_with_field' => 'name',
    ),
    'avatar' => array(
      'resource' => 'https://api.github.com/user',
      'method post' => 0,
      'field' => 'avatar_url',
      'querypath' => FALSE,
      'sync_with_field' => '',
    ),
  ),
  'format' => 'json',
);
