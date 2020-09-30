<?php include 'header.php'; ?>
  <section class="sub-header">
    <h5 class="page-title">TRACK PACKAGE</h5>
    <ul class="breadcrumb">
      <li><a href="index.php">Track</a></li>
      <li><span class="active">Track Package</span></li>
    </ul>
  </section>


  			<div class="container">
  				<br>
  				<div class="row">
  				<H2>Enter Tracking Number</H2>	
  				<hr>
  						<div class="col-md-3">	
  						</div>
  						<div class="col-md-6">
  								     <form  name="contact" method="post">
                      <div class="form-group">
                          <label>Enter Tracking Number</label>
                            <input type="text" class="form-control" name="term" id="name" required>
                        </div>
                        
                        <!-- end form-group -->
                        <div class="form-group">
                            <button id="submit" type="submit" name="save">TRACK PACKAGE</button>
                        </div>
                        <!-- end form-group -->
                    </form>
  						</div>
  						<div class="col-md-3">	
  						</div>
  				</div>
  			</div>

  			    			<div class="container">
    <div class="row">

        <?php
        include 'backend/conn.php';
// Check connection
        if (!$link) {
            die("Connection failed: " . mysqli_connect_error());
        }
        if(isset($_POST['save'])){
           $name = $_POST['term'];
           if (empty($name)) {
            echo "<div class='alert alert-danger'>
            <strong>Failed!</strong> Tracking Id Cannot Be Empty.
            </div>";
        }else{

            $sql = "SELECT * FROM track where ship_id LIKE '%$name%'";
            $result = mysqli_query($link, $sql);

            if (mysqli_num_rows($result) > 0) {
    // output data of each row
                while($row = mysqli_fetch_assoc($result)) {?> 
                    <h3 align="center">Tracking information for tracking number <?php echo $row["ship_id"] ?></h3>
                        <table class='table table-hover'>
                            <tr class='info'>
                              <th>Package Number</th>
                              <th>Package Description</th>
                              <th>Number of packets</th>
                              <th>Gross Weight</th>
                            </tr>
                            <tr>
                              <td class=''><?php echo $row["packagenum"] ?></td>
                              <td class=''>Sealed</td>
                              <td class=''><?php echo $row["items"] ?></td>
                              <td class=''><?php echo $row["weight"] ?></td>
                            </tr>
                            </table>
                    <div class="col-md-6">
                        <h3 align="center">RECEIVERS DETAILS</h3><br>
                        <div class="table-responsive">

                            <table class="table table-clean-paddings margin-bottom-0" style="background-color: #7c7c7c">

                                <tbody>
                                    <tr>
                                        <td>
                                           <div class="contact-container"><a href="#" style="color: #000;"><b>RECEIVERS <br> NAME:</b></a> </div>
                                       </td> 
                                       <td style="color: #fff; text-transform: uppercase;"><?php echo $row["jname"] ?></td>

                                   </tr>
                                   <tr>

                                    <tr>
                                        <td>
                                           <div class="contact-container"><a href="#" style="color: #000;"><b>RECEIVERS <br> ADDRESS:</b></a> </div>
                                       </td>
                                       <td style="color: #fff; text-transform: uppercase;"><?php echo $row["jadd"] ?></td>

                                   </tr>
                                   <tr>
                                    <td>
                                       <div class="contact-container"><a href="#" style="color: #000;"><b>RECEIVERS <br> COUNTRY:</b></a> </div>
                                   </td>
                                   <td style="color: #fff; text-transform: uppercase;"><?php echo $row["jcountry"] ?></td>

                               </tr>
                               <tr>
                                <td>
                                   <div class="contact-container"><a href="#" style="color:#000;"><b>RECEIVERS <br> Number:</b></a> </div>
                               </td>
                               <td style="color: #fff; text-transform: uppercase;"><?php echo $row["jnumber"] ?></td>

                           </tr>
                           <tr>
                            <td>
                               <div class="contact-container"><a href="#" style="color:#000;"><b>RECEIVERS <br> Email:</b></a> </div>
                           </td>
                           <td style="color: #fff; text-transform: uppercase;"><?php echo $row["jemail"] ?></td>

                       </tr>

                   </tbody>
               </table>
           </div><br>
       </div>

       <div class="col-md-6">
        <h3 align="center">SENDER's DETAILS</h3><br>
        <div class="table-responsive">
            <table class="table table-clean-paddings margin-bottom-0" style="background-color: #7c7c7c">

                <tbody>
                    <tr>
                        <td>
                           <div class="contact-container"><a href="#" style="color: #000;"><b>SENDER'S <br> NAME:</b></a> </div>
                       </td> 
                       <td style="color: #fff; text-transform: uppercase;"><?php echo $row["sname"] ?></td>

                   </tr>
                   <tr>

                    <tr>
                        <td>
                           <div class="contact-container"><a href="#" style="color: #000;"><b>SENDER'S <br> ADDRESS:</b></a> </div>
                       </td>
                       <td style="color: #fff; text-transform: uppercase;"><?php echo $row["sadd"] ?></td>

                   </tr>
                   <tr>
                    <td>
                       <div class="contact-container"><a href="#" style="color: #000;"><b>SENDER'S <br> COUNTRY:</b></a> </div>
                   </td>
                   <td style="color: #fff; text-transform: uppercase;"><?php echo $row["scountry"] ?></td>

               </tr>
               <tr>
                <td>
                   <div class="contact-container"><a href="#" style="color: #000;"><b>SENDER'S <br> Number:</b></a> </div>
               </td>
               <td style="color: #fff; text-transform: uppercase;"><?php echo $row["snumber"] ?></td>

           </tr>
           <tr>
            <td>
               <div class="contact-container"><a href="#" style="color: #000;"><b>SENDER'S <br> Email:</b></a> </div>
           </td>
           <td style="color: #fff; text-transform: uppercase;"><?php echo $row["semail"] ?></td>

       </tr>

   </tbody>
</table>
</div><br>
</div>

<div class="col-md-6">
  <h3 align="center">SHIPMENT DETAILS</h3><br>
  <div class="table-responsive">
    <table class="table table-clean-paddings margin-bottom-0" style="background-color: #7c7c7c">

        <tbody>
            <tr>
                <td>
                   <div class="contact-container"><a href="#" style="color: #000;"><b>TRANSPORTATION <br> MODE:</b></a> </div>
               </td> 
               <td style="color: #fff; text-transform: uppercase;"><?php echo $row["mode"] ?></td>

           </tr>
           <tr>

            <tr>
                <td>
                   <div class="contact-container"><a href="#" style="color: #000;"><b>PRODUCT <br> NAME:</b></a> </div>
               </td>
               <td style="color: #fff; text-transform: uppercase;"><?php echo $row["prod"] ?></td>

           </tr>
           <tr>
            <td>
               <div class="contact-container"><a href="#" style="color: #000;"><b>TRACKING<br> NUMBER:</b></a> </div>
           </td>
           <td style="color: #fff; text-transform: uppercase;"><?php echo $row["ship_id"] ?></td>

       </tr>
       <tr>
        <td>
           <div class="contact-container"><a href="#" style="color: #000;"><b>DELIVERY <br> STATUS:</b></a> </div>
       </td>
       <td style="color: #fff; text-transform: uppercase;"><?php echo $row["deliverys"] ?></td>

   </tr>
   <tr>
    <td>
       <div class="contact-container"><a href="#" style="color: #000;"><b>SHIPMENT <br> DESCRIPTION:</b></a> </div>
   </td>
   <td style="color: #fff; text-transform: uppercase;"><?php echo $row["descrip"] ?></td>

</tr>

<tr>
    <td>
       <div class="contact-container"><a href="#" style="color: #000;"><b>DEPARTURE TIME:</b></a> </div>
   </td>
   <td style="color: #fff; text-transform: uppercase;"><?php echo $row["Ship_time"] ?></td>

</tr>

<tr>
    <td>
       <div class="contact-container"><a href="#" style="color: #000;"><b>DELIVERY TIME:</b></a> </div>
   </td>
   <td style="color: #fff; text-transform: uppercase;"><?php echo $row["dtime"] ?></td>

</tr>
</tbody>
</table>
</div><br>
</div>
<div class="col-md-6">
    <h3 align="center">PACKAGE DETAILS</h3><br>
    <div class="table-responsive">
        <table class="table table-clean-paddings margin-bottom-0" style="background-color: #7c7c7c">

            <tbody>
                <tr>
                    <td>
                       <div class="contact-container"><a href="#" style="color: #000;"><b>PACKAGE CURRENT  <br> LOCATION:</b></a> </div>
                   </td> 
                   <td style="color: #fff; text-transform: uppercase;"><?php echo $row["currentl"] ?></td>

               </tr>
               <tr>

                <tr>
                    <td>
                       <div class="contact-container"><a href="#" style="color: #000;"><b>PACKAGE PICKUP <br> LOCATION:</b></a> </div>
                   </td>
                   <td style="color: #fff; text-transform: uppercase;"><?php echo $row["pickupl"] ?></td>

               </tr>
               <tr>
                <td>
                   <div class="contact-container"><a href="#" style="color: #000;"><b>DEPARTURE<br> DATE:</b></a> </div>
               </td>
               <td style="color: #fff; text-transform: uppercase;"><?php echo $row["Ship_date"] ?></td>

           </tr>
           <tr>
            <td>
               <div class="contact-container"><a href="#" style="color: #000;"><b>DELIVERY <br> DATE:</b></a> </div>
           </td>
           <td style="color: #fff; text-transform: uppercase;"><?php echo $row["ddate"] ?></td>

       </tr>
       <tr>
        <td>
           <div class="contact-container"><a href="#" style="color: #000;"><b>QUANTITY <br> SHIPPED:</b></a> </div>
       </td>
       <td style="color: #fff; text-transform: uppercase;"><?php echo $row["items"] ?></td>

   </tr>
   <tr>
    <td>
       <div class="contact-container"><a href="#" style="color: #000;"><b>PACKAGE <br> WEIGHT:</b></a> </div>
   </td>
   <td style="color: #fff; text-transform: uppercase;"><?php echo $row["weight"] ?></td>

</tr>

<tr>
    <td>
       <div class="contact-container"><a href="#" style="color: #000;"><b>SHIPMENT <br> CATRGORY:</b></a> </div>
   </td>
   <td style="color: #fff; text-transform: uppercase;"><?php echo $row["cat"] ?></td>

</tr>
<tr>
    <td>
       <div class="contact-container"><a href="#" style="color: #000;"><b>SHIPMENT <br> STATUS:</b></a> </div>
   </td>
   <td  class="blink_me" style="color: red; text-transform: uppercase; font-weight: bolder;"><?php echo $row["status"] ?></td>

</tr>
</tbody>
</table>
</div><br>
</div>
<div class="container">
	<div class="row">

    <div class="col-md-12">
        <h3 align="center">PACKAGE LOCATION AND STOPS</h3><br>
    <div class="table-responsive">
        <table class="table table-clean-paddings margin-bottom-0" style="background-color: #7c7c7c">

            <tbody>
                <tr>
                    <td>
                       <div class="contact-container"><a href="#" style="color: #fff; text-transform: uppercase;"><b><?php echo $row["l1"] ?></b></a> </div>
                   </td> 
                   <td style="color: #fff; text-transform: uppercase;"><?php echo $row["d1"] ?></td>
                   <td style="color: #fff; text-transform: uppercase;"><?php echo $row["dc1"] ?></td>

               </tr>
                      <tr>
                    <td>
                       <div class="contact-container"><a href="#" style="color: #fff; text-transform: uppercase;"><b><?php echo $row["l2"] ?></b></a> </div>
                   </td> 
                   <td style="color: #fff; text-transform: uppercase;"><?php echo $row["d2"] ?></td>
                        <td style="color: #fff; text-transform: uppercase;"><?php echo $row["dc2"] ?></td>

               </tr>
                      <tr>
                    <td>
                       <div class="contact-container"><a href="#" style="color: #fff; text-transform: uppercase;"><b><?php echo $row["l3"] ?></b></a> </div>
                   </td> 
                   <td style="color: #fff; text-transform: uppercase;"><?php echo $row["d3"] ?></td>
                        <td style="color: #fff; text-transform: uppercase;"><?php echo $row["dc3"] ?></td>

               </tr>
                      <tr>
                    <td>
                       <div class="contact-container"><a href="#" style="color: #fff; text-transform: uppercase;"><b><?php echo $row["l4"] ?></b></a> </div>
                   </td> 
                   <td style="color: #fff; text-transform: uppercase;"><?php echo $row["d4"] ?></td>
                        <td style="color: #fff; text-transform: uppercase;"><?php echo $row["dc4"] ?></td>

               </tr>
                      <tr>
                    <td>
                       <div class="contact-container"><a href="#" style="color: #fff; text-transform: uppercase;"><b><?php echo $row["l5"] ?></b></a> </div>
                   </td> 
                   <td style="color: #fff; text-transform: uppercase;"><?php echo $row["d5"] ?></td>
                   <td style="color: #fff; text-transform: uppercase;"><?php echo $row["dc5"] ?></td>

               </tr>


                       <tr>
                    <td>
                       <div class="contact-container"><a href="#" style="color: #fff; text-transform: uppercase;"><b><?php echo $row["l6"] ?></b></a> </div>
                   </td> 
                   <td style="color: #fff; text-transform: uppercase;"><?php echo $row["d6"] ?></td>
                   <td style="color: #fff; text-transform: uppercase;"><?php echo $row["dc6"] ?></td>

               </tr>
                      <tr>
                    <td>
                       <div class="contact-container"><a href="#" style="color: #fff; text-transform: uppercase;"><b><?php echo $row["l7"] ?></b></a> </div>
                   </td> 
                   <td style="color: #fff; text-transform: uppercase;"><?php echo $row["d7"] ?></td>
                        <td style="color: #fff; text-transform: uppercase;"><?php echo $row["dc7"] ?></td>

               </tr>
                      <tr>
                    <td>
                       <div class="contact-container"><a href="#" style="color: #fff; text-transform: uppercase;"><b><?php echo $row["l8"] ?></b></a> </div>
                   </td> 
                   <td style="color: #fff; text-transform: uppercase;"><?php echo $row["d8"] ?></td>
                        <td style="color: #fff; text-transform: uppercase;"><?php echo $row["dc8"] ?></td>

               </tr>
                      <tr>
                    <td>
                       <div class="contact-container"><a href="#" style="color: #fff; text-transform: uppercase;"><b><?php echo $row["l9"] ?></b></a> </div>
                   </td> 
                   <td style="color: #fff; text-transform: uppercase;"><?php echo $row["d9"] ?></td>
                        <td style="color: #fff; text-transform: uppercase;"><?php echo $row["dc9"] ?></td>

               </tr>
                      <tr>
                    <td>
                       <div class="contact-container"><a href="#" style="color: #fff; text-transform: uppercase;"><b><?php echo $row["l10"] ?></b></a> </div>
                   </td> 
                   <td style="color: #fff; text-transform: uppercase;"><?php echo $row["d10"] ?></td>
                   <td style="color: #fff; text-transform: uppercase;"><?php echo $row["dc10"] ?></td>

               </tr>
            

 
</tbody>
</table>
</div>
  </div>
</div>
</div>

<br><br>
<h1 align="center"><a href="map.php?id=<?php echo $row["track_id"]; ?>">View Map Here</a></h1>






<?php       
}
} else {
    echo "<div class='alert alert-danger'>
    <strong>Failed!</strong> No Search Done Yet Or Tracking Id Doesnt Exist.
    </div>";
}
}
}

?>


</div> 
</div>


<?php 	include 'footer.php'; ?>