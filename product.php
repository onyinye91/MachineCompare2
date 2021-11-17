<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
    <!-- CSS bootstrap only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>
    <header>
        
        <nav class="navbar navbar-light bg-light">
            <div class="container-fluid">
            </div>
        </nav>
        
    </header>
    <div id="log">
    <main class="row">
        
           

        <div class="col-12">
            <div class="wrapper fadeInDown">
                <div class="formContent">
                <form action="" method="POST" id="product">
                    <h2>Product</h2>
                    <label for="name">Name</label><br>
                    <input type="name" name="name" id="name" class="fadeIn second"><br><br>
                    <label for="Quantity">Quantity: </label><br>
                    <input type="quantity" name="quantity" id="quantity" class="fadeIn third" placeholder="123"><br><br>
                    <label for="Category">Category: </label><br>
                    <input type="Category" name="category" id="category" class="fadeIn third" placeholder="category"><br><br>
                    <input type="submit" name="submit" id="submit" value="Create" class="fadeIn fourth"><br><br>

                    <?php
include("databaseConnection.php"); //establishing a connection to my database



if (isset($_POST["submit"])){//user clicks on submit


    if(empty ($_POST["name"]) || empty($_POST["quantity"]) || empty ($_POST["category"]) )   {
        echo "Both field are required";
    }else
    {

        $name = $_POST["name"];
        $quantity = $_POST["quantity"];
        $category = $_POST["category"];


        
        

       //insert to the database
       $sql1 = "INSERT INTO products (name, quantity, category) VALUES ('$name','$quantity','$category')";


       if ($conn->query($sql1) === TRUE) {
            header("location: Category.php"); ;
       } else {
           echo "Error: " . $sql1 . "<br>" . $conn->error; 
       }

       
       }
    
}    
?>
                </form>
                </div>
            </div>
        </div> 
        
         
    </main>
    </div>







    <footer class="container-fluid" id="foot">
        <div class="row">
            <div class="col">
            <nav>
                <ul class="nav justify-content-center">
                    <li class="nav-item">copyright &copy; |</li>
                </ul>
            </nav>
            </div>
        </div>
    </footer>
    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
</body>
</html>