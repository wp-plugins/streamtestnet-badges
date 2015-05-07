<?php
/**
 * Plugin Name: StreamTest.Net Badges
 * Plugin URI: http://www.streamtest.net/plugins/
 * Description: Display StreamTest.Net badges.
 * Version: 1.0.0
 * Author: NetroMedia
 * Author URI: http://www.streamtest.net
 * License: GPL2
 
	Copyright 2015  StreamTest.Net  (email : support@streamtest.net)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as 
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
 */
 
 

add_action( 'admin_menu', 'streamtest_menu' );
add_action( 'admin_init', 'register_stbadges' );
add_action( 'admin_init', 'stbadges_admin_styles' );


function streamtest_menu() {
	add_options_page( 'StreamTest', 'StreamTest Badges', 'manage_options', 'streamtest-badges', 'streamtest_options' );
}

function register_stbadges() {
  register_setting( 'streamtest-option-group', 'streamtest_badge_options' );
  wp_register_style( 'stbadges_style', plugins_url('streamtestbadges.css', __FILE__) );
}

function stbadges_admin_styles() {
      wp_enqueue_style( 'stbadges_style' );
}

function streamtest_options() {
	if ( !current_user_can( 'manage_options' ) )  {
		wp_die( __( 'You do not have sufficient permissions to access this page.' ) );
	} ?>
		<div class="wrap">	
			<h2>StreamTest.Net Badges</h2>
			<p>Copy and paste the shortcodes on any page or widget</p>
				<form method="post" action="options.php"> 
				
				<?php settings_fields( 'streamtest-option-group' ); ?>
				
				
				<?php $streamtest_badge_options = array (
								'streamtest_badge_one' => '<script type="text/javascript" src="https://streamtest.github.io/badges/streamtest.js"></script><a href="http://www.streamtest.net/#badges?ID=701f5590-df9d-4caf-a3d1-8518e2a733ea" title="Test your stream" target="_blank"> <img src="' . plugins_url() .  '/streamtestbadges/badges/badge1.png" alt="streamtest.net badge" /></a>',
								
								'streamtest_badge_two' => '<script type="text/javascript" src="https://streamtest.github.io/badges/streamtest.js"></script><a href="http://www.streamtest.net/#badges?ID=701f5590-df9d-4caf-a3d1-8518e2a733ea" title="Test your stream" target="_blank"> <img src="' . plugins_url() .  '/streamtestbadges/badges/badge2.png" alt="streamtest.net badge" /></a>',
								
								'streamtest_badge_three' => '<script type="text/javascript" src="https://streamtest.github.io/badges/streamtest.js"></script><a href="http://www.streamtest.net/#badges?ID=701f5590-df9d-4caf-a3d1-8518e2a733ea" title="Test your stream" target="_blank"> <img src="' . plugins_url() .  '/streamtestbadges/badges/badge3.png" alt="streamtest.net badge" /></a>',
								
								'streamtest_badge_four' => '<script type="text/javascript" src="https://streamtest.github.io/badges/streamtest.js"></script><a href="http://www.streamtest.net/#badges?ID=701f5590-df9d-4caf-a3d1-8518e2a733ea" title="Test your stream" target="_blank"> <img src="' . plugins_url() .  '/streamtestbadges/badges/badge4.png" alt="streamtest.net badge" /></a>',
								
								'streamtest_badge_five' => '<script type="text/javascript" src="https://streamtest.github.io/badges/streamtest.js"></script><a href="http://www.streamtest.net/#badges?ID=701f5590-df9d-4caf-a3d1-8518e2a733ea" title="Test your stream" target="_blank"> <img src="' . plugins_url() .  '/streamtestbadges/badges/badge5.png" alt="streamtest.net badge" /></a>',
								
								'streamtest_badge_six' => '<script type="text/javascript" src="https://streamtest.github.io/badges/streamtest.js"></script><a href="http://www.streamtest.net/#badges?ID=701f5590-df9d-4caf-a3d1-8518e2a733ea" title="Test your stream" target="_blank"> <img src="' . plugins_url() .  '/streamtestbadges/badges/badge6.png" alt="streamtest.net badge" /></a>',
								
								'streamtest_badge_seven' => '<script type="text/javascript" src="https://streamtest.github.io/badges/streamtest.js"></script><a href="http://www.streamtest.net/badges?ID=701f5590-df9d-4caf-a3d1-8518e2a733ea" title="Test your stream" target="_blank"> <img src="' . plugins_url() .  '/streamtestbadges/badges/badge7.png" alt="streamtest.net badge" /></a>',
								
								'streamtest_badge_eight' => '<script type="text/javascript" src="https://streamtest.github.io/badges/streamtest.js"></script><a href="http://www.streamtest.net/badges?ID=701f5590-df9d-4caf-a3d1-8518e2a733ea" title="Test your stream" target="_blank"> <img src="' . plugins_url() .  '/streamtestbadges/badges/badge8.png" alt="streamtest.net badge" /></a>',
								
								'streamtest_badge_nine' => '<script type="text/javascript" src="https://streamtest.github.io/badges/streamtest.js"></script><a href="http://www.streamtest.net/badges?ID=701f5590-df9d-4caf-a3d1-8518e2a733ea" title="Test your stream" target="_blank"> <img src="' . plugins_url() .  '/streamtestbadges/badges/badge9.png" alt="streamtest.net badge" /></a>',
								
								'streamtest_badge_ten' => '<script type="text/javascript" src="https://streamtest.github.io/badges/streamtest.js"></script><a href="http://www.streamtest.net/badges?ID=701f5590-df9d-4caf-a3d1-8518e2a733ea" title="Test your stream" target="_blank"> <img src="' . plugins_url() .  '/streamtestbadges/badges/badge10.png" alt="streamtest.net badge" /></a>',
								
								'streamtest_badge_eleven' => '<script type="text/javascript" src="https://streamtest.github.io/badges/streamtest.js"></script><a href="http://www.streamtest.net/badges?ID=701f5590-df9d-4caf-a3d1-8518e2a733ea" title="Test your stream" target="_blank"> <img src="' . plugins_url() .  '/streamtestbadges/badges/badge11.png" alt="streamtest.net badge" /></a>',
								
								'streamtest_badge_twelve' => '<script type="text/javascript" src="https://streamtest.github.io/badges/streamtest.js"></script><a href="http://www.streamtest.net/badges?ID=701f5590-df9d-4caf-a3d1-8518e2a733ea" title="Test your stream" target="_blank"> <img src="' . plugins_url() .  '/streamtestbadges/badges/badge12.png" alt="streamtest.net badge" /></a>',
								
								
								'streamtest_badge_thirteen' => '<script type="text/javascript" src="https://streamtest.github.io/badges/streamtest.js"></script><a href="http://www.streamtest.net/badges?ID=701f5590-df9d-4caf-a3d1-8518e2a733ea" title="Test your stream" target="_blank"> <img src="' . plugins_url() .  '/streamtestbadges/badges/badge13.png" alt="streamtest.net badge" /></a>',
								
								'streamtest_badge_fourteen' => '<script type="text/javascript" src="https://streamtest.github.io/badges/streamtest.js"></script><a href="http://www.streamtest.net/badges?ID=701f5590-df9d-4caf-a3d1-8518e2a733ea" title="Test your stream" target="_blank"> <img src="' . plugins_url() .  '/streamtestbadges/badges/badge14.png" alt="streamtest.net badge" /></a>',
								
								'streamtest_badge_fifteen' => '<script type="text/javascript" src="https://streamtest.github.io/badges/streamtest.js"></script><a href="http://www.streamtest.net/badges?ID=701f5590-df9d-4caf-a3d1-8518e2a733ea" title="Test your stream" target="_blank"> <img src="' . plugins_url() .  '/streamtestbadges/badges/badge15.png" alt="streamtest.net badge" /></a>',
								
								'streamtest_badge_sixteen' => '<script type="text/javascript" src="https://streamtest.github.io/badges/streamtest.js"></script><a href="http://www.streamtest.net/badges?ID=701f5590-df9d-4caf-a3d1-8518e2a733ea" title="Test your stream" target="_blank"> <img src="' . plugins_url() .  '/streamtestbadges/badges/badge16.png" alt="streamtest.net badge" /></a>',
								
								'streamtest_badge_seventeen' => '<script type="text/javascript" src="https://streamtest.github.io/badges/streamtest.js"></script><a href="http://www.streamtest.net/badges?ID=701f5590-df9d-4caf-a3d1-8518e2a733ea" title="Test your stream" target="_blank"> <img src="' . plugins_url() .  '/streamtestbadges/badges/badge17.png" alt="streamtest.net badge" /></a>',
								
								'streamtest_badge_eighteen' => '<script type="text/javascript" src="https://streamtest.github.io/badges/streamtest.js"></script><a href="http://www.streamtest.net/badges?ID=701f5590-df9d-4caf-a3d1-8518e2a733ea" title="Test your stream" target="_blank"> <img src="' . plugins_url() .  '/streamtestbadges/badges/badge18.png" alt="streamtest.net badge" /></a>',
								
								'streamtest_badge_nineteen' => '<script type="text/javascript" src="https://streamtest.github.io/badges/streamtest.js"></script><a href="http://www.streamtest.net/badges?ID=701f5590-df9d-4caf-a3d1-8518e2a733ea" title="Test your stream" target="_blank"> <img src="' . plugins_url() .  '/streamtestbadges/badges/badge19.png" alt="streamtest.net badge" /></a>'
								);

				add_option('streamTestOptions', $streamtest_badge_options); ?>
				

				
				<div id="streamtestBadgeOptions">
					<div class="streamBadge">
						<div class="badgeImage">
						<img src="<?php echo plugins_url(); ?>/streamtestbadges/badges/badge1.png" alt="streamtest.net badge" />
						</div>
						Shortcode:
						<label class="streamtestBadgeCode">
							[stbadges badge="streamtest_badge_one"]
						</label>
					
					</div>
					
					<div class="streamBadge">
					<div class="badgeImage">
						<img src="<?php echo plugins_url(); ?>/streamtestbadges/badges/badge2.png" alt="streamtest.net badge" />
						</div>
						Shortcode:
						<label class="streamtestBadgeCode">
							[stbadges badge="streamtest_badge_two"]
						</label>
						
					</div>
					
					<div class="streamBadge">
					<div class="badgeImage">
						<img src="<?php echo plugins_url(); ?>/streamtestbadges/badges/badge3.png" alt="streamtest.net badge" />
						</div>
						Shortcode:
						<label class="streamtestBadgeCode">
							[stbadges badge="streamtest_badge_three"]
						</label>
					
					</div>
					
					<div class="streamBadge">
					<div class="badgeImage">
						<img src="<?php echo plugins_url(); ?>/streamtestbadges/badges/badge4.png" alt="streamtest.net badge" />
						</div>
						Shortcode:
						<label class="streamtestBadgeCode">
							[stbadges badge="streamtest_badge_four"]
						</label>
						
					</div>
					
					<div class="streamBadge">
					<div class="badgeImage">
						<img src="<?php echo plugins_url(); ?>/streamtestbadges/badges/badge5.png" alt="streamtest.net badge" />
						</div>
						Shortcode:
						<label class="streamtestBadgeCode">
							[stbadges badge="streamtest_badge_five"]
						</label>
					
					</div>
					
					<div class="streamBadge">
					<div class="badgeImage">
						<img src="<?php echo plugins_url(); ?>/streamtestbadges/badges/badge6.png" alt="streamtest.net badge" />
						</div>
						Shortcode:
						<label class="streamtestBadgeCode">
							[stbadges badge="streamtest_badge_six"]
						</label>
					
					</div>
					
					<div class="streamBadge">
					<div class="badgeImage">
						<img src="<?php echo plugins_url(); ?>/streamtestbadges/badges/badge7.png" alt="streamtest.net badge" />
						</div>
						Shortcode:
						<label class="streamtestBadgeCode">
							[stbadges badge="streamtest_badge_seven"]
						</label>
						
					</div>
					
					<div class="streamBadge">
					<div class="badgeImage">
						<img src="<?php echo plugins_url(); ?>/streamtestbadges/badges/badge8.png" alt="streamtest.net badge" />
						</div>
						Shortcode:
						<label class="streamtestBadgeCode">
							[stbadges badge="streamtest_badge_eight"]
						</label>
					
					</div>
					
					<div class="streamBadge">
					<div class="badgeImage">
						<img src="<?php echo plugins_url(); ?>/streamtestbadges/badges/badge9.png" alt="streamtest.net badge" />
						</div>
						Shortcode:
						<label class="streamtestBadgeCode">
							[stbadges badge="streamtest_badge_nine"]
						</label>
						
					</div>
					
					<div class="streamBadge">
					<div class="badgeImage">
						<img src="<?php echo plugins_url(); ?>/streamtestbadges/badges/badge10.png" alt="streamtest.net badge" />
						</div>
						Shortcode:
						<label class="streamtestBadgeCode">
							[stbadges badge="streamtest_badge_ten"]
						</label>
						
					</div>
					
					<div class="streamBadge">
					<div class="badgeImage">
						<img src="<?php echo plugins_url(); ?>/streamtestbadges/badges/badge11.png" alt="streamtest.net badge" />
						</div>
						Shortcode:
						<label class="streamtestBadgeCode">
							[stbadges badge="streamtest_badge_eleven"]
						</label>
						
					</div>
					
					<div class="streamBadge">
					<div class="badgeImage">
						<img src="<?php echo plugins_url(); ?>/streamtestbadges/badges/badge12.png" alt="streamtest.net badge" />
						</div>
						Shortcode:
						<label class="streamtestBadgeCode">
							[stbadges badge="streamtest_badge_twelve"]
						</label>
						
					</div>
					
					<div class="streamBadge">
					<div class="badgeImage">
						<img src="<?php echo plugins_url(); ?>/streamtestbadges/badges/badge13.png" alt="streamtest.net badge" />
						</div>
						Shortcode:
						<label class="streamtestBadgeCode">
							[stbadges badge="streamtest_badge_thirteen"]
						</label>
						
					</div>
					
					<div class="streamBadge">
					<div class="badgeImage">
						<img src="<?php echo plugins_url(); ?>/streamtestbadges/badges/badge14.png" alt="streamtest.net badge" />
						</div>
						Shortcode:
						<label class="streamtestBadgeCode">
							[stbadges badge="streamtest_badge_fourteen"]
						</label>
					
					</div>
					
					<div class="streamBadge">
					<div class="badgeImage">
						<img src="<?php echo plugins_url(); ?>/streamtestbadges/badges/badge15.png" alt="streamtest.net badge" />
						</div>
						Shortcode:
						<label class="streamtestBadgeCode">
							[stbadges badge="streamtest_badge_fifteen"]
						</label>
					
					</div>
					
					<div class="streamBadge">
					<div class="badgeImage">
						<img src="<?php echo plugins_url(); ?>/streamtestbadges/badges/badge16.png" alt="streamtest.net badge" />
						</div>
						Shortcode:
						<label class="streamtestBadgeCode">
							[stbadges badge="streamtest_badge_sixteen"]
						</label>
					
					</div>
					
					<div class="streamBadge">
					<div class="badgeImage">
						<img src="<?php echo plugins_url(); ?>/streamtestbadges/badges/badge17.png" alt="streamtest.net badge" />
						</div>
						Shortcode:
						<label class="streamtestBadgeCode">
							[stbadges badge="streamtest_badge_seventeen"]
						</label>
						
					</div>
					
					<div class="streamBadge">
					<div class="badgeImage">
						<img src="<?php echo plugins_url(); ?>/streamtestbadges/badges/badge18.png" alt="streamtest.net badge" />
						</div>
						Shortcode:
						<label class="streamtestBadgeCode">
							[stbadges badge="streamtest_badge_eighteen"]
						</label>
					
					</div>
					
					<div class="streamBadge">
					<div class="badgeImage">
						<img src="<?php echo plugins_url(); ?>/streamtestbadges/badges/badge19.png" alt="streamtest.net badge" />
						</div>
						Shortcode:
						<label class="streamtestBadgeCode">
							[stbadges badge="streamtest_badge_nineteen"]
						</label>
					
					</div>

				</div>
				
				
				
				
		
				<?php submit_button(); ?>
				</form>
		</div>

<?php }



function streamtest_shortcode( $atts ){
	
		$streamTestOptions = get_option( 'streamTestOptions' ); 
	
		ob_start();
		
		extract( shortcode_atts( array( 'badge' => 'StreamTest.Net'), $atts));
	
		return $streamTestOptions[$atts['badge']];
		
		
		ob_get_clean();
}
add_shortcode( 'stbadges', 'streamtest_shortcode' );


add_filter( 'widget_text', 'do_shortcode' );

register_uninstall_hook('uninstall.php', 'remove_streamtest_badges');

defined( 'ABSPATH' ) or die( 'No Access' );
?>