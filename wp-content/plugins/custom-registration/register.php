<?php
/*
  Plugin Name: Custom Registration
  Description: Updates user rating based on number of posts.
  Version: 1.0
  Author: Sweta Parmar
 */

function registration_form( $email) {
    echo '
    <style>
      .error_msg {
        color:red;
      }
    </style>
    ';
    echo '
    <div class="footer-subscribe mt-3">
    <form class="row g-3" action="' . $_SERVER['REQUEST_URI'] . '" method="post">
    <div class="col-auto">
        <input type="email" class="form-control" name="email" id="exampleFormControlInput1" placeholder="name@example.com" value="' . ( isset( $_POST['email']) ? $email : null ) . '">
    </div>
    <div class="col-auto">
        <button type="submit" name="submit" class="btn btn-primary mb-3">Subscribe</button>
    </div>
    </form>
    </div>
    ';
}

global $reg_errors;
$reg_errors = new WP_Error;

function complete_registration() {
    global $reg_errors, $email, $wpdb;
    $tablename = $wpdb->prefix.'subscribe';

    if ( 1 > count( $reg_errors->get_error_messages() ) ) {
        $userdata = array('email'    =>   $email);
        /*$user = wp_insert_user( $userdata );*/
          $wpdb->insert( $tablename, $userdata);
        echo 'You Have Successfully Subscribed to the Newsletter.';   
    }
}

function custom_registration_function() {
  if ( isset($_POST['submit'] ) ) {
    registration_validation($_POST['email']);         
    // sanitize user form input
    global $email;
    $email  =  sanitize_email( $_POST['email'] ); 
    // call @function complete_registration to create the user
    // only when no WP_error is found
      complete_registration($email);
  }
  registration_form($email);
}

function registration_validation( $email )  {
  global $reg_errors;
  $reg_errors = new WP_Error;
  if ( empty( $email ) ) {
    $reg_errors->add('field', 'Please Add Email');
  }
  if ( !is_email( $email ) ) {
    $reg_errors->add( 'email_invalid', 'Email is not valid' );
  }
  if ( email_exists( $email ) ) {
    $reg_errors->add( 'email', 'Email Already in use' );
  } 
  if ( is_wp_error( $reg_errors ) ) {
    foreach ( $reg_errors->get_error_messages() as $error ) {
      echo '<div class="error_msg">';
      echo $error . '<br/>';
      echo '</div>';         
    }
  }
}

// Register a new shortcode: [cr_custom_registration]
add_shortcode( 'cr_custom_registration', 'custom_registration_shortcode' );
// The callback function that will replace [book]
function custom_registration_shortcode() {
    ob_start();
    custom_registration_function();
    return ob_get_clean();
}