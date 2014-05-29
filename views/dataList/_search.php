<?php
/* @var $this DataListController */
/* @var $model DataList */
/* @var $form CActiveForm */
?>

<div class="wide form">

    <?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>


	<?php echo $form->dropDownList($model, 'type' , DataList::model()->types()); ?>


        <div class="form-actions">
        <?php echo TbHtml::submitButton(Yii::t('DataListModule.main','Search'),  array('color' => TbHtml::BUTTON_COLOR_PRIMARY,));?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- search-form -->