<?php
    $conn = mysqli_connect('localhost','root','','airplane_management');
    if($conn){
      echo "Connection Successful.";
    }
    else{
      echo"Connection error";
    }

      ?>

      <!DOCTYPE html>
      <html lang="en">
      <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Index page</title>
        <style>
            table{
                border :1px solid black;
            }
            th,td{
                border :1px solid black;
            }
            .btn1{
        margin-top:150px;
        margin-left:3%;
        text-align:center;

     }
     .btn1 h2{
        color:white;
        margin-bottom:20px;
     }
     .btns{
        
        margin-top: 30px;
	width: 80px;
	background-color: orange;
    margin:10px;
	color: white;
	font-size: 10px;
	padding: 8px 10px;
	text-align: center;
	border: transparent 1px solid;
	border-radius: 8px; 
    margin-bottom:200px;
     }
     .btns:hover {
        background-color: white;
	color: orange;
	border: orange 1px solid;
	transition: 0.3s;
	cursor: pointer;
  
}
        </style>
      </head>
      <body>
      <table class="table table-border">
  <thead>
    <tr>
      
      <th>ID</th>
      <th>Name</th>
      <th>Appt date</th>
      <th>From Location</th>
      <th>To Location</th>
      <th>status</th>
    </tr>
  </thead>
  <tbody>
        <?php
    $sql = "SELECT * FROM `ticket_booking`";
    $result = $conn->query($sql);

   
    if($result){
      while($row = $result->fetch_assoc()){
        echo "<tr><td>" .$row['ID'] . "</td><td>" .$row['NAME'] . "</td><td>" .$row['APPT_DATE'] . "</td><td>" .$row['FROM_LOCATION'] . "</td><td>" .$row['TO_LOCATION'] . "</td><td>" .$row['status_'] .  "</td><tr>";
      }
    }
        ?>
          </tbody>
</table>
</div>
<div class="btns1">
<button type="submit" class="btns"><a href="http://">addBooking</a></button>
<button type="submit" class="btns"><a href="http://">CancelBooking</a></button>
</div>

        
      </body>
      </html>