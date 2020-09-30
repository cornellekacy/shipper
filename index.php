<?php include 'header.php'; ?>
  <!-- end full-header -->
  <section class="slider">
    <div class="fixed-form">
      <div class="container">
        <h3>LOGISTICS</h3>
        <h5>Check your delivery easily & quickly</h5>
        <form method="post" action="track.php">
          <input type="text" name="term" placeholder="Tracking ID">
          &nbsp;
          <input type="text" class="datepicker" placeholder="Date">
          &nbsp;
          <button type="submit" name="save">CHECK SHIPPING</button>
        </form>
      </div>
      <!-- end container --> 
    </div>
    <!-- end fixed-form -->
    <div class="main-slider">
      <div class="slide1"> </div>
      <!-- end slider1 -->
      <div class="slide2"> </div>
      <!-- end slider2 -->
      <div class="slide3"> </div>
      <!-- end slider3 --> 
    </div>
  </section>
  <!-- end slider -->
  <section class="featured-services">
    <div class="container">
      <div class="row">
        <div class="col-md-5">
          <div class="left-side">
            <h3 class="section-title"><span>01</span>PACKING & STORAGE</h3>
            <p>Bringing you industry-specific expertise; whatever you’re shipping, wherever you’re shipping it. </p>
            <ul>
              <li>Shipper delivers a professional, efficient service </li>
              <li>Tailored to the specific needs of your business.</li>
              <li>Our services are designed around you.</li>
            </ul>
          </div>
          <!-- end left-side --> 
        </div>
        <!-- end col-5 -->
        <div class="col-md-7">
          <div class="right-side">
            <div class="service-box">
              <figure><img src="images/icon01.png" alt="Image">
                <figcaption>SEA SHIPPING</figcaption>
              </figure>
              <div class="desc"> We want to ensure that it’s as easy as possible to use the site to get.</div>
              <!-- end desc --> 
            </div>
            <!-- end service-box -->
            <div class="service-box spacing">
              <figure><img src="images/icon02.png" alt="Image">
                <figcaption>AIR SHIPPING</figcaption>
              </figure>
              <div class="desc"> Shipments moving, whether you’ve worked with us for years completely new.</div>
              <!-- end desc --> 
            </div>
            <!-- end service-box -->
            <div class="service-box">
              <figure><img src="images/icon03.png" alt="Image">
                <figcaption>LAND SHIPPING</figcaption>
              </figure>
              <div class="desc">International shipping. For further assistance, please get in touch. </div>
              <!-- end desc --> 
            </div>
            <!-- end service-box --> 
          </div>
          <!-- end right-side --> 
        </div>
        <!-- end col-7 --> 
      </div>
      <!-- end row --> 
    </div>
    <!-- end container --> 
  </section>
  <!-- end featured-services -->
  <section class="calculate-shipping">
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-sm-12">
          <h3 class="section-title"><span>02</span>CALCULATE SHIPPING </h3>
          <form>
            <div class="row">
              <div class="col-md-6 col-sm-6">
                <div class="form-group radio-field">
                  <label>Distance</label>
                  <span class="holder">
                  <input type="radio" checked>
                  Domestic</span> <span class="holder">
                  <input type="radio">
                  International</span> </div>
                <!-- end form-group -->
                <div class="form-group">
                  <label>Weight</label>
                  <input type="text">
                </div>
                <!-- end form-group -->
                <div class="form-group size-field">
                  <label>Cargo Size</label>
                  <input type="text" placeholder="cm">
                  <span>x</span>
                  <input type="text" placeholder="cm">
                </div>
                <!-- end form-group -->
                
                <div class="form-group">
                  <label>Fragile</label>
                  <select class="selectpicker">
                    <option>YES</option>
                    <option>NO</option>
                  </select>
                </div>
                <!-- end form-group --> 
              </div>
              <!-- col-6 -->
              <div class="col-md-6 col-sm-6">
                <div class="form-group">
                  <label>Extra Services</label>
                  <span class="full-block">
                  <input type="checkbox" checked>
                  Quick Delivery</span> <span class="full-block">
                  <input type="checkbox">
                  Warranty</span> <span class="full-block">
                  <input type="checkbox">
                  Gift Box</span> </div>
                <!-- end form-group -->
                <div class="form-group"> <small>The Field below will show the double of the number about $</small> </div>
                <!-- end form-group -->
                <div class="form-group">
                  <input type="text" value="$200" disabled>
                </div>
                <!-- end form-group -->
                <div class="form-group">
                  <button type="submit">CALCULATE</button>
                </div>
                <!-- end form-group --> 
              </div>
              <!-- col-6 --> 
            </div>
            <!-- end row -->
          </form>
        </div>
        <!-- end col-8 -->
        <div class="col-md-4 hidden-sm hidden-xs">
          <figure> <img src="images/calculate-man.jpg" alt="Image"> </figure>
        </div>
        <!-- end col-4 --> 
      </div>
      <!-- end row --> 
    </div>
    <!-- end container --> 
  </section>
  <!-- end calculate-shipping -->
  <section class="steps-features">
    <div class="container">
      <div class="row spacing">
        <div class="col-md-4 col-sm-4 spacing">
          <div class="step-box bg-1"> <span>01</span>
            <h3>PACKING </h3>
            <h5>STORAGES</h5>
            <a href="#">READ MORE</a> </div>
          <!-- end step-box --> 
        </div>
        <!-- end col-4 -->
        <div class="col-md-4 col-sm-4 spacing">
          <div class="step-box bg-2 featured"> <span>02</span>
            <h3>LANDING</h3>
            <h5>FEATURES</h5>
            <a href="#">READ MORE</a> </div>
          <!-- end step-box --> 
        </div>
        <!-- end col-4 -->
        <div class="col-md-4 col-sm-4 spacing">
          <div class="step-box bg-3"> <span>03</span>
            <h3>DELIVERY</h3>
            <h5>SERVICES</h5>
            <a href="#">READ MORE</a> </div>
          <!-- end step-box --> 
        </div>
        <!-- end col-4 --> 
      </div>
      <!-- end row --> 
    </div>
    <!-- end container --> 
  </section>
  <!-- end steps-features -->
<section class="testimonials">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <div class="content-carousel">
            <div>
              <figure><img src="images/testimonial-head1.png" alt="Image"></figure>
              <blockquote>In our line of work, deadlines affect success. Our entire experience in the field is based on timelines. We can often place a fix on special opportunities if we know the truth and the timeline. Not only does Global Shipper deliver but they tell you what’s going on along the way. We definitely enjoy their level of service whether it be during the day or during the middle of the night. Global Shipper understands we are not making it up when we ask for a truck at some obscure dock at 4:00 am. Global Shipper is responsive, works through the available options and is determined that we are satisfied.</blockquote>
              <i class="ion-android-hangout"></i>
              <h4>Mark K.J</h4>
              <small>PRODUCT MANAGER</small> </div>
            <!-- end div -->
            <div>
              <figure><img src="images/testimonial-head2.png" alt="Image"></figure>
              <blockquote>Global Shipper Logistics and my company have been working together since 2008. During this time, we have nearly doubled in size and so has the number of challenging shipping opportunities. Global Shipper Logistics provides exactly the service we need. They do a good job of understanding our requirements and providing solutions to meet those requirements. They are always available live, 24 hours a day. Their personnel make sure that our delivery needs, which can be complicated, are understood and met. Their attention to detail and follow up separates them from their competitors. I do not need to follow up to check on our shipments. Instead UPSC-USA sends updates and delivery results. In short they provide peace of mind. Global Shipper stands out in their niche of the freight business.</blockquote>
              <i class="ion-android-hangout"></i>
              <h4>Jessica Carter</h4>
              <small>SHIPPING DIRECTOR</small> </div>
            <!-- end div -->
            <div>
              <figure><img src="images/testimonial-head3.png" alt="Image"></figure>
              <blockquote>I have had the pleasure of working with Global Shipper Logistics since finding them while employed at a previous exhibit house. Their entire staff has always proved to be valuable allies in the daily transportation challenges related to the tradeshow business. Global Shipper provides excellent customer service and always works with our best interests at the forefront in whatever type of move they’re doing for us at the time.</blockquote>
              <i class="ion-android-hangout"></i>
              <h4>Chris O'Conner</h4>
              <small>SENIOR MARKETTING</small> </div>
            <!-- end div --> 
          </div>
          <!-- end content-carousel --> 
        </div>
        <!-- end col-12 --> 
      </div>
      <!-- end row --> 
    </div>
    <!-- end container --> 
  </section>
  <!-- end testimonials -->
  <section class="latest-news">
    <div class="container">
      <div class="row spacing">
        <div class="col-xs-12 spacing">
          <h3 class="section-title"><span>03</span>LATEST NEWS</h3>
        </div>
        <!-- end col-12 -->
        <div class="col-md-4 col-sm-6 spacing">
          <div class="news-box">
            <figure><img src="images/news1.jpg" alt="Image"><span class="date">02/OCT</span></figure>
            <div class="news-caption">
              <h4>Social and demographic information</h4>
              <p>There are no hidden costs associated with our transportation services</p>
              <a href="#">READ MORE</a> </div>
            <!-- end news-caption --> 
          </div>
          <!-- end news-box --> 
        </div>
        <!-- end col-4 -->
        <div class="col-md-4 col-sm-6 hidden-xs spacing">
          <div class="news-box">
            <div class="news-caption">
              <h4>Team member to discuss our meeting</h4>
              <p>Offers you peace-of-mind that we’ll be on-hand to help whenever you need us.</p>
              <a href="#">READ MORE</a> </div>
            <!-- end news-caption -->
            <figure><img src="images/news2.jpg" alt="Image"><span class="date">02/OCT</span></figure>
          </div>
          <!-- end news-box --> 
        </div>
        <!-- end col-4 -->
        <div class="col-md-4 hidden-sm spacing">
          <div class="news-box">
            <figure><img src="images/news3.jpg" alt="Image"><span class="date">02/OCT</span></figure>
            <div class="news-caption">
              <h4>Financial Institutions changes control</h4>
              <p>As a company, we believe in operating as independent national carriers.</p>
              <a href="#">READ MORE</a> </div>
            <!-- end news-caption --> 
          </div>
          <!-- end news-box --> 
        </div>
        <!-- end col-4 --> 
      </div>
      <!-- end row --> 
    </div>
    <!-- end container --> 
  </section>
  <!-- end latest-news -->
  <section class="clients">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <ul>
            <li>
              <figure>
                <h5><img src="images/logo1.jpg" alt="Image"></h5>
              </figure>
            </li>
            <li>
              <figure>
                <h5><img src="images/logo2.jpg" alt="Image"></h5>
              </figure>
            </li>
            <li>
              <figure>
                <h5><img src="images/logo3.jpg" alt="Image"></h5>
              </figure>
            </li>
            <li>
              <figure>
                <h5><img src="images/logo4.jpg" alt="Image"></h5>
              </figure>
            </li>
            <li>
              <figure>
                <h5><img src="images/logo5.jpg" alt="Image"></h5>
              </figure>
            </li>
            <li>
              <figure>
                <h5><img src="images/logo6.jpg" alt="Image"></h5>
              </figure>
            </li>
          </ul>
        </div>
        <!-- end col-12 --> 
      </div>
      <!-- end row --> 
    </div>
    <!-- end container --> 
  </section>
  <section class="about-intro parent">
    <div class="left-side">
      <div class="content-box">
        <h3 class="section-title"><span>04</span>ABOUT SHIPPER</h3>
        <p>We have trained, experienced experts available for our full range of services including reefer, out-of-gauge, breakbulk and each of our trade services – each operating in tandem with your business. This gives us the ability to uphold the personal service we’re globally recognised</p>
        <div class="fun-facts">
          <h5>FUN FACTS</h5>
          <div class="fun-box"> <i class="ion-trophy"></i> <span class="title">GETTED AWARDS</span> <span class="plus">+</span><b class="counter">1.246</b> </div>
          <!-- end fun-box -->
          <div class="fun-box"> <i class="ion-umbrella"></i> <span class="title">CARRIED PACKAGE</span><span class="plus">+</span><b class="counter">2.638</b> </div>
          <!-- end fun-box --> 
        </div>
        <!-- end fun-facts --> 
      </div>
      <!-- end content-box --> 
    </div>
    <!-- end left-side -->
    <div class="right-side" data-stellar-background-ratio="0.5">
      <div class="overlay parent text-center">
        <div>LOGISTIC</div>
      </div>
    </div>
    <!-- end left-side --> 
  </section>
  <!-- end about-intro -->
  <div class="application"> <img src="images/app-mockup.jpg" alt="Image"> </div>
  <!-- end application -->
  <?php include 'footer.php'; ?>