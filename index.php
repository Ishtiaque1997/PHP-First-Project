<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>First PHP Website</title>

 <!-- custom css file -->
 <link rel="stylesheet" href="./css/style.css">
 </head>
 <body>

 <!-- main section starts here -->
 <section class='main'>
 <nav>
  <a href="#"class='logo'>
   <img src="./logo1.png" alt="">
  </a>
  <ul class='menu'>
   <li><a href="#"class='active'>Home</a></li>
   <li><a href="#">Features</a></li>
   <li><a href="#">About</a></li>
   <li><a href="#">Contact</a></li>
  </ul>
  </nav>
  
  <div class="main-heading">
   <h1>Create perspectives with virtual reality</h1>
   <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea dolore placeat ratione fugit        officiis, facere aliquid </p>
   <a class='main-btn' href="#">Contact</a>
  </div>
</section>

<!-- second section starts here -->
 <section class='features'>
  <div class='feature-container'>
   <div class='feature-box'>
    <div class='f-img'> 
       <img src="./info-icon1.png" alt="">
     </div>
     <div class='f-text'>
      <h4>Web development</h4>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis </p>
      <a href="#"class='main-btn'>Check</a>
     </div>
    </div>
    <div class='feature-box'>
     <div class='f-img'> 
        <img src="./info-icon2.png" alt="">
     </div>
     <div class='f-text'>
      <h4>Software development</h4>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis </p>
      <a href="#"class='main-btn'>Check</a>
      </div>
    </div>
    <div class='feature-box'>
      <div class='f-img'> 
         <img src="./info-icon3.png" alt="">
      </div>
      <div class='f-text'>
      <h4>App development</h4>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis </p>
      <a href="#"class='main-btn'>Check</a>
      </div>
    </div>
   </div>
 </section>

 <!-- about section starts here -->
 <section class='about'>
 <div class='about-img'>
   <img src="./about.png" alt="">
 </div>
 <div class='about-text'>
   <h2>Start tracking your stats</h2>
   <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod labore explicabo soluta amet? Eligendi maxime .</p>
   <button  class='main-btn'>Read more</button>
 </div>
 </section>

 <!-- contact section starts here -->
 <section class='contact'>
  <div class='contact-heading'>
    <h1>Contact Us</h1>
    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
  </div>
  <form action="userInformation.php"method="post">
   <input type="text"name="user" placeholder="Your full name"/>
    <input type="email"name="email" placeholder="Your email"/>
    <textarea name="message" placeholder="Your message"></textarea>
    <button class='main-btn contact-btn'type="submit">Continue</button>
  </form>
 </section>
</body>
</html>