<!doctype html>
<head>
	<meta charset="utf-8">
	<title>Chris Nichol's Blog</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="assets/css/reset.css" />
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

<div id="create-post">
<form class="form-horizontal" action="includes/db-insert-post.php">
<fieldset>

<!-- Form Name -->
<legend>Form Name</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="title">Title</label>  
  <div class="col-md-4">
  <input id="title" name="title" type="text" placeholder="Enter your post's title here" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="Content">Content</label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="Content" name="content">Start writing...</textarea>
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="submit"></label>
  <div class="col-md-4">
    <button id="submit" name="submit" class="btn btn-primary">Save Post</button>
  </div>
</div>

</fieldset>
</form>


</div>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
</body>
</html>
