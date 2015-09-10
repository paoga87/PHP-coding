<!DOCTYPE html>

<html lang="en">
<head>
	<meta charset="utf-8">
	
	<title>Page Title</title>
	
	<meta name="description" content="">
	
  <!-- Mobile-friendly viewport -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

   <!-- Style sheet link -->
	<link href="css/main.css" rel="stylesheet" media="all">
	
</head>
<body>
		<div align="center">
		<h1>Page Title</h1>
                </div>
    <div align="center"> 
      <?php 
        echo ""<p>Object was here, taken out for privacy..."</p>";
      ?>
    </div>
    
    <div align="center"> 
      <?php 
        echo ""<p>Object was here, taken out for privacy..."</p>";
      ?>
    </div>
    
      <br> <br>
      <div align="center">
        <h2>Acknowledgement Form</h2>
        <p>Please fill out the form below with your information and click submit.</p>
        
        <form action="submit.php" method="post">

        <table style="width:30%">
          <tr>
            <td>First name:</td>
            <td><input type="text" name="firstname" required /></td> 
          </tr>
          <tr>
            <td>Last name:</td>
            <td><input type="text" name="surname" required /></td> 
          </tr>
          <tr>
            <td>Email:</td>
            <td><input type="text" name="email" required /></td>
          </tr>
          <tr>
            <td>Acknowledgement:</td>
            <td><input type="text" name="acknowledgement" required /></td>
          </tr>
          <tr>
            <td>Date:</td>
            <td><input type="date" name="date" required /></td>
          </tr>
          <tr>
            <td>Initials:</td>
            <td><input type="text" name="initials" required /></td>
          </tr>
        </table>
      <input type="submit" value="Submit now" />
    </form>
    
    </div>

  <br> <br> 
  <div align="center">
    
	<footer role="contentinfo">

		<small>Copyright &copy; <time datetime="2015">2015</time>Paola Garcia Cardenas</small>
		
	</footer>
  </div>

</body>
</html>
