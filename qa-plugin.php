<?php

/*
		Plugin Name: PlaceHolder
		Plugin URI:
		Plugin Update Check URI:
		Plugin Description: Add Custom Placeholder
		Plugin Version: 0.1
		Plugin Date: 2016-06-20
		Plugin Author: 38qa.net
		Plugin Author URI:
		Plugin License: GPLv2
		Plugin Minimum Question2Answer Version: 1.7
*/


	if (!defined('QA_VERSION')) { // don't allow this page to be requested directly from browser
			header('Location: ../../');
			exit;
	}

	// language file
	qa_register_plugin_phrases('qa-place-holder-lang-*.php', 'qa_place_holder_lang');
	// layer
	qa_register_plugin_layer('qa-place-holder-layer.php', 'Placeholder Layer');

/*
	Omit PHP closing tag to help avoid accidental output
*/
