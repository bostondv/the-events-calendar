<?php

$tec = Tribe__Events__Main::instance();

$generalTabFields = array(
	'info-start'                    => array(
		'type' => 'html',
		'html' => '<div id="modern-tribe-info"><img src="' . plugins_url( 'resources/images/modern-tribe@2x.png', dirname( __FILE__ ) ) . '" alt="Modern Tribe Inc." title="Modern Tribe Inc.">',
	),
	'upsell-heading'                => array(
		'type'        => 'heading',
		'label'       => esc_attr__( 'Finding & extending your calendar.', 'the-events-calendar' ),
		'conditional' => ( ! defined( 'TRIBE_HIDE_UPSELL' ) || ! TRIBE_HIDE_UPSELL ),
	),
	'finding-heading'               => array(
		'type'        => 'heading',
		'label'       => esc_attr__( 'Finding your calendar.', 'the-events-calendar' ),
		'conditional' => ( defined( 'TRIBE_HIDE_UPSELL' ) && TRIBE_HIDE_UPSELL ),
	),
	'view-calendar-link'            => array(
		'type' => 'html',
		'html' => '<p>' . esc_html__( 'Where\'s my calendar?', 'the-events-calendar' ) . ' <a href="' . esc_url( Tribe__Events__Main::getLink() ) . '">' . esc_html__( 'Right here', 'the-events-calendar' ) . '</a>.</p>',
	),
	'upsell-info'                   => array(
		'type'        => 'html',
		'html'        => '<p>' . esc_html__( 'Looking for additional functionality including recurring events, custom meta, community events, ticket sales and more?', 'the-events-calendar' ) . ' <a href="' . self::$tecUrl . 'products/?utm_source=generaltab&utm_medium=plugin-tec&utm_campaign=in-app">' . esc_html__( 'Check out the available add-ons', 'the-events-calendar' ) . '</a>.</p>',
		'conditional' => ( ! defined( 'TRIBE_HIDE_UPSELL' ) || ! TRIBE_HIDE_UPSELL ),
	),
	'donate-link-heading'           => array(
		'type'  => 'heading',
		'label' => esc_html__( 'We hope our plugin is helping you out.', 'the-events-calendar' ),
	),
	'donate-link-info'              => array(
		'type'        => 'html',
		'html'        => '<p>' . esc_html__( 'Are you thinking "Wow, this plugin is amazing! I should say thanks to Modern Tribe for all their hard work." The greatest thanks we could ask for is recognition. Add a small text-only link at the bottom of your calendar pointing to The Events Calendar project.', 'the-events-calendar' ) . '<br><a href="' . esc_url( plugins_url( 'resources/images/donate-link-screenshot.jpg', dirname( __FILE__ ) ) ) . '" class="thickbox">' . esc_html__( 'See an example of the link', 'the-events-calendar' ) . '</a>.</p>',
		'conditional' => ! class_exists( 'Tribe__Events__Pro__Main' ),
	),
	'donate-link-pro-info'          => array(
		'type'        => 'html',
		'html'        => '<p>' . esc_html__( 'Are you thinking "Wow, this plugin is amazing! I should say thanks to Modern Tribe for all their hard work." The greatest thanks we could ask for is recognition. Add a small text only link at the bottom of your calendar pointing to The Events Calendar project.', 'the-events-calendar' ) . '<br><a href="' . esc_url( plugins_url( 'resources/images/donate-link-pro-screenshot.jpg', dirname( __FILE__ ) ) ) . '" class="thickbox">' . esc_html__( 'See an example of the link', 'the-events-calendar' ) . '</a>.</p>',
		'conditional' => class_exists( 'Tribe__Events__Pro__Main' ),
	),
	'donate-link'                   => array(
		'type'            => 'checkbox_bool',
		'label'           => esc_attr__( 'Show The Events Calendar link', 'the-events-calendar' ),
		'default'         => false,
		'validation_type' => 'boolean',
	),
	'info-end'                      => array(
		'type' => 'html',
		'html' => '</div>',
	),
	'tribe-form-content-start'      => array(
		'type' => 'html',
		'html' => '<div class="tribe-settings-form-wrap">',
	),
	'tribeEventsDisplayThemeTitle'  => array(
		'type' => 'html',
		'html' => '<h2>' . esc_html__( 'General Settings', 'the-events-calendar' ) . '</h2>',
	),
	'postsPerPage'                  => array(
		'type'            => 'text',
		'label'           => esc_attr__( 'Number of events to show per page', 'the-events-calendar' ),
		'size'            => 'small',
		'default'         => get_option( 'posts_per_page' ),
		'validation_type' => 'positive_int',
	),
	'liveFiltersUpdate'             => array(
		'type'            => 'checkbox_bool',
		'label'           => esc_attr__( 'Use Javascript to control date filtering', 'the-events-calendar' ),
		'tooltip'         => tribe_get_option( 'tribeDisableTribeBar', false ) == true ? esc_html__( 'This option is disabled when "Disable the Event Search Bar" is checked on the Display settings tab.', 'the-events-calendar' ) : esc_html__( 'Enable live ajax for datepicker on front end (User submit not required).', 'the-events-calendar' ),
		'attributes'      => tribe_get_option( 'tribeDisableTribeBar', false ) == true ? array( 'disabled' => 'disabled' ) : null,
		'default'         => true,
		'validation_type' => 'boolean',
		'class'           => tribe_get_option( 'tribeDisableTribeBar', false ) == true ? 'tribe-fieldset-disabled' : null,
	),
	'showComments'                  => array(
		'type'            => 'checkbox_bool',
		'label'           => esc_attr__( 'Show comments', 'the-events-calendar' ),
		'tooltip'         => esc_html__( 'Enable comments on event pages.', 'the-events-calendar' ),
		'default'         => false,
		'validation_type' => 'boolean',
	),
	'showEventsInMainLoop'          => array(
		'type'            => 'checkbox_bool',
		'label'           => esc_attr__( 'Include events in main blog loop', 'the-events-calendar' ),
		'tooltip'         => esc_html__( 'Show events with the site\'s other posts. When this box is checked, events will also continue to appear on the default events page.', 'the-events-calendar' ),
		'default'         => false,
		'validation_type' => 'boolean',
	),
	'unprettyPermalinksUrl'         => array(
		'type'        => 'html',
		'label'       => esc_attr__( 'Events URL slug', 'the-events-calendar' ),
		'html'        => '<p>' . sprintf( esc_html__( 'You cannot edit the slug for your events page as you do not have pretty permalinks enabled. The current URL for your events page is <a href="%s">%s</a>. In order to edit the slug here, <a href="%soptions-permalink.php">enable pretty permalinks</a>.', 'the-events-calendar' ), esc_url( $tec->getLink( 'home' ) ), $tec->getLink( 'home ' ), esc_url( trailingslashit( get_admin_url() ) ) ) . '</p>',
		'conditional' => ( '' == get_option( 'permalink_structure' ) ),
	),
	'eventsSlug'                    => array(
		'type'            => 'text',
		'label'           => esc_attr__( 'Events URL slug', 'the-events-calendar' ),
		'default'         => 'events',
		'validation_type' => 'slug',
		'conditional'     => ( '' != get_option( 'permalink_structure' ) ),
	),
	'current-events-slug'           => array(
		'type'        => 'html',
		'html'        => '<p class="tribe-field-indent tribe-field-description description">' . esc_html__( 'The slug used for building the events URL.', 'the-events-calendar' ) . sprintf( esc_html__( 'Your current events URL is: %s', 'the-events-calendar' ), '<code><a href="' . esc_url( tribe_get_events_link() ) . '">' . tribe_get_events_link() . '</a></code>' ) . '</p>',
		'conditional' => ( '' != get_option( 'permalink_structure' ) ),
	),
	'ical-info'                     => array(
		'type'             => 'html',
		'display_callback' => ( function_exists( 'tribe_get_ical_link' ) ) ? '<p id="ical-link" class="tribe-field-indent tribe-field-description description">' . esc_html__( 'Here is the iCal feed URL for your events:', 'the-events-calendar' ) . ' <code>' . tribe_get_ical_link() . '</code></p>' : '',
		'conditional'      => function_exists( 'tribe_get_ical_link' ),
	),
	'singleEventSlug'               => array(
		'type'            => 'text',
		'label'           => esc_attr__( 'Single event URL slug', 'the-events-calendar' ),
		'default'         => 'event',
		'validation_type' => 'slug',
		'conditional'     => ( '' != get_option( 'permalink_structure' ) ),
	),
	'current-single-event-slug'     => array(
		'type'        => 'html',
		'html'        => '<p class="tribe-field-indent tribe-field-description description">' . sprintf( esc_html__( 'The above should ideally be plural, and this singular.%sYour single event URL is: %s', 'the-events-calendar' ), '<br>', '<code>' . trailingslashit( home_url() ) . tribe_get_option( 'singleEventSlug', 'event' ) . '/single-post-name/</code>' ) . '</p>',
		'conditional' => ( '' != get_option( 'permalink_structure' ) ),
	),
	'multiDayCutoff'                => array(
		'type'            => 'dropdown',
		'label'           => esc_attr__( 'End of day cutoff', 'the-events-calendar' ),
		'validation_type' => 'options',
		'size'            => 'small',
		'default'         => '12:00',
		'options'         => array(
			'00:00' => '12:00 am',
			'01:00' => '01:00 am',
			'02:00' => '02:00 am',
			'03:00' => '03:00 am',
			'04:00' => '04:00 am',
			'05:00' => '05:00 am',
			'06:00' => '06:00 am',
			'07:00' => '07:00 am',
			'08:00' => '08:00 am',
			'09:00' => '09:00 am',
			'10:00' => '10:00 am',
			'11:00' => '11:00 am',
		),
	),
	'multiDayCutoffHelper'          => array(
		'type'        => 'html',
		'html'        => '<p class="tribe-field-indent tribe-field-description description">' . sprintf( esc_html__( "Have an event that runs past midnight? Select a time after that event's end to avoid showing the event on the next day's calendar.", 'the-events-calendar' ) ) . '</p>',
		'conditional' => ( '' != get_option( 'permalink_structure' ) ),
	),
	'defaultCurrencySymbol'         => array(
		'type'            => 'text',
		'label'           => esc_attr__( 'Default currency symbol', 'the-events-calendar' ),
		'tooltip'         => esc_html__( 'Set the default currency symbol for event costs. Note that this only impacts future events, and changes made will not apply retroactively.', 'the-events-calendar' ),
		'validation_type' => 'textarea',
		'size'            => 'small',
		'default'         => '$',
	),
	'reverseCurrencyPosition'       => array(
		'type'            => 'checkbox_bool',
		'label'           => esc_attr__( 'Currency symbol follows value', 'the-events-calendar' ),
		'tooltip'         => esc_html__( 'The currency symbol normally precedes the value. Enabling this option positions the symbol after the value.', 'the-events-calendar' ),
		'default'         => false,
		'validation_type' => 'boolean',
	),
	'tribeEventsDisplayTitle'       => array(
		'type' => 'html',
		'html' => '<h2>' . esc_html__( 'Map Settings', 'the-events-calendar' ) . '</h2>',
	),
	'embedGoogleMaps'               => array(
		'type'            => 'checkbox_bool',
		'label'           => esc_attr__( 'Enable Google Maps', 'the-events-calendar' ),
		'tooltip'         => esc_html__( 'Check to enable maps for events and venues.', 'the-events-calendar' ),
		'default'         => true,
		'class'           => 'google-embed-size',
		'validation_type' => 'boolean',
	),
	'embedGoogleMapsZoom'           => array(
		'type'            => 'text',
		'label'           => esc_attr__( 'Google Maps default zoom level', 'the-events-calendar' ),
		'tooltip'         => esc_html__( '0 = zoomed out; 21 = zoomed in.', 'the-events-calendar' ),
		'size'            => 'small',
		'default'         => 10,
		'class'           => 'google-embed-field',
		'validation_type' => 'number_or_percent',
	),
	'tribeEventsMiscellaneousTitle' => array(
		'type' => 'html',
		'html' => '<h2>' . esc_html__( 'Miscellaneous Settings', 'the-events-calendar' ) . '</h2>',
	),
	'amalgamateDuplicates'          => array(
		'type'        => 'html',
		'html'        => '<fieldset class="tribe-field tribe-field-html"><legend>' . esc_html__( 'Duplicate Venues &amp; Organizers', 'the-events-calendar' ) . '</legend><div class="tribe-field-wrap">' . Tribe__Events__Amalgamator::migration_button( esc_html__( 'Merge Duplicates', 'the-events-calendar' ) ) . '<p class="tribe-field-indent description">' . esc_html__( 'You might find duplicate venues and organizers when updating The Events Calendar from a pre-3.0 version. Click this button to automatically merge identical venues and organizers.', 'the-events-calendar' ) . '</p></div></fieldset><div class="clear"></div>',
		'conditional' => ( $tec->getOption( 'organizer_venue_amalgamation', 0 ) < 1 ),
	),
	'viewWelcomePage'          => array(
		'type'        => 'html',
		'html'        => '<fieldset class="tribe-field tribe-field-html"><legend>' . esc_html__( 'View Welcome Page', 'the-events-calendar' ) . '</legend><div class="tribe-field-wrap"><a href="' . esc_url( get_site_url() . '/wp-admin/edit.php?post_type=tribe_events&page=tribe-events-calendar&tec-welcome-message' ) . '" class="button">' . esc_html__( 'View Welcome Page', 'the-events-calendar' ) . '</a><p class="tribe-field-indent description">' . esc_html__( 'View the page that displayed when you initially installed the plugin.', 'the-events-calendar' ) . '</p></div></fieldset><div class="clear"></div>',

	),
	'viewUpdatePage'          => array(
		'type'        => 'html',
		'html'        => '<fieldset class="tribe-field tribe-field-html"><legend>' . __( 'View Update Page', 'the-events-calendar' ) . '</legend><div class="tribe-field-wrap"><a href="' . esc_url( get_site_url() . '/wp-admin/edit.php?post_type=tribe_events&page=tribe-events-calendar&tec-update-message' ) . '" class="button">' . __( 'View Update Page', 'the-events-calendar' ) . '</a><p class="tribe-field-indent description">' . __( 'View the page that displayed when you updated the plugin.', 'the-events-calendar' ) . '</p></div></fieldset><div class="clear"></div>',
	),
);

if ( is_super_admin() ) {
	$generalTabFields['debugEvents'] = array(
		'type'            => 'checkbox_bool',
		'label'           => esc_attr__( 'Debug mode', 'the-events-calendar' ),
		'default'         => false,
		'validation_type' => 'boolean',
	);
	$generalTabFields['debugEventsHelper'] = array(
		'type'        => 'html',
		'html'        => '<p class="tribe-field-indent tribe-field-description description" style="max-width:400px;">' . sprintf( esc_html__( 'Enable this option to log debug information. By default this will log to your server PHP error log. If you\'d like to see the log messages in your browser, then we recommend that you install the %s and look for the "Tribe" tab in the debug output.', 'the-events-calendar' ), '<a href="http://wordpress.org/extend/plugins/debug-bar/" target="_blank">' . esc_html__( 'Debug Bar Plugin', 'the-events-calendar' ) . '</a>' ) . '</p>',
		'conditional' => ( '' != get_option( 'permalink_structure' ) ),
	);
}

// Closes form
$generalTabFields['tribe-form-content-end'] = array(
	'type' => 'html',
	'html' => '</div>',
);


$generalTab = array(
	'priority' => 10,
	'fields'   => apply_filters( 'tribe_general_settings_tab_fields', $generalTabFields ),
);

