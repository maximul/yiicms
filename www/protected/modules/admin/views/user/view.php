<?php
/* @var $this UserController */
/* @var $model User */

$this->menu=array(
	array('label'=>'Журнал пользователей', 'url'=>array('index')),
	array('label'=>'Изменение пользователя', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Удаление пользователя', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Вы уверены?')),
);
?>

<h1>Просмотр пользователя #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'username',
		'password',
		'created' => array(
            'name' => 'created',
            'value' => date("j.m.Y H:i:s", $model->created),
        ),
		'ban' => array(
            'name' => 'ban',
            'value' => ($model->ban==1)?"Бан":" ",
        ),
		'role' => array(
            'name' => 'role',
            'value' => ($model->role==1)?"User":"Admin",
        ),
		'email',
	),
)); ?>
