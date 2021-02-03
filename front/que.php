<fieldset>
    <legend>目前位置:首頁>問卷調查</legend>
    <table>
        <tr>
            <td>編號</td>
            <td>問券題目</td>
            <td>投票總數</td>
            <td>結果</td>
            <td>狀態</td>
        </tr>
        <?php
        $que=$Que->all(['parent'=>0]);
        foreach($que as $k=>$que){
        ?>
        <tr>
            <td><?=($k+1);?></td>
            <td><?=$que['text'];?></td>
            <td><?=$que['count'];?></td>
            <td><a href="?do=result&q=<?=$que['id'];?>">結果</a></td>
            <td>
            <?php
            if(empty($_SESSION['login'])){
                echo "請先登入";
            }else{
                echo "<a href='?do=vote&q={$que['id']}'>參與投票</a>";
            }
            ?>
            </td>
        </tr>
        <?php
        }
        ?>
    </table>
</fieldset>