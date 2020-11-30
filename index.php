<?php 
    $result = "";
    $error  = "";
if(isset($_POST['submit']))
{
    require 'phpmailer/PHPMailerAutoload.php';
    $mail = new PHPMailer;
    //smtp settings
    $mail->isSMTP(); // send as HTML
    $mail->Host = "smtp.gmail.com"; // SMTP servers
    $mail->SMTPAuth = true; // turn on SMTP authentication
    $mail->Username = "zjaksu@gmail.com"; // Your mail
    $mail->Password = 'Insomni@132'; // Your password mail
    $mail->Port = 587; //specify SMTP Port
    $mail->SMTPSecure = 'tls';                               
    $mail->setFrom($_POST['email'],$_POST['name']);
    $mail->addAddress('zjaksu@gmail.com');
    $mail->addReplyTo($_POST['email'],$_POST['name']);
    $mail->isHTML(true);
    $mail->Subject='Form Submission:' .$_POST['subject'];
    $mail->Body='<h3>Name :'.$_POST['name'].'<br> Email: '.$_POST['email'].'<br>Message: '.$_POST['message'].'</h3>';
    if(!$mail->send())
    {
        $error = "Something went worng. Please try again.";
    }
    else 
    {
        $result="Thanks\t" .$_POST['name']. " for contacting us.";
    }
}


?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Syuja</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="stylesheet" type="text/css" href="css/other.css">
		<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
	</head>
	<body>
		
		<!-- sidebar -->
		<input type="checkbox" id="check">
		<div class="sidebar">
			<ul>
				<li><a href="#about">About</a></li>
				<li><a href="#skills">Skills</a></li>
				<li><a href="#portfolio">Portfolio</a></li>
				<li><a href="#contact">Contact</a></li>
			</ul>
		</div>

		<!-- bagian header -->
		<header>
			<div class="container">
				<h1><a href=""></a></h1>
				<ul>
					<li><a href="#about">About</a></li>
					<li><a href="#skills">Skills</a></li>
					<li><a href="#portfolio">Portfolio</a></li>
					<li><a href="#contact">Contact</a></li>
				</ul>

				<!-- menu mobile -->
				<label for="check" class="mobile-menu"><i class="fas fa-bars fa-2x"></i></label>
			</div>
		</header>

		<!-- bagian banner -->
		<section class="banner" style="background-image: url('img/bg2.jpg'); background-size:cover;">
			<div class="container">
				<div class="banner-left">
					<img src="img/meme.JPG">
					<h2>Hai...<br>
						Saya adalah seorang <span class="efek-ngetik"></span></h2>
					<p>Selamat datang di website portfolio saya!</p>
				</div>
			</div>
		</section>

		<!-- bagian about -->
		<section id="about">	
			<div class="container">
				<h3>About</h3>
				<p>Saya adalah seorang mahasiswa yang memiliki semangat dalam belajar hal baru, saya ingin diri saya menjadi wadah bagi suatu ilmu yang belum pernah saya ketahui. </p>
				<p>Saya suka melakukan beberapa hal, tentu saja dengan semangat yang tinggi, seperti olahraga, membaca buku, dan coding. Karena saya ingin memaksimalkan diri saya dalam melakukan setiap hal yang saya lakukan.  </p>
			</div>
		</section>

		
		  
		  <section class="timeline">
				<div class="container">
				  <h3>Pendidikan</h3>
				</div>
			<ul>
			  <li>
				<div>
				  <time>2006 - 2012 <h6>Sekolah Dasar - SD Islam Hidayatullah</h6></time>
				</div>
			  </li>
			  <li>
				<div>
				  <time>2012 - 2015 <h6>Sekolah Menengah Pertama - SMP Islam Hidayatullah</h6></time>
				</div>
			  </li>
			  <li>
				<div>
				  <time>2015 - 2018 <h6>Sekolah Menengah Akhir - SMA Negeri 12 Kota Semarang</h6></time>
				</div>
			  </li>
			  <li>
				<div>
				  <time>2018 - Sekarang <h6>Perguruan Tinggi - S1 Teknik Informatika <br> Universitas Negeri Semarang</h6></time>
				</div>
			  </li>
			</ul>
		  </section>

	

		<!-- bagian skills -->
		<section id="skills">
			<div class="container">
				<h3>Skills</h3>
				<h4>HTML</h4>
				<div class="bar">
					<span class="nilai html">60%</span>
				</div>

				<h4>CSS</h4>
				<div class="bar">
					<span class="nilai css">70%</span>
				</div>

				<h4>Javascript</h4>
				<div class="bar">
					<span class="nilai js">40%</span>
				</div>

				<h4>PHP</h4>
				<div class="bar">
					<span class="nilai php">50%</span>
				</div>

				<h4>Illustrator</h4>
				<div class="bar">
					<span class="nilai ps">75%</span>
				</div>
			</div>
		</section>


		<!-- bagian portfolio -->
		<section id="portfolio">
			<div class="container">
				<h3>Portfolio</h3>
				<div class="row">
					<div class="col-4">
						<a href="https://github.com/westwashin/SIM-PESERTA">
							<img src="img/port1.png">
							<span>SIM-Pendaftaran-Event</span>
						</a>
					</div>

					<div class="col-4">
						<a href="https://github.com/westwashin/daftar-umkm">
							<img src="img/umkm.png">
							<span>Daftar-UMKM</span>
						</a>
					</div>
				</div>

			</div>
		</section>

		<!-- bagian contact -->
		<section id="contact">
			<div class="container">
				<h3>Contact</h3>
				<h2 class="text-center text-white"> <?=$result; ?></h2>
                    <h2 class="text-center text-danger"> <?=$error; ?></h2>
                    <form action="" method="post">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="inputName">Name</label>
                                    <input type="text" class="form-control" id="Name" name="name" placeholder="Enter Full" required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                            <div class="form-group">
                                <label for="inputEmail">Email</label>
                                <input type="email" class="form-control" id="Email" name="email" placeholder="Enter Email" required>
                            </div>
                        </div>
                    </div>            
                    <div class="form-group">
                        <label for="inputSubject">Subject</label>
                        <input type="text" class="form-control" id="Subject"​ name="subject" placeholder="Enter Subject" required>
                    </div>
                    <div class="form-group">
                        <label for="inputMessage">Message</label>
                        <textarea class="form-control" id="Message" name="message" rows="5" placeholder="Enter Message..." required></textarea>
                    </div>
                    <div class="text-center">
                        <button type="submit" name="submit" class="btn btn-primary"><i class="fa fa-paper-plane"></i> Send</button>
                    </div>            
                </form>
			</div>
		</section>

		<!-- bagian footer -->
		<footer>
			<div class="container">
				<small>Copyright &copy; 2020 - Dzulfikar Nurfikri.</small>
			</div>
		</footer>

		<script src="js/script.js"></script>
		<script src="js/timeline.js"></script>
	</body>
</html>


<!-- <div class="row">
			<h4 style="text-align:center">We'd love to hear from you!</h4>
	</div>
	<div class="row input-container">
			<div class="col-xs-12">
				<div class="styled-input wide">
					<input type="text" required />
					<label>Name</label> 
				</div>
			</div>
			<div class="col-md-6 col-sm-12">
				<div class="styled-input">
					<input type="text" required />
					<label>Email</label> 
				</div>
			</div>
			<div class="col-md-6 col-sm-12">
				<div class="styled-input" style="float:right;">
					<input type="text" required />
					<label>Phone Number</label> 
				</div>
			</div>
			<div class="col-xs-12">
				<div class="styled-input wide">
					<textarea required></textarea>
					<label>Message</label>
				</div>
			</div>
			<div class="col-xs-12">
				<div class="btn-lrg submit-btn">Send Message</div>
			</div>	-->

			<!-- <div class="col-1">
					<a href="mailto:zjaksu@gmail.com"><i class="far fa-envelope"> zjaksu@gmail.com</i></a>
				</div>
				
				<div class="col-1">
					<a href="https://github.com/westwashin"><i class="fab fa-github"> westwashin</i></a>
				</div>
				
				<div class="col-1">
					<a href="https://www.linkedin.com/in/syuja-zhafran-777b331ba/"><i class="fab fa-linkedin"> Syuja Zhafran</i></a>
				</div> -->