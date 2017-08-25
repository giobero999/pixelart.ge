<!DOCTYPE html>
<html>
  <head>
    <?php include("common/head.php") ?>
  </head>
  <body>
    <div class="wrapper">
      <?php include("common/nav.php") ?>
      <div class="content screens-page" id="features">
        <div class="page-header">
          <div class="title">
            <h1 class="">ეკრანები</h1>
            <div class="line-white center-block"></div>
            <div class="col-md-10 col-md-offset-1 hidden-xs text-center">
              <p class="header-text">
                ციფრული ეკრანების სისტემის ყველაზე მნიშვნელოვანი კომპონენტი არის თავად ეკრანი. ეკრანი არის ის რაც აცოცხლებს თქვენს კონტენტს და მიაქვს თქვენი კონტენტი მომხმარებლამდე. ჩვენ გთავაზობთ ციფრული ეკრანების ფართო ასორტიმენტს.
              </p>
            </div>
          </div>
        </div>
        <div class="container pt20 white-bg">
          <div class="row pb20">
            <div class="col-md-12">
              <div class="feature-btns">
                <button type="button" name="button" class="btn  in-door active-btn">შიდა</button>
                <button type="button" name="button" class="btn out-door ">გარე</button>
                <button type="button" name="button" class="btn video-wall ">ვიდეო კედელი</button>
                <button type="button" name="button" class="btn led ">LED</button>
                <button type="button" name="button" class="btn totem ">ტოტემი</button>
              </div>
            </div>
          </div>

          <div id="in-door" class="products">
            <?php
              include("prods/in-door.php");
            ?>
          </div>

          <div class="hide-feature products" id="out-door">
            <?php
              include("prods/out-door.php");
            ?>
          </div>

          <div class="hide-feature products" id="video-wall">
            <?php
              include("prods/video-wall.php");
            ?>
          </div>

          <div class="hide-feature products" id="led">
            <?php
              include("prods/led.php");
            ?>
          </div>

          <div class="hide-feature products" id="totem">
            <?php
              include("prods/totem.php");
            ?>
          </div>
        </div>
      </div>
      <?php include("common/footer.php") ?>
    </div>
  </body>
</html>
