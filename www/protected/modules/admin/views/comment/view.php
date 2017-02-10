<?php
/* @var $this CommentController */
/* @var $model Comment */

$this->menu=array(
	array('label'=>'Журнал комментария', 'url'=>array('index')),
	array('label'=>'Удалить комментарий', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
);
?>

<h1>Просмотр комментария #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'content',
		'page_id' => array(
            'name' => 'page_id',
            'value' => $model->page->title,
        ),
		'created' => array(
            'name' => 'created',
            'value' => date("j.m.Y H:i:s", $model->created),
        ),
		'user_id' => array(
            'name' => 'user_id',
            'value' => $model->user->username,
        ),
		'guest',
	),
)); ?>
