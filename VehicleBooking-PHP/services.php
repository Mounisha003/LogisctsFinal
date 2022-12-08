<!DOCTYPE html>
<html lang="en">

<?php include("vendor/inc/head.php");?>

<style>

* {
  padding: 0;
  margin: 0;
  box-sizing: border-box;
  font-family: "Poppins", sans-serif;
}
section {
  height: 100vh;
  width: 100%;
  display: grid;
  place-items: center;
}
.row {
  display: flex;
  flex-wrap: wrap;
}
.column {
  width: 100%;
  padding: 0 1em 1em 1em;
  text-align: center;
}
.card {
  width: 100%;
  height: 100%;
  padding: 2em 1.5em;
  background: linear-gradient(#ffffff 50%, #2c7bfe 50%);
  background-size: 100% 200%;
  background-position: 0 2.5%;
  border-radius: 5px;
  box-shadow: 0 0 35px rgba(0, 0, 0, 0.12);
  cursor: pointer;
  transition: 0.5s;
}
h3 {
  font-size: 20px;
  font-weight: 600;
  color: #1f194c;
  margin: 1em 0;
}
p {
  color: #575a7b;
  font-size: 15px;
  line-height: 1.6;
  letter-spacing: 0.03em;
}
.icon-wrapper {
  background-color: #2c7bfe;
  position: relative;
  margin: auto;
  font-size: 30px;
  height: 2.5em;
  width: 2.5em;
  color: #ffffff;
  border-radius: 50%;
  display: grid;
  place-items: center;
  transition: 0.5s;
}
.card:hover {
  background-position: 0 100%;
}
.card:hover .icon-wrapper {
  background-color: #ffffff;
  color: #2c7bfe;
}
.card:hover h3 {
  color: #ffffff;
}
.card:hover p {
  color: #f0f0f0;
}
@media screen and (min-width: 768px) {
  section {
    padding: 0 2em;
  }
  .column {
    flex: 0 50%;
    max-width: 50%;
  }
}
@media screen and (min-width: 992px) {
  section {
    padding: 1em 3em;
  }
  .column {
    flex: 0 0 33.33%;
    max-width: 33.33%;
  }
}
</style>
</head>

<body>

  <!-- Navigation -->
  <?php include("vendor/inc/nav.php");?>

  <!-- Page Content -->
  <div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <h1 class="mt-4 mb-3">Features
    </h1>

    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="index.php">Home</a>
      </li>
      <li class="breadcrumb-item active">Features</li>
    </ol>

    <!-- Image Header -->
    <img class="img-fluid rounded mb-4" src="https://corlettexpress.com/wp-content/uploads/2020/09/AdobeStock_244807532.jpeg" alt="">

    <!-- Marketing Icons Section -->
    


      <div class="row">
        <div class="column">
          <div class="card">
            <div class="icon-wrapper">
              <i class="fasfa-hammer"></i>
            </div>
            <h3>Safe And Reliable
            </h3>
            <p>
              We provide safe, reliable and express logistics solutions for B2B and B2C
              with high-end facilities like Smart Warehousing.
            </p>
          </div>
        </div>
        <div class="column">
          <div class="card">
            <div class="icon-wrapper">
              <i class="fas fa-plus"></i>
            </div>
            <h3>100% Customer Satisfaction</h3>
            <p>
              Our priority is to achieve 100% customer satisfaction as we realize that a satisfied customer is a return customer is a best form of advertisement.
  </p>
          </div>
        </div>
        <div class="column">
          <div class="card">
            <div class="icon-wrapper">
              <i class="fas fa-truck"></i>
            </div>
            <h3>Easy Reach</h3>
            <p>
              Save your time as well as energy to a great extent with easy Reach. As well as  Priya Services to provide good services and Easy Reach to our Customers.

            </p>
          </div>
        </div>
        <div class="column">
          <div class="card">
            <div class="icon-wrapper">
              <i class="fas fa-truck-pickup"></i>
            </div>
            <h3>Solutions</h3>
            <p>
                We strongly believe that every customer is unique and with our
                    customized solutions we will provide solutions to our customers and their needs.</p>
          </div>
        </div>
        <div class="column">
          <div class="card">
            <div class="icon-wrapper">
              <i class="fas fa-truck"></i>
            </div>
            <h3>Transportation</h3>
            <p>
              Transportation of large, heavy, high value or critical pieces of equipment

            </p>
          </div>
        </div>
        <div class="column">
          <div class="card">
            <div class="icon-wrapper">
              <i class="fas fa-plug"></i>
            </div>
            <h3>Material Safety & speed</h3>
            <p>
               As the vehicle travels between pick up and destination point without any stop the
                consignment is delivered safely and with speed.
            </p>
          </div>
        </div>
      </div>


  </div>
  <!-- /.container -->

  <!-- Footer -->
  <?php include("vendor/inc/footer.php");?>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
