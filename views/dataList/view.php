<?php
/* @var $this DataListController */
/* @var $model DataList */
?>

<?php
$this->breadcrumbs=array(
	'Data Lists'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List DataList', 'url'=>array('index')),
	array('label'=>'Create DataList', 'url'=>array('create')),
	array('label'=>'Update DataList', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete DataList', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage DataList', 'url'=>array('admin')),
);
?>

<h1>View DataList #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView',array(
    'htmlOptions' => array(
        'class' => 'table table-striped table-condensed table-hover',
    ),
    'data'=>$model,
    'attributes'=>array(
		'id',
		'type',
		'name',
		'position',
	),
)); ?>