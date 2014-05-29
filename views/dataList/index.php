<?php
/* @var $this DataListController */
/* @var $dataProvider CActiveDataProvider */
?>

<?php
$this->breadcrumbs=array(
	Yii::t('DataListModule.main','Data Lists'),
);

$this->menu=array(
	array('label'=>Yii::t('DataListModule.main','New Item List'),'url'=>array('create')),
);
?>

<h1><?=Yii::t('DataListModule.main','Data Lists');?></h1>
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