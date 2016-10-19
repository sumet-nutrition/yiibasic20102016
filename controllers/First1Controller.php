<?php

namespace app\controllers;

class First1Controller extends \yii\web\Controller
{
    public function actionIndex()
    {
        //return $this->render('index');
        
        $title='ระบบรายงาน';
        
        $person = [
            ['fname' => 'สุเมธ', 'lname' => 'ศรีโสดา', 'email' => 'com-sc521463124@hotmail.com'],
            ['fname' => 'สมหญิง', 'lname' => 'ใจงาม', 'email' => 'ying@hotmail.com'],
            ['fname' => 'ทดสอบ', 'lname' => 'ใจดี', 'email' => 'test@hotmail.com']
        ];
        
        return $this->render('index', ['title'=>$title,'person'=>$person]);
    }

}
