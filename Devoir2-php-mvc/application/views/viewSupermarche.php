<<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="JQuery/jquery-3.1.1.js"></script>
    <script src="JS/mesFonctions.js"></script>
    
</head>
<body>
<div id=Secteur><select id="selectSecteur">
    <h1>liste des secteurs</h1>
  <?php
  
echo"<select id='lstSecteurs'>";
foreach($lesSecteurs as $unSecteur)

{
echo "<option value='".$unSecteur->nomS."</p>";
}
?>
</body>
</html>