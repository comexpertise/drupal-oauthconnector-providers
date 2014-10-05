/*
 * @see https://api.stackexchange.com/docs/me
 * @see https://api.stackexchange.com/docs/types/user
 * Configure your app here: http://stackapps.com/apps/oauth
 */
 
$provider = new stdClass();
$provider->disabled = FALSE; /* Edit this to true to make a default provider disabled initially */
$provider->api_version = 1;
$provider->name = 'stack_exchange';
$provider->title = 'Stack Exchange';
$provider->url = 'https://stackexchange.com';
$provider->consumer_advanced = array(
  'oauth2' => 1,
  'signature method' => 'HMAC-SHA1',
  'authentication realm' => '',
  'request token endpoint' => '/oauth/request_token',
  'authorization scope' => '',
  'authorization endpoint' => '/oauth/dialog',
  'access token endpoint' => '/oauth/dialog/access_token',
);
$provider->mapping = array(
  'fields' => array(
    'uid' => array(
      'resource' => 'https://api.stackexchange.com/2.2/me',
      'method post' => 0,
      'field' => 'account_id',
      'querypath' => FALSE,
      'sync_with_field' => '',
    ),
    'email' => array(
      'resource' => '',
      'method post' => 0,
      'field' => '',
      'querypath' => FALSE,
      'sync_with_field' => '',
    ),
    'name' => array(
      'resource' => 'https://api.stackexchange.com/2.2/me',
      'method post' => 0,
      'field' => 'display_name',
      'querypath' => FALSE,
      'sync_with_field' => 'name',
    ),
    'avatar' => array(
      'resource' => '',
      'method post' => 0,
      'field' => '',
      'querypath' => FALSE,
      'sync_with_field' => '',
    ),
  ),
  'format' => 'json',
);
