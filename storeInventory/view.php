
<?php  include 'header.php'?>
<img id="logo" src="darkmodelogo.png">

<h1 class="text-center">Store Inventory</h1>
  <div class="container">
    <table class="table table-striped table-bordered table-hover">
      <thead class="table-dark">
        <tr>
              <th  scope="col">Product ID</th>
              <th  scope="col">Product</th>
              <th  scope="col">Description</th>
              <th  scope="col">Price</th>
              <th  scope="col" height="auto" width="50%">Photo</th>
        </tr>  
      </thead>
        <tbody>
          <tr>
               
            <?php
              
              if (isset($_GET['product_id'])) {
                  $product_id = $_GET['product_id']; 

                  $query="SELECT * FROM products WHERE id = {$product_id} ";  
                  $view_product= mysqli_query($conn,$query);            

                  while($row = mysqli_fetch_assoc($view_product))
                  {
                    $productid = $row['id'];                
                    $product = $row['pname'];
                    $desc = $row['pdesc'];
                    $price = $row['price'];
                    $photo = $row['img'];
        

                        echo "<tr >";
                        echo " <td >{$productid}</td>";
                        echo " <td > {$product}</td>";
                        echo " <td > {$desc}</td>";
                        echo " <td > {$price}</td>";
                        echo " <div id='example'><td ><img src='{$photo}' id='pics' alt='item' > </td></div>"; 
                        
                        echo " </tr> ";
                  }
                }
            ?>
          </tr>  
        </tbody>
    </table>
  </div>

 
  <div class="container text-center mt-5">
    <a href="home.php" class="btn btn-warning mt-5"> Back </a>
  <div>


<?php include "footer.php" ?>

</html>