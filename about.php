<?php
  session_start();
  include ("templates/php/functions.php");

  if (!isset ($_SESSION ['atmNumber'])) {
    $_SESSION['atmNumber'] = $_POST['atmNumber'];
    echo "<script>alert('You must log in first.');</script>";
    echo "<script>location.href='index.php';</script>";
    exit();
  } else {
    $atmNumber = $_SESSION['atmNumber'];
    //$id = $_SESSION ['userID'];
?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="templates/css/navbarfixed_style.css">
    <link rel="stylesheet" href="templates/css/about_style.css">
    <link rel="stylesheet" href="templates/css/footer_style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--<link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">-->
    <meta http-equiv="refresh" content="">
    <title>About</title>
</head>
<body>
    <?php include ("templates/php/navbarfixed.php");?>
    <div class="body">
        <div id="columns">
            <div class="col1">
                <div class="section">MISSION</div>
                <p>
                PESOnline is an application that provides access to individuals especially the ones who want to manage their bills and track their financial records. 
                In addition to this, it also offers easy access and secured pieces of information displayed on the pages. 
                As people became busier, handling financial records online would definitely fit our daily routine since technology progresses every second in the world. 
                And lastly, the most important thing is this application help humans to adapt to the changes that we live in.
                </p>
                <div class="section">MOTTO</div>
                <p>
                    <strong><center>Small Steps to a Better Future</center></strong>
                </p>
            </div>
            <div class="col2">
                <div class="section">VISION</div>
                    <p>
                        To be a premier bank in the country, promoting the
                        growth of small enterprises and the financial
                        inclusion of the Filipino people.
                    </p>
                    <div class="contact">
                        <div class="contactInfo">
                            <p>Location of Physical Banks:</p>
                                <font style="font-size: 20px;">
                                &nbsp;&nbsp;&nbsp;Manila, Cavite, Makati, Pampanga, Parañaque<br>
                                &nbsp;&nbsp;&nbsp;(soon to open in other places)</font>
                            
                        </div>
                        <div class="contactInfo">
                            <p>Contact Information:</p>
                                <font style="font-size: 20px;">
                                &nbsp;&nbsp;&nbsp;Contact No.: 09164514853<br>
                                &nbsp;&nbsp;&nbsp;Email/Google: pesonline@gmail.com<br>
                                &nbsp;&nbsp;&nbsp;Facebook: PESOnline Co.</font>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include ('templates/php/footer.php');?>
</body>
</html>
<?php } ?>