<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href='https://fonts.googleapis.com/css?family=Lora' rel='stylesheet' type='text/css'>
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Lewyt</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div id = "hero">
     <div class="container">
      <div class = "row">
        <div class = "col-lg-10 col-lg-offset-1"><br>
          <!-- Static navbar -->
          <nav class="navbar navbar-default">
            <div class="container-fluid">
              <div class="navbar-header">
                <a class="navbar-brand" href="index.php">The Alex & Elisabeth Lewyt Charitable Trust</a>
              </div>
              <div id="navbar" class="navbar-collapse">  
                <ul class="nav navbar-nav navbar-right">
                  <li><a href="about.php">About Us <span class="sr-only">(current)</span></a></li>
                  <li><a href="grantees.php">Selected Grant Recipients</a></li>
                </ul>
              </div><!--/.nav-collapse -->
              </div><!--/.container-fluid -->
            </nav>
        </div>
      </div>
    </div>
  </div>

    <div class = "container">
      <div class = "row">
          <br>
          <div class = "col-lg-10 col-lg-offset-1">
            <h3> <i> Recent Grant Recipients </i> </h3>
            <hr>
          <div class = "col-lg-4">  
            <img src = "hsvma.jpg" alt = "placeholder" width= "300px">
              <h4> <b>Humane Society Veterinary Medical Association-Rural Area Veterinary Services</b> </h4>
          </div>
          <div class = "col-lg-8">
            <p>
              The Humane Society Veterinary Medical Association-Rural Area Veterinary Services program (HSVMA-RAVS) is a non-profit veterinary outreach program combining community service and veterinary education to bring free veterinary services to underserved rural communities where poverty and geographic isolation make regular veterinary care inaccessible. <br><br>Each year HSVMA-RAVS provides nearly $1.5 million in free veterinary services to more than 8,000 animals, all at no cost to the clients or communities it serves. In addition the program provides valuable training and experience for hundreds of future veterinary professionals that goes far beyond anything they could learn in a classroom alone.
            </p>
          </div>
          <br>  
        </div>
      </div>

        <div class = "row">
          <br>
          <div class = "col-lg-10 col-lg-offset-1">
            <hr>
            <div class = "col-lg-4">  
              <img src = "petpeeves.png" alt = "placeholder" width= "300px">
                <h4><b> Pet Peeves Inc.</b> </h4>
            </div>
            <div class = "col-lg-8">
              <p>
                Pet Peeves Inc., "the voice of L.I. Pets," is a 501(c)(3), not for profit umbrella organization that raises funds and awareness for Long Island's struggling animal shelters and rescue groups. The organization employs no paid staff. 100% of donations go directly to the needy animals, humane education and pet therapy programs.  
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

    <br><br>
    <!-- <div class = "container">
      <div class = "row">
          <div class = "col-lg-2 col-lg-offset-1">
            <hr>
            <span>The foundation does not accept unsolicited proposals  </span>
          </div>
          <div class = "col-lg-2 col-lg-offset-1">
            <hr>
            <span> 330 Forest Avenue <br> Locust Valley, New York, 11560 </span>
          </div>
          <div class = "col-lg-2 col-lg-offset-1">
            <hr>
            <span> <a href= "mailto:info@lewyt.org"> info@lewyt.org </a></span>
          </div>
        </div>
      </div> -->
      <br> <br>
    <div class = "container">
      <div class = "row">
        <div class = "col-lg-6 col-lg-offset-1">
          <span>  &copy; <?php echo date("Y"); ?> Alex and Elisabeth Charitable Trust </span>
        </div>
      </div>
    </div>
    <br>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

    <script>
        /*(function fadeNext(jq){
            jq.eq(0).fadeIn("slow", function(){
                // you can also set a timeout here if you'd like
                (jq=jq.slice(1)).length && fadeNext(jq);
            });
        })($('.row p'))*/
    </script>
  </body>
</html>