<?php include("header.php")?>
<style>
   .contact_form{
       box-shadow: 0 0 30px rgb(214 215 216 / 40%);
    padding: 30px;
   }
   .contact-button{
      background:#fd6346;
          border: 0;
    padding: 10px 30px;
    color: #fff;
    transition: 0.4s;
    border-radius: 4px;
}
.form-group{
   margin-top:20px;
}
</style>
<section id="blog" class="  blog" >
   <div class="container">
      <div class="row">
         <div class="col-lg-12 col-md-12 col-sm-12">
            <h2 class="text-center text-white  my-5">Contact Us</h2>
         </div>
      </div>
   </div>
</section>
<main id="main">
 
   <!-- ======= Contact Section ======= -->
   <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">
         <div class="section-title">
            <h3 class="text-center py-5">Get To Touch</h3>
         </div>
         <div class="row" data-aos="fade-up" data-aos-delay="100">
            <div class="col-lg-4 col-sm-12">
               <div class="info-box  my-5">
                  <i class="bx bx-phone-call"></i>
                  <h3>Call Us</h3>
                  <p>+91 9876543210 </p>
               </div>
            </div>
            <div class="col-lg-4 col-sm-12 ">
               <div class="info-box ">
                  <i class="bx bx-envelope"></i>
                  <h3>Email Us</h3>
                  <p>support@suryacarrental.com</p>
               </div>
            </div>
            <div class="col-lg-4 col-sm-12">
               <div class="info-box my-5">
                  <i class="bx bx-map"></i>
                  <h3>Our Address</h3>
                  <p>1st Floor, D2, near Prabhat Chouraha,
                     New Subhash Nagar, Padmanabh Nagar,
                     Govindpura, Bhopal, Madhya Pradesh
                     462008
                  </p>
               </div>
            </div>
         </div>
      </div>
      <section id="faq" class="faq section-bg">
         <div class="container" data-aos="fade-up">
            <div class="section-title">
               <h2>Have Any Questions?</h2>
               <h3>Write a Message</h3>
               <p>Thank you very much for your interest in our company and our services and
                  if you have any questions, please write us a message now!
               </p>
            </div>
         </div>
      </section>
      <div class="container">
         <div class="row mt-5" data-aos="fade-up" data-aos-delay="100">
            <div class="col-lg-6 ">
               <iframe class="mb-4 mb-lg-0" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
            </div>
            <div class="col-lg-6">
               <form action="contact_insert.php" method="post" role="form" class="contact_form"  >
                  <div class="row">
                     <div class="col form-group">
                        <input type="text" name="full_name" class="form-control" id="name" placeholder="Your Name" required>
                     </div>
                     <div class="col form-group">
                        <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                     </div>
                  </div>
                  <div class="form-group">
                     <input type="text" class="form-control" name="contact" id="subject" placeholder="phone" required>
                  </div>
                  <div class="form-group">
                     <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                  </div>
                  <!-- <div class="my-3">
                     <div class="loading">Loading</div>
                     <div class="error-message"></div>
                     <div class="sent-message">Your message has been sent. Thank you!</div>
                  </div> -->
                  <div class="text-center form-group"><button type="submit" name="submit" class="contact-button">Send Message</button></div>
               </form>
            </div>
         </div>
      </div>
   </section>
   <!-- End Contact Section -->
</main>
<!-- End #main -->
<?php include("footer.php")?>