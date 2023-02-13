
<?php include "header.php"?>
<img id="logo" src="darkmodelogo.png">
  <div class="container">
    <h1 class="text-center" >Inventory</h1>
      <a href="create.php" class='btn btn-outline-dark mb-2'> <i class="bi bi-person-plus"></i>Add to Inventory</a>

        <table class="table table-striped table-bordered table-hover">
          <thead class="table-dark">
            <tr>
              <th  scope="col">Product ID</th>
              <th  scope="col">Product</th>
              <th scope="col">Description</th>
              <th  scope="col">Price</th>
              <th  scope="col">Photo</th>
              <th  scope="col" colspan="3" class="text-center">Store Inventory</th>
            </tr>  
          </thead>
            <tbody>
              <tr>
 
          <?php
          
            $query="SELECT * FROM products";               
            $view_inventory= mysqli_query($conn,$query);  

           
            while($row= mysqli_fetch_assoc($view_inventory)){
              $productid = $row['id'];
              $product = $row['pname'];
              $desc = $row['pdesc'];
              $price = $row['price'];
              $photo = $row['img'];

              echo "<tr >";
              echo " <th scope='row' >{$productid}</th>";
              echo " <td > {$product}</td>";
              echo " <td > {$desc}</td>";
              echo " <td > {$price}</td>";
              echo " <td >{$photo} </td>";

              echo " <td class='text-center'> <a href='view.php?product_id={$productid}' class='btn btn-primary'> <i class='bi bi-eye'></i> View</a> </td>";

              echo " <td class='text-center' > <a href='update.php?edit&product_id={$productid}' class='btn btn-secondary'><i class='bi bi-pencil'></i> EDIT</a> </td>";

              echo " <td  class='text-center'>  <a href='delete.php?delete={$productid}' class='btn btn-danger'> <i class='bi bi-trash'></i> DELETE</a> </td>";
              echo " </tr> ";
                  }  
                ?>
              </tr>  
            </tbody>
        </table>
  </div>

<div class="container text-center mt-5">
      <a href="index.php" class="btn btn-warning mt-5"> Back </a>
    <div>


<?php include "footer.php" ?>