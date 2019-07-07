<?php
  $servername="localhost";
  $username="root";
  $password="";
  $db="admin";

$conn = new mysqli($servername, $username, $password, $db);

if(isset($_POST['submit']))
{
    $q_one=implode(',',$_POST['q_one']);
    $q_two=implode(',',$_POST['q_two']);
    $q_three=implode(',',$_POST['q_three']);
    $q_four=$_POST['q_four'];
    $q_five=implode(',',$_POST['q_five']);
    $a_five=$_POST['a_five'];


    $sql=$conn->query("INSERT INTO users(q_one, q_two, q_three, q_four, q_five, a_five)
                       values('$q_one', '$q_two', '$q_three', '$q_four', '$q_five', '$a_five')");

    if($sql>0)
    {
        echo "<script> alert('Data is submited')</script>";
    }
    else {
        echo "<script> alert('Data is not submited')</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <form action="" method="POST">
        <input type="checkbox" name="ch[]" value="A">A<br>
        <input type="checkbox" name="ch[]" value="B">B<br>
        <input type="checkbox" name="ch[]" value="C">C<br>
        <input type="checkbox" name="ch[]" value="D">D<br>

        <input type="submit" name="submit" value="submit">
    </form>



    <?php
    
                                            $sql = "SELECT q_one, q_two, q_three, q_four, q_five, a_five FROM users";
                                            $postsResult = $conn->query($sql);

                                            while($row = $postsResult->fetch_assoc())
                                                {
                                                    echo $row["q_one"] ."<br>";
                                                }	
                                                $conn->close();
                                
                                        ?>
    
</body>
</html>