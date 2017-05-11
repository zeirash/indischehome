<?php

// This is the configuration for yiic console application.
// Any writable CConsoleApplication properties can be configured here.
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'Indische Home',
	'import'=>array(
		'ext.YiiMailer.YiiMailer',
	),
	// preloading 'log' component
	'preload'=>array('log'),

	// application components
	'components'=>array(

		'swiftMailer' => array(
    		'class' => 'ext.swiftMailer.SwiftMailer',
		),

		// database settings are configured in database.php
		'db'=>require(dirname(__FILE__).'/database.php'),

		'log'=>array(
			'class'=>'CLogRouter',
			'routes'=>array(
				array(
					'class'=>'CFileLogRoute',
					'levels'=>'error, warning',
				),
			),
		),

	),
);