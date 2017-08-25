<!DOCTYPE html>
<html>
  <head>
    <?php include("common/head.php") ?>
  </head>
  <body>
    <div class="wrapper">
      <?php include("common/nav.php") ?>
      <div class="content" id="cms">
        <div class="container white-bg mt40">
          <div class="title">
            <h1 class="">პროგრამული უზრუნველყოფა</h1>
            <div class="line-red center-block"></div>
          </div>
          <div class="cms-main-info pt40">
            <div class="row mb40">
              <div class="col-md-6">
                <div class="">
                  <div class="cms-img not-scrolling-img">
                    <img src="imgs/cms/imac.png" alt="" />
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <h3>PixelArt – Medium is The Message</h3>
                <p>
                  მიუხედავად თქვენი ციფრული ეკრანების ქსელის ზომისა, იქნება ეს 1 ეკრანი თუ 100, PixelArt-ის კონტენტის სამართავი სისტემის (CMS) მეშვეობით თქვენ შეძლებთ მართოთ თქვენი ეკრანები ნებისმიერი წერტილიდან, ინტერნეტში ჩართული კომპიუტერის მეშვეობით, ადგილზე მისვლისა და IT პერსონალის გარეშე.
                  <br>
                  <br>

                </p>
              </div>
            </div>
            <div class="row mb40">
              <div class="col-sm-12 col-md-6 pull-right">
                <div class="">
                  <div class="cms-img not-scrolling-img">
                    <img src="imgs/cms/cms3.png" class="not-shadow"/>
                  </div>
                </div>
              </div>
              <div class="col-sm-12 col-md-6">
                <h3>დაუკავშირე და მართე შენი ეკრანები</h3>
                <p>
                  PixleArt CMS-ის გამოყენება შესაძლებელია როგორც პროფესიულ მედია პლეიერებთან ასევე სამომხმარებლო მოწყობილობებთან, როგორიც არის Amazon Fire TV, Chromecast, Intel Stick.
                </p>
              </div>
            </div>
            <div class="row mb40">
              <div class="col-sm-12 col-md-6">
                <div class="">
                  <div class="cms-img not-scrolling-img">
                    <img src="imgs/cms/cms2.jpg" class="not-shadow"/>
                  </div>
                </div>
              </div>
              <div class="col-sm-12 col-md-6">
                <h3>შექმენი და გაავრცელე მედია კონტენტი მარტივად </h3>
                <p>
                  PixelArt CMS-ის მარტივი ინტერფეისი გაძლევს შესაძლებლობას  IT პერსონალის გარეშე შექმნა და განათავსო სასურველი მედია ფორმატის (ვიდეო, ფოტო, ტექსტი, აპლიკაციები) კონტენტი ციფრულ ეკრანებზე.
                </p>
                <br>
                <p>
                  CMS-ის მეშვეობით შეგიძლიათ შექმანით თქვენი საკრელმაო კამპანიების განრიგი და აკონტროლოთ თუ რა გადაის თქვენს ეკრანზე დღის სხვადასხვა მონაკეთში.
                </p>
              </div>
            </div>
            <div class="row mt40 mb20">
              <div class="col-lg-6 col-md-12 cms-text">
                <h3>გაუწიე მონიტორინგი ეკრანებს </h3>
                <p>
                  მიიღეთ ინფორმაცია ლაივ რეჟიმში, თუ სად და როდის გადის თქვენი სარეკლამო კამპანია. გაზომე კამპანიის ეფექტრურობა და მოახდინე სარეკლამო კონტენტის ოპტიმიზაცია.
                </p>
                <div class="pull-right cms-request-btn" >
                  <button type="button" name="button" class="btn btn-lg red-button" data-toggle="modal" data-target="#request-demo">მოითხოვე დემო</button>
                </div>
              </div>
              <div class="col-lg-6 hidden-md hidden-sm hidden-xs">
                <div class="arrows">
                  <a id="scrollUp" href="#"><i class="fa fa-chevron-up"></i></a>
                  <br>
                  <a id="scrollDown" href="#"><i class="fa fa-chevron-down"></i></a>
                </div>
                <div class="macbook-bg">
                  <div class="cms-img scrolling-img">
                    <img src="imgs/cms/cms1.jpg" alt=""/>
                  </div>
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
              <h4 class="modal-title">მოითხოვე დემო</h4>
            </div>
            <div class="modal-body">
              <div class="form-group">
                <input type="text" class="form-control"  placeholder="სახელი">
              </div>
              <div class="form-group">
                <input type="text" class="form-control"  placeholder="კომპანია">
              </div>
              <div class="form-group">
                <input type="email" class="form-control"  aria-describedby="emailHelp" placeholder="ელ. ფოსტა">
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn base-button" data-dismiss="modal">დახურვა</button>
              <button type="button" class="btn blue-button">გაგზავნა</button>
            </div>
          </div>
        </div>
      </div>
      <!-- /.modal -->
      <?php include("common/footer.php") ?>
    </div>
  </body>
</html>
