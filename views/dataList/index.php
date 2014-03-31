<?php
/* @var $this DataListController */
/* @var $dataProvider CActiveDataProvider */
?>

<?php
$this->breadcrumbs=array(
	'Data Lists',
);

$this->menu=array(
	array('label'=>'Create DataList','url'=>array('create')),
	array('label'=>'Manage DataList','url'=>array('admin')),
);
?>

<h1>Data Lists</h1>
	<div class="search-form">
		<?php $this->renderPartial('_search',array(
			'model'=>$model,
		)); ?>
	</div>


<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'data-list-grid',
	'ajaxUpdate'=>false,
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'type',
		'name',
		'position',
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>