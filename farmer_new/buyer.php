<!DOCTYPE html>
<html lang="en-US" class="no-js">

<!-- Mirrored from quickdevs.com/templates/agrom/products.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 27 Jul 2019 10:37:43 GMT -->

<head>

  <style>
  table {
    border-collapse: collapse;
    border-spacing: 0;
    width: 100%;
    height: 100px;
    border: 3px solid #ddd;
  }

  th, td {
    text-align: left;
    padding: 8px;
  }

  tr:nth-child(even){background-color: #f2f2f2}
  </style>

</head>

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
                <h1>soil2soil <br> <span>Buyer</span></h1>
                <p><a href="index.php">Home</a> &nbsp; > &nbsp; <a href="#">Seller</a></p>
            </div>
        </div>
    </div>

    <section >
        <!--PRODUCTS START-->



            <div style="overflow-Y:auto;">
              <table border="1">
                <tr>
                  <th>Name</th>
                  <th style="width:300px">Address</th>
                  <th>Contact</th>
                  <th>Chilli Type</th>
                  <th>Qunatity in Quintals</th>
                  <th>Price per Quintal</th>
                </tr>
                <tr>
                  <?php foreach ($data as $row): ?>
                  <td><?php echo $row['ur_name']; ?></td>
                  <td><?php echo $row['address']; ?></td>
                  <td><?php echo $row['ur_contact']; ?></td>
                  <td><?php echo $row['type_of_chilly']; ?></td>
                  <td><?php echo $row['quntity']; ?></td>
                  <td><?php echo $row['price']; ?></td>
                </tr>
                  <?php endforeach ?>
                </tr>

              </table>
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
