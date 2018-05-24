<?php
include 'data.php';
echo "ashish";
$sqll="SELECT * FROM photos";

$result = mysqli_query($conn,$sqll);
while ($row = mysqli_fetch_assoc($result)) 
{$row1=$row["image"];

echo "$row1" ;

	echo"<img src='mclothes/".$row['image']."'>";
}

?>