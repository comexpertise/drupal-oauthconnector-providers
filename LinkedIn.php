<?php
/*
 * @see http://developer.linkedin.com/documents/authentication
 * @see https://developer.linkedin.com/documents/quick-start-guide
 * Configure your app here: https://www.linkedin.com/secure/developer
 */
 
$provider = new stdClass();
$provider->disabled = FALSE; /* Edit this to true to make a default provider disabled initially */
$provider->api_version = 1;
$provider->name = 'linkedin';
$provider->title = 'LinkedIn';
$provider->url = 'https://api.linkedin.com';
$provider->consumer_advanced = array(
  'oauth2' => 0,
  'signature method' => 'HMAC-SHA1',
  'authentication realm' => '',
  'request token endpoint' => '/uas/oauth/requestToken',
  'authorization scope' => '',
  'authorization endpoint' => '/uas/oauth/authenticate',
  'access token endpoint' => '/uas/oauth/accessToken',
);
$provider->mapping = array(
  'fields' => array(
    'uid' => array(
      'resource' => 'https://api.linkedin.com/v1/people/~:(id,email-address,first-name,last-name,picture-url)',
      'method post' => 0,
      'field' => 'id',
      'querypath' => FALSE,
      'sync_with_field' => '',
    ),
    'email' => array(
      'resource' => 'https://api.linkedin.com/v1/people/~:(id,email-address,first-name,last-name,picture-url)',
      'method post' => 0,
      'field' => 'email-address',
      'querypath' => FALSE,
      'sync_with_field' => 'mail',
    ),
    'name' => array(
      'resource' => 'https://api.linkedin.com/v1/people/~:(id,email-address,first-name,last-name,picture-url)',
      'method post' => 0,
      'field' => 'first-name',
      'querypath' => FALSE,
      'sync_with_field' => 'name',
    ),
    'avatar' => array(
      'resource' => 'https://api.linkedin.com/v1/people/~:(id,email-address,first-name,last-name,picture-url)',
      'method post' => 0,
      'field' => 'picture-url',
      'querypath' => FALSE,
      'sync_with_field' => '',
    ),
  ),
  'format' => 'xml',
);
