<html>
  <head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <meta name='description' content=''>
    <meta name='author' content=''>
    <link rel='icon' href='../../favicon.ico'>

    <title>My Progress Stat</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  </head>

  <body>

        <nav class='navbar navbar-expand-lg navbar-dark bg-dark'>
        <a class='navbar-brand' href='http://jpromano.net'>Jpromano.net</a>
        <button class='navbar-toggler' type='button' data-toggle='collapse' data-target='#navbarColor03' aria-controls='navbarColor03' aria-expanded='false' aria-label='Toggle navigation'>
          <span class='navbar-toggler-icon'></span>
        </button>
      
        <div class='collapse navbar-collapse' id='navbarColor03'>
          <ul class='navbar-nav ml-auto'>
            <li class='nav-item'>
              <a class='nav-link' href='http://stats.jpromano.net'>Home <span class='sr-only'>(current)</span></a>
            </li>
            <li class='nav-item'>
              <a class='nav-link' href='./codingStats.php'>Coding</a>
            </li>
            <li class='nav-item'>
              <a class='nav-link' href='./studyStats.php'>Study</a>
            </li>
            <li class='nav-item'>
              <a class='nav-link' href='./readingStats.php'>Reading</a>
            </li>
            <li class='nav-item'>
              <a class='nav-link' href='./blogStats.php'>Blog</a>
            </li>
            <li class="nav-item dropdown active">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Workout
              </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="./runningStats.php">Running</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item active" href="./wlStats.php">Weight Loss</a>
                </div>
            </li>
          </ul>
        </div>
    </nav>


    </br>
    </br>

    <div class='container'>
        <h1 class="bg-info">
			<center>
				<b>Weight Loss Metrics!</b>
			</center>	
		</h1>
        <div class='row'>
            <div class='col-sm'>
            <form action="insertLog.php" method="post">
    <p>
        <label for="inputLog">Log:</label>
        <input type="text" name="inputLog" id="inputLog">
    </p>
    <input type="submit" value="Submit">
</form>
                <?php 
                
                /*
					include('connectDataBase.php'); 

					if ($conn === false) { 
						die("ERROR: Could not connect. " 
													.$conn->connect_error); 
						} 

					$sql = "SELECT *
                    FROM wo_WeightLoss
                      ORDER BY fecha ASC";

					if ($res = $conn->query($sql)) { 
						if ($res->num_rows > 0) { 
							echo "<table class='table'>"; 
							echo "<thead class='thead-dark'>"; 
							echo "<th>Date</th>"; 
							echo "<th>Now</th>"; 
							echo "<th>Diference</th>"; 
							echo "<th>BMI</th>"; 
							echo "</thead>"; 
						while ($row = $res->fetch_array()) 
							{ 
								echo "<tr>"; 
								echo "<td>".$row['fecha']."</td>"; 
								echo "<td>".$row['pesoActual']." Kg</td>"; 
								echo "<td>".$row['diferenciaPeso']." Kg</td>";
								echo "<td>".$row['imc']."</td>";  
								echo "</tr>"; 
							} 
							echo "</table>"; 
							$res->free(); 
						}  
					}
					$conn->close(); */
				?> 
			</div>
        </div>
    </div><!-- /container -->

    <footer class="page-footer font-small blue pt-4 bg-light mt-auto">
        <div class="footer-copyright text-center py-3">2019 MIT License |
          <a href="https://github.com/jpromanonet/myProgressStats" target="_blank"> Github</a>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <script src='https://code.jquery.com/jquery-3.3.1.slim.min.js' integrity='sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo' crossorigin='anonymous'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js' integrity='sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1' crossorigin='anonymous'></script>
    <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js' integrity='sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM' crossorigin='anonymous'></script>

</body>
</html>