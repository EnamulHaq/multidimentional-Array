<?php
/*$customer_header=array("Serial No","Name","Roll","Id","Department");
   $customer_info=array(
     array(1,"Rahim",20512,23,"cse"),
     array(2,"Karim",25625,25,"cse"),
     array(3,"Salam",3252,36,"cse"),
     array(4,"Salam",3252,36,"cse")
    );
  $customer_info_row=count($customer_info);
  $customer_info_column=count($customer_info[0]);
  $total_customer=count($customer_header);
?>

<table>
  <tr>
    <?php
       for ($h=0; $h < $total_customer; $h++) { 
         ?>
              <th><?php echo $customer_header[$h]; ?></th>
         <?php
       }
    ?>
  </tr>
  <?php 
     for ($i=0; $i < $customer_info_row ; $i++) { 
       ?>
            <tr>
              <?php
                 $k=0;
                 for ($d=0; $d < $customer_info_column ; $d++) { 
                  $k++;
                  ?>
                    <td><?php echo $customer_info[$i][$d]; ?></td>
                  <?php
                 }
              ?>
            </tr>
       <?php
     }
   ?>
</table>
*/



