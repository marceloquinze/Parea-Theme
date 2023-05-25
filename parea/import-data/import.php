<?php

function parea_import_files() {
  return array(
    array(
      'import_file_name'             => 'Import Parea Content and Settings',
      'local_import_file'            => trailingslashit( get_template_directory() ) . 'import-data/parea-demo-content.xml',
      'local_import_widget_file'     => trailingslashit( get_template_directory() ) . 'import-data/parea-widgets.wie',
      'local_import_customizer_file' => trailingslashit( get_template_directory() ) . 'import-data/parea-customizer.dat',
    ),
  );
}
add_filter( 'pt-ocdi/import_files', 'parea_import_files' );

function parea_after_import_setup() {
    // Assign menus to their locations.
    $main_menu = get_term_by( 'name', 'Menu Principal', 'nav_menu' );
    $secondary_menu = get_term_by( 'slug', 'Menu Rodapé', 'nav_menu' );
    set_theme_mod( 'nav_menu_locations', array(
      'parea_main_menu' => $main_menu->term_id,
      'parea_footer_menu' => $secondary_menu->term_id,
        )
    );

    // Assign front page and posts page (blog page).
    $front_page_id = get_page_by_title( 'Home' );
    $blog_page_id  = get_page_by_title( 'Blog' );

    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $front_page_id->ID );
    update_option( 'page_for_posts', $blog_page_id->ID );

}
add_action( 'pt-ocdi/after_import', 'parea_after_import_setup' );