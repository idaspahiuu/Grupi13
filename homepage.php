
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>DetyraInternet</title>
	<link rel="stylesheet" type="text/css" href="main.css">
</head>
<div id="main">
<body>
<nav id="main">
  	<img class="logo"src="img/ida1.png">
	<ul class="nav-links">
		<li class="active">
			<a  href="homepage.html">Home</a>
		</li>
		<li>
			<a href="store.html">Store</a>
		</li>
		<li>
			<a href="links.html">Video</a>
		</li>
	</ul> 
  <a href="logout.php" style="text-decoration: none; border: solid 1px plum; color:plum; background-color: white; border-radius: 8px; padding: 5px;">Logout</a> 
</nav>
<p>
  "Children are great imitators, so give them something great to imitate."
</p>
<br>
<div class="slideshow-container">
<div class="mySlides fade">
  <div class="numbertext">1 / 4</div>
  <img src="img/ida1.jpg">
  <div class="text" >Learn the alphabet with us!</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 4</div>
  <img src="img/ida2.jpg">
  <div  class="text">Animals, fruit, vegetables...</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 4</div>
  <img src="img/ida3.jpg">
  <div  class="text">Objects...</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">4 / 4</div>
  <img src="img/ida4.jpg">
  <div  class="text">Words...</div>
</div>

<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>


<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
  <span class="dot" onclick="currentSlide(4)"></span> 
</div>

<table style="display: inline-block; float left; width:25%;">
  <tr>
    <th>About abcLearning</th>
    <tr >
      <td ><iframe class="photo" src="https://www.youtube.com/embed/DCWv-Zu-M7w" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        <br>
        AbcLearning is a global education initiative of Age of Learning
        Inc. <br>Our goal is to help children build a strong
         foundation for future academic success by providing 
         a comprehensive and engaging online curriculum 
         to greatly assist early learners to succeed in pre-k, kindergarten, and early
          elementary school program ...
  <br>
<br><a style="text-decoration: none; color:purple;background-color:#FFB6C1;border: 1px groove transparent; border-radius: 5px;" href="aboutus.html"> Read more about us</a></td>
    </tr>

</table>

<table style="display: inline-block; width:40%;">
  <tr>
    <th>Why is our page helpful</th>
    <tr >
      <td ><img class="photo1" src="img/ida6.jpg">
      Children can learn here the basic things like the alphabet.</td>
    </tr> <tr >
      <td ><img class="photo1" src="img/ida8.jpg">
      They can also learn about animals!</td>
    </tr>
     <tr >
      <td ><img class="photo1" src="img/ida9.jpg">
      Fruit and vegetable are an important part of our life!</td>
    </tr>
     <tr >
      <td ><img class="photo1" src="img/ida10.jpg">
      Learn the objects with us! 
    <a style="text-decoration: none; color:purple;background-color:#FFB6C1;border: 1px groove transparent; border-radius: 5px;" href="services.html"> View all of our services</a></td>
    </tr>

</table>
<table style="display: inline-block; float right; column-span: 3;">
  <tr>
    <th>Reviews</th>
   <tr >
      <td ><img class="photo2" src="img/anna.jpg"><strong> Anna</strong><br>
      This page is very helpful for my kids,I love it <3333</td>
    </tr> <tr >
      <td ><img class="photo2" src="img/ida12.jpg"><strong> John</strong><br>
      You guys are doing a great job! </td>
    </tr>
    <tr>
  <td><img class="photo2" src="img/sam.jpg"><strong> Sam</strong><br>
     I think you can do better...
      <a style="text-decoration: none; color:purple;background-color:#FFB6C1;border: 1px groove transparent; border-radius: 5px;" href="review.html"> View all reviews</a></td></tr>
</table>

<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>


</body>
</div>
<footer>

  <table style="display: inline-block; width:25%; margin-bottom: 60px;">
  <tr>
    <th class="p1">Details</th>
    <tr >
      <td class="p2"> 
            Contact Master<br>
            Tel: +38349551044<br>
            Email:<a style="color:  #6A5ACD; font-weight: bold" href="abcLearning@gmail.com"> abcLearning@gmail.com</a> </td>
    </tr> 
    <tr >
      <td class="p2"> Hours of service<br>
            Monday-Friday:8am-6pm<br>
            Saturday:10am-4pm</td>
    </tr>
    <tr><td></br>
    	</br>
    	</br>
    </br>
<br>
</td></tr>
</table>




<table style="display: inline-block; width:25%; margin-bottom: 20px;">
  <tr>
    <th class="p1">You can also find us on</th>
    <tr >
      <td class="p2"><a style="color:  #C0C0C0; text-decoration: none; font-weight: bold;" href="https://www.facebook.com/kidsacademyks/"><img class="photo3" src="img/ida13.png" alt="Facebook"> Facebook</a>
      </td>
    </tr>
     <tr >
      <td class="p2">
      <a style="color:  #C0C0C0; text-decoration: none; font-weight: bold;" href="https://instagram.com/twolittleducklings?igshid=8nwi38b8b0ld"><img class="photo3" src="img/ida14.jpg"> Instagram</a></td>
    </tr>
     <tr >
      <td class="p2"><a style="color:  #C0C0C0; text-decoration: none; font-weight: bold;" href="https://twitter.com/kidsforpeace?lang=en"><img class="photo3" src="img/ida15.jpg">
       Twitter</a></td>
    </tr>
     <tr >
      <td class="p2" ><a style="color:  #C0C0C0; text-decoration: none; font-weight: bold;"  href="https://www.tumblr.com/tagged/coloring-pages-for-kids"><img class="photo3" src="img/ida16.png">
       Tumblr</a></td>
    </tr>
    <tr><td></br>
    	</br>
    	</br>
    </br>
<br>
</td></tr>
    </table>



    <table style="display: inline-block; width: 30%; margin-bottom: auto;" >
      <tr>
        <th class="p1">More</th>

        <td class="p2">
         If you have any critics,
         suggestion or recommendation
         let us know by emailing us, 
         or contacting us in other 
         social media. We always welcome
         creative ideas. 
         Also if you are interested on 
         working with us, let us know by
         sending your CV<span id="dots">...</span><span id="more">, and explain
         why would you like to do this job.
         Remember that being creative 
         is very important.
         We have over 50 employees but 
         we're always searching for 
         new creative minds. You can be one of them.
     </br>
     </br>
     </br>
     </br>
     </br>
     </br>
 </br>






       </span>
       <button onclick="myFunction()" id="myBtn">Read more>></button>
        </td>
      </tr>
      
    </table>
<table style="display: inline-block;">
  <tr>
    <td><div class="p1">About You</div>
      <form action="demo_form.asp">
        <br>
        Name: <br>
        <input style="width:170px; background-color: pink;" type="text" name="fname" placeholder="First name" required><br>
        Last Name: <br>
        <input style="width:170px; background-color: pink;" type="text" name="lname" placeholder="Last name" required><br>
        Write something about yourself:<br>
         <input style="width:170px; height: 100px; background-color: pink;" type="text" name="about" placeholder="Write here" required><br>
         <input style="width: 100px; float: right;" type="submit" value="Submit">


      
        <br>
        
      </form>
    </td>
  </tr>
  
</table>  

<script type="text/javascript">
var currentTime = new Date().getHours();
if (7 <= currentTime && currentTime < 20) {
    if (document.body) {
        document.body.style.backgroundImage = "url('morningg.jpg')";
        
    }
}
else {
    if (document.body) {
        document.body.style.backgroundImage = "url('night.jpg')";
    }
}

</script>

<script>
function myFunction() {
  var dots = document.getElementById("dots");
  var moreText = document.getElementById("more");
  var btnText = document.getElementById("myBtn");

  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "Read more>>"; 
    moreText.style.display = "none";
  } else {
    dots.style.display = "none";
    btnText.innerHTML = "<<Read less"; 
    moreText.style.display = "inline";
  }
}
</script>

</footer>
</html>