<!DOCTYPE html>
<html lang="en-US" class="no-js">
	
<!-- Mirrored from quickdevs.com/templates/agrom/products.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 27 Jul 2019 10:37:43 GMT -->

    
<body>
    
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
                <p><a href="index.php">Home</a> &nbsp; > &nbsp; <a href="#">buyer</a></p>
            </div>
        </div>
    </div>
    
    <section>
        <div class="container">
  
   <form action="php_action/buyer_registration_process.php" class="needs-validation" novalidate method="post">
    <div class="form-group">
      <label for="uname">Name:</label>
      <input type="text" class="form-control" id="uname" placeholder="Enter fullname" name="uname" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="form-group">
      <label for="pwd">Contact Number:</label>
      <input type="text" class="form-control" id="pwd" placeholder="Enter contact number" name="contact_number" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="form-group">
      <label for="pwd">Address:</label>
      <input type="text" class="form-control" id="pwd" placeholder="Enter Address" name="address_user" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="form-group">
      <label for="pwd">Village:</label>
      <input type="text" class="form-control" id="pwd" placeholder="Enter villages" name="usr_village" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="form-group">
      <label for="pwd">taluka</label>
      <input type="text" class="form-control" id="pwd" placeholder="Enter taluka" name="usr_taluka" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="form-group">
      <label for="pwd">District</label>
      <input type="text" class="form-control" id="pwd" placeholder="Enter District" name="usr_district" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="form-group">
      <!-- <label for="pwd">Type Of Chilly:</label> -->
      <label for="sel1">Type Of Chilly:</label>
      <select class="form-control" id="sel1" name="type_of_chilly">
        <option value="Grade A">Grade A</option>
        <option value="Grade B">Grade B</option>
        <option value="Grade C">Grade C</option>
        
      </select>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="form-group">
      <label for="pwd">Quantity:</label>
      <input type="text" class="form-control" id="pwd" placeholder="Enter quntity in quintal" name="usr_quantity" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="form-group">
      <label for="pwd">Price:</label>
      <input type="text" class="form-control" id="pwd" placeholder="Enter price per quintal" name="usr_price" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
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