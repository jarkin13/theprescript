<?php

class MSI_Frontend {

	/**
	 * Should we hide the original menu text, or put the icon before it?
	 * Override with storm_social_icons_hide_text filter
	 *
	 * @var bool
	 */
	var $hide_text = true;

	/**
	 * Contains 3.2.1 FontAwesome icons only. See $networks_latest for additional 4.0 icons.
	 * @var array links social site URLs with CSS classes for icons
	 */
	var $networks = array(
		'bitbucket.org'      => array( 'name' => 'Bitbucket',      'class' => 'bitbucket',     'icon' => 'fa fa-bitbucket',     'fa fa-sign' => 'bitbucket-sign'   ),
		'dribbble.com'       => array( 'name' => 'Dribbble',       'class' => 'dribbble',      'icon' => 'fa fa-dribbble',      'fa fa-sign' => 'fa fa-dribbble'         ),
		'dropbox.com'        => array( 'name' => 'Dropbox',        'class' => 'dropbox',       'icon' => 'fa fa-dropbox',       'fa fa-sign' => 'fa fa-dropbox'          ),
		'facebook.com'       => array( 'name' => 'Facebook',       'class' => 'facebook',      'icon' => 'fa fa-facebook-official',      'fa fa-sign' => 'fa fa-facebook-sign-official'    ),
		'flickr.com'         => array( 'name' => 'Flickr',         'class' => 'flickr',        'icon' => 'fa fa-flickr',        'fa fa-sign' => 'fa fa-flickr'           ),
		'foursquare.com'     => array( 'name' => 'Foursquare',     'class' => 'foursquare',    'icon' => 'fa fa-foursquare',    'fa fa-sign' => 'fa fa-foursquare'       ),
		'github.com'         => array( 'name' => 'Github',         'class' => 'github',        'icon' => 'fa fa-github',        'fa fa-sign' => 'fa fa-github-sign'      ),
		'gittip.com'         => array( 'name' => 'GitTip',         'class' => 'gittip',        'icon' => 'fa fa-gittip',        'fa fa-sign' => 'fa fa-gittip'           ),
		'instagr.am'         => array( 'name' => 'Instagram',      'class' => 'instagram',     'icon' => 'fa fa-instagram',     'fa fa-sign' => 'fa fa-instagram'        ),
		'instagram.com'      => array( 'name' => 'Instagram',      'class' => 'instagram',     'icon' => 'fa fa-instagram',     'fa fa-sign' => 'fa fa-instagram'        ),
		'linkedin.com'       => array( 'name' => 'LinkedIn',       'class' => 'linkedin',      'icon' => 'fa fa-linkedin',      'fa fa-sign' => 'fa fa-linkedin-sign'    ),
		'mailto:'            => array( 'name' => 'Email',          'class' => 'envelope',      'icon' => 'fa fa-envelope',      'fa fa-sign' => 'fa fa-envelope-alt'     ),
		'pinterest.com'      => array( 'name' => 'Pinterest',      'class' => 'pinterest',     'icon' => 'fa fa-pinterest',     'fa fa-sign' => 'fa fa-pinterest-sign'   ),
		'plus.google.com'    => array( 'name' => 'Google+',        'class' => 'google-plus',   'icon' => 'fa fa-google-plus',   'fa fa-sign' => 'fa fa-google-plus-sign' ),
		'renren.com'         => array( 'name' => 'RenRen',         'class' => 'renren',        'icon' => 'fa fa-renren',        'fa fa-sign' => 'fa fa-renren'           ),
		'stackoverflow.com'  => array( 'name' => 'Stack Exchange', 'class' => 'stackexchange', 'icon' => 'fa fa-stackexchange', 'fa fa-sign' => 'fa fa-stackexchange'    ),
		'trello.com'         => array( 'name' => 'Trello',         'class' => 'trello',        'icon' => 'fa fa-trello',        'fa fa-sign' => 'fa fa-trello'           ),
		'tumblr.com'         => array( 'name' => 'Tumblr',         'class' => 'tumblr',        'icon' => 'fa fa-tumblr',        'fa fa-sign' => 'fa fa-tumblr'           ),
		'twitter.com'        => array( 'name' => 'Twitter',        'class' => 'twitter',       'icon' => 'fa fa-twitter',       'fa fa-sign' => 'fa fa-twitter-sign'     ),
		'vk.com'             => array( 'name' => 'VK',             'class' => 'vk',            'icon' => 'fa fa-vk',            'fa fa-sign' => 'fa fa-vk'               ),
		'weibo.com'          => array( 'name' => 'Weibo',          'class' => 'weibo',         'icon' => 'fa fa-weibo',         'fa fa-sign' => 'fa fa-weibo'            ),
		'xing.com'           => array( 'name' => 'Xing',           'class' => 'xing',          'icon' => 'fa fa-xing',          'fa fa-sign' => 'fa fa-xing'             ),
		'youtu.be'           => array( 'name' => 'YouTube',        'class' => 'youtube',       'icon' => 'fa fa-youtube',       'fa fa-sign' => 'fa fa-youtube-sign'     ),
		'youtube.com'        => array( 'name' => 'YouTube',        'class' => 'youtube',       'icon' => 'fa fa-youtube',       'fa fa-sign' => 'fa fa-youtube-sign'     ),
	);

	/**
	 * Contains 4.0+ FontAwesome icons only.
	 * @var array links social site URLs with CSS classes for icons
	 */
	var $networks_latest = array(
		'slideshare.net'     => array( 'name' => 'SlideShare',     'class' => 'slideshare',     'icon' => 'fa fa-slideshare',     'fa fa-sign' => 'fa fa-slideshare'     ),
		'stackoverflow.com'  => array( 'name' => 'Stack Overflow', 'class' => 'stack-overflow', 'icon' => 'fa fa-stack-overflow', 'fa fa-sign' => 'fa fa-stack-overflow' ),
		'stackexchange.com'  => array( 'name' => 'Stack Exchange', 'class' => 'stack-exchange', 'icon' => 'fa fa-stack-exchange', 'fa fa-sign' => 'fa fa-stack-exchange' ),
		'vimeo.com'          => array( 'name' => 'Vimeo',          'class' => 'vimeo',          'icon' => 'fa fa-vimeo-square',   'fa fa-sign' => 'fa fa-vimeo-square'   ),
		'mailto:'            => array( 'name' => 'Email',          'class' => 'envelope',       'icon' => 'fa fa-envelope',       'fa fa-sign' => 'fa fa-envelope-o'     ),
	);

	/**
	 * Class to apply to the <li> of all social menu items
	 */
	var $li_class = 'social-icon';

	/**
	 * FontAwesome 4.0+ -- Size options available for icon output
	 * These are sizes that render as "pixel perfect" according to FontAwesome.
	 */
	var $icon_sizes = array(
		'normal' => '',
		'large'  => 'fa-lg',
		'2x'     => 'fa-2x',
		'3x'     => 'fa-3x',
		'4x'     => 'fa-4x',
		'5x'     => 'fa-5x',
	);

	/**
	 * FontAwesome 3.2.1 -- Size options available for icon output
	 * These are sizes that render as "pixel perfect" according to FontAwesome.
	 */
	var $legacy_icon_sizes = array(
		'normal' => '',
		'large'  => 'fa fa-large',
		'2x'     => 'fa fa-2x',
		'3x'     => 'fa fa-3x',
		'4x'     => 'fa fa-4x',
	);

	/**
	 * Size of the icons to display.
	 * Override with storm_social_icons_size filter
	 *
	 * @var string normal|large|2x|3x|4x
	 */
	var $size = '2x';

	/**
	 * Display normal icons, or icons cut out of a box (sign) shape?
	 * Override with storm_social_icons_type filter
	 *
	 * @var string icon|fa fa-sign
	 */
	var $type = 'icon';

	/**
	 * @var bool If true, use FontAwesome 4.0+, which drops IE7, but adds Vimeo
	 */
	var $use_latest = false;

	/**
	 * @var Storm_Menu_Social_Icons Instance of the class.
	 */
	private static $instance = false;

	/**
	 * Don't use this. Use ::get_instance() instead.
	 */
	public function __construct() {
		if ( !self::$instance ) {
			$message = '<code>' . __CLASS__ . '</code> is a singleton.<br/> Please get an instantiate it with <code>' . __CLASS__ . '::get_instance();</code>';
			wp_die( $message );
		}
	}

	public static function get_instance() {
		if ( !is_a( self::$instance, __CLASS__ ) ) {
			self::$instance = true;
			self::$instance = new self();
			self::$instance->init();
		}
		return self::$instance;
	}

	/**
	 * Initial setup. Called by get_instance.
	 */
	protected function init() {

		// Option to update to FontAwesome 4.0+ format (drops IE7 support)
		$this->use_latest = apply_filters( 'storm_social_icons_use_latest', $this->use_latest );

		if ( $this->use_latest ) {
			add_filter( 'storm_social_icons_networks', array( $this, 'update_network_classes' ), 1000 );
		}

		$this->size         = apply_filters( 'storm_social_icons_size',         $this->size );
		$this->type         = apply_filters( 'storm_social_icons_type',         $this->type );
		$this->hide_text    = apply_filters( 'storm_social_icons_hide_text',    $this->hide_text );
		$this->networks     = apply_filters( 'storm_social_icons_networks',     $this->networks );

		add_action( 'wp_enqueue_scripts', array( $this, 'wp_enqueue_scripts' ) );
		add_action( 'wp_print_scripts', array( $this, 'wp_print_scripts' ) );

		add_filter( 'wp_nav_menu_objects', array( $this, 'wp_nav_menu_objects' ), 5, 2 );

		// Shortcode for testing all fontawesome icons: [fontawesometest]
		add_shortcode( 'fontawesometest', array( $this, 'shortcode_fontawesometest' ) );
		add_action( 'fontawesometest', array( $this, 'fontawesometest' ) );

	}

	/**
	 * Load FontAwesome from NetDNA's Content Deliver Network (faster, likely to be cached)
	 * @see http://www.bootstrapcdn.com/#tab_fontawesome
	 */
	public function wp_enqueue_scripts() {

		if ( $this->use_latest ) {

			// FontAwesome latest. Drops IE7 support.
			wp_enqueue_style( 'fontawesome', '//netdna.bootstrapcdn.com/font-awesome/latest/css/font-awesome.css', array(), MSI_VERSION, 'all' );

		}else {

			// FontAwesome 3.2.1 -- support IE7, but lacks Vimeo
			global $wp_styles;
			wp_enqueue_style( 'fontawesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css', array(), MSI_VERSION, 'all' );
			wp_enqueue_style( 'fontawesome-ie', '//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome-ie7.min.css', array( 'fontawesome' ), MSI_VERSION );

			// Internet Explorer conditional comment
			$wp_styles->add_data( 'fontawesome-ie', 'conditional', 'IE 7' );

		}

	}

	/**
	 * Hide text visually, but keep available for screen readers.
	 * Just a few lines of stylesheet, so loading inline rather than adding another HTTP request.
	 */
	public function wp_print_scripts() {
		?>
		<style>
			/* Accessible for screen readers but hidden from view */
			.fa-hidden { position:absolute; left:-10000px; top:auto; width:1px; height:1px; overflow:hidden; }
			.rtl .fa-hidden { left:10000px; }
			.fa-showtext { margin-right: 5px; }
		</style>
		<?php
	}

	/**
	 * Get icon HTML with appropriate classes depending on size and icon type
	 */
	public function get_icon( $network ) {

		// Switch between legacy or current icon size classes
		$icon_sizes = ( $this->use_latest ) ?  $this->icon_sizes : $this->legacy_icon_sizes;

		$size = $icon_sizes[ $this->size ];
		$icon = $network[ $this->type ];
		$show_text = $this->hide_text ? '' : 'fa-showtext';

		$html = "<i class='$size $icon $show_text'></i>";

		return apply_filters( 'storm_social_icons_icon_html', $html, $size, $icon, $show_text );

	}

	/**
	 * Find social links in top-level menu items, add icon HTML
	 */
	public function wp_nav_menu_objects( $sorted_menu_items, $args ){

		foreach( $sorted_menu_items as &$item ) {
			if ( 0 != $item->menu_item_parent ) {
				// Skip submenu items
				continue;
			}

			foreach( $this->networks as $url => $network ) {
				if ( false !== strpos( $item->url, $url ) ) {

					$item->classes[] = $this->li_class;
					$item->classes[] = $network['class'];

					if ( $this->hide_text ) {
						$html = "<span class='fa-hidden'>{$item->title}</span>";
						$item->title = apply_filters( 'storm_social_icons_title_html', $html, $item->title );
					}

					$item->title = $this->get_icon( $network ) . $item->title ;
				}
			}
		}

		return $sorted_menu_items;

	}

	/**
	 * Change size classes from 3.2.1 format to 4.0+ format.
	 *
	 * @param  array $networks See $this->$networks
	 * @return array $networks Filtered to change "fa fa-" to "fa fa-"
	 */
	public function update_network_classes( $networks ) {

		foreach ( $networks as $url => &$values ) {
			$values['icon']      = str_replace( 'fa fa-', 'fa fa-', $values['icon'] );
			$values['fa fa-sign'] = str_replace( 'fa fa-', 'fa fa-', $values['fa fa-sign'] );
			$values['fa fa-sign'] = str_replace( '-sign', '-square', $values['fa fa-sign'] );
		}

		$networks = array_merge( $networks, $this->networks_latest );

		return $networks;
	}

	/**
	 * Test output of all FontAwesome icons
	 */
	public function fontawesometest( $args ) {
		include dirname( __FILE__ ) . '/font-awesome-test.html';
	}

	/**
	 * Shortcode to test output of all FontAwesome icons
	 */
	public function shortcode_fontawesometest( $args ) {
		ob_start();
		$this->fontawesometest();
		return ob_get_clean();
	}
}
