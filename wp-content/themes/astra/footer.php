<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
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
<?php astra_content_bottom(); ?>
	</div> <!-- ast-container -->
	</div><!-- #content -->
<?php 
	astra_content_after();
		
	astra_footer_before();
		
	astra_footer();
		
	astra_footer_after(); 
?>
	</div><!-- #page -->
<?php 
	astra_body_bottom();    
	wp_footer(); 
?>
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
<script>

$(document).ready(function() {

  $("#lead-form").submit(function(e) {

    e.preventDefault();

    let data = $(this).serializeArray();


    $.ajax({
      url: "https://migration.pabau.me/OAuth2/leads/lead-curl.php",
      type: "POST", 
      data: data,
	  redirect_link: "index.php",
      headers: {
        "Authorization": "Bearer MTIzMDka02efd5b36cb3a55fccc71d09e036a31" 
      },
      success: function(response) {
        console.log(response);
        alert("Lead created successfully!");
      },
      error: function(error) {

        console.log(error);
        alert("Something went wrong!");
      }
    });
  });
});
</script> -->
<!-- <script>

document.addEventListener("DOMContentLoaded", function() {

  let form = document.getElementById("lead-form");

  form.addEventListener("submit", function(event) {

    event.preventDefault();

    let xhr = new XMLHttpRequest();

    let data = new FormData(form);

    let url = "https://migration.pabau.me/OAuth2/leads/lead-curl.php"; 
    let method = "POST";
     
   
    xhr.open(method, url);
    
    xhr.setRequestHeader("Authorization", "Bearer MTIzMDka02efd5b36cb3a55fccc71d09e036a31"); 
    
    xhr.onload = function() {
     
      if (xhr.status == 200) {
       
        console.log(xhr.responseText);
        alert("Lead created successfully!");
      } else {
        
        console.log(xhr.responseText);
        alert("Something went wrong!");
      }
    };
    
    xhr.send(data);
  });
});
</script> -->


	</body>
</html>
