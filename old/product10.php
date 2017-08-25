<!DOCTYPE html>
<html>
  <head>
    <?php include("common/head.php") ?>
  </head>
  <body>
    <div class="wrapper">
      <?php include("common/nav.php") ?>
      <div class="content" id="products">
        <div class="page-header mb0">
          <div class="title">
            <h1 class="">Intel</h1>
            <div class="line-white center-block"></div>
          </div>
        </div>
        <div class="container white-bg">
          <div class="pt40">
            <div class="row ">
              <div class="col-sm-12 col-md-6">
                <img src="imgs/products/10.jpg" alt="" class="img-responsive"/>
              </div>
              <div class="col-sm-12 col-md-6">
                <h3 class="main-title">Intel Stick</h3>
                <h4 i>მოდელი:</i> <span class="red-color">BOXSTCK1A8LFCR</span></h4>
                <hr>

                <div class="features">
                  <div class="row">
                    <div class="col-md-12" >
                      <h4>ტექნიკური მახასიათებლები:</h4>
                      <ul class="list-group features-list">
                        <li class="">
                          <i>ტიპი:</i> სამომხმარებლო
                        </li>
                        <li class="">
                          <i>პროცესორი:</i> Atom Z3735F processor, 1.33 GHz
                        </li>
                        <li>
                          <i>ოპერაციული მეხსიერება:</i> 1024 MB, DDR3L
                        </li>
                        <li>
                          <i>ოპერაციული სისტემა:</i> ლინუქსი
                        </li>
                        <li>
                          <i>კავშირი:</i> Wi-fi და Bluetooth
                        </li>
                        <li>
                          აქვს აუდიო მხარაჭედა
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="pull-right">
                  <?php
                    include ("common/request.php")
                  ?>
                </div>
              </div>
            </div>
            <hr class="center-block" width="90%">
            <div class="description-full pb40">
              <div class="row">
                <div class="col-md-12">
                  <!-- <h4>აღწერა</h4> -->
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php include("common/footer.php") ?>
    </div>
  </body>
</html>
