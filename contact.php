<?php include 'header.php'; ?>
  <!-- end full-header -->
  <section class="sub-header">
    <h5 class="page-title">CONTACT</h5>
    <ul class="breadcrumb">
      <li><a href="index-2.html">Home</a></li>
      <li><span class="active">Contact</span></li>
    </ul>
  </section>
  <!-- end sub-header -->
  <section class="contact">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <h4 class="section-title"><span>01</span>ADDRESS INFOS</h4>
        </div>
        <!-- end col-12 -->
        <div class="col-md-4 col-sm-4">
          <address>
          <h5>HEADQUARTER</h5>
          <p>3481 Melrose Place Beverly Hills, <br>
            Chicago IL 60601, USA</p>
          <p>t: +44(0)3759 4366 82<br>
          <p>e: <a href="#">support@gloshipper.com</a></p>
          </address>
        </div>
        <!-- end col-4 -->
        <div class="col-md-8">
                    <form id="contact" name="contact" method="post">
                      <div class="form-group">
                          <label>Your name</label>
                            <input type="text" class="form-control" name="name" id="name" required>
                        </div>
                        <!-- end form-group -->
                        <div class="form-group">
                          <label>Your e-mail</label>
                            <input type="text" class="form-control" name="email" id="email" required>
                        </div>
                        <!-- end form-group -->
                        <div class="form-group">
                          <label>What about ?</label>
                            <select class="selectpicker" class="form-control" name="subject" id="subject"><option>Marketting Department</option></select>
                        </div>
                        <!-- end form-group -->
                        <div class="form-group">
                          <label>Your message</label>
                            <textarea name="message" class="form-control" id="message" required></textarea>
                        </div>
                        <!-- end form-group -->
                        <div class="form-group">
                            <button id="submit" type="submit" name="submit">SUBMIT</button>
                        </div>
                        <!-- end form-group -->
                    </form>
      </div>

      <!-- end row --> 
    </div>
    <!-- end container --> 
  </section>

  <!-- end application -->
  <?php include 'footer.php'; ?>