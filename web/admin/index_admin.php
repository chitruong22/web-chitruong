<?php
session_start();
?>
<?php
//tiến hành kiểm tra là người dùng đã đăng nhập hay chưa
//nếu chưa, chuyển hướng người dùng ra lại trang đăng nhập
if (!isset($_SESSION['user_name'])) {
   header('Location: login_admin.php');
}
?>
<!DOCTYPE html>
    <html>
    <head>
      <title></title>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet" type="text/css"> <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <style type="text/css">
    
  </style>
    </head>
    <body>
    <div class="container"> 
     <div class="row"> 
      <h1 class="text-center">List song</h1> 
      <div class="col-md-10 col-md-offset-1"> 
       <div class="panel panel-default panel-table"> 
        <div class="panel-heading"> 
         <div class="row"> 
          <div class="col col-xs-6"> 
           <h3 class="panel-title">list</h3> 

          </div> 
          <div class="col col-xs-6 text-right"> 
       <form action="add.php">
         <input type="submit" name="them moi" value="add new song">
       </form>
      </div> 
         </div> 
        </div> 
        <div class="panel-body"> 
         <table class="table table-striped table-bordered table-list"> 
          <thead> 
           <tr> 
            <th><em class="fa fa-cog"></em>
            </th> 
            <th class="hidden-xs">Song name</th> 
            <th>song mp3</th> 
            <th>song lyric</th> 
            <th>img</th> 
            <th>song price</th> 
           </tr> 
          </thead> 
          <tbody>
            <?php
                         $conn = mysqli_connect("localhost","root","","test");
                    
                          $get_pro = "select * from song LIMIT 0,8";
                          $run_pro = mysqli_query($conn, $get_pro);
                             while($row_pro = mysqli_fetch_array($run_pro)){
                              $Song_id = $row_pro['song_id'];
                            $Song_lyric = $row_pro['song_lyric'];
                          $Song_name = $row_pro['song_name'];
                         $Song_image = $row_pro['img'];
                           $Song_price = $row_pro['song_price'];
                            $Song_mp3 = $row_pro['song_mp3'];
                                     echo "<tr>
                                     <td align='center'>
                                     <a class='btn btn-default' href='update.php?id=$Song_id'><em class='fa fa-pencil'></em></a> 
                                      <a class='btn btn-danger' href='delete.php?id=$Song_id' ><em class='fa fa-trash'></em></a>
                                    </td> 
                 <td class='hidden-xs'>$Song_name</td> 
                 <td>$Song_mp3</td>
                 <td>$Song_lyric</td> 
                 <td><img  style='width: 50px;height: 50px;' src='images/$Song_image'></td>
                 <td>$Song_price</td>
                 
                 
               </tr>

                                         ";
                      }?>
         </tbody></table> 
        </div> 
      </div> 
     </div>
    </div>
    <script src="js/jquery-1.11.1.min.js"></script>
    </body>
    </html>