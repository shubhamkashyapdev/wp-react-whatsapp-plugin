<?php

class WP_REACT_SETTINGS_REST_ROUTE
{
  // enable the wordpress rest api
  public function __construct()
  {
    add_action(
      'rest_api_init',
      [$this, 'create_rest_routes']
    );
  }

  public function create_rest_routes()
  {
    register_rest_route('wprw/v1', '/settings', [
      'methods' => 'GET',
      'callback' => [$this, 'get_settings'],
      'permission_callback' => [$this, 'get_settings_permission']
    ]);
    register_rest_route('wprw/v1', '/settings', [
      'methods' => 'POST',
      'callback' => [$this, 'save_settings'],
      'permission_callback' => [$this, 'save_settings_permission']
    ]);
  }

  public function get_settings()
  {
    $response = [
      'firstname' => 'Brad',
      'lastname' => 'Traversy',
      'email' => 'brad@gmail.com'
    ];

    return rest_ensure_response($response);
  }

  public function get_settings_permission()
  {
    return true;
  }

  public function save_settings()
  {
  }

  public function save_settings_permission()
  {
  }
}

new WP_REACT_SETTINGS_REST_ROUTE();
