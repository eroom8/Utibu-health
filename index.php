<?php
include "includes/head.php"
?>

<body>
 
  <?php

  include "includes/header.php";
  ?>

  <div class="container-fluid ">

    <!-- categories-->

    <div class="row" id="cards">
      <div class="col-sm-3" id="cards">
        <div class="card " style="background-color: AntiqueWhite; height: 70%;">
          <div class="card-body">
            <strong style="background-color:  LightSteelBlue; color: white ; ;">&nbsp;UPTO 50% OFF&nbsp;</strong>
            <strong>
              <h5 style="font-weight:bold; color: rgb(104, 97, 97);"> Medicine Products</h5>
            </strong>
            <a href="search.php?cat=medicine">
              <img src="images/midicin.jpg" style="width:150.4px ; height:225px ;" class="d-block " alt="...">
            </a>
            <br>
            <a href="search.php?cat=medicine"> <button class="rounded-2" style="background-color: LightSalmon;
           color: white; font-weight: bold; border-color: LightSalmon;margin:10px;">Go To Medicine Products</button></a>
          </div>
        </div>
      </div>
     
    </div>
    <!-- <div class="row" id="cards">
      <div class="col-sm-4">
        <div class="card border border-warning">
          <div class="card-body">
            <img src="images/Medicine.png" style="width:305.4px ; height:305px ;" class="d-block " alt="...">
            <h5 class="card-title">Medicine</h5>
            <p class="card-text">All products that belongs to Medicine .</p>
            <a href="search.php?cat=medicine" class="btn btn-success">Go to Medicine</a>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="card border border-warning">
          <div class="card-body">
            <img src="images/self-care.png" style="width:305.4px ; height:305px ;" class="d-block " alt="...">
            <h5 class="card-title">self care </h5>
            <p class="card-text">All products that belongs to Self care .</p>
            <a href="search.php?cat=self-care" class="btn btn-success">Go self care </a>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="card border border-warning">
          <div class="card-body">

            <img src="images/machine.png" style="width:305.4px ; height:305px ;" class="d-block " alt="...">
            <h5 class="card-title">machines</h5>
            <p class="card-text">All products that belongs to Machine .</p>
            <a href="search.php?cat=machine" class="btn btn-success">Go machines</a>
          </div>
        </div>
      </div>
    </div> -->
    <!-- end of categories-->


    <!----------------         products might you like                     --------->

    <h2 style="margin-top: 10px;">Products you might like : </h2>

    <div class="row">
      <?php
      $data = all_products();
      $num = sizeof($data);
      for ($i = 0; $i < $num; $i++) {

      ?>
        <div class="col-sm-2" id="cards" style="width: 20.45rem;">
          <div class="card border border-warning">
            <img src="images/<?php echo $data[$i]['item_image'] ?>" class="card-img-top" style="width:305.3px ; height:305px ;">
            <div class="card-body">
              <?php
              if (strlen($data[$i]['item_title']) <= 20) {
              ?>
                <h5 class="card-title"><?php echo $data[$i]['item_title'] ?></h5>

              <?php
              } else {
              ?>
                <h5 class="card-title"><?php echo substr($data[$i]['item_title'], 0, 20) . "..." ?></h5>
              <?php
              }
              ?>
              <br> <br>
              <strong>
                <h3 style="color :#82E0AA;" class="card-text"> KSH <?php echo $data[$i]['item_price'] ?></h3>
              </strong>
              <br>
              <small class="text-muted" style="font-weight: bold;">Brand Name: <?php echo $data[$i]['item_brand'] ?></small><br><br>
              <a href="product.php?product_id=<?php echo $data[$i]['item_id'] ?>" class="btn btn-outline-info">More details</a>

            </div>
          </div>
        </div>
      <?php
        if ($i == 7) {
          break;
        }
      }
      ?>
    </div>

    <!----------------        end of products might you like                     --------->
    <br>
    <br>
    <br>
    <br>
   
  <!-- FOOTER -->
  <?php
  include "includes/footer.php"
  ?>
</body>

</html>s