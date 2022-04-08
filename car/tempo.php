<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
         integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="./car-page.css">
      <title>Car</title>
   </head>
   <?php include("header.php")?>
   <style type="text/css">
      .tempo-title{
      color:#fd6346;
      }
      .temp-card-img{
      box-shadow: 2px 2px 2px 2px;
      width: 80%;
      }
      .tempo_area{
      margin-top:100px !important;
      clear: both;
      background-repeat:no-repeat !important; 
      background-size:cover !important;
      background-position:center center !important;
      height:400px !important;
      position:relative;
      margin-bottom: 50px;
      background-image: url("assets/img/tempo-bg.jpg");
      }
      .tempo_title {
      text-align: center;
      }
      .tempo_title_inner h2 {
      color: #FFFFFF;
      font-size: 50px;
      font-weight: 600;
      }
      .temp-card{
      border:1px solid #fd6346;
      }
      .tour{
      border:1px solid #fd6346;
      }
      .city-name{
      color:#fd6346;
      }
   </style>
   <div class="tempo_area d-flex align-items-center">
      <div class="container">
         <div class="row">
            <div class="col-lg-12">
               <div class="tempo_title">
                  <div class="tempo_title_inner  pb-2">
                     <h2>Tempo Traveller</h2>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="container">
      <div class="row mt-5">
         <div class="col-lg-4 col-sm-12 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="tempo-traveller">
               <div class="card temp-card" style="width: 20rem;">
                  <div class="tempo-card-img">
                     <img class="card-img-top" src="assets/img/tempo.jpg" alt="Card image cap">
                  </div>
                  <div class="card-body">
                     <h6 class="tempo-title card-title ">9 Seater Tempo Traveller</h6>
                     <p><i class="fa fa-dot-circle-o car-list-desc-icon" aria-hidden="true"></i> Capacity 9 People</p>
                     <p><i class="fa fa-dot-circle-o car-list-desc-icon" aria-hidden="true"></i> Fare <i class="fa fa-inr" aria-hidden="true"></i> 18 pre km</p>
                     <p><i class="fa fa-dot-circle-o car-list-desc-icon" aria-hidden="true"></i> per day <i class="fa fa-inr" aria-hidden="true"></i> 5,000</p>
                     <a href="#" class="btn text-white mt-2">View Detail</a>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-lg-4 col-sm-12 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="tempo-traveller">
               <div class="card temp-card" style="width: 20rem;">
                  <div class="tempo-card-img">
                     <img class="card-img-top" src="assets/img/tempo.jpg" alt="Card image cap">
                  </div>
                  <div class="card-body">
                     <h6 class="tempo-title card-title">9 Seater Tempo Traveller</h6>
                     <p><i class="fa fa-dot-circle-o car-list-desc-icon" aria-hidden="true"></i> Capacity 9 People</p>
                     <p><i class="fa fa-dot-circle-o car-list-desc-icon" aria-hidden="true"></i> Fare <i class="fa fa-inr" aria-hidden="true"></i> 18 pre km</p>
                     <p><i class="fa fa-dot-circle-o car-list-desc-icon" aria-hidden="true"></i> per day <i class="fa fa-inr" aria-hidden="true"></i> 5,000</p>
                     <a href="#" class="btn text-white mt-2">View Detail</a>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-lg-4 col-sm-12 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="tempo-traveller">
               <div class="card temp-card" style="width: 20rem;">
                  <div class="tempo-card-img">
                     <img class="card-img-top" src="assets/img/tempo.jpg" alt="Card image cap">
                  </div>
                  <div class="card-body">
                     <h6 class="tempo-title card-title">9 Seater Tempo Traveller</h6>
                     <p><i class="fa fa-dot-circle-o car-list-desc-icon" aria-hidden="true"></i> Capacity 9 People</p>
                     <p><i class="fa fa-dot-circle-o car-list-desc-icon" aria-hidden="true"></i> Fare <i class="fa fa-inr" aria-hidden="true"></i> 18 pre km</p>
                     <p><i class="fa fa-dot-circle-o car-list-desc-icon" aria-hidden="true"></i> per day <i class="fa fa-inr" aria-hidden="true"></i> 5,000</p>
                     <a href="#" class="btn text-white mt-2">View Detail</a>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="row mt-5">
         <div class="col-lg-12 col-sm-12 mb-4">
            <h3 class="text-center">Our Tour</h3>
            <hr class="service-hr">
         </div>
         <div class="col-lg-4 col-sm-12 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
            <div class="card tour" style="width: 20rem;">
               <div class="city-img">				
                  <img class="card-img-top p-3" src="assets/img/Bhopal.jpg" alt="Card image cap">
               </div>
               <div class="card-body">
                  <h6 class="text-center city-name">Tempo Traveller Bhopal</h6>
               </div>
            </div>
         </div>
         <div class="col-lg-4 col-sm-12 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
            <div class="card tour" style="width: 20rem;">
               <div class="city-img">				
                  <img class="card-img-top p-3" src="assets/img/Mumbai.webp" alt="Card image cap">
               </div>
               <div class="card-body">
                  <h6 class="text-center city-name">Tempo Traveller Mumbai</h6>
               </div>
            </div>
         </div>
         <div class="col-lg-4 col-sm-12 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="400">
            <div class="card tour" style="width: 20rem;">
               <div class="city-img">				
                  <img class="card-img-top p-3" src="assets/img/agra.webp" alt="Card image cap">
               </div>
               <div class="card-body">
                  <h6 class="text-center city-name">Tempo Traveller Agra</h6>
               </div>
            </div>
         </div>
      </div>
      <div class="row mt-5">
         <div class="col-lg-4 col-sm-12 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
            <div class="card tour" style="width: 20rem;">
               <div class="city-img">				
                  <img class="card-img-top p-3" src="assets/img/Bhopal.jpg" alt="Card image cap">
               </div>
               <div class="card-body">
                  <h6 class="text-center city-name">Tempo Traveller Bhopal</h6>
               </div>
            </div>
         </div>
         <div class="col-lg-4 col-sm-12 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
            <div class="card tour" style="width: 20rem;">
               <div class="city-img">				
                  <img class="card-img-top p-3" src="assets/img/Mumbai.webp" alt="Card image cap">
               </div>
               <div class="card-body">
                  <h6 class="text-center city-name">Tempo Traveller Mumbai</h6>
               </div>
            </div>
         </div>
         <div class="col-lg-4 col-sm-12 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="400">
            <div class="card tour" style="width: 20rem;">
               <div class="city-img">				
                  <img class="card-img-top p-3" src="assets/img/agra.webp" alt="Card image cap">
               </div>
               <div class="card-body">
                  <h6 class="text-center city-name">Tempo Traveller Agra</h6>
               </div>
            </div>
         </div>
      </div>

      <div class="row mt-5">
      	<div class="col-sm-12">
      		 

<table class="table table-bordered">
  <thead class="thead-light">
    <tr>
      <th scope="col">Starting At</th>
      <th scope="col">Tempo Traveler (9 seater)</th>
      <th scope="col">Tempo Traveler (12 seater)</th>
      <th scope="col">Tempo Traveler (15 seater)</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Bhopal To Ujjain</td>
      <td>8,999</td>
      <td>12,999</td>
      <td>16,999</td>
    </tr>
    <tr>
      <td>Bhopal To Ujjain</td>
      <td>8,999</td>
      <td>12,999</td>
      <td>16,999</td>
    </tr>
   <tr>
      <td>Bhopal To Ujjain</td>
      <td>8,999</td>
      <td>12,999</td>
      <td>16,999</td>
    </tr>
    <tr>
      <td>Bhopal To Ujjain</td>
      <td>8,999</td>
      <td>12,999</td>
      <td>16,999</td>
    </tr>
    <tr>
      <td>Bhopal To Ujjain</td>
      <td>8,999</td>
      <td>12,999</td>
      <td>16,999</td>
    </tr>
    <tr>
      <td>Bhopal To Ujjain</td>
      <td>8,999</td>
      <td>12,999</td>
      <td>16,999</td>
    </tr>
    <tr>
      <td>Bhopal To Ujjain</td>
      <td>8,999</td>
      <td>12,999</td>
      <td>16,999</td>
    </tr>
    <tr>
      <td>Bhopal To Ujjain</td>
      <td>8,999</td>
      <td>12,999</td>
      <td>16,999</td>
    </tr>
</tbody>
</table>
      	</div>
      </div>

      <div class="row mt-5">
      	  <div class="col-lg-12 col-sm-12 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
      	  	<div class="my-2">
      	  	<h3>Lorem ipsum dolor</h3>
      	  	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
      	  	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
      	  	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
      	  	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
      	  	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
      	  	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      	  </div>
</div>
      	   <div class="col-lg-12 col-sm-12 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
      	   	<div class="my-2">
      	  	<h3>Lorem ipsum dolor</h3>
      	  	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
      	  	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
      	  	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
      	  	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
      	  	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
      	  	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      	  </div>
      	  </div>
      </div>
   </div>
   <?php include("footer.php")?>