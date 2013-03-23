<!doctype html>

<html>
  <head>
		<meta charset="utf-8">
		<title> Edit Profile</title>
		<link rel="stylesheet" href="../css/style.css">
		<?php include ("ambildatauser.php");?>
		<?php include ("ambildatakomentar.php");?>
		<?php include ("ambildatatugasphp");?>
		
		
	</head>

	<body>
	
		<div class="site-container">
			<header class="site-header">
				<h1><a href="dashboard.html">Do</a></h1>
				<p>A to-do list for getting things done.</p>

				<nav>
					<ul class="main-links">
						<li class="dashboard-link"><a href="dashboard.html">Dashboard</a></li>
						<li class="profile-link" id="profileLink"><a href="profile.html" id="userFullName"><?php echo $fullname;?></a></li>
						<li class="profile-link"><a href="index.html">Logout</a></li>
					</ul>

					<div class="search-box">
						<form action="search.html" method="get" id="searchForm">
							<input type="search" name="q" placeholder="Search">
							<button type="submit">Search</button>
						</form>
					</div>
				</nav>
			</header>

		<div class="content">
			<div class="secondary">
					<section class="register">
						<header>
							<h3>Edit Profile</h3>
						</header>

						<form id="editprofile" action="editsukses.php" method="post" class="vertical">
							
							<div class="field">
								<label>Nama Lengkap</label>
								<input size="30" maxlength="50" name="nama_lengkap" id="nama_lengkap" type="text">
							</div>
							<div class="field">
								<label>Tanggal Lahir</label>
								<input name="tanggal_lahir" id="tanggal_lahir" type="date">
							</div>
							<div class="field">
								<label>Upload New Avatar</label>
								<input name="avatar" id="avatar" type="file" accept="image/jpg">
							</div>
							<div class="field">
								<label>Password</label>
								<input size="30" maxlength="50" name="password" id="password" type="password">
							</div>
							<div class="field">
								<label>Confirm Password</label>
								<input size="30" maxlength="50" name="password_k" id="password_k" type="password">
							</div>
							<div class="field buttons">
								<button type="submit" name="register_dong" id="submitButton">Register</button>
							</div>
						</form>
					</section>
				</div>
		</div>

			<footer class="site-footer">
				Created by Gichie, Kamil, and Alex
			</footer>
		</div>
		<script src="js/bajuri.js"></script>
		<script src="js/do.js"></script>	
		<script src="js/checker.js"></script>	
		
	</body>
</html>
