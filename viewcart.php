<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>patient</title>
    <link rel="stylesheet" href="orders.css">
</head>

<body>
    <h1>Products</h1>
    <table border=1>
        <tr id="top">
            <td>id</td>
            <td>product name</td>
            <td>product details</td>
            <td>product img</td>
            <td>Product Price</td>
            <td>Delete</td>
            <td>View</td>
        </tr>
        <?php
       
        echo  "<td>" . "<a href='p1.php'>Home</a>" . "</td>";

        echo "<td>" . "<button onclick=window.print()>print table</button>" . "</td>";

       

        include_once "Function.php";
        session_start();
        //echo $_SESSION["Email"];
        $Orecord = new record;
        
        $es = $_SESSION["Email"];
        $obj2 = new record;
        $obj2->Ofmanager->fileN = "users.txt";
        //$Eser = $obj2->Esearch($es);

        $user = $obj2->Esearchuser($es);
        $id = $obj2->Esearchid($es);
        $er=$Orecord->Ofmanager->fileN = "$user$id.txt";
        $arr = array();
        $arr = $Orecord->fin();
        //echo $er;

      





        for ($i = 0; $i < count($arr) - 1; $i++) {

            echo "<tr>" . "<td>" . $arr[$i]->id . "</td>" . "<td>" . $arr[$i]->user . "</td>" . "<td>" . $arr[$i]->Email . "</td>" . "<td> <img src=" . $arr[$i]->pass . "></td>" . "<td>" . $arr[$i]->type;

         
            echo "<td>" . "<a href =deletcart.php?id=" . $arr[$i]->id . ">delete</a>" . "</td>";
            
          
            echo "<td>" . "<a href =azinv.php?id=" . $arr[$i]->id . ">View</a>" . "</td>";
            echo  "</tr>";
        }
        //$obj->get_user_by_id(10);


        // echo  "<td>" . "<a href='addprod.html'>Add one</a>" . "</td>";

        // echo  "<td>" . "<a href='p1.php'>Home</a>" . "</td>";

        // echo "<td>" . "<button onclick=window.print()>print table</button>" . "</td>";

        // echo  "<td>" . "<a href='ind2.php'>Upload product img</a>" . "</td>";
        // }
        // if($Eser==2)
        // {
        //     echo  "<td>" . "<a href='p1.php'>Add one</a>" . "</td>";

        //     echo  "<td>" . "<a href='ind2.html'>Back</a>" . "</td>";
        // }

        ?>
    </table>
</body>

</html>