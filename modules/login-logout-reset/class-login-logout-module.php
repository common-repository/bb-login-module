<?php
/**
 *
 * This class extends Beave Builder modules class.
 */
class Login_Logout_Module_for_BB extends FLBuilderModule {

	public function __construct() {
		parent::__construct(
			array(
				'name'            => esc_html__( 'Login Modal', 'login-module-for-bb' ),
				'description'     => esc_html__( 'User Login Popup Button.', 'login-module-for-bb' ),
				'category'        => esc_html__( 'User', 'login-module-for-bb' ),
				'dir'             => Login_Module_for_BB_DIR . 'modules/login-logout-reset/',
				'url'             => Login_Module_for_BB_DIR . 'modules/login-logout-reset/',
				'enabled'         => true,
				'partial_refresh' => true,

			)
		);
	}
}

FLBuilder::register_module(
	'Login_Logout_Module_for_BB',
	array(
		'general-tab' => array(
			'title'    => esc_html__( 'General', 'login-module-for-bb' ),
			'sections' => array(
				'source-section' => array(
					'title'  => esc_html__( 'Source', 'login-module-for-bb' ),
					'fields' => array(


						'login_button_text'   => array(
							'type'        => 'text',
							'label'       => esc_html__( 'Log In Button Text', 'login-module-for-bb' ),
							'default'     => esc_html__( 'Log In', 'login-module-for-bb' ),
							'help'        => esc_html__( 'Enter the text for the Log In button.', 'login-module-for-bb' ),
							'connections' => array( 'string' ),
						),
						'logout_button_text'  => array(
							'type'        => 'text',
							'label'       => esc_html__( 'Log Out Button Text', 'login-module-for-bb' ),
							'default'     => esc_html__( 'Log Out', 'login-module-for-bb' ),
							'help'        => esc_html__( 'Enter the text for the Log Out button.', 'login-module-for-bb' ),
							'connections' => array( 'string' ),
						),
						'cm_modal_title'      => array(
							'type'        => 'text',
							'label'       => esc_html__( 'Popup Title', 'login-module-for-bb' ),
							'default'     => esc_html__( 'Log In', 'login-module-for-bb' ),
							'help'        => esc_html__( 'Enter the text for the header in the Log In popup.', 'login-module-for-bb' ),
							'connections' => array( 'string' ),
						),
						'cm_popup_reset_text' => array(
							'type'        => 'text',
							'label'       => esc_html__( 'Popup Reset Password Text', 'login-module-for-bb' ),
							'default'     => esc_html__( 'Lost your password? Click here to reset.', 'login-module-for-bb' ),
							'help'        => esc_html__( 'Enter the text for the Reset Password link in the Log In popup.', 'login-module-for-bb' ),
							'connections' => array( 'string' ),
						),

					),
				),
			),
		), /*end first tab*/
		'style-tab'   => array(
			'title'    => esc_html__( 'Style', 'login-module-for-bb' ),
			'sections' => array(
				'source-section' => array(
					'title'  => esc_html__( 'Sign In Popup', 'login-module-for-bb' ),
					'fields' => array(

						'idb_login_modal_bgcolor'   => array(
							'type'       => 'color',
							'label'      => esc_html__( 'Popup Background Color', 'login-module-for-bb' ),
							'default'    => 'd8d8d8',
							'show_reset' => true,
							'show_alpha' => true,
							'preview'    => array(
								'type'     => 'css',
								'selector' => '.modal-content',
								'property' => 'background-color',
							),
						),
						'idb_login_popup_textcolor' => array(
							'type'       => 'color',
							'label'      => esc_html__( 'Popup Text Color', 'login-module-for-bb' ),
							'default'    => '444444',
							'show_reset' => true,
							'show_alpha' => true,
							'preview'    => array(
								'type'     => 'css',
								'selector' => '.modal-content',
								'property' => 'color',
							),
						),

					),
				),
				'button-section' => array(
					'title'  => esc_html__( 'Button', 'login-module-for-bb' ),
					'fields' => array(

						'feu_button_bgcolor'            => array(
							'type'       => 'color',
							'label'      => esc_html__( 'Log In Button Color', 'login-module-for-bb' ),
							'default'    => '55599c',
							'show_reset' => true,
							'show_alpha' => true,
							'preview'    => array(
								'type'     => 'css',
								'selector' => 'a.idb_login_button',
								'property' => 'background-color',
							),
						),
						'feu_button_textcolor'          => array(
							'type'       => 'color',
							'label'      => esc_html__( 'Button Text Color', 'login-module-for-bb' ),
							'default'    => 'ffffff',
							'show_reset' => true,
							'show_alpha' => true,
							'preview'    => array(
								'type'     => 'css',
								'selector' => 'a.idb_login_button',
								'property' => 'color',
							),
						),
						'feu_so_button_bgcolor'         => array(
							'type'       => 'color',
							'label'      => esc_html__( 'Log Out Button Color', 'login-module-for-bb' ),
							'default'    => '990000',
							'show_reset' => true,
							'show_alpha' => true,
							'preview'    => array(
								'type'     => 'css',
								'selector' => 'a.idb_logout_button',
								'property' => 'background-color',
							),
						),
						'feu_so_button_textcolor'       => array(
							'type'       => 'color',
							'label'      => esc_html__( 'Button Text Color', 'login-module-for-bb' ),
							'default'    => 'ffffff',
							'show_reset' => true,
							'show_alpha' => true,
							'preview'    => array(
								'type'     => 'css',
								'selector' => 'a.idb_logout_button',
								'property' => 'color',
							),
						),

						'feu_so_popup_button_bgcolor'   => array(
							'type'       => 'color',
							'label'      => esc_html__( 'Popup Log In Button Color', 'login-module-for-bb' ),
							'default'    => '1c52bf',
							'show_reset' => true,
							'show_alpha' => true,
							'preview'    => array(
								'type'     => 'css',
								'selector' => '#idb-login-form [type=submit]',
								'property' => 'background-color',
							),
						),
						'feu_so_popup_button_textcolor' => array(
							'type'       => 'color',
							'label'      => esc_html__( 'Button Text Color', 'login-module-for-bb' ),
							'default'    => 'ffffff',
							'show_reset' => true,
							'show_alpha' => true,
							'preview'    => array(
								'type'     => 'css',
								'selector' => '#idb-login-form [type=submit]',
								'property' => 'color',
							),
						),


					),

				),

			),
		),

	)
);



