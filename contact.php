<?php
$pageTitle = "Contact Us";

include("inc/header.php"); ?>

<h1>Contact Us</h1>
      <a class="temp" type="button" href="index.php"> Temp home button</a>
      <p>If you have any questions please get in contact with us using the form below and we will respond as soon as possible.</p>
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
      </div>
      <div id="mapid">

      </div>

<?php include("inc/footer.php"); ?>