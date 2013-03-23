<!doctype html>

<html>
	<head>
		<meta charset="utf-8">
		<title>New Task</title>
		<link rel="stylesheet" href="../css/style.css">
	</head>

	<body>
		<div class="site-container">
			<header class="site-header">
				<h1><a href="dashboard.php">Do</a></h1>
				<p>A to-do list for getting things done.</p>

				<nav>
					<ul class="main-links">
						<li class="dashboard-link"><a href="dashboard.php">Dashboard</a></li>
						<li class="profile-link" id="profileLink"><a href="profile.php" id="userFullName">John Doe</a></li>
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
			<div class="add-task">
				<header>
					<h1>Add Task</h1>
				</header>
				<form id="new_tugas" action="#" method="post">
					<div class="field">
						<label>Task Name</label>
						<input size="25" maxlength="25" name="nama" id="nama" type="text">
					</div>
					<div class="field">
						<label>Attachment</label>
						<input name="attachment" id="attachment" type="file" accept="image/*,video/*">
					</div>
					<div class="field">
						<label>Deadline</label>
						<input name="deadline" id="deadline" type="date">
					</div>
					<div class="field">
						<label>Assignee</label>
						<input name="assignee" id="assignee" type="text" list="friends">
						<datalist id="friends">
							<option value="Irfan Kamil">
							<option value="Tubagus Andhika Nugraha">
							<option value="Sonny Fitra Arfian">
						</datalist>
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
		</div>
			<footer class="site-footer">
				Created by Gichie, Kamil, and Alex (Tubes I); Ajul, Aidil, and Alex
			</footer>
		</div>
		<?php include_once ("script.php"); ?>		
	</body>
</html>