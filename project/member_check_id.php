<h3>아이디 중복 체크</h3>
<p>
    <?php
        $id = $_GET["id"];
        if(!$id){
            echo("<li>아이디를 입력해주세요!</li>");
        }
        else{
            $con = mysqli_connect("localhost", "user1", "12345", "project");
            $sql = "select * from me   mbers where id ='$id'";
            $result = mysqli_query($con, $sql);
            $num_record = mysqli_num_rows($result);
            
            if($num_record){
                echo "<li>".$id."아이디는 사용 가능합니다.</li>";
            }
    
            mysqli_close($con);
        }
        
    ?>
</p>