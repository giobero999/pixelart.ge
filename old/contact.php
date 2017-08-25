<?php
//PHP Contact US v 1.9 Carries No Warrenty , Free to Use ,free to share,But Dont Remove credits !//
//PHP Contact US v 1.9 By Vishnu , email:admin@openw3.com | website: www.openw3.com //
//Last Updated 5/8/2012 //
//Please ensure Php mail() is enabled ! Otherwise contact Your Webhosting company//
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$support_address = "giobero999@gmail.com"; //Your Company Email ID//
$headers = "From: ".$email;
$headers2 = "From: ".$support_address;
$finalmessage = "
From:   $_POST[name]
email:  $_POST[email]
Message:$_POST[message]
";

if ( $name == "" )

{
}
else
{
mail("$support_address","$finalmessage",$headers);
$result = "თქვენი წერილი წარმატებით გაიგზავნა";
// Your Auto Replay Message//
mail("$email","Thank you!" . "\n\n" . "We appreciate your interest in Pixelart. We will use your Email wisely and will notify you about our really cool upcoming features very soon." ."\n\n". " You can look at our facebook page https://www.facebook.com/pixelart.ge/?fref=ts.". "\n\n" . "Have a great day!" . "\n\n" . "PixelArt Team");
unset($name,$email,$message);
}

?>

<!DOCTYPE html>
<html>
  <head>
    <?php include("common/head.php") ?>
  </head>
  <body>
    <div class="wrapper">
      <?php include("common/nav.php") ?>
      <div class="content" id="contact">
        <div class="page-header mb0">
          <div id="map" class=""></div>
        </div>
        <div class="container white-bg pt20 pb40">
          <form class="send-mail" action="?" method="post" name="contactForm">
            <div class="row">
              <div class="col-xs-12 col-md-5">
                <div class="contact-us">
                  <ul class="list-group address">
                    <li class="list-group-item"><i class="fa fa-map-marker"></i> <span>ქსნის ქ. #36, თბილისი, საქართველო</span></li>
                    <li class="list-group-item"><i class="fa fa-envelope"></i> <span>hello@pixelart.ge</span></li>
                    <li class="list-group-item"><i class="fa fa-phone"></i></i> <span>032 2 24 60 60</span></li>
                  </ul>
                </div>
              </div>
              <div class="col-xs-12 col-md-7 pull-right">
                <div class="form-group">
                  <input type="text" class="form-control" id="exampleInputPassword1" name="name" placeholder="სახელი" value="<?php echo $name; ?>" >
                </div>
                <div class="form-group">
                  <input type="email" class="form-control" id="exampleInputEmail1" name="email"  placeholder="ელ. ფოსტა"  value="<?php echo $email; ?>" >
                </div>
                <div class="form-group">
                   <textarea class="form-control" id="exampleTextarea" name="message" rows="8" placeholder="კითხვა" value="<?php echo $message; ?>" required></textarea>
                 </div>
                 <span><?php echo $result; ?></span>
                 <button type="submit" class="btn btn-primary pull-right btn-md">გაგზავნა</button>
              </div>
            </div>
          </form>
        </div>
      </div>
      <?php include("common/footer.php") ?>
      <script>
      function initMap() {
      var myLatLng = {lat: 41.7680418, lng: 44.7850883};

      var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 16,
        center: myLatLng
      });

      var marker = new google.maps.Marker({
        position: myLatLng,
        map: map,
        icon: 'imgs/icons/location.png',
        title: 'PixelArt'
      });
    }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAI5X-RpJgyLJ3lmvsp7U3T-qMGu3Ue68o&callback=initMap&language=en"></script>
    </div>
  </body>
</html>
