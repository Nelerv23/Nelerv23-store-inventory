
<?php include "header.php"?>
<img id="logo" src="darkmodelogo.png">
<?php
      $host = 'localhost';  
      $username = 'root';   
      $password = "";   
      $database = 'DB';   

      $conn = mysqli_connect($host,$username,$password,$database);   

      $product_id = $_GET['product_id']; 
      $query="SELECT id, pname, pdesc, price, img FROM products WHERE id = '$product_id' ";
      $selectquery = $conn->query($query);
      $view_products = mysqli_query($conn,$query);  

      while($row = mysqli_fetch_assoc($view_products))
        {
              $product_id = $row['id'];
              $product = $row['pname'];
              $desc = $row['pdesc'];
              $price = $row['price'];
              $photo = $row['img'];
        }
 
 
    if($_SERVER['REQUEST_METHOD'] == 'POST') 
    {
      $product = $_POST['product'];
        $desc = $_POST['desc'];
        $price = $_POST['price'];
        $photo = $_POST['photo'];
      
      
    
      $query1 = "UPDATE products SET pname = '{$product}' , pdesc = '{$desc}' , price= '{$price}', img= '{$photo}' WHERE id = $product_id";
      $update_product = mysqli_query($conn, $query1);
      echo "<script type='text/javascript'>alert('Product updated successfully!')</script>";
    }      
    
    if ($selectquery->num_rows > 0) {
      while($row = $selectquery->fetch_assoc()){
      echo "<h1 class='text-center'>Update a Product $product_id</h1>
  <div class='container'>
    <form action='' method='post'>
    <div class='form-group'>
    <label for='product' class='form-label'>Product</label>
    <input type='text' name='product'  class='form-control' value='$row[pname]'>
  </div>

        <div class='form-group'>
          <label for='desc' class='form-label'>Description</label>
          <input type='text' name='desc'  class='form-control' value='$row[pdesc]'>
        </div>

        <div class='form-group'>
          <label for='price' class='form-label'>Price</label>
          <input type='number' name='price' step='0.01' class='form-control' value='$row[price]'>
        </div>
      
        <div class='form-group'>
          <label for='photo' class='form-label'>Photo</label>
          <input type='file' name='photo'  class='form-control'>
        </div>    

        <div class='form-group'>
          <input type='submit'  name='create' class='btn btn-primary mt-2' value='submit'>
        </div>
      </form> 
    </div>


    
      <div class='container text-center mt-5'>
        <a href='home.php' class='btn btn-warning mt-5'> Back </a>
      <div>";
      }
    }
?>

<?php include "footer.php" ?>