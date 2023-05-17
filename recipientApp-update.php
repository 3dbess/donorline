<?php
include "dbconfig.php";
$id=$_GET['updateid'];
$sql="SELECT * from `requests` where id=$id";
$result = mysqli_query($conn, $sql);
$row=mysqli_fetch_assoc($result);
$name=$row['name'];
$address=$row['address'];
$units=$row['units'];
$bloodtype=$row['bloodtype'];
$purpose=$row['purpose'];
$remarks=$row['remarks'];


if($_SERVER["REQUEST_METHOD"] == "POST"){
    $name=$_POST['name'];
    $address=$_POST['address'];
    $units=$_POST['units'];
    $bloodtype=$_POST['bloodtype'];
    $purpose=$_POST['purpose'];
    $remarks=$_POST['remarks'];

    $sql = "UPDATE `requests` SET name ='$name', address ='$address', units='$units', bloodtype='$bloodtype', purpose='$purpose', remarks='$remarks', status='pending'  WHERE id=$id";


    if ($conn->query($sql) === TRUE) {
        header("Location: recipient-requests.php");
    } else {
        echo "Error updating record: " . $conn->error;
    }
    
    $conn->close();
}
?>

<?php 
include "head.php";
include "recipient-navbar.php";
?>
<section class="donate" id="appoint">
    <h1 class="heading"> <span>Update</span> Appointment</h1>    

    <div class="row">

        <div class="image">
            <img src="image/schedule.gif" alt="">
        </div>

        <form method="post">
            <h3>Appointment Form</h3>
            <input type="text" placeholder="Enter Your Full Name" class="box" name="name" value="<?php echo htmlspecialchars($name); ?>" required>
            <input type="text" placeholder="Address" class="box" name="address" value="<?php echo htmlspecialchars($address); ?>"required>
            <input type="number" placeholder="Enter Units Needed" class="box" name="units" value="<?php echo htmlspecialchars($units); ?>"required>
            
			<select id="bloodtype" class="box" name="bloodtype">
                <option value="A-" <?php echo ($bloodtype == 'A-')? 'selected="selected"':'';?>>A-</option>
                <option value="A+" <?php echo ($bloodtype == 'A+')? 'selected="selected"':'';?>>A+</option>
                <option value="B-" <?php echo ($bloodtype == 'B-')? 'selected="selected"':'';?>>B-</option>
                <option value="B+" <?php echo ($bloodtype == 'B+')? 'selected="selected"':'';?>>B+</option>
                <option value="O-" <?php echo ($bloodtype == 'O-')? 'selected="selected"':'';?>>O-</option>
                <option value="O+" <?php echo ($bloodtype == 'O+')? 'selected="selected"':'';?>>O+</option>
                <option value="AB-" <?php echo ($bloodtype == 'AB-')? 'selected="selected"':'';?>>AB-</option>
                <option value="AB+" <?php echo ($bloodtype == 'AB+')? 'selected="selected"':'';?>>AB+</option>
            </select>

            <input type="text" placeholder="What is the purpose of your request?" class="box" name="purpose" value="<?php echo htmlspecialchars($purpose); ?>" required>
            <input type="text" placeholder="Request Remarks" class="box" name="remarks" value="<?php echo htmlspecialchars($remarks); ?>" required>
			
            <button class="btn">Confirm</button>
        </form>
    </div>
</section>
</body>
</html>