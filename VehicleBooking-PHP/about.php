<!DOCTYPE html>
<html lang="en">

<?php include("vendor/inc/head.php");?>

<head>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
       <style>
           .separator-type, .title-type, .intro-type, .content-type .intro-type p {
    position: relative;
}
.intro-type .container {
    padding: 107px 0px 102px 0px !important;
}
#product-header-section, .intro-type .container {
    padding: 68px 15px 72px !important;
}
@media (min-width: 1630px)
.container {
    width: 1630px;
}
.parallax {
    background-attachment: inherit !important;
}
.parallax {
    background-attachment: inherit !important;
    background-repeat: repeat;
    background-size: cover;
    position: absolute;
    top: 0px;
    bottom: 0px;
    width: 100%;
    z-index: -10;
}
.company-heading h1 {
    margin-bottom: 40px;
    line-height: 80px;
    color: #fff;
    font-weight: 700 !important;
    text-align: center;
}
.seo-header, .product-header, .intro-type .container h1.white, .company-heading h1 {
    font-family: 'Raleway', sans-serif;
    font-weight: 100 !important;
    text-transform: capitalize;
    font-size: 65px;
    margin-bottom: 20px;
}
.company-sections h2, .careers-sections h2, .perks-section h2 {
    font-weight: 800;
    font-size: 50px;
}
.company-sections h2, .company-sections h3, .careers-sections h2, .perks-section h2 {
    font-family: 'proxima-nova', sans-serif;
}
.company-sections h3 {
    font-size: 25px;
    font-weight: 700;
    margin: 14px 0;
    font-family: 'proxima-nova', sans-serif;
    text-transform: capitalize;
}
.red-border {
    width: 50%;
    border-bottom: 1px solid #d2282e;
    margin: 0 auto;
    height: 16px;
}
.company-sections p {
    margin-top: 20px;
}
.ct-u-size22 {
    font-size: 22px;
}
.ct-u-fontWeight300 {
    font-weight: 300;
}
.marginTop40 {
    margin-top: 40px !important;
}
.ct-u-paddingBoth100 {
    padding: 100px 15px;
}
.culture-section {
    background: linear-gradient(rgba(0, 0, 0, 0.45),rgba(0, 0, 0, 0.45)), url(https://www.solodev.com/assets/culture.jpg) top no-repeat;
    /* background-color: #095c87; */
    /* color: #fff; */
}
.company-sections, .careers-sections, .left-headquarter-section-img, .right-headquarter-section-img {
    text-align: center;
}
.ct-u-paddingBoth100 {
    padding: 100px 15px;
}
.company-sections h2, .careers-sections h2, .perks-section h2 {
    font-weight: 800;
    font-size: 50px;
}
.company-sections h2, .company-sections h3, .careers-sections h2, .perks-section h2 {
    font-family: 'proxima-nova', sans-serif;
}
.slick-slider {
    margin-bottom: 0;
}
.slick-slider {
    position: relative;
    display: block;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    -webkit-touch-callout: none;
    -khtml-user-select: none;
    -ms-touch-action: pan-y;
    touch-action: pan-y;
    -webkit-tap-highlight-color: transparent;
}
.slick-slider .slick-track, .slick-slider .slick-list {
    -webkit-transform: translate3d(0, 0, 0);
    -moz-transform: translate3d(0, 0, 0);
    -ms-transform: translate3d(0, 0, 0);
    -o-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
}
.slick-list {
    position: relative;
    display: block;
    overflow: hidden;
    margin: 0;
    padding: 0;
}
.slick-track {
    position: relative;
    top: 0;
    left: 0;
    display: block;
}
.slider .item {
    overflow: hidden;
}
.slick-slide {
    display: none;
    float: left;
    height: 100%;
    min-height: 1px;
}
.logos {
    margin-right: -5px;
    margin-left: -5px;
}
ul.logos li {
    cursor: pointer;
}
.logos > li {
    float: left;
    width: 16.66666%;
    padding: 5px;
}
.logos .logos-inner {
    position: relative;
}
.slick-slide img {
    display: inline-block;
}
.logo-image {
    position: relative;
    width: 100%;
}
ul.logos li {
    cursor: pointer;
}
.logos > li {
    float: left;
    width: 16.66666%;
    padding: 5px;
}
.logos .logos-inner {
    position: relative;
}
.slick-slide img {
    display: inline-block;
}
img {
    display: inline-block;
    max-width: 100%;
    vertical-align: middle;
}
.fa {
  font-size: 42px;
}
.btn-solodev-red-reversed {
    background-color: #fff;
    color: #d2282e;
    -webkit-transition: all 0.3s ease;
    transition: all 0.3s ease;
    padding: 12px 35px;
}
.btn, .btn-blk {
    font-size: 18px !Important;
}
a:hover, a:focus {
    text-decoration: none;
}
.ct-u-size19 {
 margin-top: 40px; 
}
a:hover {
    color: #000;
}
section.clients-home .clients-logos .client-logos-repeater {
    height: 260px;
    border-right: 1px solid #ccc;
    border-bottom: 1px solid #ccc;
    cursor: pointer;
}

section.clients-home .clients-logos .client-logos-repeater img {
    position: absolute;
    top: 0;
    bottom: 0;
    margin: auto;
    left: 0;
    right: 0;
}
.logo-title {
    position: absolute;
    display: none;
    top: 0px;
    left: 0px;
    width: 100%;
    height: 100%;
    font-size: 16px;
    font-weight: 700;
    line-height: 16px;
    text-transform: uppercase;
    color: #FFF;
    background-color: #0079c2;
}
.ct-u-paddingBottom100 {
  margin-top: 40px;
}
.culture-section {
  background-size: cover;
  color: #fff;
}

       </style>
    </head>


<body>

  <!-- Navigation -->
  <?php include("vendor/inc/nav.php");?>

  <!-- Page Content -->
  
  <div class="ct-pageWrapper" id="ct-js-wrapper">
    <section class="company-heading intro-type" id="parallax-one">
      <div class="container">
        <div class="row product-title-info">
          <div class="col-md-12">
            <h1>About Us</h1>
          </div>
        </div>
      </div>
      <div class="parallax" id="parallax-cta" style="background-image:url(https://www.solodev.com/assets/hero/hero.jpg);"></div>
    </section>
    <section class="story-section company-sections ct-u-paddingBoth100 paddingBothHalf noTopMobilePadding" id="section">
      <div class="container text-center">
        <h2>PRIYA TRANSPORT</h2>
        <h3>Logistics Service</h3>
        <div class="col-md-8 col-md-offset-2">
          <div class="red-border"></div>
          <p class="ct-u-size22 ct-u-fontWeight300 marginTop40">Our immense pleasure to introduce ourselves as PRIYA TRANSPORTS. Started its business in 1984 and now it has grown with the strength to cater to the needs of the business community.The  Flagship entity PRIYA TRANSPORTS has been rendering able services in surface Transportation having its Headquarters in HOSUR to various places in Tamil Nadu. The clientele has been very diverse-from Industrial
                      Houses to the wholesale / retail/vendor systems.We are proud to say that we are extending our valuable and uninterrupted services to many leading corporate companies in various places.PRIYA TRANSPORTS with its OWN 115
                      CONTAINER LORRIES and 90 LCV VEHICLES and 25 attached LCV VEHICLES has expanded its service operation between MYSORE, BANGALORE, HOSUR, and CHENNAI.  We are operating with talented people with excellent training. Our operational system is organized in such a way that our valued customers are provided with prompt servicesn at all times. we try to give credence to the belief that "Perfection is only standard". We are having trained and professionally experienced and motivated personnel to handle valuable goods with utmost care.</p>

          <!-- <a class="ct-u-marginTop60 btn btn-solodev-red btn-fullWidth-sm ct-u-size19" href="#">Learn More</a> -->
        </div>
      </div>
    </section>
    <section class="culture-section company-sections ct-u-paddingBoth100 paddingBothHalf noTopMobilePadding">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-md-offset-2">
            
          <table class="m_right" cellspacing="70" width="900">

 <div class="vision">
                                  <div class="about-item text-center">
                                  <i class="fa fa-globe"></i>
                                  <h3>OUR VISION</h3>
                                  <hr>&nbsp;&nbsp;&nbsp;
                                  <p>To stay ahead among our rivals in the transport and logistics industry by providing world-class and innovative moving solutions to our clients. We wish to become the top choice of our customers when they are looking for a reliable, affordable and professional transporter.
                                  </p>
                              </div>
                          </div>
                              <div class="mission">
                                  <div class="about-item text-center">
                                  <i class="fa fa-book"></i>
                  <h3>OUR MISSION</h3>
                  <hr>&nbsp;&nbsp;&nbsp;
                  <p>Stay responsive to consumers requirement, find innovative and flexible solutions and strive to achieve customer satisfaction with our performance, honesty, and integrity. We aim to achieve our esteemed patrons trust and develop a lasting relationship with them.
                  </p>
                              </div>
                          </div>
                      </div>
                          </div>
         

</table></section></div>



<table><td>
    </section>
    <section class="customers-section company-sections ct-u-paddingBoth100 paddingBothHalf noTopMobilePadding">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-md-offset-2">
            <h2>CUSTOMERS</h2>
            <h3>Trusted by some of the world�s leading brands.</h3>
            <div>
                <style>h1{color:#760606;text-align:center}table{text-align:center;font-family:arial,sans-serif;border-collapse:collapse;width:100%}th{text-align:center;padding:8px;background-color:#760606;border:1px solid #ddd;color:white}td{border:1px solid #ddd;text-align:center;padding:8px}tr:nth-child(even){background-color:#ddd}</style>

                </div>
<table border="0" cellpadding="0" cellspacing="0" rules="all" class="bodytext ml20" align="center">
 
    <col width="160" style="width:120pt;">
  <col width="167" style="width:125pt;">
  <col width="367" style="width:275pt;">
  <tr style="height:15.0pt;">
  <th class="excel2" width="160" style="height:15.0pt;width:255pt;">Number</th>
  <th class="excel2" width="167" style="border-left:none;width:295pt;">Customer Name</th>
  </tr>
              <tr style="height:15.0pt;">
              <td class="excel2" style="height:15.0pt;border-top:none;">1</td>
              <td class="excel2" style="border-top:none;border-left:none;">BOSTIK INDIA PRIVATE LIMITED</td>
  </tr>
  <tr style="height:15.0pt;">
              <td class="excel2" style="height:15.0pt;border-top:none;">2</td>
              <td class="excel2" style="border-top:none;border-left:none;">Exide Industries Limited</td>
  
  </tr>
  <tr style="height:15.0pt;">
              <td class="excel2" style="height:15.0pt;border-top:none;">3</td>
              <td class="excel2" style="border-top:none;border-left:none;">TATA AUTOCOMP SYSTEMS LTD</td>
  
  </tr>
  <tr style="height:15.0pt;">
              <td class="excel2" style="height:15.0pt;border-top:none;">4</td>
              <td class="excel2" style="border-top:none;border-left:none;">RAJSRIYA AUTOMOTIVE INDUSTRIES ( P) LTD</td>
  
  </tr>          
      <tr style="height:15.0pt;">
              <td class="excel2" style="height:15.0pt;border-top:none;">5</td>
              <td class="excel2" style="border-top:none;border-left:none;">HEMA ENGINEERING INDUSTRIES LIMITED UNIT - II</td>
  
  </tr>          
      <tr style="height:15.0pt;">
              <td class="excel2" style="height:15.0pt;border-top:none;">6</td>
              <td class="excel2" style="border-top:none;border-left:none;">MINDA INDUSTRIES LTD,</td>
  
  </tr>          
      <tr style="height:15.0pt;">
              <td class="excel2" style="height:15.0pt;border-top:none;">7</td>
              <td class="excel2" style="border-top:none;border-left:none;">Carborundum Universal Limited, [ CWH ]</td>
  
  </tr>            
    <tr style="height:15.0pt;">
              <td class="excel2" style="height:15.0pt;border-top:none;">8</td>
              <td class="excel2" style="border-top:none;border-left:none;">PARACOAT PRODUCTS LIMITED</td>
  
  </tr>            
    <tr style="height:15.0pt;">
              <td class="excel2" style="height:15.0pt;border-top:none;">9</td>
              <td class="excel2" style="border-top:none;border-left:none;">Carborundum Universal Limited, [ Bonded ]</td>
  
  </tr>        
        <tr style="height:15.0pt;">
              <td class="excel2" style="height:15.0pt;border-top:none;">10</td>
              <td class="excel2" style="border-top:none;border-left:none;">Gabriel India Limited</td>
  
  </tr>
  <tr style="height:15.0pt;">
              <td class="excel2" style="height:15.0pt;border-top:none;">11</td>
              <td class="excel2" style="border-top:none;border-left:none;">Carborundum Universal Limited, [ TVT ]</td>
  
  </tr>            

  <tr style="height:15.0pt;">
              <td class="excel2" style="height:15.0pt;border-top:none;">12</td>
              <td class="excel2" style="border-top:none;border-left:none;">Systern Auto Engineering  Pvt. Ltd</td>
  
  </tr>            

  <tr style="height:15.0pt;">
              <td class="excel2" style="height:15.0pt;border-top:none;">13</td>
              <td class="excel2" style="border-top:none;border-left:none;">Carborundum Universal Limited [ TRADED ]</td>
  
  </tr>            
  <tr style="height:15.0pt;">
              <td class="excel2" style="height:15.0pt;border-top:none;">14</td>
              <td class="excel2" style="border-top:none;border-left:none;">FIEM INDUSTRIES LIMITED, ( UNIT - II),

</td>
  
  </tr>            
  <tr style="height:15.0pt;">
              <td class="excel2" style="height:15.0pt;border-top:none;">15</td>
              <td class="excel2" style="border-top:none;border-left:none;">Kailash Shipping Services Pvt. Ltd</td>
  
  </tr>            
  <tr style="height:15.0pt;">
              <td class="excel2" style="height:15.0pt;border-top:none;">16</td>
              <td class="excel2" style="border-top:none;border-left:none;">ZIGMA PRESSINGS</td>
  
  </tr>            
  <tr style="height:15.0pt;">
              <td class="excel2" style="height:15.0pt;border-top:none;">17</td>
              <td class="excel2" style="border-top:none;border-left:none;">MIJU Precision India Ltd</td>
  
  </tr>            
  <tr style="height:15.0pt;">
              <td class="excel2" style="height:15.0pt;border-top:none;">18</td>
              <td class="excel2" style="border-top:none;border-left:none;">FIEM INDUSTRIES LIMITED ( UNIT - V )</td>
  
  </tr>            
  <tr style="height:15.0pt;">
              <td class="excel2" style="height:15.0pt;border-top:none;">19</td>
              <td class="excel2" style="border-top:none;border-left:none;">Hypertech Elastomers</td>
  
  </tr>            
  <tr style="height:15.0pt;">
              <td class="excel2" style="height:15.0pt;border-top:none;">20</td>
              <td class="excel2" style="border-top:none;border-left:none;">ARO GRANITES INDUSTRIES LTD</td>
  
  </tr>            
  <tr style="height:15.0pt;">
              <td class="excel2" style="height:15.0pt;border-top:none;">21</td>
              <td class="excel2" style="border-top:none;border-left:none;">Sundaram Auto Components Limited</td>
  
  </tr>            
  <tr style="height:15.0pt;">
              <td class="excel2" style="height:15.0pt;border-top:none;">22</td>
              <td class="excel2" style="border-top:none;border-left:none;">BOSTIK  INDIA  PRIVATE  LIMITED</td>
  
  </tr>
  <tr style="height:15.0pt;">
              <td class="excel2" style="height:15.0pt;border-top:none;">23</td>
              <td class="excel2" style="border-top:none;border-left:none;">HEMA ENGINEERING INDUSTRIES LIMITED - IV</td>
  
  </tr>            
  <tr style="height:15.0pt;">
              <td class="excel2" style="height:15.0pt;border-top:none;">24</td>
              <td class="excel2" style="border-top:none;border-left:none;">REYANSH MOTORS PRIVATE LIMITED</td>
  
  </tr>            
  <tr style="height:15.0pt;">
              <td class="excel2" style="height:15.0pt;border-top:none;">25</td>
              <td class="excel2" style="border-top:none;border-left:none;">MINDA INDUSTRIES LTD - HOSUR

</td>
  
  </tr>            




            </div>
          <div class="clearfix">
        </div>
      </div>
    </section>
  </div>
  
  </html>
  <!-- /.container -->

  <!-- Footer -->


  /* <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script> */




