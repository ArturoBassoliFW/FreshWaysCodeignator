<?php
function set_active_menu($current_url)
{
  $menu_items = ["home", "about", "products", "contact"];
  foreach ($menu_items as $item) {
    if ($current_url == base_url() . $item) {
      // Update the class attribute of the menu item
      $item_class = "active";
    }
  }
}
