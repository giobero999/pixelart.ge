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

          <form class="send-mail">
            <div class="row">
              <div class="col-xs-12 col-md-5">
                <div class="contact-us">
                  <h2>Contact us</h2>
                  <ul class="list-group address">
                    <li class="list-group-item"><i class="fa fa-map-marker"></i> <span>Georgia, Tbilisi, 36 ksani str.</span></li>
                    <li class="list-group-item"><i class="fa fa-map-marker"></i> <span>Gloucester Ave, London, UK (Zip Code: NW1 8LA)</span></li>
                  </ul>
                  <ul class="address">
                    <li class="list-group-item"><i class="fa fa-envelope"></i> <span>Georgia, Tbilisi, 36 ksani str.</span></li>
                  </ul>
                  <ul class="address">
                    <li class="list-group-item"><i class="fa fa-phone"></i></i> <span>032 2 24 60 60</span></li>
                  </ul>
                </div>
              </div>
              <div class="col-xs-12 col-md-7 pull-right">
                <h2>Ask question</h2>
                <div class="form-group">
                  <label for="exampleInputPassword1">Your Name</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Name">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Your Email</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email">
                </div>

                <div class="form-group">
                   <label for="exampleTextarea">Question</label>
                   <textarea class="form-control" id="exampleTextarea" placeholder="Text here" rows="8"></textarea>
                 </div>
                 <button type="submit" class="btn btn-primary pull-right btn-md">Send</button>
              </div>
            </div>
          </form>
        </div>
      </div>
      <?php include("common/footer.php") ?>
      <script>
      function initMap() {
        // Create a map object and specify the DOM element for display.
        var map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: -34.397, lng: 150.644},
          scrollwheel: false,
          zoom: 8
        });
      }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAI5X-RpJgyLJ3lmvsp7U3T-qMGu3Ue68o&callback=initMap"></script>
    </div>
  </body>
</html>
