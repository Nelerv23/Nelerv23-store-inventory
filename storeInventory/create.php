
<?php  include "header.php" ?>

<?php 
  if(isset($_POST['create'])) 
    {
        $product = $_POST['product'];
        $desc = $_POST['desc'];
        $price = $_POST['price'];
        $photo = $_POST['photo'];
      
        


        $query= "INSERT INTO products(pname, pdesc, price, img) VALUES(']{$product}', '{$desc}','{$price}','{$photo}')";
        $add_product = mysqli_query($conn,$query);
    
        
          if (!$add_product) {
              echo "something went wrong ". mysqli_error($conn);
          }

          else { echo "<script type='text/javascript'>alert('Product added!')</script>";
              }         
    }
    
?>

<h1 class="text-center">Add a Product</h1>
  <div class="container">
    <form action="" method="post">
      <div class="form-group">
        <label for="product" class="form-label">Product</label>
        <input type="text" name="product"  class="form-control">
      </div>

      <div class="form-group">
        <label for="desc" class="form-label">Description</label>
        <input type="text" name="desc"  class="form-control">
      </div>

      <div class="form-group">
        <label for="price" class="form-label">Price</label>
        <input type="number" name="price" step="0.01" class="form-control">
      </div>
    
      <div class="form-group">
        <label for="photo" class="form-label">Photo</label>
        <input type="file" name="photo"  class="form-control">
      </div>    

      <div class="form-group">
        <input type="submit"  name="create" class="btn btn-primary mt-2" value="submit">
      </div>
    </form> 
  </div>

   
  <div class="container text-center mt-5">
    <a href="home.php" class="btn btn-warning mt-5"> Back </a>
  <div>


<?php include "footer.php" ?>