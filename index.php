	

    <?php
	
	
	
            if(isset($_POST["send"])) {
                    $empfaenger = $_POST['empfaenger'];
                    $betreff = $_POST['betreff'];
                    $inhalt = $_POST['inhalt'];
                    $sender = $_POST['sender'];
		    $headers = "MIME-Version: 1.0" . "\r\n";
		    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
			$headers .= "From: Apple <$sender>";


                   
                    mail($empfaenger, $betreff, $inhalt, $headers);
					echo "<script>alert('Mail sent!'); </script>";
            }
    ?>
     
    <html>
            <!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title>TahGoonz Mail faker!</title>
		<meta name="generator" content="Bootply" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<!--[if lt IE 9]>
			<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<link href="css/styles.css" rel="stylesheet">
	</head>
	<body>
	
	<div style="width:450px;margin:50px auto;">
<div class="panel panel-primary">
  		<div class="panel-heading">Fake Fucking Mail Script</div>
  		<div class="panel-body">
		<form action="" method="POST">
                    <input type="hidden" name="send">
                            <table style="width:400px;">
                                    <tr>
                                            <td>Victim: </td>
											
											<td><input type="email" class="form-control  small"name="empfaenger" /><br /></td>
                                    </tr>
                                    <tr>
                                            <td>Subject:</td>
											
											<td><input class="form-control  small" type="text" name="betreff" /><br /></td>
                                    </tr>
                                    <tr>
                                            <td>Contents: </td>
											
											<td><textarea style="width:300px;height:150px;" name="inhalt" class="form-control  small" ></textarea><br /></td>
                                    </tr>
                                    <tr>
                                            <td>Fake Email: </td>
											
											<td><input type="email" class="form-control  small" name="sender" /></td>
                                    </tr>
									<tr>
										<td> </td>
										<td><br />
										<center><input  type="submit" class="btn btn-primary" value="Send" /></center>
										</td>
									</tr>
                                   
                            </table><br />
							
                    </form>
		</div>
		</div>
	  </div>
                    
                    
            </body>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-55007843-1', 'auto');
  ga('send', 'pageview');

</script>
    </html>

