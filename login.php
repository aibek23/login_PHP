<?php
    if (isset($_POST['login'])) { $login = $_POST['login']; if ($login == '') { unset($login);} } 
    if (isset($_POST['password'])) { $password=$_POST['password']; if ($password =='') { unset($password);} }
 
 if (empty($login) or empty($password)) 
    {
    exit ("Full!");
    }
        
     include("init.php");
$result = mysqli_query($con, "select id from user where login='$login'");

    $myrow = mysqli_fetch_array($result);
    if (!empty($myrow['id'])) {
    exit ("enter other login.");
    }
 // если такого нет, то сохраняем данные
    $result2 = mysqli_query($con, "insert into user (login,password) values('$login','$password')");
    // Проверяем, есть ли ошибки
    if ($result2=='TRUE')
    {
    echo "registration success! . <a href='index.php'>Next </a>";
    }
 else {
    echo "error.";
    }
	$q = mysqli_query($con,"SELECT * FROM user");
	while ($row = mysqli_fetch_row($q)) {
    echo "<tr>";
        for ($j = 0 ; $j < 3 ; ++$j) echo "<td>$row[$j]</td>";
    echo "</tr>";
}
    ?>