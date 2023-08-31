<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Library Management System</title>

<style>
  body {
    margin: 0;
    padding: 0;
    font-family: Times New Roman, Serif Typeface;
    background: url('pexels-steve-johnson-1843717.jpg') no-repeat center center fixed;
    background-size: cover;
  }
  a {
    text-decoration: none;
	color: black;
  }
	/* Navigation bar styles */
        .navbar {
            overflow: hidden;
            background-color: #333;
			z-index: 1200;
			
        }
        .navbar a {
            float: left;
            display: block;
            color: white;
            text-align: center;
            padding: 20px 22px;
            text-decoration: none;
			font-size: 20px;
        }
        .navbar a:hover {
            background-color: #ddd;
            color: black;
        }
		.navbar-right {
		float: right;
		}
	
  .first-container {
    position: relative;
    max-width: 1800px;
    margin: 0 auto;
    text-align: left;
    padding: 80px;
    margin-top: 100px;
  }
  
  .first-image {
    max-width: 100%;
  }
  .first-info {
    font-size: 48px;
    margin: 0;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background-color: rgba(255, 255, 255, 0.3); /* Semi-transparent white background */
	padding: 100px;
  }
  
  
  .content-container {
    max-width: 1800px;
    margin: 0 auto;
    text-align: center;
    padding: 20px;
    background-color: rgba(255, 255, 255, 0.7); /* Semi-transparent white background */
    color: black;
    margin-top: 100px; /* Add margin-top to create space */
  }
  
  .content-container h2 {
    font-size: 65px;
    margin: 0;
  }
  
  .btn {
    display: inline-block;
    margin: 10px;
    padding: 15px 30px;
    font-size: 16px;
    background-color: #333;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
  }
  
  .transparent-box {
    max-width: 800px;
    margin: 0 auto;
    margin-top: 150px;
    background-color: rgba(255, 255, 255, 0.3); /* Semi-transparent white background */
    padding: 20px;
    text-align: center;
  }
  
  .transparent-box h1 {
    font-size: 36px;
    margin: 0;
  }
  
  .image-row {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-wrap: wrap;
    margin-top: 5px; /* Add margin-top to create space between rows */
  }
  
  .image-box {
    flex: 1;
    padding: 20px;
    text-align: center;
    margin: 0px; /* Add margin to create space between images */
  }
  
  .image-box img {
    max-width: 100%;
  }
  .content-container2 {
    max-width: 1800px;
    margin: 0 auto;
    display: flex; /* Display children side by side */
    justify-content: center; /* Center horizontally */
    align-items: center; /* Center vertically */
    padding: 20px;
    background-color: rgba(255, 255, 255, 0.3); /* Semi-transparent white background */
    color: black;
    margin-top: 200px;
	margin-down: 100px;
	
  }
  .text-box {
    flex: 1;
    padding: 20px;
    color: black;
  }
  .text-box {
    flex: 1;
	font-size: 24px;
    padding: 20px;
    color: black;
  }
  
  .text-box h2 {
    font-size: 48px;
    margin: 0;
  }
  
  .text-box p {
    font-size: 24px;
    margin: 0;
  }
  .img-box {
    flex: 1;
    padding: 20px;
    text-align: center;
  }
  
  .img-box img {
    max-width: 100%;
  }
   .contact-container {
    position: relative;
    max-width: 1800px;
    margin: 0 auto;
    text-align: center;
    padding: 20px;
    margin-top: 100px;
  }
  
  .contact-image {
    max-width: 100%;
	max-height:50%;
	margin-top: 100px;
  }
  
  .contact-info p {
    font-size: 24px;
    margin: 0;
	width: 100%;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background-color: rgba(255, 255, 255, 0.6); /* Semi-transparent white background */
    padding: 100px; /* Increase the padding to make the box bigger */
}

  .team-box1 {
	margin-top: 100px
    background-color: #f0f0f0;
    padding: 20px;
    text-align: left;
  }
  .team-box {
	margin-top: 10px;
    background-color: #f0f0f0;
    padding: 20px;
    text-align: left;
	overflow: hidden;
	position: relative;
	opacity: 0; /* Initially hidden */
	animation: slideInRight 1s forwards;
  }
  .team-box2 {
	 
	margin-top: 10px;
    background-color: #f0f0f0;
    padding: 20px;
    text-align: right;
	overflow: hidden;
	position: relative;
	opacity: 0; /* Initially hidden */
	animation: slideInLeft 1s forwards;
  }
   @keyframes slideInRight {
            0% {
                transform: translateX(100%);
                opacity: 0;
            }
            100% {
                transform: translateX(0);
                opacity: 1;
            }
        }

        /* Keyframes for sliding in from the left */
        @keyframes slideInLeft {
            0% {
                transform: translateX(-100%);
                opacity: 0;
            }
            100% {
                transform: translateX(0);
                opacity: 1;
            }
        }
  .team-title {
    font-size: 24px;
    margin-bottom: 10px;
  }
  
  .team-description {
    font-size: 16px;
    color: #333;
  }
	.team-description2 {
		text-align: right;
    font-size: 16px;
    color: #333;
  }
  /* Add styles for logo container */
    .logo {
	border-radius: 50%;
    width: 175px; /* Adjust the width as needed */
    height: 175px; /* Automatically adjust the height based on the width */
    margin-left: 1000px; /* Add some spacing to the right of the logo */
	}
		.fade-image {
            width: 100%;
            height: 100%;
            object-fit: cover; /* Ensure the image covers the container */
            opacity: 1;
            animation: fade 4s infinite alternate; /* Animation settings */
        }

        /* Define the animation keyframes */
        @keyframes fade {
            0% {
                opacity: 0;
            }
            100% {
                opacity: 1;
            }
        }
	.facebook-button {
	display: flex;
    align-items: center;
    justify-content: center;
    width: 60px;
    height: 60px;
    background-color: black;
    border-radius: 50%;
    overflow: hidden;
	position: relative;
  }

  .facebook-logo {
    font-size: 48px;
    color: white;
    text-decoration: none;
    line-height: 1;
  }

		  .instagram-button {
			display: flex;
			align-items: right;

			width: 60px; /* Adjust the width as needed */
			height: 60px; /* Adjust the height as needed */
			background-color: black;
			border-radius: 50%;
			overflow: hidden;
			position: relative;
			}

			.instagram-logo {
			width: 100%; /* Make sure the logo fits inside the circle */
			height: 100%; /* Make sure the logo fits inside the circle */
  }
  .container {
    display: flex;
    justify-content: flex-end;
    align-items: center;
    height: 5vh;
  }
  .prof-container {
	margin-right: 20px;
    display: flex;
    justify-content: flex-end;
    align-items: center;
    height: 100px;
  }

  .profile-picture {
    width: 250px;
    height: 250px;
    background-color: black;
    border-radius: 50%;
    overflow: hidden;
  }

  .profile-image {
    width: 100%;
    height: 100%;
    object-fit: cover; /* Ensure the image fits within the circular container */
  }
  .prof-container2 {
    display: flex;
    justify-content: flex-start; /* Change this to align on the left */
    align-items: center;
    height: 1vh;
  }

  .profile-picture2 {
	  margin-left:50px;
    width: 250px;
    height: 250px;
    background-color: black;
    border-radius: 50%;
    overflow: hidden;
  }

  .profile-image2 {
    width: 100%;
    height: 100%;
    object-fit: cover; /* Ensure the image fits within the circular container */
  }
  .navbar-right {
    float: right;
	}
   	
    </style>
  </style>
  
</head>
<body>
  <div class="navbar">
  <a href="">Online Library Management System</a>
    <div class="navbar-right">
    <a href="Member Login.php">Student Login</a>
    <a href="Admin_login.php">Admin Login</a>
    <a href="Member Signup (working).php">Student Signup</a>
</div>
    <a href="Books.php">Our Bookshelf</a>
    <a href="help desk.php">FAQ</a>
</div>

  <div class="first-container">
  
   <img class="fade-image" src="books with flowers.jpg" alt="First Image">
  <div class="first-info">
	<img class="logo" src="2.png" alt="Library Logo">
    <h1>Welcome to the Online Library Management System</h1>
	<h1 style="font-size: 24px; color: black; font-weight: bold;">Hours:&nbsp &nbsp Sunday - Thursday:&nbsp &nbsp   11 AM - 9 PM</h1>
  </div>
 </div>
 
  <div class="content-container2">
    <div class="img-box">
      <img src="beautiful-composition-different-books.jpg" alt="Library Image" style="max-width: 100%;">
    </div>
    <div class="text-box">
      <h2>About the Library</h2>
      <p>
        The Online Library is a vast repository of knowledge, offering a wide range of books and resources for students and enthusiasts.
        Our mission is to provide access to quality literature and educational materials to support learning and personal growth.
      
	  </p>
	  <a href = 'Member Login.php'><button class="btn";> Student Login </button></a>
	  <a href = 'Admin_login.php'><button class="btn";>Admin Login </button></a>
	  <a href = 'Member Signup (working).php'><button class="btn";> Student Sign Up </button></a>
    </div>
  </div>
  
  <div class="content-container">
	<a href="Books.php"><h2>Our Bookshelf </h2></a>
	<br><br><br><br><br><br><br><br><br>
    <div class="image-row">
      <div class="image-box">
        <img src="crop-hands-with-book-bed.jpg" alt="Image 1">
      </div>
      <div class="image-box">
        <img src="creative-composition-with-different-books.jpg" alt="Image 2">
      </div>
    </div>
    <div class="image-row">
      <div class="image-box">
        <img src="stack-books-houseplant-pot-blurred-background.jpg" alt="Image 3">
      </div>
      <div class="image-box">
        <img src="books-flowers-arrangement.jpg" alt="Image 4">
      </div>
    </div>
  </div>
  
  <div class="content-container2">
	<div class="text-box">
      <h2></h2>
	  <br>
      <p>
        
"Books are the timeless vessels of knowledge and inspiration, offering a sanctuary for the curious mind. They are gateways to distant realms and ancient wisdom, transporting readers through time and space. Within their pages, one discovers the power of imagination, empathy, and understanding. They ignite the flames of creativity and kindle the spirit of adventure. Books are faithful companions, providing solace in solitude and camaraderie in companionship. They hold the collective wisdom of humanity, inviting us to partake in its grand tapestry. In their presence, we find solace, courage, and the limitless capacity to dream, making each book an extraordinary journey."
      </p>
    </div>
    <div class="img-box">
      <img src="side-view-woman-with-journal-home.jpg" alt="Library Image" style="max-width: 100%;">
    </div>
  </div>
  
  <div class="content-container2">
    <div class="img-box">
      <img src="dried-flowers-books.jpg" alt="Library Image" style="max-width: 100%;">
    </div>
    <div class="text-box">
      <h2>FAQ</h2>
      <p>
        Need help borrowing a book? <br><a href="help desk.php" target="_blank"><button class="btn";>Help Desk</button></a>
		</p> <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
	  <h2> Help Us Improve </h2>
	  <a href = 'Member Signup (working).php'><button class="btn";> Give us feedback </button></a>
    </div>
  </div>
  <div class="team-title"><h1>Meet The Team</h1></div>
  <div class="team-box">
    <div class="team-description">
      <p><h1 style="font-size: 28px; color: black; font-weight: bold;">Maisa Kabir</h1<br>
	  <h1 style="font-size: 22px; color: black; font-weight: bold;">Student, Department of Computer Science & Engineering, Brac University</h1>
	  <div class="prof-container">
    <div class="profile-picture">
      <img class="profile-image" src="cat1.jpg" alt="Profile Picture">
    </div>
  </div><br>
	  <div style="display: flex; align-items: center; justify-content: center; width: 60px; height: 60px; background-color: black; border-radius: 50%; overflow: hidden;">
    <a href="https://www.facebook.com/maisa.kabir.587" target="_blank" style="text-decoration: none; color: white; font-size: 48px; line-height: 1;  display: flex; align-items: center;justify-content: flex-end;height: 100vh;">
      f
    </a>
  </div><br>
  <div class="instagram-button">
    <a href="https://www.instagram.com/maisakabir_25/"><img class="instagram-logo" src="insta.png" alt="Instagram Logo">
  </div></p>
</div>


    </div>
  </div>
  <div class="team-box2">
    <div class="team-description2">
      <p><h1 style="font-size: 28px; color: black; font-weight: bold;">Tazrian Hossain</h1<br>
	  <h1 style="font-size: 22px; color: black; font-weight: bold;">Student, Department of Computer Science & Engineering, Brac University</h1>
	  <div class="prof-container2">
    <div class="profile-picture2">
      <img class="profile-image2" src="cat2.webp" alt="Profile Picture">
    </div>
  </div><br>
		<div class="container">
	  <div class="facebook-button">
    <a href="https://www.facebook.com/DevilCrow08" target="_blank" class="facebook-logo">
      f
    </a>
  </div></div>
<br><br>
  <div class="container">
  <div class="instagram-button">
    <a href="https://www.instagram.com/__taz.rian__/"><img class="instagram-logo" src="insta.png" alt="Instagram Logo"></a>
  </div></p>
    </div>
	</div>
  </div><div class="team-box">
    <div class="team-description">
      <p><h1 style="font-size: 28px; color: black; font-weight: bold;">Wasima Annan</h1<br>
	  <h1 style="font-size: 22px; color: black; font-weight: bold;">Student, Department of Computer Science & Engineering, Brac University</h1>
	  
	  <div class="prof-container">
    <div class="profile-picture">
      <img class="profile-image" src="cat3.jpeg" alt="Profile Picture">
    </div>
  </div><br>
	  <div style="display: flex; align-items: center; justify-content: center; width: 60px; height: 60px; background-color: black; border-radius: 50%; overflow: hidden;">
    <a href="https://www.facebook.com/WasimaAnnan" target="_blank" style="text-decoration: none; color: white; font-size: 48px; line-height: 1;  display: flex; align-items: center;">
      f
    </a>
  </div><br>
  <div class="instagram-button">
    <a href="https://www.instagram.com/wasimaannan/"><img class="instagram-logo" src="insta.png" alt="Instagram Logo"></a>
  </div></p>
    </div>
  </div>
  <div class="team-box2">
    <div class="team-description2">
      <p><h1 style="font-size: 28px; color: black; font-weight: bold;">Nafisa Rahman</h1<br>
	  <h1 style="font-size: 22px; color: black; font-weight: bold;">Student, Department of Computer Science & Engineering, Brac University</h1>
	  <div class="prof-container2">
    <div class="profile-picture2">
      <img class="profile-image2" src="cat4.jpeg" alt="Profile Picture">
    </div>
  </div><br>
	  <div class="container">
	  <div class="facebook-button">
    <a href="https://www.facebook.com/nafisa.rahman.7503" target="_blank" class="facebook-logo">
      f
    </a>
  </div></div>
<br><br>
  <div class="container">
  <div class="instagram-button">
    <a href="https://www.instagram.com/__nafff_/"><img class="instagram-logo" src="insta.png" alt="Instagram Logo"></a>
  </div></p>
    </div>
  </div>
  </div>
  <div class="team-box">
    <div class="team-description">
      <p><h1 style="font-size: 28px; color: black; font-weight: bold;">Md. Sadman Saqib</h1<br>
	  <h1 style="font-size: 22px; color: black; font-weight: bold;">Student, Department of Computer Science & Engineering, Brac University</h1>
	  <div class="prof-container">
    <div class="profile-picture">
      <img class="profile-image" src="cat5.jpeg" alt="Profile Picture">
    </div>
  </div><br>
	  <div style="display: flex; align-items: center; justify-content: center; width: 60px; height: 60px; background-color: black; border-radius: 50%; overflow: hidden;">
    <a href="https://www.facebook.com/profile.php?id=100008407686633" target="_blank" style="text-decoration: none; color: white; font-size: 48px; line-height: 1;  display: flex; align-items: center;">
      f
    </a>
  </div><br>
  <div class="instagram-button">
    <a href="https://www.instagram.com/sionsadman/"><img class="instagram-logo" src="insta.png" alt="Instagram Logo"></a>
  </div></p>
    </div>
  </div>
  <script>
    // JavaScript to control the animation delay for each team box
    const teamBoxes = document.querySelectorAll('.team-box, .team-box2');
    
    // Adjust these values as needed
    const slideInRightDelay = 1; // Delay for sliding in from the right (in seconds)
    const slideInLeftDelay = 2; // Delay for sliding in from the left (in seconds)

    teamBoxes.forEach((box, index) => {
        // Apply slide-in-right animation with delay
        if (box.classList.contains('team-box')) {
            box.style.animation = `slideInRight 1s forwards ${index * slideInRightDelay}s`;
        }
        // Apply slide-in-left animation with delay
        else if (box.classList.contains('team-box2')) {
            box.style.animation = `slideInLeft 1s forwards ${index * slideInLeftDelay}s`;
        }
    });
</script>

  <footer>
        <div class="contact-container">
            <img class="contact-image" src="black.png" alt="Contact Image">
            <div class="contact-info">
                <p>
                    For inquiries and assistance, please feel free to contact us:
                    <br>
                    Email: info@onlinelibrary.com
                    <br>
                    Phone: +123-456-7890
                    <br>
                    Address: 123 Library St, Cityville
                </p>
            </div>
        </div>
    </footer>
</body>
</html>
