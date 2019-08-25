<table>
        <tr>
            <th>序號</th>
            <th>會員編號</th>
            <th>會員帳號</th>
            <th>會員姓名</th>
            <th>積分</th>
            <th>居住地</th>
            <th>加入日期</th>
            <th>操作</th>
        </tr>
    <?php
        $i=0;
        $ro=select("m_del=0");
        //$ro = $conn->query($sql);
        // $ro ->setFetchMode(PDO::FETCH_ASSOC);
        foreach($ro as $row){
            $i++;
    ?>
        <tr>
            <td><?=$i?></td>
            <td><?=$row["m_id"]?></td>
            <td><?=$row["m_acc"]?></td>
            <td><?=$row["m_name"]?></td>
            <td><?=$row["m_points"]?></td>
            <td><?=$row["m_address"]?></td>
            <td><?=$row["m_date"]?></td>
            <td>
    <form method="post" action="api.php?r=del">           
                <input type="hidden" name="del" value="<?=$row['m_seq']?>">
                <input type="submit" value="刪除">
    </form>             
            </td>
        </tr>
    <?php
        }
    ?>
</table>