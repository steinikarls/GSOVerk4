<?php include ($_SERVER['DOCUMENT_ROOT'] . '/2t/1810943469/GSOVERK4/title.php');?> 	
<?php include ($_SERVER['DOCUMENT_ROOT'] . '/2t/1810943469/GSOVERK4/random_image.php');?> 
<!DOCTYPE html>
<html>
	<head>
	<meta http-equiv="content-Type" content="text/html" charset="utf-8">
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
		
	<title>Forsíða<?php echo "&#8212;{$title}"; ?></title>
	</head>
	<body>
		<div id="wrapper">
			<div id="banner"> 

			</div>
			<nav id="navigation">
				<?php include ($_SERVER['DOCUMENT_ROOT'] . '/2t/1810943469/GSOVERK4/header.php');?> 	
			</nav>
			<div class="container">

        <div class="row">
            <div class="col-lg-12">            
                <h1 class="page-header">Portfolio Item
                    <small>Item Subheading</small>
                </h1>
            </div>
        </div>
         <div class="container text-center">
       <?php 
		$image = $_GET['image'];
		$myndalysing = $_GET['myndalysing'];
		echo "<img class=\"img-responsive center-block\" src=\"$image\">";
		echo "<br> <br>" .$myndalysing."<br> <br>";
		echo "";
	 ?>

        
			<footer>
				<?php include ($_SERVER['DOCUMENT_ROOT'] . '/2t/1810943469/GSOVERK4/footer.php');?> 	
			</footer>


		</div>
	</body>
</html>
