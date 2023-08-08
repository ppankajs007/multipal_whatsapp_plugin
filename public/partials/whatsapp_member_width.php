<?php
global $post_id, $product;

$gSetting = get_option( 'ace-whatsapp-setting-field-M' );

if (!empty( $gSetting['ace_wp_woocom_button'] ) == 1 && function_exists('is_product') ):
    if( is_product() ):
      $content = $product->name;
      $text = $content." - ".get_permalink($product->id);
    else:
      $text = $gSetting['whatsapp_start_chat'];
    endif;
else:
  $text = $gSetting['whatsapp_start_chat'];
endif;


    $id =  $argu[0];
    $m_Width = get_post_meta( $id, '_ace_wtp_member_acc_', true );
    $preTimeZ = get_option('gmt_offset');
    $hours = ceil($preTimeZ);
    $newCTime = gmdate("H", strtotime('+'.$hours.' hours'));
    $cDay = gmdate("l", strtotime('+'.$hours.' hours'));

    $allDay = $m_Width['ace_member_all_days'];
    if ($allDay) {
      $mClass = ( $allDay ) ? 'awc_online' : 'awc_offline';
    
    }else{
    
      $wDays = $m_Width['ace_member_weekdays'];

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
        $mUrl .= '.whatsapp.com/send?phone='.$m_Width['ace_member_number'].'&text='.$text;
        $target = 'target="_blank"';
        $stImg = plugin_dir_url(__DIR__).'images/mOnline.png';
        $cOnline = "Online";
        $otext = $m_Width['ace_member_btntext'];
   
    }else{
        $mUrl = 'javascript:;';
        $target = '';
        $stImg = plugin_dir_url(__DIR__).'images/mOnline.png';
        $cOnline = "ofline";

    }

    
    if (has_post_thumbnail( isset( $post_id ) ) ){
      $image = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ) );
      $image = $image[0];
    }else{
      $image = plugin_dir_url(__DIR__).'/images/profile.jpg';
    }

$gSetting = get_option( 'ace-whatsapp-setting-field-M' );
( $gSetting['whatsapp_content'] ) ? $wTitle = $gSetting['whatsapp_content']: '';
( $gSetting['ace_whatsapp_btn_color'] ) ? $bgcolor = $gSetting['ace_whatsapp_btn_color']: '';
( $gSetting['ace_whatsapp_txtbtn_color'] ) ? $color = $gSetting['ace_whatsapp_txtbtn_color']: '' ;

?>

  <div class="acw_suser <?php echo $mClass; ?> ">
  <a target="_blank" href="<?php echo $mUrl ?>" class="ace_what_widget_outer">
  	<div class="ace_widget_user_image">
  		<div class="ace_image_outer">
  		   <img src="<?php echo $image ?>">  
       </div> 
        <img src="<?php echo $stImg ?>" class="whats_app_icon"> 

  	</div>
  	<div class="ace_widget_content_">
  		<h4><?php echo get_the_title( $id ) ?> <span><?php echo $cOnline; ?></span></h4>

    <?php if($mClass == 'awc_online'): ?>
  		<p> <?php _e( $m_Width['ace_member_btntext'] ); else: echo $offMsg; endif; ?></p>
  	</div>
  </a>
</div>