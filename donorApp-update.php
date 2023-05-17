<?php
include "dbconfig.php";
$id=$_GET['updateid'];
$sql="SELECT * from `appointments` where id=$id";
$result = mysqli_query($conn, $sql);
$row=mysqli_fetch_assoc($result);
$name=$row['name'];
$contact=$row['contact'];
$email=$row['email'];
$location=$row['location'];
$datetime=$row['date'];


if($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = $_POST['name'];
    $contact = $_POST['contact'];
    $email= $_POST['email'];
    $location = $_POST['location'];
    $datetime = $_POST['datetime'];

    $sql = "UPDATE `appointments` SET name ='$name', contact='$contact', email='$email', location='$location', date='$datetime', status='pending'  WHERE id=$id";


    if ($conn->query($sql) === TRUE) {
        header("Location: donor-appointments.php");
    } else {
        echo "Error updating record: " . $conn->error;
    }
    
    $conn->close();
}

?>

<?php 
include "head.php";
include "donor-navbar.php";
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
            <input type="text" placeholder="Enter Your Contact Number" class="box" name="contact" value="<?php echo htmlspecialchars($contact); ?>"required>
            <input type="email" placeholder="Enter Your Email" class="box" name="email" value="<?php echo htmlspecialchars($email); ?>"required>
            
			<select id="location" class="box" name="location">
                <option value="Subnational Blood Center For Visayas" <?php echo ($location == 'Subnational Blood Center For Visayas')? 'selected="selected"':'';?>>Subnational Blood Center For Visayas</option>
                <option value="VSMMC Blood Services Unit" <?php echo ($location == 'VSMMC Blood Services Unit')? 'selected="selected"':'';?>>VSMMC Blood Services Unit</option>
                <option value="Philippine Red Cross Cebu Chapter" <?php echo ($location == 'Philippine Red Cross Cebu Chapter')? 'selected="selected"':'';?>>Philippine Red Cross Cebu Chapter</option>
                <option value="Eastern Visayas Regional Blood Center" <?php echo ($location == 'Eastern Visayas Regional Blood Center')? 'selected="selected"':'';?>>Eastern Visayas Regional Blood Center</option>
                <option value="Life Line Blood Bank" <?php echo ($location == 'Life Line Blood Bank')? 'selected="selected"':'';?>>Life Line Blood Bank</option>
                <option value="Philippine Red Cross Lapu-Lapu Chapter" <?php echo ($location == 'Philippine Red Cross Lapu-Lapu Chapter')? 'selected="selected"':'';?>>Philippine Red Cross Lapu-Lapu Chapter</option>
                <option value="Philippine National Red Cross" <?php echo ($location == 'Philippine National Red Cross')? 'selected="selected"':'';?>>Philippine National Red Cross</option>
            </select>
			
            <input type="datetime-local" max="9999-12-31T23:59" class="box" name="datetime" value="<?php echo date('Y-m-d\TH:i:s', strtotime($datetime)); ?>" required>
            <button class="btn">Confirm</button>
        </form>
    </div>
</section>
</body>
</html>