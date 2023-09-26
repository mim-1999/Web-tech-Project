<?php 

require_once 'db_connect.php';

function addData($data){
    $conn = db_conn();
    $selectQuery = "INSERT INTO `Rider`(`Name`, `Email`, `Password`, `Gender`, `Date of Birth`)  VALUES (:name, :email, :password,:gender, :dob)";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
            ':name' => $_POST['name'],
            ':email' => $_POST['email'],
            ':password' => $_POST['password'],
            ':gender' => $_POST['gender'],
            ':dob' => $_POST['dob']
        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
}

function showAllData(){
	$conn = db_conn();
    $selectQuery = 'SELECT * FROM `Rider` ';
    try{
        $stmt = $conn->query($selectQuery);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}

function updateData($id, $data){
    $conn = db_conn();
    $selectQuery = "UPDATE `Rider` set `Name` = ?, `Email` = ?, where `ID` = ?";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
            $data['name'], $data['email'], $id
        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
}

function updatePassword($id, $data){
    $conn = db_conn();
    $selectQuery = "UPDATE `Rider` set `Password` = ? where `ID` = ?";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
            $data, $id
        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
}

function updatePicture($id, $data){
    $conn = db_conn();
    $selectQuery = "UPDATE `Rider` set `Image` = ? where `ID` = ?";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
            $data, $id
        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
}

function deleteProduct($id){
    $conn = db_conn();
    $selectQuery = "DELETE FROM `product_info` WHERE `ID` = ?";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$id]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $conn = null;

    return true;
}

function showData($id){
	$conn = db_conn();
	$selectQuery = "SELECT * FROM `Rider` where ID = ?";
    try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$id]);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $data = $stmt->fetch(PDO::FETCH_ASSOC);            

    return $data;
}

function searchData($name){
    $conn = db_conn();
    $selectQuery = "SELECT * FROM `Rider` WHERE Name = ?";
     try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$name]);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $data = $stmt->fetch(PDO::FETCH_ASSOC);
    return $data;
}

function showAllOrder(){
	$conn = db_conn();
    $selectQuery = 'SELECT * FROM `order` ';
    try{
        $stmt = $conn->query($selectQuery);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}

function showInfo($id){
	$conn = db_conn();
	$selectQuery = "SELECT * FROM `order` where ID = ?";
    try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$id]);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $data = $stmt->fetch(PDO::FETCH_ASSOC);

    return $data;
}


function addOrder($data){
    $conn = db_conn();
    $selectQuery = "INSERT INTO `order status`(`Order Location`, `Order Status`,`Display`)  VALUES (:location, :orderstatus, :display)";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
            
            ':location' => $data['location'],
            ':orderstatus' => $data['orderstatus'],
            ':display' =>$data['display']
        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
}

function showAllorders(){
	$conn = db_conn();
    $selectQuery = 'SELECT * FROM `order status` ';
    try{
        $stmt = $conn->query($selectQuery);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}

function showOrder($id){
	$conn = db_conn();
	$selectQuery = "SELECT * FROM `order status` where id = ?";
    try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$id]);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    return $row;
}

function searchOrder($id){
    $conn = db_conn();
    $selectQuery = "SELECT * FROM `order status` WHERE id LIKE '%$id%'";
    try{
        $stmt = $conn->query($selectQuery);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}

function showAllReview(){
	$conn = db_conn();
    $selectQuery = 'SELECT * FROM `review` ';
    try{
        $stmt = $conn->query($selectQuery);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}


?>