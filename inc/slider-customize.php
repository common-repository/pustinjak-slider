<?php if( ! defined( 'ABSPATH' ) ) exit;

		
/***********************************************************************************
* Slide option
***********************************************************************************/
	
		function pustinjak_slider_numbers( $wp_customize ) {
			
			$wp_customize->add_panel('ps_sliders', array(
				'priority'       => 4,
				'capability'     => 'edit_theme_options',
				'title'          => __('Pustinjak Slider', 'pustinjak-slider')
			));
		

	/***************** Slider ******************/ 		
		$wp_customize->add_section( 'pustinjak_slider_numbersr_section' , array(
			'title'       => __( 'Pustinjak Slider', 'pustinjak-slider' ),
			'panel'		=> 'ps_sliders',
			'description' => __( 'Pustinjak Slider. Contains 10 slides. When you upload image slider is activated.', 'pustinjak-slider' ).
			"<br /><br /><b>Include with shortcode:</b> <input size='13' type='text'  onClick='this.select();' value='[pustinjak-slider]' />
			<br />
			<br />
			<b>Include with PHP Code:</b><input size='30' type='text' onClick='this.select();'  value='<?php pustinjak_slider (); ?>' />",
			'priority' => 2,
		) );

	/*****************  Slider Speed ******************/ 
			
		$wp_customize->add_setting(
			'ps_slider_speed',
			array(
				'default' => '1000',
				'sanitize_callback' => 'esc_attr',
			)
		);
		 
		$wp_customize->add_control(
			'ps_slider_speed',
			array(
				'type' => 'select',
				'label' => 'Slider Speed:',
				'section' => 'pustinjak_slider_numbersr_section',
				'choices' => array(
					'600' => '600',
					'700' => '700',
					'800' => '800',
					'900' => '900',
					'1000' => '1000',
					'2000' => '2000',
					'3000' => '3000',
					'4000' => '4000',
					'5000' => '5000',
					'6000' => '6000',
					'7000' => '7000',
					'8000' => '8000',
					'9000' => '9000',
					'10000' => '10000',
				),
			)
		);
		
	/*****************  Slider Height ******************/ 

		$wp_customize->add_setting(
			'ps_slider_height',
			array(
				'default' => '',
				'sanitize_callback' => 'esc_attr',
			)
		);
		 
		$wp_customize->add_control(
			'ps_slider_height',
			array(
				'type' => 'select',
				'label' => 'Slider Height:',
				'section' => 'pustinjak_slider_numbersr_section',
				'choices' => array(
					'150' => '150',
					'160' => '160',
					'170' => '170',
					'180' => '180',
					'190' => '190',
					'200' => '200',
					'210' => '210',
					'220' => '220',
					'230' => '230',
					'240' => '240',
					'250' => '250',
					'260' => '260',
					'270' => '270',
					'280' => '280',
					'290' => '290',
					'300' => '300',
					'310' => '310',
					'320' => '320',
					'330' => '330',
					'340' => '340',
					'350' => '350',
					'360' => '360',
					'370' => '370',
					'380' => '380',
					'390' => '390',
					'400' => '400',
					'410' => '410',
					'420' => '420',
					'430' => '430',
					'440' => '440',
					'450' => '450',
					'460' => '460',
					'470' => '470',
					'480' => '480',
					'490' => '490',
					'500' => '500',
					'510' => '510',
					'520' => '520',
					'530' => '530',
					'540' => '540',
					'550' => '550',
					'560' => '560',
					'570' => '570',
					'580' => '580',
					'590' => '590',
					'600' => '600',
					'650' => '650',	
					'750' => '750',	
					'800' => '800',	
					'900' => '900',	
					'1000' => '1000',	
				),
			)
		);
		
	/*****************  Slider Size ******************/ 
		
		$wp_customize->add_setting(
			'pustinjak_slider_slide_size',
			array(
				'default' => '',
				'sanitize_callback' => 'esc_attr',
			)
		);
		 
		$wp_customize->add_control(
			'pustinjak_slider_slide_size',
			array(
				'type' => 'select',
				'label' => 'Slider Title Size:',
				'section' => 'pustinjak_slider_numbersr_section',
				'choices' => array(
					'10' => '10',
					'11' => '11',
					'12' => '12',
					'13' => '13',
					'14' => '14',
					'15' => '15',
					'16' => '16',
					'17' => '17',
					'18' => '18',
					'19' => '19',
					'20' => '20',
					'21' => '21',
					'22' => '22',
					'23' => '23',
					'24' => '24',
					'25' => '25',
					'26' => '26',
					'27' => '27',
					'28' => '28',
					'29' => '29',
					'30' => '30',
					'40' => '40',
					'50' => '50',
					'60' => '60',
					'70' => '70',
					'80' => '80',
					'90' => '90',
				),
			)
		);
		
	/***************** Slide Title Color ******************/ 	
		
			$wp_customize->add_setting('pustinjak_slider_numbers_titles_color', array(         
			'default'     => '#fff',
			 'sanitize_callback' => 'sanitize_hex_color'
			)); 	

			$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'pustinjak_slider_numbers_titles_color', array(
			'label' => __('Slide Title Color', 'magazine-news'),        
			'section' => 'pustinjak_slider_numbersr_section',
			'settings' => 'pustinjak_slider_numbers_titles_color'
			)));
			
			/***************** Slide Title Color ******************/ 	
		
			$wp_customize->add_setting('pustinjak_slider_numbers_titles_hover_color', array(         
			'default'     => '',
			 'sanitize_callback' => 'sanitize_hex_color'
			)); 	

			$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'pustinjak_slider_numbers_titles_hover_color', array(
			'label' => __('Slide Title Hover Color', 'magazine-news'),        
			'section' => 'pustinjak_slider_numbersr_section',
			'settings' => 'pustinjak_slider_numbers_titles_hover_color'
			)));
			
	/***************** Slide Background Color ******************/ 	
		
			$wp_customize->add_setting('pustinjak_slider_numbers_background_color', array(         
			'default'     => '',
			 'sanitize_callback' => 'sanitize_hex_color'
			)); 	

			$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'pustinjak_slider_numbers_background_color', array(
			'label' => __('Slide Background Color', 'magazine-news'),        
			'section' => 'pustinjak_slider_numbersr_section',
			'settings' => 'pustinjak_slider_numbers_background_color'
			)));	
			
	/***************** Slides ******************/ 
		for ($number=1;$number<=10;$number++){
			$wp_customize->add_setting( 'ps_slider_img'.$number, array (
				'sanitize_callback' => 'esc_url_raw',
			) );
			
			$wp_customize->add_control( 
				new WP_Customize_Image_Control( 
				$wp_customize, 
				'ps_slider_img'.$number, 
				array(
					'label'      => __( 'Slide '.$number.' IMG:', 'pustinjak-slider' ),
					'section'    => 'pustinjak_slider_numbersr_section',
					'settings'   => 'ps_slider_img'.$number,
				) ) );
			
			$wp_customize->add_setting( 'ps_slider_text'.$number, array (
				'sanitize_callback' => 'sanitize_text_field',
			) );
			
			$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'ps_slider_text'.$number, array(
				'label'    => __( 'Slide '.$number.' Text:', 'pustinjak-slider' ),
				'section'  => 'pustinjak_slider_numbersr_section',
				'settings' => 'ps_slider_text'.$number,
				'type' => 'text',
			) ) );
				
			$wp_customize->add_setting( 'ps_slider_url'.$number, array (
				'sanitize_callback' => 'esc_url_raw',
				'default' => '#',
			) );
			
			$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'ps_slider_url'.$number, array(
				'label'    => __( 'Slide '.$number.' URL:', 'pustinjak-slider' ),
				'section'  => 'pustinjak_slider_numbersr_section',
				'settings' => 'ps_slider_url'.$number,
			) ) );
		}

	}		
			add_action('customize_register', 'pustinjak_slider_numbers');

			function pustinjak_slider_customize_css_slider() {
		?>
			<style type="text/css">
				<?php if (get_theme_mod('pustinjak_slider_slide_size')){ ?>.container-pustinjak-slider h3 a, .container-pustinjak-slider h3 { font-size: <?php echo get_theme_mod('pustinjak_slider_slide_size'); ?>px !important;} <?php } ?>
				<?php if (get_theme_mod('pustinjak_slider_numbers_titles_color')){ ?>.container-pustinjak-slider h3 a, .container-pustinjak-slider h3 { color: <?php echo get_theme_mod('pustinjak_slider_numbers_titles_color'); ?> !important;}<?php } ?>
				<?php if (get_theme_mod('pustinjak_slider_numbers_titles_hover_color')){ ?>.container-pustinjak-slider h3 a:hover, .container-pustinjak-slider h3:hover { color: <?php echo get_theme_mod('pustinjak_slider_numbers_titles_hover_color'); ?> !important;}<?php } ?>
				<?php if (get_theme_mod('pustinjak_slider_numbers_background_color')){ ?>.container-pustinjak-slider h3 { background: <?php echo get_theme_mod('pustinjak_slider_numbers_background_color'); ?> !important;}<?php } ?> 
			</style>
		<?php
		
	}
			add_action('wp_head', 'pustinjak_slider_customize_css_slider');
			
