
<!-- NAVBAR
================================================== -->
  <body>
    <div class="navbar-wrapper">
      <div class="container">

        <div class="navbar navbar-inverse navbar-static-top">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#">:seclub@MAC</a>
            </div>
            <div class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li class="active"><?php echo anchor(base_url().index_page().'/main/goHome', 'Home', ''); ?><!--<a href="/sandbox/">Home</a>--></li>
                <li><a href="#about">About</a></li>
                 <li><?php echo anchor(base_url().index_page().'/main/goNews', 'News', ''); ?></li>
                <li><a href="#contact">Contact</a></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Events<b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li><a href="#">CUSEC</a></li>
                    <li><a href="#">Our EPIC NIGHTS</a></li>
                    <li><a href="#">Our Next Meeting</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Upcoming Events</a></li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
        </div>

      </div>
    </div>


      <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="item active">
          <?php
          $image_properties = array(
          'src' => base_url().'/assets/images/club1.jpg',
          'alt' => 'First slide');
          echo img($image_properties);
          ?> 
          <div class="container">
            <div class="carousel-caption">
              <h1>SEC</h1>
              <p>Come join us!</p>
            </div>
          </div>
        </div>
        <div class="item">
          <?php
          $image_properties = array(
          'src' => base_url().'/assets/images/game_night1.jpg',
          'alt' => 'Second slide');
          echo img($image_properties);
          ?>
          <div class="container">
            <div class="carousel-caption">
              <h1>Game Nights!</h1>
              <p>We do all that YOU love: Game and eat free pizza. Not kidding!</p>
            </div>
          </div>
        </div>
        <div class="item">
          <?php
          $image_properties = array(
          'src' => base_url().'assets/images/awards_night1.jpg',
          'alt' => 'Third slide');
          echo img($image_properties);
          ?>
          <div class="container">
            <div class="carousel-caption">
              <h1>CAS Awards Night!</h1>
              <p>An annual night of fun and games and well... AWARDS.</p>
              <!--<p><a class="btn btn-large btn-primary" href="#">Browse gallery</a></p>-->
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
    </div><!-- /.carousel -->


    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

      <!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="col-lg-4">
          <?php
          $image_properties = array(
          'class' => 'img-circle',
          'src' => base_url().'assets/images/events.jpeg',
          'alt' => 'Generic placeholder image');
          echo img($image_properties);
          ?>
          <h2>Upcoming Events</h2>
          <p>Yep. Ditch whatever you got going right now and head over to one of these. You DO NOT want to miss these. </p>
          <p><a class="btn btn-default" href="#">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
           <?php
          $image_properties = array(
          'class' => 'img-circle',
          'src' => base_url().'assets/images/SE1.jpg',
          'alt' => 'Generic placeholder image');
          echo img($image_properties);
          ?>
          <h2>Our next meeting</h2>
          <p>Next scheduled meeting is planned for Sept, 2013. Don't worry it won't be as boring as it sounds.</p>
          <p><a class="btn btn-default" href="#">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <?php
          $image_properties = array(
          'class' => 'img-circle',
          'src' => base_url().'assets/images/cusec2013.jpeg',
          'alt' => 'Generic placeholder image');
          echo img($image_properties);
          ?>
          <h2>CUSEC</h2>
          <p>We at SEC LOVE CUSEC. Keep in touch with us, if you want to have the time of your life.</p>
          <p><a class="btn btn-default" href="#">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->


      <!-- START THE FEATURETTES -->

      <!--<hr class="featurette-divider">-->
      
      <h2 class="featurette-heading">Why Join the Software Engineering Club?</h2>
      
      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">We host EPIC NIGHTS. <span class="text-muted">How could you not want to attend those?</span></h2>
          <!--<p class="lead">poolNights = networking + freeFood + aTonOfFun;</p>-->
        </div>
        <div class="col-md-5">
          <?php
          $image_properties = array(
          'class' => 'featurette-image img-responsive',
          'src' => base_url().'assets/images/pool_night.jpg',
          'alt' => 'Generic placeholder image');
          echo img($image_properties);
          ?>
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-5">
          <?php
          $image_properties = array(
          'class' => 'featurette-image img-responsive',
          'src' => base_url().'assets/images/women_computing.jpg',
          'alt' => 'Generic placeholder image');
          echo img($image_properties);
          ?>
        </div>
        <div class="col-md-7">
          <h2 class="featurette-heading">We're all for Women in Computing. <span class="text-muted">Join SEC and see for yourself!</span></h2>

        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">And lastly, YOUR MOM. <span class="text-muted">Checkmate.</span></h2>
          
        </div>
        <div class="col-md-5">
          <?php
          $image_properties = array(
          'class' => 'featurette-image img-responsive',
          'src' => base_url().'assets/images/beer.jpg',
          'alt' => 'Generic placeholder image');
          echo img($image_properties);
          ?>
        </div>
      </div>

      <hr class="featurette-divider">

      <!-- /END THE FEATURETTES -->


     
  </body>
</html>
