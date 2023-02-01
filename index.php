<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Write a PHP program using nested for loop that creates a chess board</title>
</head>
<body>
    <center>
    <div class="container" >
    <h1>DailyChallenge de jour2</h1>
    <table width="400px" height="30px" cellspacing="0px" cellpadding="0px" border="1px">
    
    <?php
for($row=1;$row<=8;$row++)
{
	echo "<tr>";
	for($column=1;$column<=8;$column++)
	{
		$total=$row+$column;
		if($total%2==0)
		{
			echo "<td height=30px width=30px bgcolor=#FFFFFF></td>";
		}
		else
		{
			echo "<td height=30px width=30px bgcolor=#000000></td>";
		}
	}
	echo "</tr>";
}
?>

    </table>
    </div>
    </center>
</body>
</html>