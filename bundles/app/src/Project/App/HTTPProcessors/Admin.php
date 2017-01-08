<?php

namespace Project\App\HTTPProcessors;

use PHPixie\HTTP\Request;
use PHPixie\Template;
use Project\App\Components\DomBuilder;

class Admin extends \PHPixie\DefaultBundle\Processor\HTTP\Actions
{
    /**
     * @var Template Template component
     */
    protected $template;

    /**
     * Constructor
     * @param Template $template
     */
    public function __construct($template)
    {
        $this->template = $template;
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
        $container->content = $this->template->render('app:main/default');
        return $container;


//        $dom = new DomBuilder();
//
//        $htmlMenu = $dom->element(
//            'inside box content...\ ',
//            [
//                'id' => 'app-sidebar-menu',
//                'class' => 'app-sidebar-menu xbox'
//            ]);

//        print($htmlMenu);
//        die;

//        $container = $this->template->get('app:admin/index');
//        $container->message = "[loginAction] Have fun coding!";
    }
}