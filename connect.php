<?php
    $serverName = "MG3579-20181014\MSQL14E";
    // $connInfo = array("Database" => "member", "CharacterSet" => "UTF-8");
 
    try{
        $conn = new PDO("sqlsrv:Server=$serverName;Database=member", "", "");
        $conn -> setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }catch(PDOException $e){
        die( print_r( $e -> getMessage()."<br>"));
    }


    date_default_timezone_set("Asia/Taipei");
    

    session_start();
    function select($where){
        global $conn;
        return $conn ->query("select * from membertb where {$where}") ->fetchAll();
    }
    
    function insert($arra){
        global $conn;
        $today = date("Y-m-d");
        $ro = select("1=1");
        $count = count($ro)+1;
        $table_name="m_seq";
        $table_val= $count;
        foreach($arra as $name => $value){
            $table_name.=",".$name;
            $table_val.=",'".$value."'";
        }
        $conn ->exec( "insert into membertb (".$table_name.", m_del, m_date) values (".$table_val.",0,'".$today."')" );
        return $conn;
    }


    function delete($arra){
        global $conn;
        foreach($arra as $name => $data){
            switch($name){
                case 'del':
                    if(!is_array($data))
                        $conn->exec("UPDATE membertb SET m_del=1 WHERE m_seq=".$data);
                    else
                        foreach($data as $idx)
                            $conn->exec("UPDATE membertb SET m_del=1 WHERE m_seq=".$idx);
                break;
                case 'delat':
                    $conn->exec("UPDATE membertb SET m_del=1 WHERE ".$data);
                break;
            }
        }
    }


    $go=(empty($_GET["do"]))? "main": $_GET["do"];
?>