<!doctype html>
<head>
	<meta charset="utf-8">
	<title>Chris Nichol's Blog</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
	<header>
		<h1><a href="/">Chris Nichol's Blog</a></h1>
		<nav>
			<ul>
				<li><a href="add-post.php">Add Post</a></li>
			</ul>
		</nav>
	</header>

<div id="all-posts">
<?php 
require("includes/connect.php");
$query = $mysqli->query("SELECT * FROM blog order by timestamp asc");


while( $row = $query->fetch_assoc() ){
//print_r($row);
	$title = $row['title'];
	$content = $row['content'];
	$timestamp = $row['timestamp'];
	$id = $row['id'];
	echo "
	<div class='post'>
		<h2>{$title} - {$timestamp}</h2>
		<h3><span id='{$id}'>Delete Post</span></h3>
		<div class='text-box'>
		{$content}
		</div>
	</div>";
}
?>
</div>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
</body>
</html>
