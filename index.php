<?
if($this->app->environment('production')) {
    \URL::forceScheme('https');
            }
php include_once("index.html"); ?>