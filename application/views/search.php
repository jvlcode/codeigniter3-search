<!DOCTYPE html>
<html>
<style>
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
 
  background-color: #45a049;
}

div {
  border-radius: 5px;
  padding: 20px;
}
li{
	list-style-type: none;
    padding: 0;
    margin: 5px;
	font-weight: bold;
	padding: 2px;
	background-color: skyblue;
}
.title{
	background-color: black;
	color: white;
}
.description{
	background-color: white;
	color: black;
}
</style>
<body>

<h2 align="center">Codeigniter Search Form</h2>

<div>
	<form method="GET"  action="<?=base_url('post/search')?>">
		<div style="width:100%;">
			<div style="position:absolute;left:395px">
				<input type="text" name="query" placeholder=".." value="<?=$query?>">  
			</div>
			<div style="position:absolute;right:500px">
				<input type="submit" value="Search">
			</div>
		</div>
	</form>
	<div style="margin: 100px;">
		<ul>

			<?php 
			if(isset($posts)&&!empty($posts)):
			foreach($posts as $post): ?>
			<li><div>
					<div class="title"><?=$post->title?></div>
					<div class="description"><?=$post->description?></div>
				</div>
				
			</li>
			<?php endforeach;
			else:
				echo "No results";
			endif;
			?>
		
		</ul>
	</div>
</div>

</body>
</html>
