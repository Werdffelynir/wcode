<?php
/**
 * Created by PhpStorm.
 * User: werd
 * Date: 27.12.16
 * Time: 21:17
 */

namespace Project\App\Components;


class DomBuilder
{

    public function __construct(){}

    public function element($content = '', $attrs = [])
    {
        $dom = new \DOMDocument('1.0', 'utf-8');
        $element = $dom->createElement('div', $content);
        if (!empty($attrs))
            foreach ($attrs as $n => $v)
                $element->setAttribute($n, $v);
        $dom->appendChild($element);
        return $dom->saveHTML();
    }

}