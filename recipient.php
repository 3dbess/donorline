<?php
ob_start();
session_start();
include "dbconfig.php";
include "head.php"; 
include "recipient-navbar.php";
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>

<!--HOME SECTION-->
<section class="home" id="home">

    <div class="image">
        <img src="image/home.gif" alt="">
    </div>

    <div class="content">
        <h3>Donate Blood, Save Lives</h3>
        <div class="justify">
            <p>One blood donation can save up to three lives, according to DeSimone. People usually donate because it feels good to help others, and altruism and volunteering have been linked to positive health outcomes, including a lower risk for depression and greater longevity.</p>
        </div>
        <a href="#request" class="btn">Create A Request <span class="fas fa-chevron-right"></span> </a>
    </div>

</section>
<!--HOME END-->

<!--LEARN-->
<section class="learn" id="learn">

    <h1 class="heading"> Learn More About <span> Donating </span> </h1>

    <div class="box-container">

        <div class="box">
            <i class="fas fa-notes-medical"></i>
            <h3>Eligibility</h3>
            <span class="list-label">How do you know if you're eligible?</span><br><br>
            <ul class="justify">
                <li>Weight: At least 110 lbs (50 kg).</li>
                <li>Blood volume collected will depend mainly on you body weight.</li>
                <li>Pulse rate: Between 60 and 100 beats/minute with regular rhythm.</li>
                <li>Blood pressure: Between 90 and 160 systolic and 60 and 100 diastolic.</li>
                <li>Hemoglobin: At least 125 g/L.</li>
            </ul>
        </div>

        <div class="box" id="donation-process">
            <i class="fas fa-ambulance"></i>
            <h3>Donation Process</h3>
            <span class="list-label">Registration</span><br><br>
            <ul class="justify">
                <li>We will sign you in and go over basic eligibility.</li>
                <li>You will be asked to show ID.</li>
                <li>You will read some information about donating blood.</li>
                <li>We will ask for your complete address. Your address needs to be complete (including PO Box, street/apartment number) and the place where you will receive your mail 8 weeks from donation.</li>  
            </ul><br>
            <span class="list-label">Your Donation</span><br><br>
            <ul class="justify">
                <li>If you are donating whole blood, we will cleanse an area on your arm and insert a brand new sterile needle for the blood draw. (This feels like a quick pinch and is over in seconds.)</li>
                <li>Other types of donations, such as platelets, are made using an aphresis machine which will be connected to both arms.</li>
                <li>A whole blood donation takes about 8-10 minutes, during which you will be seated comfortably or lying down.</li>
                <li>When approximately a pint of whole blood has been collected, the donation is complete and a staff person will place a bandage on your arm.</li>
                <li>For platelets, the aphresis machine will collect a small amount of blood, remove the platelets, and return the rest of the blood through your other arm; this cycle will be repeated several times over about 2 hours.</li>
            </ul><br>
            <span class="list-label">Refreshment and Recovery</span><br><br>
            <ul class="justify">
                <li>After donating blood, you will have a snack and something to drink in the refreshment area.</li>
                <li>You will leave after 10-15 minutes and continue your normal routine.</li>
                <li>Enjoy the feeling of accomplishment knowing you are helping to save lives.</li>
            </ul>
        </div>

        <div class="box" id="preparation">
            <i class="fas fa-hospital-user"></i>
            <h3>Preparation</h3>
            <span class="list-label">Before Donation</span><br><br>
            <ul class="justify">
                <li>Make an appointment. Select a donation type and find a convenient time that works best for you.</li>
                <li>Have iron-rich foods, such as red meat, fish, poultry, beans, spinach, iron-fortified cereals or raisins.</li>
                <li>Get a good night's sleep the night before your donation, eat healthy foods and drink extra liquids.</li>
            </ul><br>
            <span class="list-label">On the Day of Donation</span><br><br>
            <ul class="justify">
                <li>Bring your donor card, driver's license or two other forms of identification.</li>
                <li>Prepare your medication list. We will need to know about all prescription and over-the-counter medications you are taking.</li>
            </ul><br>
        </div>

        <div class="box" id="aftercare">
            <i class="fas fa-pills"></i>
            <h3>Aftercare</h3>
            <ul class="justify">
                <li>Enjoy a snack.</li>
                <li>Drink extra liquids. Avoid alcohol over the next 24 hours.</li>
                <li>Avoid strenuous physical activity or heavy lifting for about five hours.</li>
                <li>If you feel lightheaded, lie down with your feet up until the feeling passes.</li>
                <li>Keep your bandage on and dry for the next five hours. </li>
                <li>If you have bleeding after the removing the bandage, put pressure on the site and raise your arm until the bleeding stops.</li>
                <li>If bruising occurs, apply a cold pack to the area periodically during the first 24 hours.</li>
                <li>Consider adding iron-rich foods to your diet to replace the iron lost with blood donation. </li>
            </ul>
           
        </div>

    </div>

</section>
<!--LEARN END-->

<!--DONATION-->
<section class="donate" id="donate">

    <h1 class="heading"> DONATION <span>LOCATIONS</span> </h1>

    <div class="box-container">
        <div class="box">
            <div>
                <img src="image/subnationblood.png" alt="">
                <h3>Subnational Blood Center For Visayas</h3>
                <span>Osmeña Blvd, Cebu City, 6000 Cebu</span>
                <span>(032) 402 1260</span>
            </div>
            <div class="times">
                <button type="button" class="btn btn-info" id="demo1" onclick="toggleTimes(this.id)">View Times</button>
                <div class="schedule">
                    Monday [Open 24 Hours]<br>
                    Tuesday [Open 24 Hours]<br>
                    Wednesday [Open 24 Hours]<br>
                    Thursday [Open 24 Hours]<br>
                    Friday [Open 24 Hours]<br>
                    Saturday [Open 24 Hours]<br>
                    Sunday [Open 24 Hours]<br>
                </div>
            </div>
        </div>

        <div class="box">
            <div>
                <img src="image/vsmmc.jpg" alt="">
                <h3>VSMMC Blood Services Unit</h3>
                <span>VSMMC Nurses' Home, Osmeña Blvd, Cebu City, Cebu</span>
                <span>(032) 255 3802</span>
            </div>
            <div class="times">
                <button type="button" class="btn btn-info" id="demo2" onclick="toggleTimes(this.id)">View Times</button>
                <div class="schedule">
                    Monday [9 AM - 5 PM]<br>
                    Tuesday [9 AM - 5 PM]<br>
                    Wednesday [9 AM - 5 PM]<br>
                    Thursday [9 AM - 5 PM]<br>
                    Friday [9 AM - 5 PM]<br>
                    Saturday [9 AM - 5 PM]<br>
                    Sunday [9 AM - 5 PM]<br>
                </div>
            </div>
        </div>

        <div class="box">
            <div>
                <img src="image/redcross.jpg" alt="">
                <h3>Philippine Red Cross Cebu Chapter</h3>
                <span>8V6R+XQ5, Osmeña Blvd, Cebu City, Cebu</span>
                <span>(032) 328 9238</span>
            </div>
            <div class="times">
                <button type="button" class="btn btn-info" id="demo3" onclick="toggleTimes(this.id)">View Times</button>
                <div class="schedule">
                    Monday [8 AM - 6 PM]<br>
                    Tuesday [8 AM - 6 PM]<br>
                    Wednesday [8 AM - 6 PM]<br>
                    Thursday [8 AM - 6 PM]<br>
                    Friday [8 AM - 6 PM]<br>
                    Saturday [8 AM - 6 PM]<br>
                    Sunday [8 AM - 6 PM]<br>
                </div>
            </div>
        </div>

        <div class="box">
            <div>
                <img src="image/easternvisayas.png" alt="">
                <h3>Eastern Visayas Regional Blood Center</h3>
                <span>JRDC Bldg, 102 Osmeña Blvd, Cebu City, 6000 Cebu</span>
                <span>(032) 253 4611</span>
            </div>
            <div class="times">
                <button type="button" class="btn btn-info" id="demo4" onclick="toggleTimes(this.id)">View Times</button>
                <div class="schedule">
                    Monday [9 AM - 5 PM]<br>
                    Tuesday [9 AM - 5 PM]<br>
                    Wednesday [9 AM - 5 PM]<br>
                    Thursday [9 AM - 5 PM]<br>
                    Friday [9 AM - 5 PM]<br>
                    Saturday [9 AM - 5 PM]<br>
                    Sunday [9 AM - 5 PM]<br>
                </div>
            </div>
        </div>

        <div class="box">
            <div>
                <img src="image/lifeline.png" alt="">
                <h3>Life Line Blood Bank</h3>
                <span>8V5R+84P, B. Rodriguez St, Cebu City, 6000 Cebu</span>
                <span>(032) 255 3806</span>
            </div>
            <div class="times">
                <button type="button" class="btn btn-info" id="demo5" onclick="toggleTimes(this.id)">View Times</button>
                <div class="schedule">
                    Monday [9 AM - 5 PM]<br>
                    Tuesday [9 AM - 5 PM]<br>
                    Wednesday [9 AM - 5 PM]<br>
                    Thursday [9 AM - 5 PM]<br>
                    Friday [9 AM - 5 PM]<br>
                    Saturday [9 AM - 5 PM]<br>
                    Sunday [9 AM - 5 PM]<br>
                </div>
            </div>
        </div>

        <div class="box">
            <div>
                <img src="image/redcrosscebu.jpg" alt="">
                <h3>Philippine Red Cross Lapu-Lapu Chapter</h3>
                <span>Hoops Dome, Door 4, Bldg, Lapu-Lapu City, 6015 Cebu</span>
                <span>(032) 495 2402</span>
            </div>
            <div class="times">
                <button type="button" class="btn btn-info" id="demo6" onclick="toggleTimes(this.id)">View Times</button>
                <div class="schedule">
                    Monday [Open 24 Hours]<br>
                    Tuesday [Open 24 Hours]<br>
                    Wednesday [Open 24 Hours]<br>
                    Thursday [Open 24 Hours]<br>
                    Friday [Open 24 Hours]<br>
                    Saturday [Open 24 Hours]<br>
                    Sunday [Open 24 Hours]<br>
                </div>
            </div>
        </div>

        <div class="box">
            <div>
                <img src="image/redcrosscebu.jpg" alt="">
                <h3>Philippine National Red Cross</h3>
                <span>9X72+C4H, Central Nautical Hwy, Mandaue City, Cebu</span>
                <span>(032) 414 1207</span>
            </div>
            <div class="times">
                <button type="button" class="btn btn-info" id="demo7" onclick="toggleTimes(this.id)">View Times</button>
                <div class="schedule">
                    Monday [9 AM - 5 PM]<br>
                    Tuesday [9 AM - 5 PM]<br>
                    Wednesday [9 AM - 5 PM]<br>
                    Thursday [9 AM - 5 PM]<br>
                    Friday [9 AM - 5 PM]<br>
                    Saturday [9 AM - 5 PM]<br>
                    Sunday [9 AM - 5 PM]<br>
                </div>
            </div>
        </div>

    </div>
    </section>

    <section class="donate" id="request">
    <h1 class="heading"> <span>Create</span>your request</h1>    

    <div class="row">

        <div class="image">
            <img src="image/schedule.gif" alt="">
        </div>

        <form method="post">
            <h3>Request Form</h3>
			<?php echo '<input type="hidden" value="'. htmlspecialchars($_SESSION['username']) .'" name="user">'; ?>
            <input type="text" placeholder="Enter Your Full Name" class="box" name="name" required>
            <input type="text" placeholder="Enter Your Address" class="box" name="address" required>
            <input type="number" placeholder="Enter Units Needed" class="box" name="units" required>
            
			<select id="bloodtype" class="box" name="bloodtype" required>
                <option value="" selected disabled>Select Blood Group </option>
                <option value="A-">A-</option>
                <option value="A+">A+</option>
                <option value="B-">B-</option>
                <option value="B+">B+</option>
                <option value="O-">O-</option>
                <option value="O+">O+</option>
                <option value="AB-">AB-</option>
                <option value="AB+">AB+</option>
            </select>
            <input type="text" placeholder="What is the purpose of your request?" class="box" name="purpose" required>
            <input type="text" placeholder="Request Remarks" class="box" name="remarks" required>


			
            <button class="btn">Confirm</button>
        </form>

		<?php 
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $sql = "INSERT INTO `requests` (`username`,`name`, `address`, `units`, `bloodtype`, `purpose`, `remarks`, `status`) VALUES ('".$_POST["user"]."','".$_POST["name"]."', '".$_POST["address"]."', '".$_POST["unit"]."', '".$_POST["bloodtype"]."', '".$_POST["purpose"]."', '".$_POST["remarks"]."','pending')";
			$result = mysqli_query($conn, $sql);

			if(!$result){
				echo ("Error: ".mysqli_error($conn));
			}
			else{
				header("Location: recipient-requests.php");
				exit;
			}
		}
		?>

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