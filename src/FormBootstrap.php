<?php
namespace PaulMenheere\FormBootstrap;

use Illuminate\Contracts\Config\Repository;

class FormBootstrap
{

    /**
     * @var Repository $config
     */
    protected $config;

     /**
     * Constructor.
     *
     * @param Repository $config
     */
    public function __construct(Repository $config)
    {
        $this->config = $config;

    }


}