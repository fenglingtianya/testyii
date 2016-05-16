<?php

class TestController extends Controller
{
    public function actionIndex()
    {
        echo Yii::getPathOfAlias('@foo/test/file.php');
//        echo 'test controller';
    }

    public function beforeAction($action)
    {
        echo 'before';
        return parent::beforeAction($action);
    }

    public function afterAction($action)
    {
        parent::afterAction($action);
        echo 'after';
    }

}
