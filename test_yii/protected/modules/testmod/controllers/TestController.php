<?php

class TestController extends Controller
{
    public function actionIndex()
    {
        $data = array(
            'left_menu' => array(
                'test' => 'tst1',
                'test2' => 'tst2',
            ),
        );
        $this->render('testmod.views.test.index', $data);
    }

}
