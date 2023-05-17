<?php
ob_start();
session_start();
include "dbconfig.php";
include "head.php"; 
include "bloodcenter-navbar.php";
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>

<!--HOME SECTION-->
<section class="home" id="home">

    <div class="image">
        <img src="image/schedule.gif" alt="">
    </div>

    <div class="content">
    <h1 class="heading"> <span> DASHBOARD</span> </h1>
    <div class="content" id="users">
    <h3>Manage Appointments</h3>
		<?php
            $user = $_SESSION['username'];
			$sql = "SELECT * FROM `appointments` WHERE location = (SELECT name FROM bloodcenter WHERE username = '$user')
            AND isDeleted='0';";
			$result = mysqli_query($conn, $sql);
			
			if (mysqli_num_rows($result) > 0) {
				echo '<table class="table table-striped">';
				echo "<tr><td>Donor Name</td><td>Date</td><td>Status</td><td>Action</td>";
				
				while($row = mysqli_fetch_assoc($result)) {
					$id = $row['id'];
					echo "<tr><td>" . $row['name'] . "</td><td>" . $row['date'] . "</td><td>" . $row['status'] . "</td>
					<td>
					<a href='bloodcenterApprove.php?id=".$id."' class='text-light' name='admin-approve'>Approve</a><span> | </span>
                    <a href='bloodcenterComplete.php?id=".$id."' class='text-success' name='admin-approve'>Mark Completed</a><span> | </span>  
					<a  href='bloodcenterDelete.php?id=".$id."' class='text-light delete-link'>Delete</a>
					</td>
					</tr>";	
				}
				echo "</table>";
			} else {
				echo "<p>No new appointments available.</p>";
			}
		?>        
    </div>
    </div>

</section>

<?php
include "donor-footer.php";
?>

<script>
    let menu = document.querySelector('#menu-btn');
    let navbar = document.querySelector('.navbar');

    menu.onclick = () =>{
        menu.classList.toggle('fa-times');
        navbar.classList.toggle('active');
    }

    window.onscroll = () =>{
        menu.classList.remove('fa-times');
        navbar.classList.remove('active');
    }

    function toggleTimes(id) {
        var button = document.getElementById(id);
        var schedule = button.nextElementSibling;

        if (schedule.style.display == "block") {
            $(schedule).fadeOut(500);
        } else {
            schedule.style.display = "block";
        }
    }



</script>

</body>
</html>