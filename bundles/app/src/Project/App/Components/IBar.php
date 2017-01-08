<?php
/**
 * Created by PhpStorm.
 * User: werd
 * Date: 05.01.17
 * Time: 1:23
 */

namespace Project\App\Components;


interface IBar
{
    function setItem();

    function getItem();

    function toString();
}