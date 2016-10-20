<?php

namespace app\controllers;

class ReportcomtypeController extends \yii\web\Controller
{
    public function actionIndex()
    {
       //สร้างการเชื่อมต่อ
        $conn=\Yii::$app->db;
        //คำสั่ง sql
        $sql='select * from com_type';
        // สร้าง query
        $cmd=$conn->createCommand($sql);
        // run query
        $data=$cmd->queryAll();
        
//        print_r($data);
//        die();
//        
    return $this->render('index',['data'=>$data]);
    }

}
