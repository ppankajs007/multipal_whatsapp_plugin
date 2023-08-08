<?php

/**
 * Provide a public-facing view for the plugin
 *
 * This file is used to markup the public-facing aspects of the plugin.
 *
 * @link       http://acewebx.com
 * @since      1.0.0
 *
 * @package    Ace_Wp_Whatsapp_Multiuser
 * @subpackage Ace_Wp_Whatsapp_Multiuser/public/partials
 */
global $product;
$gSetting = get_option( 'ace-whatsapp-setting-field-M' );
( $gSetting['whatsapp_content'] ) ? $wTitle = $gSetting['whatsapp_content']: '';
( $gSetting['ace_whatsapp_btn_color'] ) ? $bgcolor = $gSetting['ace_whatsapp_btn_color']: '';
( $gSetting['ace_whatsapp_txtbtn_color'] ) ? $color = $gSetting['ace_whatsapp_txtbtn_color']: '' ;

?>
<!-- <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet"> -->

<style type="text/css"> 

 .awc_mBox , .awc_mBox .fa-custom-c , .awc_closeChat 
 , .awc_tagLine , .awc_tagLine { background:<?php echo $bgcolor;  ?>; color:<?php echo $color; ?>; }

</style>

<link href="https://fonts.googleapis.com/css?family=Poppins:200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

<div class="awc_mBox">
    <i class="fab fa-whatsapp fa-custom-c" aria-hidden="true"></i>
    <div class="awc_tagLine">
        <i class="fab fa-whatsapp" aria-hidden="true"></i> <span><?php echo $wTitle; ?></span><br>
        <!-- <span class="sTag">or Send us email to info@acewebx.awc_com</span> -->
    </div>
    <div class="awc_mContent" id="ace_style-16" >

    	<?php

			$preTimeZ = get_option('gmt_offset');
		    $hours = ceil($preTimeZ);
			$newCTime = gmdate("H", strtotime('+'.$hours.' hours'));
			$cDay = gmdate("l", strtotime('+'.$hours.' hours'));

			$args = array( 'post_type' => 'ace_whatsapp_member', 'pst_per_page' => -1);
			$member_query = new WP_Query($args);
			if( $member_query->have_posts() ) {
				while ($member_query->have_posts()) : $member_query->the_post();
				 
				$get_cust_id = get_the_ID();
				$member_custom_field = get_post_meta( $get_cust_id, '_ace_wtp_member_acc_', true ); 

				$allDay = $member_custom_field['ace_member_all_days'];
				if ($allDay) {
					$mClass = ( $allDay ) ? 'awc_online' : 'awc_offline';
				}else{
					$wDays = $member_custom_field['ace_member_weekdays'];

					if (isset( $wDays[$cDay]['ischecked'] )) {

						$st = ($wDays[$cDay]['start_time']) ? $wDays[$cDay]['start_time'] : '0:00';
						$et = ($wDays[$cDay]['end_time']) ? $wDays[$cDay]['end_time'] : '23:00';
						
						$sT = explode(':', $st)[0];
						$eT = explode(':', $et)[0];

						if ($newCTime >= $sT && $newCTime <= $eT) {  
							
							$mClass = 'awc_online';
						
						}else{

							$mClass = 'awc_offline';
							$offMsg =  'Online from '.$st.' - '.$et.' UTC';
						}

					}else{
						$mClass = 'awc_offline';
						$offMsg =  'Agent is not online today.';
					}

				}

			    if($mClass == 'awc_online') {
			    	$mUrl = 'https://';
			    	$mUrl .= ( wp_is_mobile() ) ? "api" : "web"; 
					$mUrl .= '.whatsapp.com/send?phone='.$member_custom_field['ace_member_number'].'&text='.$text;
					$target = 'target="_blank"';



			    }else{
			    	$mUrl = 'javascript:;';
					$target = '';
				}
				
				if (has_post_thumbnail( isset( $post->ID ) ) ){
					$image = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ) );
					$image = $image[0];
				}else{
					$image = plugin_dir_url(__DIR__).'/images/profile.jpg';
				}


			?>
	        <div class="awc_sMember <?php echo $mClass; ?> ">
		            <a href="<?php echo $mUrl; ?>" <?php echo $target; ?> onclick="gtag('event', 'WhatsApp', {'event_action': 'whatsapp_chat', 'event_category': 'Chat', 'event_label': 'Chat_WhatsApp'});">
		                <div class="awc_mImg">
		                	<img class="awcImg" src="<?php echo $image; ?>">
		                </div>
		                <div class="awc_mData">
		                    <p class="awc_mTitle"><?php echo the_title(); ?></p>
		                    <p class="awc_mStatus"><?php echo $member_custom_field['ace_member_position'];?></p>
		                    <p class="awc_wIco"><i class="fab fa-whatsapp" aria-hidden="true"></i></p>
		                    <?php if($mClass == 'awc_offline'){
		                    	echo '<p class="awc_mOnlinetime">'.$offMsg.'</p>';
		                    } else { echo $member_custom_field['ace_member_btntext'];  }?>
		                </div>
		                <div class="awc_clear"></div>
		            </a>
	        </div>
			  <?php endwhile;
			} wp_reset_query(); ?>


    </div>
</div>
<a class="awc_closeChat" href=""><i class="fas fa-times"></i></a>
<script type="text/javascript">
    (function($) {
        $(function() {
            var mBox = $(".awc_mBox"), closeChat = $(".awc_closeChat");
            mBox.on('click', openFAB);
            closeChat.on('click', closeFAB);
            function openFAB(event) {
                if (event)
                    mBox.addClass('awc_active');
                }
            function closeFAB(event) {
                if (event) {
                    event.preventDefault();
                    event.stopImmediatePropagation();
                }
                mBox.removeClass('awc_active');
            }
        });
    })(jQuery);
</script>