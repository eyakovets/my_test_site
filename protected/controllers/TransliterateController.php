<?php

class TransliterateController extends Controller
{
    /**
     * Загрузка страницы транслитерации
     */
    public function actionIndex()
    {
        $textToTranslit = '';
        if (!empty(Yii::app()->request->getParam('text')))
        {
            $textToTranslit = TranslitHelper::transliterate(Yii::app()->request->getParam('text'), true, '-');
        }

        $this->render('index', ['textToTranslit' => $textToTranslit]);
    }
}