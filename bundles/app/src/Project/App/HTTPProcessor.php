<?php

namespace Project\App;

class HTTPProcessor extends \PHPixie\DefaultBundle\Processor\HTTP\Builder
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

    /**
     * Build 'admin' processor
     * @return HTTPProcessors\Admin
     */
    protected function buildAdminProcessor()
    {
        $components = $this->builder->components();

        return new HTTPProcessors\Admin(
            $components->template()
        );
    }

    /**
     * @return HTTPProcessors\Main
     */
    protected function buildMainProcessor()
    {
        /*$components = $this->builder->components();
        return new HTTPProcessors\Main(
            $components->template()
        );*/
        return new HTTPProcessors\Main($this->builder);
    }











}