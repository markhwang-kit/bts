<?php
    require 'dbconfig.php';

    // dbconfig.php 파일 내용
    // function dbconn() {
    //     $host = "localhost";
    //     $user = "";
    //     $pw = "";
    //     $dbName = "";
    //     return new mysqli($host, $user, $pw, $dbName);
    // }

    // $keyword = $_GET["keyword"];   // 테스트
    
    function insert_msg($name, $email, $phone, $message) {
        
        $conn = dbconn();  // db 연결
        /* DB 연결 확인 */
        if($conn){ echo "연결성공"."<br>"; }
        else{ die( '연결실패: ' . mysqli_error($conn) ); }
        
        /* INSERT 예제 */
        $sql = "INSERT INTO `msg` (`name`, `email`, `phone`, `message`) VALUES ('$name', '$email', '$phone', '$message')";
        $result = mysqli_query($conn, $sql);
        
        // if($result) { echo "insert success!"; }
        // else { echo "failure"; }

        mysqli_close($conn);
    }

    function select_msg() {
        $conn = dbconn();  // db 연결
        /* DB 연결 확인 */
        if($conn){ echo "Connection established"."<br>"; }
        else{ die( 'Could not connect: ' . mysqli_error($conn) ); }
        
        /* SELECT 예제 */
        $sql = "SELECT * FROM msg";
        $result = mysqli_query($conn, $sql);
        while($row = mysqli_fetch_array($result)){
            echo $row['name']."<br>";
            echo $row['email']."<br>";
            echo $row['phone']."<br>";
            echo $row['message']."<br>";
        }
        
        mysqli_close($conn);
    }

    // insert_keyword($keyword);
?>