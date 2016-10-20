<?php

namespace app\controllers;

class ChartcomController extends \yii\web\Controller
{
   public function actionIndex() {

        //สร้างการเชื่อมต่อ
        $conn = \Yii::$app->db;

        //คำสั่ง sql
        $sql = 'select t.com_type_name,count(c.com_id)as cdata from com c
        left join com_type t on t.com_type_id=c.com_type_id
        group by c.com_type_id';

        // สร้าง query
        $cmd = $conn->createCommand($sql);

        // run query
        $data = $cmd->queryAll();
        
        foreach ($data as $item) {
            $chart[]=['name'=>$item['com_type_name'],'data'=>[intval($item['cdata'])]];
        }

//        print_r($chart);
//       
//       die();


        return $this->render('index',['chart'=>$chart]);
    }

}
