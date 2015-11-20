# Phalcon Slayer Browser Agent


To install this Phalcon Slayer Package, add this in your ``bootstrap/generate-composer``

    TODO...

To enable this package in your app, include this code below in your ``config/app.php``, the service provider will be registered

    'services' => [
        // ...
        Daison\Agent\BrowserAgentServiceProvider::class,
    ],


After this, go to your app/modules.php and add this to your modules

    'main'  => function(Phalcon\Di\FactoryDefault $di) {
        $views_dir = config()->path->views;

        $agent = new \Daison\Agent\BrowserAgentModule;
        $agent->loadDefault($di, [
            'tablet' => url_trimmer($views_dir.'/tablet'),
            'mobile' => url_trimmer($views_dir.'/mobile'),
            'pc'     => url_trimmer($views_dir.'/pc'),
        ]);

        $di
            ->get('dispatcher')
            ->setDefaultNamespace('App\Main\Controllers');
    }


and now you can work for your mobile/tablet/pc views located at
 - resources/views/mobile
 - resources/views/tablet
 - resources/views/pc