<!DOCTYPE html>
<html>
  <head>
    <?php include("common/head.php") ?>
  </head>
  <body>
    <div class="wrapper">
      <?php include("common/nav.php") ?>
      <div class="content" id="cms">
        <div class="page-header mb0">
          <div class="title">
            <h1 class="">CMS</h1>
            <div class="line-white center-block"></div>
          </div>
        </div>
        <div class="container white-bg">
          <div class="cms-main-info pt40">
            <div class="row ">
              <div class="col-md-5 cms-img">
                <img src="http://sachinchoolur.github.io/lightGallery/static/img/1.jpg" alt="" class="img-responsive"/>
              </div>
              <div class="col-md-7">
                <h3>Title</h3>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                </p>
                <p>
                   Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>
              </div>
            </div>
            <div class="row ">
              <div class="col-md-5 cms-img pull-right">
                <img src="http://sachinchoolur.github.io/lightGallery/static/img/1.jpg" alt="" class="img-responsive"/>
              </div>
              <div class="col-md-7">
                <h3>Title</h3>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>
              </div>
            </div>
            <div class="row">
              <div class="col-md-5 cms-img">
                <img src="http://sachinchoolur.github.io/lightGallery/static/img/1.jpg" alt="" class="img-responsive"/>
              </div>
              <div class="col-md-7 cms-img">
                <h3>Title</h3>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                </p>
              </div>
            </div>
            <br>
            <div class="request-demo pb40 mt40">
              <div class="row">
                <div class="col-md-12">
                  <button type="button" name="button" class="btn btn-lg red-button center-block" data-toggle="modal" data-target="#request-demo">Request a demo</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- /.modal -->
      <div class="modal " tabindex="-1" role="dialog" id="request-demo" >
        <div class="modal-dialog modal-sm" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title">Modal title</h4>
            </div>
            <div class="modal-body">
              <div class="form-group">
                <label for="exampleInputPassword1">Your Name</label>
                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Name">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Your Email</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email">
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn base-button" data-dismiss="modal">Close</button>
              <button type="button" class="btn blue-button">Send</button>
            </div>
          </div>
        </div>
      </div>
      <!-- /.modal -->
      <?php include("common/footer.php") ?>
    </div>
  </body>
</html>
