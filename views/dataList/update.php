<?php
/* @var $this DataListController */
/* @var $model DataList */
?>

<?php
$this->breadcrumbs=array(
	'Data Lists'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List DataList', 'url'=>array('index')),
	array('label'=>'Create DataList', 'url'=>array('create')),
	array('label'=>'View DataList', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage DataList', 'url'=>array('admin')),
);
?>

    <h1>Update DataList <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>