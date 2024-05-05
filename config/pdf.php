<?php

return [
	'mode'                  => 'utf-8',
	'format'                => 'A4',
	'author'                => '',
	'subject'               => '',
	'keywords'              => '',
	'creator'               => 'Laravel Pdf',
	'display_mode'          => 'fullpage',
	'tempDir'               => base_path('../temp/'),
	'pdf_a'                 => false,
	'pdf_a_auto'            => false,
	'icc_profile_path'      => '',
	'font_path' => base_path('resources/fonts/'),
	'font_data' => [
        'solaiman_lipi' => [
            'BI'  => 'Nikosh.ttf',  
            'R'  => 'NikoshBAN.ttf',       
            'B'  => 'SolaimanLipi_22-02-2012.ttf',     
            'useOTL' => 0xFF,    
            'useKashida' => 75, 
        ]
        // ...add as many as you want.
    ]
];
