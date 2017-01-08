<?php

namespace Project\App;

class Console extends \PHPixie\DefaultBundle\Console
{
    /**
     * @var Builder
     */
    protected $builder;

    /**
     * Constructor
     * @param Builder $builder
     */
    public function __construct($builder)
    {
        $this->builder = $builder;
    }
    
    public function commandNames()
    {
        return array('main');
    }
    
    /**
     * Build 'greet' command
     *
     * @param \PHPixie\Console\Command\Config $commandConfig
     *
     * @return Console\Greet
     */
    protected function buildGreetCommand($commandConfig)
    {
        return new Console\Greet($commandConfig);
    }

    /**
     *  php console app:main hello heros
     * Build 'main' command
     *
     * @param \PHPixie\Console\Command\Config $commandConfig
     *
     * @return Console\Greet
     */
    protected function buildMainCommand($commandConfig)
    {
        $args = $_SERVER['argv'];
        if (count($args) > 2) $args = array_slice($args, 2);
        else $args = [];

        $stdin = fopen('php://stdin', 'r');

        print("MainJope!\n");
        print_r(stream_get_contents($stdin));
        print_r($args);

        fclose($stdin);
        exit;
    }


}