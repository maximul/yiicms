<?php
/* @var $this PageController */

$this->breadcrumbs=array(
	'Категория: ' . $model->category->title => array('index', 'id'=>$model->category_id),
    $model->title,
);
?>

<h1><?php echo $model->title;?></h1>
<?php
	echo date('j.m.Y H:i:s', $model->created);
?>
<hr />

<?php
	echo $model->content;
?>

<?php
/* @var $this CommentController */
/* @var $model Comment */
/* @var $form CActiveForm */
?>

<hr />

<?php if(Yii::app()->user->hasFlash('comment')): ?>

<div class="flash-success">
	<?php echo Yii::app()->user->getFlash('comment'); ?>
</div>

<?php else: ?>
<?php
	echo $this->renderPartial('newComment', array('model' => $newComment));
?>
<?php endif; ?>
<?php $this->widget('zii.widgets.CListView', array(
    'dataProvider'=>Comment::all($model->id),
    'itemView'=>'_viewComment',
    'sorterHeader' => 'Сортировать по:',
    'summaryText' => '{start} - {end} из {count}',
    'sortableAttributes' => array('guest','user_id','created','content')
)); ?>