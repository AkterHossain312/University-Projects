<html>
    
    <body>
        <!--  header start   -->
        <?php include('includes/topmenu.php'); ?>
        <!--  header end  -->

        <!--Marquee tag start -->
        <?php include('includes/marqueetag.php'); ?>
        <!--Marquee tag end -->

        <!--image start-->
        <img src="images/Screenshot_3.jpg" style="display: block;
          margin-left: auto;
          margin-right: auto;"alt="">
        <!--image end-->

        <?php include('includes/paragraph.php'); ?>

        <?php 

        if(isset($_GET["id"]))
        {
             include('servicedetails.php'); 

        }
        else
        {
            include ('includes/services.php');
        }
         ?>

        <?php include('includes/footer.php'); ?><br>
        
        <?php include('includes/footermenu.php'); ?>
    </body>
</html>