<?php
include(get_stylesheet_directory() . '/inc/helpers/MailChimp.php');
use \DrewM\MailChimp\MailChimp;

add_action('wp_ajax_nopriv_prescript_subscribe', 'prescript_subscribe_function');
add_action('wp_ajax_prescript_subscribe', 'prescript_subscribe_function');

function prescript_subscribe_function() {
  $response = array(
    'user' => false,
    'mailchimp' => false,
    'error' => []
  );
  $first = $_REQUEST['first'];
  $last = $_REQUEST['last'];
  $email = $_REQUEST['email'];

  if ( email_exists($email) == false ) {
    $random_password = wp_generate_password( $length=12, $include_standard_special_chars=false );
    $userdata = array(
      'user_login'  =>  $email,
      'user_email' => $email,
      'user_pass' => $random_password,
      'first_name' => $first,
      'last_name' => $last
    );
    $user_id = wp_insert_user($userdata);

    if ( !is_wp_error($user_id) ) {
      $response['user'] = $user_id;
      $api_key = '0e742fc97e825e779b9791c17da157f8-us17';
      $list_id = '99a90b8b05';
      $MailChimp = new MailChimp($api_key);
      $mailchimp_data = [
          'email_address' => $email,
          'merge_fields'  => ['FNAME'=>$first, 'LNAME'=>$last],
          'status'        => 'subscribed',
      ];
      $result = $MailChimp->post("lists/$list_id/members", $mailchimp_data);
      if ($MailChimp->success()) {
        $response['mailchimp'] = true;
      } else {
        $response['error']['mailchimp'] = $MailChimp->getLastError();
      }
    } else {
      $response['error']['user'] = $user_id->get_error_message();;
    }
  } else {
    $response['error']['user'] = 'You are already subscribed!';
  }

  echo json_encode($response);
  die();
}
