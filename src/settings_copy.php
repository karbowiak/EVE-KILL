<?php
return [
    'settings' => [
        'displayErrorDetails'               => true, // set to false in production
        'addContentLengthHeader'            => false, // Allow the web server to send the content-length header

        // Renderer settings
        'view' => [
            'template_path'                 => __DIR__ . '/../templates/',
	        "twig"                          => [
	        	"cache"                         => __DIR__ . "/../cache/twig",
		        "debug"                         => true,
		        "auto_reload"                   => true
	        ]
        ],

        // Monolog settings
        'logger' => [
            'name'                          => 'slim-app',
            'path'                          => __DIR__ . '/../logs/app.log',
            'level'                         => \Monolog\Logger::DEBUG,
        ],

	    // Cache settings
	    "cache" => [
	    	"location"                      => __DIR__ . "/../cache"
	    ],

	    // Database Settings
	    "database" => [
	    	"host"                          => "127.0.0.1",
		    "port"                          => 3306,
		    "user"                          => "",
		    "pass"                          => "",
		    "dbName"                        => ""
	    ],
    ],
];
