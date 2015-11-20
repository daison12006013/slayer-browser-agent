<?php
namespace Daison\Agent;

use Jenssegers\Agent\Agent;
use Bootstrap\Providers\ServiceProvider;

class BrowserAgentServiceProvider extends ServiceProvider
{
    protected $alias  = 'daison:agent';
    protected $shared = true;

    public function register()
    {
        return new Agent;
    }
}
