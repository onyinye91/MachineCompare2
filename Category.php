<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Category</title>
</head>
<body>
    <header>

    </header>

    <main>
        
        <div class="vertical-menu">

            <?php
          include("databaseConnection.php"); //establishing a connection to my database     
    
            $sql = "SELECT * FROM products;";

            $result = mysqli_query($conn, $sql); //execute SQL query
            
            //fetch the result
            //check
            $resultCheck = mysqli_num_rows($result);

        if($resultCheck > 0) {
            while($row = mysqli_fetch_assoc($result)){
                print "<div>";
                print "<ul>";
                print "<li>";
                print "<div><b>Category: </b> ".$row['category']."</div>";
                print "<div><b>Quantity: </b> ".$row['quantity']."</div>";
                print "<div><b>product: </b> ".$row['name']."</div>";
                print "<div><a href='Category.php?id=".$row['id']."' class='button'>UPDATE</a><br>";
                print "<a href='Category.php?id=".$row['id']."' class='button'>DELETE</a><br><br><hr></div>";
                print "</li>";
                print "</ul>";
                print "</div>";
                        
                
            }

        }//$result->close();
            ?>

                
                ?>
        </div>    
        
    </main>
    
</body>
</html>