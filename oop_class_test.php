<?php 
	
	Class Fruit{

		function test()
		{
			echo "Yes";
		}


	}

	$abc = new Fruit; 
	//echo $abc->test(); 

?>


<html>
  <head>
      <title>Reverse</title>
 </head>
 <body>
    <table>
         <form name="frm" method="post">
            <tr>
            	<td>Number</td>
            	<td><input type="text" name="rev"></td>
            </tr>
             <tr>
             	<td>Reverse is:</td>
             	<td><input type="text" value="" name="rev1"></td>
             </tr>
             <tr>
             	<td> </td>
             	<td><input type="Submit" value="Reverse" name="rev2"></td>
             </tr>
        </form>
    </table>
 </body>
</html>