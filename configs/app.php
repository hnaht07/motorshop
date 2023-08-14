<?php 
$config['app'] = [
    'service' => [
        HtmlHelper::class
    ],
    'routeMiddleware' =>[
        'quan-ly' => AuthMiddleware::class,
        'them' => AuthMiddleware::class,
        'thong-tin' => AuthMiddleware::class,
        'chinh-sua' => AuthMiddleware::class,
        'ban-tin' => AuthMiddleware::class,
        'them-ban-tin' => AuthMiddleware::class,
        
    ],
    'globalMiddleware' =>[
       ParamsMiddleware::class
    ],
    'boot' => [
        AppServiceProvider::class
    ]
        
];

?>