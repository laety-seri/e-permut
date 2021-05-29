<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="stylecss.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Profil</title>
</head>
<body>




<div class="container-fluid">

<nav class="navbar navbar-light" style="background-color: grey; width: 100%;">
<center><h2 style="color: white">Bienvenue</h2></center>
</nav>

<div class="sidebar"> 
	<center>
		<img src="images/avatarl.jpg" alt="Avatar" class="avatar">
	</center><br>
<<<<<<< HEAD
	<h2 style="color: black; fontsize: 18;">Nom & Prenoms</h2><br><br><br>
  <a href=""><i class="fas fa-clipboard-list"></i> Publication</a><br><br>
  <a href="publication.php"><i class="fas fa-exchange-alt"></i> Permutation</a><br><br>
  <a href="#"><i class="fa fa-cogs"></i> Parametre</a><br><br>
=======
	<h2 style="color: black; font-size: 20;">Nom & Prenoms</h2><br><br><br>
  <a href="publication.php"><i class="fas fa-clipboard-list"></i> Publication</a><br><br>
  <a href=""><i class="fas fa-exchange-alt"></i> Permutation</a><br><br>
  <a href=""><i class="fa fa-cogs"></i> Parametre</a><br><br>
>>>>>>> f0800c431d9cf9b75551522633a65e93bbebe115
  <a href="logout.php"><i class="fa fa-sign-out"></i> Deconnexion</a>
</div>

</div><br><br>

<div class="container">
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-8">
				<!-- <div style="width: 800px;  padding-top:10px; padding-bottom:10px;border: 3px solid grey; text-align: center; border-radius: 10px;">
				<?php
					include('connect.php');
					$sql = "SELECT * FROM ville";
					$result = mysqli_query($conn, $sql);
					while ($row = mysqli_fetch_array($result)) { 
						echo $row['nom_ville'];
					}
				?>  -->
			
				<?php
					include('connect.php');
					$sql = "SELECT * FROM publication";
					$result = mysqli_query($conn, $sql);
				?>
					<?php if(!empty($result))  { ?>
					
						<div class="card-body">
						<div class="table-responsive">
					  <table class="table table-bordered" id="dataTable" width="50%" cellspacing="0">
					  
								
						  <tbody>
						<?php
						  while($row = mysqli_fetch_array($result)) {
						?>
							  <tr>
							<div style="width: 800px;box-shadow: 0 10px 10px rgba(0,0,0,0.25),0 8px 8px rgba(0,0,0,0.22);  padding-top:10px; padding-bottom:10px;border: 1px solid grey; border-radius: 10px;">Monsieur/Madame <?php echo $row["id_utilisateur"]; ?>; Voudrait faire:<?php echo $row["description"]; ?> dans <?php echo $row["ecole_souhaitee"]; ?> pour une filière <?php echo $row["filiere_souhaitee"]; ?> dans cette ville <?php echo $row["filiere_souhaitee"]; ?><br><div style="text-align: right; color:red"><?php echo $row["date_pub"]; ?></div></div><br><br>
						 	 </tr>
						 <?php
						  }
						 ?>
						 <tbody>
						</table>
					  </div>
					  
					  
					  <?php } 	?>
				
				</div>
		</div>
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
</body>
</html>