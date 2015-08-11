<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>
<form action="" method="post">
    <p><?php echo $textToTranslit; ?></p>
    <textarea name="text" style="width:600px; height: 400px"></textarea>
    <br>
    <input type="submit" />
</form>