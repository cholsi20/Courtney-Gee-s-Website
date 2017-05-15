<!DOCTYPE html>
<html>
  <head>
    <link href='https://fonts.googleapis.com/css?family=Lato:400,300,900italic|Sarina' 
    rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="resources/UberGallery.css" />

    <link rel="stylesheet" type="text/css" href="resources/colorbox/4/colorbox.css" />
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

    <script type="text/javascript" src="resources/colorbox/jquery.colorbox.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $("a[rel='colorbox']").colorbox({maxWidth: "90%", maxHeight: "90%", opacity: ".5"});
        });
    </script>
    <meta charset= "utf-8" />
    <title>&#10084; Courtney Gee &#10084;</title>
  </head>
  <body>

  <!--BEGIN CONTAINER DIV-->

  <div id="container">

    <!--BEGIN HORIZONTAL NAVIGATION-->
    <div id="horizontal_nav">
      <?php
        include("Includes/inc_text_nav.php");
      ?>
    </div>

    <!--BEGIN DYNAMIC CONTENT-->
    <div id="dynamic_content" class="clearfix">

      <?php

        if(isset($_GET['page'])) {
          switch ($_GET['page']) {
              case 'about': //A value of
                            //'about' means
                            //to display the
                            //default page
                  include('Includes/inc_about.php');
                  break;
              case 'web_development':
                  include('Includes/' .
                      'inc_web_development.php');
                  break;
              case 'graphic_design':
                   include('Includes/' .
                      'inc_graphic_design.php');
                  break;
              case 'fine_art':
                   include('Includes/' .
                      'inc_fine_art.php');
                  break;
              case 'painting':
                  include('Includes/inc_painting.php');
                  break;
              case 'drawing':
                  include('Includes/' .
                      'inc_drawing.php');
                  break;
              case 'print_making':
                  include('Includes/' .
                      'inc_print_making.php');
                  break;

              //BEGIN RESUME LINK
              case 'resume':
                  include('Includes/' .
                      'inc_resume.php');
                  break;

              //BEGIN WEB DEV LINKS
              case 'ascis':
                  include('Includes/' .
                      'inc_ascis.php');
                  break;
              case 'chinese_zodiac':
                  include('Includes/' .
                      'inc_chinese_zodiac.php');
                  break;

              //BEGIN GRAPHIC DESIGN LINKS
              case 'Lisa_Shawn':
                  include('Includes/' .
                      'inc_lisa_shawn_wedding.php');
                  break;
              case 'minted':
                  include('Includes/' .
                      'inc_minted.php');
                  break;
              case 'osnovative':
                  include('Includes/' .
                      'inc_osnovative.php');
                  break;
              case 'shining_bright':
                  include('Includes/' .
                      'inc_shining_bright.php');
                  break;
              case 'woodsprite':
                  include('Includes/' .
                      'inc_woodsprite.php');
                  break;
              default:
                  include('Includes/inc_web_development.php');
                  break;
          } //end switch statement
        } //end if 

        else //if no button has been selected, then display
             //the default page
             include('Includes/inc_about.php');
      ?>

  </div>

  <!--BEGIN FOOTER CONTENT-->
  <div id="footer_content">

    <?php
      include('Includes/inc_footer.php');
    ?>

  </div>

  <!--END CONTAINER DIV-->
  </div>

  </body>
</html>

