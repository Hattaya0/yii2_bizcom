<?php

namespace frontend\controllers;

class TestController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }
    public function actionTest(){
        
   
     
    return $this->render('test');
        
  
        }
           public function actionShop(){
        
   
     
    return $this->render('shop');
    
        

        }
          public function actionTest2(){
              $a=1;
              return$this->render('test2',[]);
          }
        
        
}
