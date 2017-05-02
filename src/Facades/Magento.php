<?php
namespace PaulMenheere\FormBootstrap\Facades;

use Illuminate\Support\Facades\Facade;

class FormBootstrap extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     *
     * @throws \RuntimeException
     */
    protected static function getFacadeAccessor()
    {
        return 'formbootstrap';
    }
}