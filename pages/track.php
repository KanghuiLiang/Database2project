  <?php
    include_once('index.php');
    ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
    	<meta charset="UTF-8">
    	<title>Track</title>
    	<style>
    		.form{
    			padding-top: 200px;
                padding-right: 200px;
                padding-bottom: 200px;
                padding-left: 200px;
    		}
    	</style>
    </head>
    <body>
    	<div class="main">
    		<div class="form">
    		<form action="get_trackingID.php">
    		 Tracking ID: <input type="id">
            <button><i class="fas fa-search"></i></button>
    		</form>
    	</div>
    </div>
    </body>
    </html>