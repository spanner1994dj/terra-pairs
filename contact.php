<?php
$pageTitle = "Contact Us";

include("inc/header.php"); ?>

<h1 class="contact-title">Contact Us</h1>
      

      <p class="contact-slogan">If you have any questions please get in contact with us using the form below and we will respond as soon as possible.</p>
      <div class="contact-form">
         <div class="container">
            <form action="action_page.php">
         
               <label for="fname">First Name:</label>
               <input type="text" id="fname" name="firstname" placeholder="Your name..">
            
               <label for="lname">Last Name:</label>
               <input type="text" id="lname" name="lastname" placeholder="Your last name..">

               <label for="email">Email:</label>
               <input type="text" id="email-add" name="mail" placeholder="Email..">
            
               <label for="tel-num">Telephone Number:</label>
               <input type="text" id="numb" name="telephone" placeholder="Telephone Number..">
            
               <label for="subject">Subject:</label>
               <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

               <input type="checkbox" class="check" id="myCheck" onclick="myFunction()"> <label class=myCheck> I consent to my email and personal data stored by Terracotta Catering.</label><br>

               <!--Use this site key in the HTML code your site servers to users!!!
               6Lcg47kZAAAAAAQkalO5bE9FATnS9tQS7LdYNYbB -->
               
               <!-- Secret key for communication between site and recpatcha
               6Lcg47kZAAAAAFDzknj-OHvS8AGvcSmErQJXc9-c -->

               <input type="submit" value="Submit">
            </form>
           
         </div>
         <div class="map">
            <div class="mapid">
               <h3 class="map-title">Where to find us!!</h3>
               <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2420.7066983715727!2d1.262040815956824!3d52.64721183454589!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47d9e173705fe203%3A0xf26790a125dad856!2s16%20Zobel%20Cl%2C%20Norwich%20NR3%202BY!5e0!3m2!1sen!2suk!4v1597841065230!5m2!1sen!2suk" width="500" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
         </div>
      </div>
      
      <!-- Load the JavaScript API.

 <script src="https://www.google.com/recaptcha/api.js"></script>

Add a callback function to handle the token.

 <script>
   function onSubmit(token) {
     document.getElementById("demo-form").submit();
   }
 </script>

Add attributes to your html button.

<button class="g-recaptcha" 
        data-sitekey="reCAPTCHA_site_key" 
        data-callback='onSubmit' 
        data-action='submit'>Submit</button>

Programmatically invoke the challenge

If you wish to have more control over when reCAPTCHA runs, you can use the execute method in grecaptcha object. To do this, you need to add a render parameter to the reCAPTCHA script load.

    Load the JavaScript API with your sitekey.

    <script src="https://www.google.com/recaptcha/api.js?render=reCAPTCHA_site_key"></script>

Call grecaptcha.execute on each action you wish to protect.

   <script>
      function onClick(e) {
        e.preventDefault();
        grecaptcha.ready(function() {
          grecaptcha.execute('reCAPTCHA_site_key', {action: 'submit'}).then(function(token) {
              // Add your logic to submit to your backend server here.
          });
        });
      }
  </script>

Send the token immediately to your backend with the request to verify. -->



<?php include("inc/footer.php"); ?>