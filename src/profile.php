<!doctype html>

<html>
	<head>
		<meta charset="utf-8">
		<title>Profile</title>
		<link rel="stylesheet" href="../css/style.css">
		<?php include_once ("ambildatauser.php");?>
		<?php include_once ("ambildatatugas.php");?>
		
		
	</head>

	<body>
	
		<div class="site-container">
			<header class="site-header">
				<h1><a href="dashboard.php">Do</a></h1>
				<p>A to-do list for getting things done.</p>

				<nav>
					<ul class="main-links">
						<li class="dashboard-link"><a href="dashboard.php">Dashboard</a></li>
						<li class="profile-link" id="profileLink"><a href="profile.php" id="userFullName"><?php echo $fullname;?></a></li>
						<li class="profile-link"><a href="../index.php">Logout</a></li>
					</ul>

					<div class="search-box">
						<form action="search.php" method="get" id="searchForm">
							<input type="search" name="q" placeholder="Search">
							<button type="submit">Search</button>
						</form>
					</div>
				</nav>
			</header>

		<div class="content">
			<div class="profile">
				<header>
					<h1><? echo $fullname ?></h1>
					<ul>
						<li class="edit-profile-link"><a href="#" id="editProfileButton">Edit Profile</a></li>
					</ul>
				</header>

				<section class="profile-details">
					<figure class="profile-image">
						<img src="../assets/<?php echo $avatar;?>" alt="Profile Photo">
					</figure>
					<p class="description">
						<span class="detail-label">About Me:</span>
						<span class="detail-value">Lorem Ipsum Dolor Sit Amet</span>
					</p>
					<p class="username">
						<span class="detail-label">Username:</span>
						<span class="detail-value">
						<?php echo $fullname; ?> </span>
					</p>

					<p class="date-of-birth">
						<span class="detail-label">Date of Birth:</span>
						<span class="detail-value"><?php echo $tanggal;?></span>
					</p>
				</section>

				<section class="tasks current">
					<header>
						<h3>Current Tasks</h3>
					</header>

					<article class="task" data-task-id="1" data-category="a">
							<header>
								<h1>
									<label>
										<span class="task-checkbox"><input type="checkbox" class="task-checkbox"></span>
										<a href="view_tugas.php"><?php echo $namatugas; ?></a>
									</label>
								</h1>
							</header>
							<div class="details">
								<!-- <p class="category">
									<span class="detail-label">Kategori:</span>
									<span class="detail-content">Makan</span>
								</p> -->
								<p class="deadline">
									<span class="detail-label">Deadline:</span>
									<span class="detail-content">
										<?php echo $tanggaltugas; ?>
									</span>
								</p>
								<p class="tags">
									<span class="detail-label">Tag:</span>
									<?php
										$token = strtok($kategori, ";");
										while ($token != false)
										{
											echo "<span class=\"tag\">$token</span>";
											$token = strtok(";");
										}
									?>
								</p>
							</div>
						</article>
				</section>

				<section class="tasks completed">
					<header>
						<h3>Completed Tasks</h3>
					</header>

				</section>
			</div>
		</div>

			<footer class="site-footer">
				Created by Gichie, Kamil, and Alex (Tubes I); Ajul, Aidil, and Alex
			</footer>
		</div>
		<?php include_once ("script.php"); ?>		
	</body>
</html>
