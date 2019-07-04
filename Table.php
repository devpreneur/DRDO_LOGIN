<html>
    <head>
        <meta charset="UTF-8">
        <title>LoginDB</title>
    </head>
    <body>

<?php
include ("connection.php");

            $conn=  mysqli_query($conn, "select * from data");

       ?>
        <div>
            <td>Login Page Database</td>
         <table border="1">
            <th> First Name</th>
                    <th>Last Name</th>
                   

            </tr>

        <?php

             while($row=  mysqli_fetch_array($conn))
             {
                 ?>
            <tr>
                <td><?php echo $row['First Name']; ?></td>
                <td><?php echo $row['Last Name']; ?></td>
              
            </tr>
        <?php
             }
             ?>
             </table>
            </div>
    </body>
</html>