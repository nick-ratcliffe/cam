<!DOCTYPE html>
<html lang="en">
<head>
  <title>Contact us | C Kelly decorators</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
  <link rel="stylesheet" href="css/style.css" type="text/css" media="all">
  <script type="text/javascript" src="js/jquery-1.4.2.min.js" ></script>
  <script type="text/javascript" src="js/cufon-yui.js"></script>
  <script type="text/javascript" src="js/Humanst521_BT_400.font.js"></script>
  <script type="text/javascript" src="js/Humanst521_Lt_BT_400.font.js"></script>
  <script type="text/javascript" src="js/cufon-replace.js"></script>
	<script type="text/javascript" src="js/roundabout.js"></script>
  <script type="text/javascript" src="js/roundabout_shapes.js"></script>
  <script type="text/javascript" src="js/gallery_init.js"></script>
  <!--[if lt IE 7]>
  	<link rel="stylesheet" href="css/ie/ie6.css" type="text/css" media="all">
  <![endif]-->
  <!--[if lt IE 9]>
  	<script type="text/javascript" src="js/html5.js"></script>
    <script type="text/javascript" src="js/IE9.js"></script>
  <![endif]-->
</head>

<body class="contact">
  <!-- header -->
  <header>
    <div class="container">
    	<h1><a href="index.html"><img src="images/logo1.png" alt="Alternate Text" style="width:250px;"/></a></h1>
      <nav>
        <ul>
          <li><a href="index.html">Home</a></li>
          <li><a href="testimonials.html">Testimonials</a></li>
          <li><a href="contact.php"  class="current">Contact</a></li>
          <li><a href="gallery.html">Gallery</a></li>
        </ul>
      </nav>
    </div>
	</header>
  <div class="main-box">
    <div class="container">
      <div class="inside">
        <div class="wrapper">

          <!-- content -->
          <section id="content">
            <article>
            	<h2>Contact <span>Form</span></h2>
              <form id="contacts-form" action="" method="post">
                  <?php
                        $action=$_REQUEST['action'];
                        if ($action=="")    /* display the contact form */
                            {
                            ?>
                            <form  action="" method="POST" enctype="multipart/form-data">
                            <input type="hidden" name="action" value="submit">
                            <label>Name:</label><br>
                            <input name="name" type="text" value="" size="30"/><br>
                            <label>Telephone number</label><br>
                            <input name="email" type="text" value="" size="30"/><br>
                            <label>Your message:</label><br>
                            <textarea name="message" rows="7" cols="30"></textarea><br>
                            <input type="submit" value="Send"/>
                            </form>
                            <?php
                            }
                        else                /* send the submitted data */
                            {
                            $name=$_REQUEST['name'];
                            $email=$_REQUEST['email'];
                            $message=$_REQUEST['message'];
                            if (($name=="")||($email=="")||($message==""))
                                {
                                echo "All fields are required, please fill <a href=\"\">the form</a> again.";
                                }
                            else{
                                $from="From: $name<$email>\r\nReturn-path: $email";
                                $subject="Message sent using your contact form";
                                mail("camkellyuk@yahoo.co.uk", $subject, $message, $from);
                                echo "Thanks for contacting me, I will respond to you shortly. Best regards Cam.";
                                }
                            }
                        ?>
              </form>
            </article>
          </section>
        </div>
      </div>
    </div>
  </div>

  <!-- footer -->
  <footer>
    <div class="container">
    	<div class="wrapper">
        <div class="fleft">Copyright - C Kelly decorators</div>
        <div class="fright">Home: 01484 686687&nbsp; &nbsp; |&nbsp; &nbsp; Mobile: 07710146848&nbsp; &nbsp; |&nbsp; &nbsp;Email: <a href="mailto:camkellyuk@yahoo.co.uk">camkellyuk@yahoo.co.uk</a></div>
      </div>
    </div>
  </footer>
  <script type="text/javascript">      Cufon.now(); </script>
</body>
</html>
