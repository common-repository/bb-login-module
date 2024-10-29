.fl-node-<?php echo esc_attr( $id ); ?> {
	z-index:99999;
}
.idb_login_button {
	padding: 7px 30px;
	background:#<?php echo esc_attr( $settings->feu_button_bgcolor ); ?>;
	color:#<?php echo esc_attr( $settings->feu_button_textcolor ); ?> !important;
	border-radius: 5px;
	text-decoration: none !important;
}
.idb_logout_button {
	padding: 7px 30px;
	background:#<?php echo esc_attr( $settings->feu_so_button_bgcolor ); ?>;
	color:#<?php echo esc_attr( $settings->feu_so_button_textcolor ); ?> !important;
	border-radius: 5px;
	text-decoration: none !important;
}
.idb_reset_login_button {
	font-size: 14px;
	text-align: center;
	display: block;
	color:#<?php echo esc_attr( $settings->idb_login_popup_textcolor ); ?>;
}
#idb-login-form button {
	color: #eee;
	font-size: 2rem;
}
#idb-login-form {
	padding: 0 20px;
	margin: 20px 0 0 0;
	color:#<?php echo esc_attr( $settings->idb_login_popup_textcolor ); ?>;
}
#idb-login-form input {
	display: block;
	width: 100%;
	border: none;
	margin: 13px 0px 22px 0;
}
#idb-login-form [type=submit] {
	display: inline-block;
	font-weight: 400;
	background:#<?php echo esc_attr( $settings->feu_so_popup_button_bgcolor ); ?>;
	color:#<?php echo esc_attr( $settings->feu_so_popup_button_textcolor ); ?> !important;
	text-align: center;
	white-space: nowrap;
	-webkit-user-select: none;
	-moz-user-select: none;
	-ms-user-select: none;
	user-select: none;
	border: none;
	padding: .5rem 1rem;
	font-size: 1rem;
	border-radius: 3px;
	-webkit-transition: all .3s;
	-o-transition: all .3s;
	transition: all .3s;
	margin-bottom: 30px;
}

.login-modal-content {
	background:#<?php echo esc_attr( $settings->idb_login_modal_bgcolor ); ?>;
	position: relative;
	display: -ms-flexbox;
	display: flex;
	-ms-flex-direction: column;
	flex-direction: column;
	width: 100%;
	pointer-events: auto;
	background-clip: padding-box;
	border: 1px solid rgba(0, 0, 0, 0.2);
	border-radius: 0.3rem;
	outline: 0;
	color:#<?php echo esc_attr( $settings->idb_login_popup_textcolor ); ?>;
}
#idb-login-form label {
	font-size: 16px;
	display: flex;
	align-items: baseline;
}
#idb-login-form p {
	margin: 0;
}
p.login-remember label input {
	display: inline !important;
	max-width: 25px;
	vertical-align: middle;
}
#IdbFrontendLoginModalTitle {
  color:#<?php echo esc_attr( $settings->idb_login_popup_textcolor ); ?>;
}

.idb-fade {
	transition: opacity 1s linear;
}
#idb_wp-submit {
	width:unset !important;
	border-radius: 0 !important;
}


.close {
	float: right;
	font-size: 2rem;
	font-weight: 700;
	line-height: 1;
	padding: 0;
	background-color: transparent;
	border: none;
	-webkit-appearance: none;
	-moz-appearance: none;
	appearance: none;
}

.close:hover {
  text-decoration: none;
  background: transparent;
  background-color: transparent;
  border: none;
}

.close:not(:disabled):not(.disabled):hover, .close:not(:disabled):not(.disabled):focus {
  opacity: .75;
  background: transparent;
  background-color: transparent;
}

a.close.disabled {
  pointer-events: none;
}

/*MODAL POPUP*/

.modal-open {
  overflow: hidden;
}

.modal-open .modal {
  overflow-x: hidden;
  overflow-y: auto;
}

.modal {
  position: fixed;
  top: 0;
  left: 0;
  z-index: 1050;
  width: 100%;
  height: 100%;
  overflow: hidden;
  outline: 0;
}

.modal-dialog {
  position: relative;
  width: auto;
  margin: 0.5rem;
  pointer-events: none;
}

.modal.idb-fade .modal-dialog {
  transition: -webkit-transform 2s ease-out;
  transition: transform 2s ease-out;
  transition: transform 2s ease-out, -webkit-transform 2s ease-out;
  -webkit-transform: translate(0, -50px);
  transform: translate(0, -50px);
	-webkit-animation: fadeIn .4s linear forwards;
	animation: fadeIn .4s linear forwards;
}

@-webkit-keyframes fadeIn {
  0% { opacity: 0; }
  100% { opacity: 1; }
}

@keyframes fadeIn {
  0%{ opacity: 0; }
  100% { opacity: 1; }
}

@media (prefers-reduced-motion: reduce) {
  .modal.fade .modal-dialog {
	transition: none;
  }
}

.modal.show .modal-dialog {
  -webkit-transform: none;
  transform: none;
}

.modal-dialog-scrollable {
  display: -ms-flexbox;
  display: flex;
  max-height: calc(100% - 1rem);
}

.modal-dialog-scrollable .modal-content {
  max-height: calc(100vh - 1rem);
  overflow: hidden;
}

.modal-dialog-scrollable .modal-header,
.modal-dialog-scrollable .modal-footer {
  -ms-flex-negative: 0;
  flex-shrink: 0;
}

.modal-dialog-scrollable .modal-body {
  overflow-y: auto;
}

.modal-dialog-centered {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-align: center;
  align-items: center;
  min-height: calc(100% - 1rem);
}

.modal-dialog-centered::before {
  display: block;
  height: calc(100vh - 1rem);
  content: "";
}

.modal-dialog-centered.modal-dialog-scrollable {
  -ms-flex-direction: column;
  flex-direction: column;
  -ms-flex-pack: center;
  justify-content: center;
  height: 100%;
}

.modal-dialog-centered.modal-dialog-scrollable .modal-content {
  max-height: none;
}

.modal-dialog-centered.modal-dialog-scrollable::before {
  content: none;
}

.modal-content {
  position: relative;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-direction: column;
  flex-direction: column;
  width: 100%;
  pointer-events: auto;
  background-clip: padding-box;
  border: 1px solid rgba(0, 0, 0, 0.2);
  border-radius: 0.3rem;
  outline: 0;
}

.modal-backdrop {
  position: fixed;
  top: 0;
  left: 0;
  z-index: 1040;
  width: 100vw;
  height: 100vh;
  background-color: #000;
}

.modal-backdrop.idb-fade {
  opacity: 0;
}

.modal-backdrop.show {
  opacity: 0.5;
}

.idb-modal-header {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-align: start;
  -ms-flex-pack: justify;
  justify-content: space-between;
  padding: 1rem 1rem;
  border-bottom: 1px solid #dee2e6;
  border-top-left-radius: 0.3rem;
  border-top-right-radius: 0.3rem;
}
.idb-modal-header .close {
	padding: 1rem 1rem;
	margin: -1rem -1rem -1rem auto;
	font-size: 2em;
	color:#<?php echo esc_attr( $settings->idb_login_popup_textcolor ); ?>;
	background-color: transparent;
	border: none;
}
.idb-modal-header .close ::hover {
	background-color: none;
}

.idb-modal-title {
  margin-bottom: 0 !important;
  margin-left: 20px !important;
}

.idb-modal-body {
  position: relative;
  -ms-flex: 1 1 auto;
  flex: 1 1 auto;
  padding: 1rem;
}

.idb-modal-footer {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-align: center;
  align-items: center;
  -ms-flex-pack: end;
  justify-content: flex-end;
  padding: 1rem;
  border-top: 1px solid #dee2e6;
  border-bottom-right-radius: 0.3rem;
  border-bottom-left-radius: 0.3rem;
}

.idb-modal-footer > :not(:first-child) {
  margin-left: .25rem;
}

.idb-modal-footer > :not(:last-child) {
  margin-right: .25rem;
}

.modal-scrollbar-measure {
  position: absolute;
  top: -9999px;
  width: 50px;
  height: 50px;
  overflow: scroll;
}

@media (min-width: 576px) {
  .modal-dialog {
	max-width: 400px;
	margin: 1.75rem auto;
  }
  .modal-dialog-scrollable {
	max-height: calc(100% - 3.5rem);
  }
  .modal-dialog-scrollable .modal-content {
	max-height: calc(100vh - 3.5rem);
  }
  .modal-dialog-centered {
	min-height: calc(100% - 3.5rem);
  }
  .modal-dialog-centered::before {
	height: calc(100vh - 3.5rem);
  }
  .modal-sm {
	max-width: 300px;
  }
}





@media (min-width: 576px) {

.modal-dialog-centered::before {
	height: calc(100vh - 3.5rem);
}

.modal-dialog {
	max-width: 400px;
	margin: 1.75rem auto;
} }
