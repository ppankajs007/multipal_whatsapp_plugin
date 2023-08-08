<div class="ace-app-container">
<form action="" method="post">
	<div class="ace-app-title-bar" >
		<div class="ace-app-title-content" >
			<div class="ace-app-title-menu" id="ace-app-menu1"><i class="fab fa-whatsapp fa-2x" style="color: white;"></i>&nbsp<span><?php _e('Whatsapp Chat'); ?></span></div>
		    <div class="ace-app-title-menu" id="ace-app-menu5" ><a target="_blank" href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=DJW5VNZ7P4ZH2&source=url">You Liked It ? Donation </a><i class="fab fa-paypal fa-2x"></i></div>
		</div>
	</div>
			<!-- start msg field -->
			<div class="ace-whatsapp ace-position-msg">
				<div class="ace-whatsapp-content ace-whatsapp-msg-content position-left">
					<h1> <?php _e('Message to start Chat', 'ace_whatsapp_chat_wp'); ?></h1>
					<h3> <?php _e('Pre-filled message that will automatically appear in the text field of a Chat. Example:', 'ace_whatsapp_chat_wp'); ?><br><br>
						&nbsp<mark><?php _e('Hello! I am interested in your service', 'ace_whatsapp_chat_wp'); ?></mark>&nbsp </h3>
				</div>
				<div class="ace-whatsapp-content ace-whatsapp-msg-field position-right">
						<input type="text" name="whatsapp_start_chat" value="<?php  echo  $get_setting_value['whatsapp_start_chat']; ?>">
				</div>
			</div>

			<!-- Button text field -->
			<div class="ace-whatsapp">
				<div class="ace-whatsapp-content ace-whatsapp-btn-content position-left">
					<h1> <?php _e('Edit text on Widget', 'ace_whatsapp_chat_wp'); ?> </h1>
					<h3> <?php _e('Customize your WhatsApp Chat Widget text. Example:', 'ace_whatsapp_chat_wp'); ?>
						&nbsp<mark><?php _e('ACEWEBX Live Support','ace_whatsapp_chat_wp'); ?></mark>&nbsp </h3>
				</div>
				<div class="ace-whatsapp-content ace-whatsapp-btn-field position-right">
						<input type="text" name="whatsapp_content" value="<?php echo $get_setting_value['whatsapp_content']; ?>">
				</div>
			</div>

			<!-- Button background color field -->
			<div class="ace-whatsapp">
				<div class="ace-whatsapp-content ace-whatsapp-bgbtncolor position-left">
					<h1> <?php _e('Button Color', 'ace_whatsapp_chat_wp'); ?> </h1>
					<h3> <?php _e('Customize your WhatsApp Chat', 'ace_whatsapp_chat_wp'); ?>&nbsp<mark><?php _e('button background color.', 'ace_whatsapp_chat_wp'); ?> </mark>&nbsp</h3>
				</div>
				<div class="ace-whatsapp-content ace-whatsapp-bgbtncolor-field position-right">
						<input type="color" name="whatsapp_btn_color" value="<?php echo $get_setting_value['ace_whatsapp_btn_color']; ?>">
				</div>
			</div>

			<!-- Button Text color field -->
			<div class="ace-whatsapp">
				<div class="ace-whatsapp-content ace-whatsapp-txtbtncolor position-left">
					<h1> <?php _e('Button Text Color', 'ace_whatsapp_chat_wp'); ?> </h1>
					<h3> <?php _e('Customize your WhatsApp Chat button', 'ace_whatsapp_chat_wp'); ?>&nbsp<mark><?php _e('text color', 'ace_whatsapp_chat_wp'); ?> </mark>&nbsp</h3>
				</div>
				<div class="ace-whatsapp-content ace-whatsapp-txtbtncolor-field position-right">
						<input type="color" name="whatsapp_txtbtn_color" value="<?php echo $get_setting_value['ace_whatsapp_txtbtn_color']; ?>">
				</div>
			</div>
			<!-- Button hidden on destop -->
			<div class="ace-whatsapp">
				 <div class="ace-whatsapp-content ace-whatsapp-hide-btn-bar position-left">
					<h1><?php _e('Hide button', 'ace_whatsapp_chat_wp'); ?></h1>
					<h3> <?php _e('Turn on to', 'ace_whatsapp_chat_wp'); ?>&nbsp<mark><?php _e('hide WhatsApp Chat', 'ace_whatsapp_chat_wp'); ?> </mark>
				</div>
				<div class="ace-whatsapp-content ace-whatsapp-hide-btn-onoff position-right">
				  <label class="ace-whatsapp-switch">
				  <input type="checkbox" name="wp_hidden_button" value="1" <?php (isset($hiden_btn_check)) ? _e($hiden_btn_check): '';?> >
				  <span class="ace-whatsapp-slider round"></span>
			 	  </label>
			 	</div>
		 	</div>

			<!-- Home page button show -->
			<div class="ace-whatsapp" id="ace-display-home">
				 <div class="ace-whatsapp-content ace-whatsapp-home-page position-left">
					<h1><?php _e('Display Only Home Page', 'ace_whatsapp_chat_wp'); ?></h1>
					<h3> <?php _e('Turn on to display', 'ace_whatsapp_chat_wp'); ?>&nbsp<mark><?php _e('only home page', 'ace_whatsapp_chat_wp'); ?> </mark>&nbsp<?php _e('from your website.', 'ace_whatsapp_chat_wp'); ?></h3>
				</div>
				<div class="ace-whatsapp-content ace-whatsapp-home-onoff position-right">
				  <label class="ace-whatsapp-switch">
				  <input type="checkbox" name="wp_display_home" value="1" <?php (isset($display_home)) ? _e($display_home): ''; ?> >
				  <span class="ace-whatsapp-slider round"></span>
			 	  </label>
			 	</div>
		 	</div>

		 	<!-- mobile display -->
			<div class="ace-whatsapp" id="ace-mobile-app">
				 <div class="ace-whatsapp-content ace-whatsapp-mobile position-left">
					<h1><?php _e('Mobile Display', 'ace_whatsapp_chat_wp'); ?></h1>
					<h3> <?php _e('Turn on to keep visible for', 'ace_whatsapp_chat_wp'); ?>&nbsp<mark><?php _e('mobile display', 'ace_whatsapp_chat_wp'); ?> </mark>&nbsp<?php _e('only', 'ace_whatsapp_chat_wp'); ?></h3>
				</div>
				<div class="ace-whatsapp-content ace-whatsapp-mobile-onoff position-right">
				  <label class="ace-whatsapp-switch">
				  <input type="checkbox" name="wp_mobile_display" value="1" <?php (isset($mobile_display)) ? _e($mobile_display): '';?> >
				  <span class="ace-whatsapp-slider round"></span>
			 	  </label>
			 	</div>
		 	</div>

		 	<!-- woocommerce indigater -->
		 	<div class="ace-whatsapp">
				 <div class="ace-whatsapp-content ace-whatsapp-woocom position-left">
					<h1><?php _e('WooCommerce', 'ace_whatsapp_chat_wp'); ?></h1>
					<h3> <?php _e('Turn on to your', 'ace_whatsapp_chat_wp'); ?>&nbsp<mark><?php _e('WooCommerce Product', 'ace_whatsapp_chat_wp'); ?> </mark>&nbsp<?php _e('chat facility', 'ace_whatsapp_chat_wp'); ?></h3> 
				</div>
				<div class="ace-whatsapp-content ace-whatsapp-woocom-onoff position-right">
				  <label class="ace-whatsapp-switch">
				  <input type="checkbox" name="wp_woocom_button" value="1" <?php (isset($woocom_btn_check)) ? _e($woocom_btn_check): ''; ?> >
				  <span class="ace-whatsapp-slider round"></span>
			 	  </label>
			 	</div>
		 	</div>

		 	<div class="ace-whatsappp">
				<div class="ace-whatsapp-chat-save">
					<input type="submit" name="ace_chat_setting_save" value="<?php _e('Save', 'ace_whatsapp_chat_wp'); ?>" >
				</div>
			</div>
	</div>
</form>