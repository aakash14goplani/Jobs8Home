<html>
<head>
<title>Vacancies</title>
<link rel="icon" href="img/cube.jpg" type="image/x-icon" /> 
<style>
th
{
background-color:gray;
}
td
{
text-align:center;
background-color:white;
}
</style>
</head>
<body bgcolor="lightgreen">
<table border="5" align="center" width="700" height="200" style="margin-top:250px;">
   <tr>
  <th>Sr No.</th>
      <th>Company Name </th>
      <th>Job Name </th>
      <th>Skills </th>
      <th>Bond </th>
<th>location</th>
    </tr>
<?php

$db = mysql_connect("localhost", "root", "");
  $er = mysql_select_db("jobs",$db);
 
 
  $result = mysql_query("SELECT * FROM vacancy where c_name='microsoft'");

    while ($array = mysql_fetch_row($result))
    {
        print "<tr> <td>";
		echo $array[0];
        print "</td> <td>";
        echo $array[1]; 
        print "</td> <td>";
        echo $array[2]; 
        print "</td> <td>";
        echo $array[3]; 
        print "</td> <td>";
        echo $array[4]; 
        print "</td> <td>";
        echo $array[5]; 
        print "</td> </tr>";
 
    }
?>

</table>
</body>
</html>