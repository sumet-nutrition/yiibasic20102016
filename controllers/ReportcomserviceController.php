<?php

namespace app\controllers;

class ReportcomserviceController extends \yii\web\Controller
{
    public function actionIndex()
    {
        //สร้างการเชื่อมต่อ
        $conn=\Yii::$app->db;
        
        //คำสั่ง sql
        $sql='select c.brand,s.* from com_service s
                left join com c on c.com_id=s.com_id';
        
         // สร้าง query
        $cmd=$conn->createCommand($sql);
        
         // run query
        $data=$cmd->queryAll();
        
         return $this->render('index',['data'=>$data]);
        
        
        //print_r($data);
        
        
        //return $this->render('index');
    }

}
