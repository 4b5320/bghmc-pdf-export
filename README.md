## Installation
Run the following commands:
```sh
$ git clone https://github.com/4b5320/bghmc-pdf-export.git
$ cd bghmc-pdf-export
$ composer install
```

Create a copy of your *.env* from *.env.example*, then run the following command:
```sh
$ php artisan key:generate
```

### Package used: [ barryvdh/laravel-snappy ](https://github.com/barryvdh/laravel-snappy).

## Important: The package used (Laravel-Snappy) does not work using **php artisan serve**. Please use a different local dev server

## Warning: ProcessTimedOutException is not yet caught. Just reload the page

## Paper Settings
Global paper customizations can be edited in **config/snappy.php**
```sh
<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Snappy PDF / Image Configuration
    |--------------------------------------------------------------------------
    |
    | This option contains settings for PDF generation.
    |
    | Enabled:
    |    
    |    Whether to load PDF / Image generation.
    |
    | Binary:
    |    
    |    The file path of the wkhtmltopdf / wkhtmltoimage executable.
    |
    | Timout:
    |    
    |    The amount of time to wait (in seconds) before PDF / Image generation is stopped.
    |    Setting this to false disables the timeout (unlimited processing time).
    |
    | Options:
    |
    |    The wkhtmltopdf command options. These are passed directly to wkhtmltopdf.
    |    See https://wkhtmltopdf.org/usage/wkhtmltopdf.txt for all options.
    |
    | Env:
    |
    |    The environment variables to set while running the wkhtmltopdf process.
    |
    */
    
    'pdf' => [
        'enabled' => true,
        'binary' => '"C:/xampp/htdocs/bghmc-pdf-export/vendor/wemersonjanuario/wkhtmltopdf-windows/bin/64bit/wkhtmltopdf.exe"',
        'timeout' => false,
        'options' => array(
            'page-size' => 'A4',
            'margin-top' => 15,
            'margin-right' => 5,
            'margin-left' => 5,
            'margin-bottom' => 15,
            'orientation' => 'Landscape',
            'footer-font-size' => 8,
        ),
        'env'     => [],
    ],
    
    'image' => [
        'enabled' => true,
        'binary'  => env('WKHTML_IMG_BINARY', '/usr/local/bin/wkhtmltoimage'),
        'timeout' => false,
        'options' => [],
        'env'     => [],
    ],

];
```