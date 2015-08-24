<?php
/**
 * Created by PhpStorm.
 * User: e.yakovets
 * Date: 18.08.2015
 * Time: 18:54
 */

class TransliterateCommand extends CConsoleCommand
{
    public $defaultAction='transliterate';

    public function actionTransliterate($text)
    {
        echo Yii::app()->TranslitHelper->transliterate($text, true, '-');
    }

    public function getHelp()
    {
        echo 'Usage: how to use this command';
    }
}

