<?php
namespace Daison\Agent;

use Phalcon\Di\FactoryDefault;

class BrowserAgentModule
{
    public function loadDefault(FactoryDefault $di, $path)
    {
        $agent = $di->get('daison:agent');

        if ( isset($path['pc']) ) {
            $di
                ->get('view')
                ->setViewsDir(
                    $path['pc']
                );
        }

        if ( isset($path['mobile']) ) {
            if ( $agent->isMobile() ) {
                $di
                    ->get('view')
                    ->setViewsDir(
                        $path['mobile']
                    );
            }
        }

        if ( isset($path['tablet']) ) {
            if ( $agent->isTablet() ) {
                $di
                    ->get('view')
                    ->setViewsDir(
                        $path['tablet']
                    );
            }
        }

        return $this;
    }
}
