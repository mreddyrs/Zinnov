<?php
/**
 * Initialize the custom Theme Options.
 */
add_action( 'init', 'custom_theme_options' );

/**
 * Build the custom settings & update OptionTree.
 *
 * @return    void
 * @since     2.0
 */
function custom_theme_options() {

  /* OptionTree is not loaded yet, or this is not an admin request */
  if ( ! function_exists( 'ot_settings_id' ) || ! is_admin() )
    return false;

  /**
   * Get a copy of the saved settings array. 
   */
  $saved_settings = get_option( ot_settings_id(), array() );
  
  /**
   * Custom settings array that will eventually be 
   * passes to the OptionTree Settings API Class.
   */
  $custom_settings = array( 
    'contextual_help' => array( 
      'content'       => array( 
        array(
          'id'        => 'option_types_help',
          'title'     => __( 'Option Types', 'zinnov' ),
          'content'   => '<p>' . __( 'Help content goes here!', 'zinnov' ) . '</p>'
        )
      ),
      'sidebar'       => '<p>' . __( 'Sidebar content goes here!', 'zinnov' ) . '</p>'
    ),
	
	//Option Section
	
    'sections'        => array( 
	
	/*Header*/
     /* array(
        'id'          => 'header',
        'title'       => __( 'Header Section', 'zinnov' ),
      ),
	  
    		array(
    				'id'          => 'blogs',
    				'title'       => __( 'Bolgs Settings', 'zinnov' ),
    		),
      
	  
      array(
        'id'          => 'footer',
        'title'       => __( 'Footer Section', 'zinnov' ),
      ),
      
      */
    		
    ),
	
	//Option Settings
	
    'settings'        => array( 
	
	
		  
	  //main logo
	  
   
      	
      	
    
      	  )
      	  
      	  
      	 
    
    
  );
  
  
   	
  
  
  /* allow settings to be filtered before saving */
  $custom_settings = apply_filters( ot_settings_id() . '_args', $custom_settings );
  
  /* settings are not the same update the DB */
  if ( $saved_settings !== $custom_settings ) {
    update_option( ot_settings_id(), $custom_settings ); 
  }
  
  /* Lets OptionTree know the UI Builder is being overridden */
  global $ot_has_custom_theme_options;
  $ot_has_custom_theme_options = true;
  
}