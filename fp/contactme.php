<?php include 'includes/header.php';?>

        <img src="images/peacock1.jpg" class="half" alt="peacock" />
        
</section>

<aside>
<?php
        /*
         * Below are 2 different forms to be re-used       
         	* 
         * Only use one at a time, comment out the other!       
         *
         */

        include 'includes/contact_include.php'; #site keys & code here
    
        $toAddress = "murphwillsurf@gmail.com";  //place your/your client's email address here
        $toName = "Derek Murphy"; //place your client's name here
        $website = "Contact Form Test";  //place NAME of your client's website

        echo loadContact('simple.php');#demonstrates a simple contact form
        //echo loadContact('multiple.php');#demonstrates multiple form elements

	?>
</aside>

 <?php include 'includes/footer.php';?> 