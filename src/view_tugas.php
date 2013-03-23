<!doctype html>

<html>
	<head>
		<meta charset="utf-8">
		<title>Task Details</title>
		<link rel="stylesheet" href="../css/style.css">
		<?php include_once ("ambildatauser.php");?>
		<?php include_once ("ambildatatugas.php");?>
		<?php include_once ("ambildatakomentar.php");?>
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
			<div class="task-details not-editing">
				<header>
					<form method="POST">
						<h1>
							<label>
								<span class="task-checkbox"><input type="checkbox" class="task-checkbox"></span>
								<span class="task-title"><?php echo $namatugas;?></span>
							</label>
						</h1>
					</form>

					<ul>
						<li><a href="#" id="editTaskLink">Edit Task</a></li>
					</ul>
				</header>
				<div id="current-task">
					<section class="details">
						<header>
							<h3>Details</h3>
						</header>
						<p class="description">
							<span class="detail-label">Description:</span>
							<span><?php echo $lampiran;?></span>
						</p>
						<p class="assignee">
							<span class="detail-label">Assignee:</span>
							<span class="detail-content">Irfan Kamil</span>
						</p>
<!--				
						<p class="category">
							<span class="detail-label">Kategori:</span>
							<span class="detail-content">Makan</span>
						</p>
-->
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
					</section>
					<section class="attachment">
						<header>
							<h3>Attachment</h3>
						</header>
						<figure>
							<img src="assets/photo.jpg" alt="">
						</figure>
					</section>
				</div>
				<div id="edit-task">
					<form id="new_tugas" action="#" method="post">
						<div class="field">
							<label>Task Name</label>
							<input size="25" maxlength="25" name="nama" id="nama" type="text">
						</div>
						<div class="field">
							<label>Attachment</label>
							<input name="attachment" id="attachment" type="file">
						</div>
						<div class="field">
							<label>Deadline</label>
							<input name="deadline" id="deadline" type="date">
						</div>
						<div class="field">
							<label>Assignee</label>
							<input name="assignee" id="assignee" type="text">
						</div>
						<div class="field">
							<label>Tag</label>
							<input name="tag" id="tag" type="text">
						</div>
						<div class="buttons">
							<button type="submit">Save</button>
						</div>
					</form>
				</div>
				<section class="comments">
					<header>
						<h3>1 Comment(s)</h3>
					</header>

					<div id="commentsList">
						<article class="comment">
							<div class='avatar'>
								<img src='http://img2.blogblog.com/img/b36-rounded.png'></img>																
							</div>
							<div class='user'>
								<div>
									<cite>
										<a>Komentator</a>
									</cite>
									<br>
									<span class='datetime secondary-text'>
										<a><?php echo $tanggalkom;?></a>
									</span>
								</div>
								<p><?php echo $isikom;?></p>
							</div>
						</article>
					</div>

					<div class="comment-form">
						<h3>Add Comment</h3>
						<form id="commentForm" action="#" method="post">
							<textarea name="komentar" id="commentBody"></textarea>
							<button type="submit">Send</button>
						</form>
					</div>
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