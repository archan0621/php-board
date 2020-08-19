<?php
                $connect = mysqli_connect('localhost', 'root', 'root', 'board');
                $number = $_GET['number'];
                session_start();
                $query = "select title, content, date, hit, id from board where number =$number";
                $result = $connect->query($query);
                $rows = mysqli_fetch_assoc($result);
        ?>
 
        <table class="view_table" align=center>
        <tr>
                <td colspan="4" class="view_title"><?php echo $rows['title']?></td>
        </tr>
        <tr>
                <td class="view_id">작성자</td>
                <td class="view_id2"><?php echo $rows['id']?></td>
                <td class="view_hit">조회수</td>
                <td class="view_hit2"><?php echo $rows['hit']?></td>
        </tr>
 
 
        <tr>
                <td colspan="4" class="view_content" valign="top">
                <?php echo $rows['content']?></td>
        </tr>
        </table>
 
 
        <!-- MODIFY & DELETE -->
        <div class="view_btn">
                <button class="view_btn1" onclick="location.href='./index.php'">목록으로</button>
                <button class="view_btn1" onclick="location.href='./modify.php?number=<?=$number?>&id=<?=$_SESSION['userid']?>'">수정</button>
 
                <button class="view_btn1" onclick="location.href='./delete.php?number=<?=$number?>&id=<?=$_SESSION['userid']?>'">삭제</button>
        </div>