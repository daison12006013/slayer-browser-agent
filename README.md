# Phalcon Slayer Browser Agent

Supporting Phalcon Browser Agent

To enable this package to your Slayer App, include this code in your ``config/app.php services``

    Daison\Agent\BrowserAgentServiceProvider::class,``


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