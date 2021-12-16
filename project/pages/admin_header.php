     <header>
			<ul>
				<li><img src="img/logo.svg" class="brand"></li>
				<li><input type="search" name="" placeholder="Search here...">
					<div class="dropdown-menu" style="width:400px; height:250px;"></div>
				</li>
				<li></li>
				<li></li>
				<li></li>
				<?php  
				 if(isset($_SESSION['fname'])){ ?>

				 <li><?= $_SESSION['fname']; ?> </li>
				 <li><a href="pages/logout.php">Logout</a></li>	
				<?php  } ?>
			</ul>
		</header>