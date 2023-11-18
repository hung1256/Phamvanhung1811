<?php

$link = mysqli_connect("localhost", "root", "", "thuchanh18112023");
 
if($link === false){
    die("ERROR: Không thể kết nối. " . mysqli_connect_error());
}
 
// Cố gắng thực hiện câu lệnh INSERT
$sql = "INSERT INTO myguests (first_name, last_name, email) VALUES ('Trung', 'BAo', 'baotrung222@mail.com')";
if(mysqli_query($link, $sql)){
    // Lấy ID đã chèn cuối cùng
    $last_id = mysqli_insert_id($link);
    echo "Chèn bản ghi thành công. ID đã chèn cuối cùng là: " . $last_id;
} else{
    echo "ERROR: Không thể thực thi câu lệnh $sql. " . mysqli_error($link);
}
 
// Đóng kết nối
mysqli_close($link);
?>