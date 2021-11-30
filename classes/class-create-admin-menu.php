<?php

/**
 * This file will create admin menu page.
 */

class WPRW_CREATE_ADMIN_PAGE
{
  public function __construct()
  {
    add_action('admin_menu', [$this, 'create_admin_menu']);
  }

  public function create_admin_menu()
  {
    $capability = 'manage_options';
    $slug = 'wprw_settings';

    add_menu_page(
      _('WP React WhatsApp'),
      _('WP React WhatsApp'),
      $capability,
      $slug,
      [$this, 'menu_page_template'],
      'dashicons-whatsapp'
    );
  }

  public function menu_page_template()
  {
    echo "<div class='wrap'> <div id='wprw-admin-app'>
    </div></div>";
  }
}

new WPRW_CREATE_ADMIN_PAGE();
