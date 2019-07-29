<!DOCTYPE html>
<html lang="en-US" class="no-js">
	
<!-- Mirrored from quickdevs.com/templates/agrom/products.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 27 Jul 2019 10:37:43 GMT -->

<body>
    
    <?php
        require('php_action/data_connection.php');
            $smt = $conn->prepare('SELECT * FROM `db_user_registration` WHERE   ur_grpid=4');
            $smt->execute();
            $data = $smt->fetchAll()
        ?>

    <!-- LOADER -->
    <div id="loader-wrapper">
        <div class="loader">
          <div class="square" ></div>
          <div class="square"></div>
          <div class="square last"></div>
          <div class="square clear"></div>
          <div class="square"></div>
          <div class="square last"></div>
          <div class="square clear"></div>
          <div class="square "></div>
          <div class="square last"></div>
        </div>
    </div>
    <!-- LOADER -->
    
    <!--HEADER START-->
    <?php
    include('includes/header.php');
    ?>
    <!--HEADER END-->
    
    <div class="sections products-background">
        <div class="container">
            <div class="pages-title">
                <h1>soil2soil <br> <span>Seller</span></h1>
                <p><a href="index.php">Home</a> &nbsp; > &nbsp; <a href="#">Seller</a></p>
            </div>
        </div>
    </div>
    
    <section>
        <!--PRODUCTS START-->
        <div class="container">
          <?php foreach ($data as $row): ?>
            <div class="row">
              <div class="col-lg-6">
                <div class="product-info">
                  <h2><?php echo "Name : ".$row['ur_name']; ?></h2>
                  <h4><?php echo "Address : ".$row['address']; ?></h4>
                  <h4><?php echo "Contact : ".$row['ur_contact']; ?></h4>
                  <h4><?php echo "chilly type : ".$row['type_of_chilly']; ?></h4>
                  <h4><?php echo "Quntity in quintal : ".$row['quntity']; ?></h4>
                  <h4><?php echo "Price Per quintal : ".$row['price']; ?></h4>
                  
                  <div class="btn-more-box"></div>
                </div>
              </div>
            </div>
            <?php endforeach ?>
        </div>
        
        
        <!--PRODUCTS END-->
        
       
        
    </section>
    
    <!--FOOTER START-->
   <?php
   include('includes/footer.php');
   ?>
    <!--FOOTER END-->

    <!--SCROLL TOP START-->
    <a href="#0" class="cd-top">Top</a>
    <!--SCROLL TOP START-->
    
	<!-- ==============================================
	JAVASCRIPTS
	=============================================== -->
    <script src="js/plugins.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/agrom.js"></script>
    
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','../../../www.google-analytics.com/analytics.js','ga');
      ga('create', 'UA-101241150-1', 'auto');
      ga('send', 'pageview');
    </script> 
    
    </body>
    

<!-- Mirrored from quickdevs.com/templates/agrom/products.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 27 Jul 2019 10:38:02 GMT -->
</html>