<!doctype html>

<html>
	<head>
		<meta charset="utf-8">
		<title>Profile</title>
		<link rel="stylesheet" href="css/style.css">
		<?php include ("ambildatauser.php");?>
		
		
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
			<div class="profile">
				<header>
					<h1><? echo $fullname ?></h1>
					<ul>
						<li class="edit-profile-link"><a href="#" id="editProfileButton">Edit Profile</a></li>
					</ul>
				</header>

				<section class="profile-details">
					<figure class="profile-image">
						<img src="assets/<?php echo $avatar;?>" alt="Profile Photo">
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
						<span class="detail-value"><?echo $tanggal;?></span>
					</p>
				</section>

				<section class="tasks current">
					<header>
						<h3>Current Tasks</h3>
					</header>

					<article class="task" data-task-id="5" data-category="a">
						<header>
							<h1>
								<label>
									<a href="view_tugas_5.html">Tugas 5</a>
								</label>
							</h1>
						</header>
						<div class="details">
							<p class="deadline">
								<span class="detail-label">Deadline:</span>
								<span class="detail-content">
									19 Februari 2013
								</span>
							</p>
							<p class="tags">
								<span class="detail-label">Tag:</span>
								<span class="tag">satu</span>
								<span class="tag">dua</span>
								<span class="tag">tiga</span>
								<span class="tag">empat</span>
							</p>
						</div>
					</article>

					<article class="task" data-task-id="6" data-category="a">
						<header>
							<h1>
								<label>
									<a href="view_tugas_6.html">Tugas 6</a>
								</label>
							</h1>
						</header>
						<div class="details">
							<p class="deadline">
								<span class="detail-label">Deadline:</span>
								<span class="detail-content">
									19 Februari 2013
								</span>
							</p>
							<p class="tags">
								<span class="detail-label">Tag:</span>
								<span class="tag">satu</span>
								<span class="tag">dua</span>
								<span class="tag">tiga</span>
								<span class="tag">empat</span>
							</p>
						</div>
					</article>


					<article class="task" data-task-id="7" data-category="a">
						<header>
							<h1>
								<label>
									<a href="view_tugas_7.html">Tugas 7</a>
								</label>
							</h1>
						</header>
						<div class="details">
							<p class="deadline">
								<span class="detail-label">Deadline:</span>
								<span class="detail-content">
									19 Februari 2013
								</span>
							</p>
							<p class="tags">
								<span class="detail-label">Tag:</span>
								<span class="tag">satu</span>
								<span class="tag">dua</span>
								<span class="tag">tiga</span>
								<span class="tag">empat</span>
							</p>
						</div>
					</article>


				</section>

				<section class="tasks completed">
					<header>
						<h3>Completed Tasks</h3>
					</header>

					<article class="task" data-task-id="1" data-category="a">
						<header>
							<h1>
								<label>
									<a href="view_tugas_1.html">Tugas 1</a>
								</label>
							</h1>
						</header>
						<div class="details">
							<p class="deadline">
								<span class="detail-label">Deadline:</span>
								<span class="detail-content">
									19 Februari 2013
								</span>
							</p>
							<p class="tags">
								<span class="detail-label">Tag:</span>
								<span class="tag">satu</span>
								<span class="tag">dua</span>
								<span class="tag">tiga</span>
								<span class="tag">empat</span>
							</p>
						</div>
					</article>

					<article class="task" data-task-id="2" data-category="a">
						<header>
							<h1>
								<label>
									<a href="view_tugas_2.html">Tugas 2</a>
								</label>
							</h1>
						</header>
						<div class="details">
							<p class="deadline">
								<span class="detail-label">Deadline:</span>
								<span class="detail-content">
									19 Februari 2013
								</span>
							</p>
							<p class="tags">
								<span class="detail-label">Tag:</span>
								<span class="tag">satu</span>
								<span class="tag">dua</span>
								<span class="tag">tiga</span>
								<span class="tag">empat</span>
							</p>
						</div>
					</article>

					<article class="task" data-task-id="3" data-category="a">
						<header>
							<h1>
								<label>
									<a href="view_tugas_3.html">Tugas 3</a>
								</label>
							</h1>
						</header>
						<div class="details">
							<p class="deadline">
								<span class="detail-label">Deadline:</span>
								<span class="detail-content">
									19 Februari 2013
								</span>
							</p>
							<p class="tags">
								<span class="detail-label">Tag:</span>
								<span class="tag">satu</span>
								<span class="tag">dua</span>
								<span class="tag">tiga</span>
								<span class="tag">empat</span>
							</p>
						</div>
					</article>

					<article class="task" data-task-id="4" data-category="a">
						<header>
							<h1>
								<label>
									<a href="view_tugas_4.html">Tugas 4</a>
								</label>
							</h1>
						</header>
						<div class="details">
							<p class="deadline">
								<span class="detail-label">Deadline:</span>
								<span class="detail-content">
									19 Februari 2013
								</span>
							</p>
							<p class="tags">
								<span class="detail-label">Tag:</span>
								<span class="tag">satu</span>
								<span class="tag">dua</span>
								<span class="tag">tiga</span>
								<span class="tag">empat</span>
							</p>
						</div>
					</article>

					<article class="task" data-task-id="8" data-category="a">
						<header>
							<h1>
								<label>
									<a href="view_tugas_8.html">Tugas 8</a>
								</label>
							</h1>
						</header>
						<div class="details">
							<p class="deadline">
								<span class="detail-label">Deadline:</span>
								<span class="detail-content">
									19 Februari 2013
								</span>
							</p>
							<p class="tags">
								<span class="detail-label">Tag:</span>
								<span class="tag">satu</span>
								<span class="tag">dua</span>
								<span class="tag">tiga</span>
								<span class="tag">empat</span>
							</p>
						</div>
					</article>

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
