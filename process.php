<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $stat = $_POST['stat'];

    if ($stat == 'r') {
        $uname = $_POST['username'];

        // Check if the username already exists in the users table
        $sql = "SELECT * FROM users WHERE username='$uname'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {
            echo '<p style="margin-left: 315px; color: red;">Register Failed: Username Already Taken</p>';
        } else {
            $usertype = $_POST["usertype"];
            $email = $_POST["email"];
            $contact = $_POST["contact"];
            $bloodtype = $_POST["bloodtype"];
            $password = $_POST["password"];

            // Insert the registration data into the users table
            $sql = "INSERT INTO users (usertype, username, email, contactno, bloodtype, password, status) VALUES ('$usertype', '$uname', '$email', '$contact', '$bloodtype', '$password', 'pending')";
            $result = mysqli_query($conn, $sql);

            if (!$result) {
                echo ("Error: " . mysqli_error($conn));
            } else {
                $_SESSION['username'] = $uname;
                header("Location: login_reg.php");
                echo '<p style="margin-left: 355px; color: red;">Your account has been registered and awaits verification.</p>';
                exit();
            }
        }
    } else {
        $uname = $_POST['user'];
        $pass = $_POST['pass'];

        // Prepare and execute a query to fetch the user's details from the users table
        $sql = "SELECT * FROM users WHERE username='$uname' AND status='approved' AND isDeleted='0'";
        $result = mysqli_query($conn, $sql);

		if (!$result) {
			echo "Query Error: " . mysqli_error($conn);
			exit();
		}

        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);

            // Check if the password matches for the user in the users table
            if ($row && $row['password'] === $pass) {
                $userType = $row["usertype"];

                $_SESSION['username'] = $uname;

                if ($userType === "donor") {
                    header("Location: donor.php");
                    exit();
                } elseif ($userType === "recipient") {
                    header("Location: recipient.php");
                    exit();
                }

            } else {
                echo '<p style="margin-left: 355px; color: red;">Invalid Username or Password</p>';
            }
        } else {
            // Prepare and execute a query to fetch the user's details from the admin table
            $sql = "SELECT * FROM administrator WHERE username='$uname'";
            $result = mysqli_query($conn, $sql);
			if (!$result) {
				echo "Query Error: " . mysqli_error($conn);
				exit();
			}

            if (mysqli_num_rows($result) === 1) {
                $row = mysqli_fetch_assoc($result);

                // Check if the password matches for the user in the admin table
                if ($row && $row['password'] === $pass && $row['usertype'] === "admin") {
                    $_SESSION['username'] = $uname;
                    header("Location: admin.php");
                    exit();
                } else {
                    echo '<p style="margin-left: 355px; color: red;">Invalid Username or Password</p>';
                }
            } else { 

				$sql = "SELECT * FROM bloodcenter WHERE username='$uname'";
				$result = mysqli_query($conn, $sql);

				if (mysqli_num_rows($result) === 1) {
					$row = mysqli_fetch_assoc($result);
	
					// Check if the password matches for the user in the bloodcenter table
					if ($row && $row['password'] === $pass && $row['usertype'] === "bloodcenter") {
						$_SESSION['username'] = $uname;
						header("Location: bloodcenter.php");
						exit();
					} else {
						echo '<p style="margin-left: 355px; color: red;">Invalid Username or Password</p>';
					}
				} else {
					echo '<p style="margin-left: 355px; color: red;">Invalid Username or Password</p>';
				}
			}
		}
	}

}
?>