<h1>Настройки</h1>

<?php if(Yii::app()->user->hasFlash('setting')): ?>

<div class="flash-success">
	<?php echo Yii::app()->user->getFlash('setting'); ?>
</div>

<?php endif; ?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'setting-form',
	'enableAjaxValidation'=>false,
)); ?>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'defaultStatusComment'); ?>
		<?php echo $form->checkBox($model,'defaultStatusComment'); ?>
		<?php echo $form->error($model,'defaultStatusComment'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'defaultStatusUser'); ?>
		<?php echo $form->checkBox($model,'defaultStatusUser'); ?>
		<?php echo $form->error($model,'defaultStatusUser'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Сохранить'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->