<?php



namespace app\controllers;

use \kartik\mpdf\Pdf;

class PdftestController extends \yii\web\Controller
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
        
        
        //return $this->render('index');
        //ดึงค่าจาก view index มาแสดงเป็น pdf
        $content = $this->renderPartial('index',['data'=>$data]);
        
        //รูปแบบคำสั่ง pdf
$pdf = new Pdf([
// set to use core fonts only
'mode' => Pdf::MODE_UTF8,
// A4 paper format
'format' => Pdf::FORMAT_A4,
// portrait orientation
'orientation' => Pdf::ORIENT_PORTRAIT,
// stream to browser inline
'destination' => Pdf::DEST_BROWSER,
// your html content input
'content' => $content,
'cssFile' => '@vendor/kartik-v/yii2-mpdf/assets/kv-mpdf-bootstrap.min.css',
// any css to be embedded if required
'cssInline' => 'body{font-family: "Garuda";font-size: 12pt;}',
// set mPDF properties on the fly
'options' => ['title' => 'บันทึกข้อความ'],
// call mPDF methods on the fly
'methods' => [
//'SetHeader' => ['Krajee Report Header'],
//'SetFooter' => ['{PAGENO}'],
]
]);
// return the pdf output as per the destination setting
return $pdf->render();

    
    }

}
