
<?php  include "header.php" ?>

<?php 
     if(isset($_GET['delete']))
     {
         $products_id= $_GET['delete'];

       
         $query = "DELETE FROM products WHERE id = {$products_id}"; 
         $delete_query= mysqli_query($conn, $query);
         header("Location: home.php");
     }
     


?>



  <div class="container text-center mt-5">
    <a href="home.php" class="btn btn-warning mt-5"> Back </a>
  <div>
  
<?php include "footer.php" ?>