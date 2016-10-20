  <?php 
  use yii\helpers\Html;
  
  ?>
<table  class="table table-bordered table-hover table-striped">
    <thead>
       
      <tr>
        <th>ลำดับ</th>
        <th>รหัสประเภท</th>
        <th>ประเภทคอม</th>
        <th>รายละเอียดเพิ่มเติม</th>

      </tr>
      
    </thead>
 
    <tbody>
     
     <?php 
     foreach ($data as $i=>$item ){
            //print_r($com);
            //echo $value->brand.'<br>';
            
           //echo ($key+1).' : '.$value->brand.' / '.$value->asset_code.' / '.$value->cpu_type.'<br>';
      
        
    echo '<tr>';
    echo '<td>'.($i+1).'</td>';
    echo '<td>'.$item['com_type_id'].' </td>';
    echo '<td>'.$item['com_type_name'].'</td>';
    echo '<td>'.Html::a(' <span class="glyphicon glyphicon-list-alt"></span>', ['/report_com_detail','id'=>$item['com_type_id']]).'</td>';
    echo '</tr>';
    
     }
     
    
    ?>
        
    </tbody>
  </table>
            