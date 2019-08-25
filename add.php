<?php
    $date = substr(date("Ym"),2);
    $ran = str_pad(rand(1,1000),3,'0',STR_PAD_LEFT);
    $ro = select("m_del=0");
    // $ro -> excute();
    // $row = $ro ->setFetchMode(PDO::FETCH_ASSOC);
    foreach($ro as $row){
       $da = substr($row["m_id"],0,4) ;
       $no = substr($row["m_id"],4,3) ;
       $n = ($da==$date)? $no+1 : 1;
    }

    $m_id = $date.str_pad($n,3,"0",STR_PAD_LEFT).$ran;
?>
<form method="post">
    <table>
    <tr>
        <td colspan=2>
            <h3>新增會員資料</h3>
        </td>
    </tr>    
        <tr>
            <td>會員編號</td>
            <td><input name="m_id" value=<?=$m_id?> readonly="readonly" required></td>
        </tr>
        <tr>
            <td>會員帳號</td>
            <td><input name="m_acc" required></td>
        </tr>
        <tr>
            <td>會員姓名</td>
            <td><input name="m_name" required></td>
        </tr>
        <tr>
            <td>積分</td>
            <td><input name="m_points"></td>
        </tr>
        <tr>
            <td>居住地</td>
            <td><input name="m_address" required></td>
        </tr>
        <tr>
            <td colspan=2>
                <button onclick="add()">確定</button>
            </td>
        </tr>
    </table>
</form>
<script>
    function add(){
        var m_id=$("input[name=m_id]").val();
        var m_acc=$("input[name=m_acc]").val();
        var m_name=$("input[name=m_name]").val();
        var m_points=$("input[name=m_points]").val();
        var m_address=$("input[name=m_address]").val();
        if(m_id==""||m_acc==""||m_name==""||m_address=="") alert("不可空白");
        else
            $.post("api.php?r=add",{m_id,m_acc,m_name,m_points,m_address},function(o){
                alert(o);
            });        
    }
</script>