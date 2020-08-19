<?php
 
        $connect = mysqli_connect('localhost', 'root', 'root', 'board') or die("fail");
 
 
        $id=$_GET[id];
        $pw=$_GET[pw];
        $email=$_GET[email];
 
        $date = date('Y-m-d H:i:s');
 
        //입력받은 데이터를 DB에 저장
        $query = "insert into member (id, pw, email, date, permit) values ('$id', '$pw', '$email', '$date', 0)";
 
 
        $result = $connect->query($query);
 
        //저장이 됬다면 (result = true) 가입 완료
        if($result) {
        ?>      <script>
                alert('가입 되었습니다.');
                location.replace("./login.php");
                </script>
 
<?php   }
        else{
?>              <script>
                        
                        alert("fail");
                </script>
<?php   }
 
        mysqli_close($connect);
?>

