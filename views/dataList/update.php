<?php
/* @var $this DataListController */
/* @var $model DataList */
?>



<?php

$this->breadcrumbs=array(
	Yii::t('DataListModule.main', 'Data Lists') => array('index'),
	Yii::t('DataListModule.main','Update Item #').$model->id,
);

$this->menu=array(
	array('label'=>Yii::t('DataListModule.main', 'Data Lists'), 'url'=>array('index')),
);
?>

    <h1><? echo Yii::t('DataListModule.main','Update Item #').$model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>