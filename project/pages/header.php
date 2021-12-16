     <header>
			<ul>
				<li><img src="img/logo.svg" class="brand"></li>
				<li>
					<input id="search-box" type="search" name="" placeholder="Search here...">
					
				</li>
				<li><a href="index.php">Home</a></li>
				<?php  
				 if(isset($_SESSION['fname'])){ ?>

				 <li><?= $_SESSION['fname']; ?> </li>
				 <li><a href="pages/logout.php">Logout</a></li>	
				<?php  }else{?>

				<li data-toggle="modal" data-target="#myLogin">Login</li>
				<li data-toggle="modal" data-target="#mySignup">Signup</li>
			<?php } ?>

				<li><i class="fa fa-shopping-cart"></i> Cart</li>	
			</ul>
		</header>