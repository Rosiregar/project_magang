<?php

$conn =mysqli_connect("localhost","root","","db_web");

function query ($query) {
    global $conn;
    $result =mysqli_query($conn,$query);
    $rows =[];
    while($row = mysqli_fetch_assoc ($result)) {
        $rows [] = $row;
    }
    return $rows;

}

function tambahuser ($data) {
global $conn;
$name = htmlspecialchars ($data['name']);
$email = htmlspecialchars ($data['email']);
$password = htmlspecialchars ($data['password']);

$query = "INSERT INTO user VALUES
('', '$name','$email', '$password')";

mysqli_query($conn, $query);

return mysqli_affected_rows($conn);

}
function ubah($data){
    global $conn;
    $id = $data ['id'];
    $name = htmlspecialchars($data['name']);
    $email = htmlspecialchars($data['email']);
    $password = htmlspecialchars($data['password']);
    
//     $query ="UPDATE  user SET
//             name = '$name',
//             email = '$email',
//             password = '$password',
//     WHERE id = $id

//  ";
 $query = "UPDATE user SET 
 name = '$name',
 email = '$email',
 password = '$password'
 
 WHERE id = $id";

mysqli_query($conn,$query);

return mysqli_affected_rows($conn);
}
function hapus($id) {
    global $conn;

    mysqli_query($conn, "DELETE FROM user WHERE id=$id");
    return mysqli_affected_rows($conn);
}
function cari($keyword){
    $query = "SELECT * FROM user WHERE 
    name LIKE '%$keyword%' OR email LIKE '$email'";

    return query($query);
}