<?php

class PageController extends Controller
{
    public function actions()
	{
		return array(
			// captcha action renders the CAPTCHA image displayed on the contact page
			'captcha'=>array(
				'class'=>'CCaptchaAction',
				'backColor'=>0xFFFFFF,
			),
		);
	}
    
	public function actionIndex($id)
	{
	    $models = Page::model()->findAllByAttributes(array('category_id' => $id));
        $category = Category::model()->findByPk($id);
        
		$this->render('index', array('models' => $models, 'category' => $category));
	}
    
    public function actionView($id)
	{
        $model = Page::model()->findByPk($id);
        
        $newComment = new Comment;
        
        if(Yii::app()->user->isGuest)
            $newComment->scenario = 'Guest'; 
                   
        if(isset($_POST['Comment']))
        {
            $setting = Setting::model()->findByPk(1);
            $newComment->attributes=$_POST['Comment'];
            $newComment->page_id=$model->id;
            
            if($setting->defaultStatusComment==0){
                $newComment->status = 0;
            } else {
                $newComment->status = 1;
            }
            
            if($newComment->save()){
                
                if($setting->defaultStatusComment==0){
                    Yii::app()->user->setFlash('comment','Ждите подтверждения комментария.');
                } else {
                    Yii::app()->user->setFlash('comment','Ваш комментарий опубликован.');
                }
                $this->refresh();
            }
        }
        
		$this->render('view', array('model' => $model, 'newComment' => $newComment));
	}

}