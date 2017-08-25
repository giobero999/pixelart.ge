<!DOCTYPE html>
<html>
  <head>
    <?php include("common/head.php") ?>
  </head>
  <body>
    <div class="wrapper">
      <?php include("common/nav.php") ?>
      <div class="content screens-page" id="features">
        <div class="container pt20 white-bg">
          <div class="row pb20">
            <div class="col-md-12">
              <div class="title">
                <h1 class="">პროდუქცია</h1>
                <div class="line-red center-block"></div>
              </div>
            </div>
            <div class="col-md-12">
              <div class="feature-btns">
                <button type="button" name="button" class="btn screens active-btn">ეკრანები</button>
                <button type="button" name="button" class="btn players ">პლეიერები</button>
                <button type="button" name="button" class="btn enclosures ">აქსესუარები</button>
              </div>
            </div>
          </div>

          <div id="screens" class="products">
            <?php
              include("prods/screens.php");
            ?>
          </div>

          <div id="players" class="hide-feature products" >
            <?php
              include("prods/players.php");
            ?>
          </div>

          <div id="enclosures" class="hide-feature products" >
            <?php
              include("prods/enclosures.php");
            ?>
          </div>
        </div>
      </div>
      <?php include("common/footer.php") ?>
    </div>
  </body>
</html>
