<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="./public/default/css/dao/sidebar.css">
</head>
<body>
<?php
    include "app/default/views/component/header.php";
?>
<div class="row">
    <div class="col-2" >
    <?php
        include "app/default/views/component/usersidebar.php";
    ?>
    </div>
    <div class="col-8">
    <?php
    foreach($this->items as &$item){
        print_r($item);
        echo("<br>");
    }
    // foreach($this->items as &$item){
    // echo("
    //     <div id='accordion".$item['orderid']."'>
    //     <div class='card'>
    //       <div class='card-header' id='heading".$item['orderid']."'>
    //         <h5 class='mb-0'>
    //           <button class='btn btn-link' data-toggle='collapse' data-target='#collapse".$item['orderid']."' aria-expanded='true' aria-controls='collapse".$item['orderid']."'>
    //             Đơn hàng #".$item['orderid']."
    //           </button>
    //         </h5>
    //       </div>
      
    //       <div id='collapse".$item['orderid']."' class='collapse show' aria-labelledby='heading".$item['orderid']."' data-parent='#accordion".$item['orderid']."'>
    //         <div class='card-body'>
    //             <div class='row'>
    //                 <div class='col-auto'>
    //                     Trạng thái: ".$item['status']."
    //                 </div>
    //                 <div class='col-auto'>
    //                     Địa chỉ: ".$item['address']."
    //                 </div>
    //                 <div class='col-auto'>
    //                      Phí ship: ".$item['shipfee']."
    //                 </div>
    //             </div>
    //             <div class='row px-3'>
    //                 Chi tiết:
    //             </div>
    //             <table class='table'>
    //                 <thead>
    //                     <tr>
                       
    //                         <th scope='col'>Tên</th>
    //                         <th scope='col'>Số lượng</th>
    //                         <th scope='col'>Giá</th>
    //                         <th scope='col'>Thành tiền</th>
    //                     </tr>
    //                 </thead>
    //                 <tbody>");

    //                 foreach($item['items'] as &$subItem){
    //                     echo("
    //                     <tr>
                           
    //                         <td>".$subItem['name']."</td>
    //                         <td>".$subItem['quantity']."</td>
    //                         <td>".$subItem['price']."</td>
    //                         <td>".($subItem['price']*$subItem['quantity'])."</td>
    //                     </tr>
    //                     ");
    //                 }
    //         echo("</tbody>
    //             </table>
    //         </div>
    //       </div>
    //   </div>
    //     "
    //     );
    // }
?>
    </div>
    <div class="col-2">

    </div>
</div>    


</body>
</html>