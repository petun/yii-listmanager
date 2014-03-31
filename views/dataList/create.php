<?php
/* @var $this DataListController */
/* @var $model DataList */
?>

<?php
$this->breadcrumbs=array(
	'Data Lists'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List DataList', 'url'=>array('index')),
	array('label'=>'Manage DataList', 'url'=>array('admin')),
);
?>

<h1>Create DataList</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>