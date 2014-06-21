<?php 

include 'core/init.php';

   

?>

<!DOCTYPE html>

<html>
<head>
	<title>Pensiunea Oltea</title>
	<link rel="stylesheet" href="css/style.css" type="text/css" />
	<meta content="width=device-width, initial-scale=1.0">
</head>

<body class="body">
	<header class="firstHeader">
		<img src="img/logo.gif">
		<nav><ul>
			<li><a href="index.html">Acasa</a></li>
			<li><a href="localizare.html">Localizare</a></li>
			<li><a href="cazare.html">Cazare</a></li>
			<li class="checked"><a href="rezervari.php">Rezervari</a></li>
			<li><a href="contact.php">Contact</a></li>
		</ul></nav>
	</header>
		
	<div class="mainContent" >
		<div class="content">	
				<article class="articleContent">	
					<header>
						<h1>Rezervari Pensiunea Oltea</h1>
					</header>
					
					<content>
							<?php 
				
     		 if (isset($_POST['rezerva'])) {
     		 
     		 	 $from = trim(htmlspecialchars($_POST['from']));
     		 	 $to = trim(htmlspecialchars($_POST['to']));
     		 	 $numberOfRooms = trim(htmlspecialchars($_POST['numberOfRooms']));
     		 	 $room0 = trim(htmlspecialchars($_POST['room0']));

     		 	 $register_data = array(
                           'clientId' => '1',
                           'roomId' => '1',
                           'startDate' => date("Y-m-d", strtotime($from)),
                           'endDate' => date("Y-m-d", strtotime($to)),
                           'totalCost' => '2000',
                           'breakfast' => '0',
                           'lunch' => '0',
                           'dinner' => '0',
                           'spa' => '0'
                          );
     		 	 insertReservation($register_data);
     			 }
			?>
			   <form id="contact-form" action="contact.php" method="post">
						<h2>Va rugam sa completati campurile de mai jos pentru a rezerva un loc in pensiunea noastra.</h2>
						<div>
							<label>
								<span>Nume*: </span>
								<input placeholder="Nume" type="text" tabindex="1" name="name" required autofocus>
							</label>
						</div>
						<div>
							<label>
								<span>Prenume*: </span>
								<input placeholder="Prenume" type="text" tabindex="1" name="surname" required autofocus>
							</label>
						</div>
						<div>
							<label>
								<span>Numar de telefon*: </span>
								<input placeholder="Numar de telefon" type="text" tabindex="1" name="" required autofocus>
							</label>
						</div>
						<div>
							<label>
								<span>Email*: </span>
								<input placeholder="Adresa de E-mail" type="email" tabindex="2" name="your_email"  required>
							</label>
						</div>	
						<div>
							<label>
								<span>Camera: </span>
									<select name="camera">
									    <option value="1 persoana">1 persoane</option>
									    <option value="2 persoane">2 persoane</option>
									    <option value="3 persoane">3 persoane</option>
									</select>
							</label>
						</div>	
						<div>
							<button name="rezerva" type="submit" id="rezerva">Rezerva Camera</button>
						</div>
					</form>
					</content>
				
				</article>
		</div>
	</div>
	<footer class="mainFooter">
		<p>Copyright &copy; 2014  <a class="orangeMarked" href="#">Pisarciuc Ionut-Daniel & Canila Ovidiu-Daniel</a></p>
	</footer>
</body>
</html>