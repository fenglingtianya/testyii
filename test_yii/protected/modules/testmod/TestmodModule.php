<?php

class TestmodModule extends CWebModule
{

     public $param;

    public function init()
    {
        $this->setImport(array(
            'testmod.models.*',
            'testmod.components.*',
        ));
    }

}
