<?php

namespace Mytest\myPHP;
class test
{
    public $name = '';
    public function __construct($Name)
    {
        $this->name=$Name;
    }
    public function getName()
    {   
        echo $this->name;
    }
}

?>