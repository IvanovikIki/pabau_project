<?php
/**
 * The header for Astra Theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Astra
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>
<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

  $first_name = $_POST['fname'];
  $last_name = $_POST['lname'];
  $email = $_POST['email'];
  $mobile = $_POST['mobile'];
  $address = $_POST['address'];


  $data = [
	'api_key' => 'MTIzMDka02efd5b36cb3a55fccc71d09e036a31',
    'first_name' => $first_name,
    'last_name' => $last_name,
    'email' => $email,
    'mobile' => $mobile,
	'address' => $address
  ];
	

  $data_json = json_encode($data);

  $url = "https://migration.pabau.com/OAuth2/leads/lead-curl.php";
  $key = "MTIzMDka02efd5b36cb3a55fccc71d09e036a31";
  $ch = curl_init($url);
  curl_setopt($ch, CURLOPT_POST, true);
  curl_setopt($ch, CURLOPT_POSTFIELDS, $data_json);
  curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    "Content-Type: application/json",
    "Authorization: Bearer MTIzMDka02efd5b36cb3a55fccc71d09e036a31"
  )); 
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 


  $response = curl_exec($ch);

  curl_close($ch);
	
	$response_array =[];
    $response_array['status_code'] = '';
	
 if(!empty(json_decode($response, true))){
	    $response_array =  json_decode($response, true);
  };

  if ($response_array['status_code'] == "200") {
   
    echo "<p>Lead created successfully!</p>";
    echo "<p>Response: {$response}</p>";
  } else {
   
    echo "<p>Something went wrong!</p>";
    echo "<p>Response: {$response}</p>";
  }
}

?>

<!DOCTYPE html>
<?php astra_html_before(); ?>
<html <?php language_attributes(); ?>>
<head>
<?php astra_head_top(); ?>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php 
if ( apply_filters( 'astra_header_profile_gmpg_link', true ) ) {
	?>
	 <link rel="profile" href="https://gmpg.org/xfn/11"> 
	 <?php
} 
?>
<?php wp_head(); ?>
<?php astra_head_bottom(); ?>
</head>

<body <?php astra_schema_body(); ?> <?php body_class(); ?>>
<?php astra_body_top(); ?>
<?php wp_body_open(); ?>

<a
	class="skip-link screen-reader-text"
	href="#content"
	role="link"
	title="<?php echo esc_attr( astra_default_strings( 'string-header-skip-link', false ) ); ?>">
		<?php echo esc_html( astra_default_strings( 'string-header-skip-link', false ) ); ?>
</a>

<div
<?php
	echo astra_attr(
		'site',
		array(
			'id'    => 'page',
			'class' => 'hfeed site',
		)
	);
	?>
>
	<?php
	astra_header_before();

	astra_header();

	astra_header_after();

	astra_content_before();
	?>
	<div id="content" class="site-content">
		<div class="ast-container">
		<?php astra_content_top(); ?>


