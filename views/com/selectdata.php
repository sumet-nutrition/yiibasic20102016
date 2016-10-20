<table  class="table table-bordered table-hover table-striped">
    <thead>
       
      <tr>
        <th>ลำดับ</th>
        <th>ยี้ห้อ</th>
        <th>รหัสครุภัณฑ์</th>
        <th>ประเภทซีพียู</th>
      </tr>
      
    </thead>
 
    <tbody>
     
     <?php 
     foreach ($com as $i=>$item ){
            //print_r($com);
            //echo $value->brand.'<br>';
            
           //echo ($key+1).' : '.$value->brand.' / '.$value->asset_code.' / '.$value->cpu_type.'<br>';
      
        
    echo '<tr>';
    echo '<td>'.($i+1).'</td>';
    echo '<td>'.$item->brand.' </td>';
    echo '<td>'.$item->asset_code.'</td>';
    echo '<td>'.$item->cpu_type.'</td>';
    echo '</tr>';
    
     }
    
    ?>
        
    </tbody>
  </table>
            


      
 