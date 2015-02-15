<?php

	$page_id = "Index pagina"; // De tekst tussen de " " moet je veranderen voor de pagina titel ( <title></title> )
	
	$webpart	=	"start";

	
include ('templates/header.html');
include ('templates/top.html');

?>

<div class="overall_body">
	<div class="center_body">
    	<div class="textfield">
    	<span class="logo"><img src="images/logo.png" alt="Moonlight Farm" /></span>
<?php if ($currentFile == "index.php"){include ("includes/entry.php");}?>    

<!--VANAF HIER KAN ER TEKST GEPLAATST WORDEN DIE OP DE WEBSITE MOET WORDEN WEERGEGEVEN-->    



<!--TOT HIER KAN ER TEKST GEPLAATST WORDEN DIE OP DE WEBSITE MOET WORDEN WEERGEGEVEN-->    
		</div>
	</div>

</div>
<div class="footer">

</div>
</div>
</body>
</html>
