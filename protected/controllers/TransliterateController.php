<?php

class TransliterateController extends Controller
{
    /**
     * Загрузка страницы транслитерации
     */
    public function actionIndex()
    {
        $textToTranslite = '';
        if (!empty(Yii::app()->request->getParam('text')))
        {
            $textToTranslite = Yii::app()->TranslitHelper->transliterate(Yii::app()->request->getParam('text'), true, '-');
        }

        $this->render('index', ['textToTranslite' => $textToTranslite]);
    }

}