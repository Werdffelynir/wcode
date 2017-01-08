<?php

namespace Project\App\HTTPProcessors;

use PHPixie\HTTP\Request;
use PHPixie\Template;
use Project\App\Builder;

class Main extends \PHPixie\DefaultBundle\Processor\HTTP\Actions
{
    /**
     * @var Builder
     */
    protected $builder;
    /**
     * @var \PHPixie\BundleFramework\Components
     */
    protected $components;
    /**
     * @var Template Template component
     */
    protected $template;
    /**
     * Constructor
     * @param Builder $builder
     */
    public function __construct($builder)
    {
        $this->builder = $builder;
        $this->components = $this->builder->components();
        $this->template = $this->components->template();
    }
    /**
     * Default action
     * @param Request $request HTTP request
     * @return Template\Container
     */
    public function defaultAction($request)
    {
        $container = $this->template->get('app:page');
        $container->navigation = $this->template->render('app:common/navigation');
        $container->sidebar = $this->template->render('app:common/sidebar');
        $container->content = $this->template->render('app:main/list');

        $orm = $this->builder->components()->orm();

        return $container;
    }

    public function loginAction($request)
    {
        $container = $this->template->get('app:main/index');
        $container->message = "[loginAction] Have fun coding!";
        return $container;
    }



    public function loopAction($request)
    {

        $arr = new \ArrayIterator([
            'Aa','Bb','Cc','Dd','Ee','Ff','Gg', 'func' => function($a){return $a * 1000;}
        ]);

        $content = '';
/*
        while ($current = $arr->current()) {
            if (is_string($current))
                $content .= $current;

            $arr->next();

            if ($arr->key() == 'func' && is_callable($current)) {
                if ($result = call_user_func($current, 1000) ) {
                    //var_dump($result);
                }
            }


            //var_dump($arr->key());
            //offsetExists()
            //if ($arr->key() < $arr->count())
            //    $arr->next();
        }*/

        //var_dump($content);



        exit;
    }





}