<?php

/**
 * Login Logout Reset Module
 *
 * $module An instance of your module class.
 * $settings The module's settings.
 */
?>

<?php if ( is_user_logged_in() ) { ?>

	<a class="idb_logout_button" href="<?php echo esc_url( wp_logout_url( home_url() ) ); ?>"><?php esc_html_e( $settings->logout_button_text, 'login-module-for-bb' ); ?></a>
<?php } else { ?>

	<a class="idb_login_button" id="show_login_hero" href="javascript:void(0);" href="" data-toggle="modal" data-backdrop="false" data-target="#IdbFrontendLoginModal"><?php esc_html_e( $settings->logout_button_text, 'login-module-for-bb' ); ?></a>

		

 <div class="modal idb-fade" style="display:none;" id="IdbFrontendLoginModal" tabindex="-1" role="dialog" aria-labelledby="IdbFrontendLoginModalTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
	<div class="login-modal-content">
		
	  <div class="idb-modal-header">
		<h5 class="idb-modal-title" id="IdbFrontendLoginModalTitle" style="font-size: 30px; margin: 0;"><?php esc_html_e( $settings->cm_modal_title, 'login-module-for-bb' ); ?></h5>
		<button type="button" class="close close-btn-loginhero" data-dismiss="modal" aria-label="Close">
		  <span aria-hidden="true">&times;</span>
		</button>
	  </div>
	  <div class="idb-modal-body">	
		
	<section id="idb-login-form">
		
		<?php echo wp_login_form(); ?>
		
	</section><!-- content -->
	<a class="idb_reset_login_button" id="show_login" style='' href='wp-login.php?action=lostpassword'><?php esc_html_e( $settings->cm_popup_reset_text, 'login-module-for-bb' ); ?></a>
		  </div>

	</div>
  </div>
</div>

<?php } ?>

<script> 
jQuery(".close-btn-loginhero").click(function(){
  jQuery("#IdbFrontendLoginModal").hide();
});

jQuery("#show_login_hero").click(function(){
  jQuery("#IdbFrontendLoginModal").show();
});
</script>
