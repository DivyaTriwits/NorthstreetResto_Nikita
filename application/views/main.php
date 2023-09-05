<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="./media.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
      @import url('https://fonts.googleapis.com/css2?family=Roboto&display=swap');

* {
    font-family: 'Roboto', sans-serif;
    box-sizing: border-box;
}

body {
    margin: 0;
    padding:0;
}

/* common classes */
.container {
    max-width: 1200px;
    width: 90%;
    margin: auto;
}

.btn {
    display: inline-block;
    padding: 0.5rem 1.5rem;
    text-decoration: none;
    font-weight: small;
    outline: none;
    margin-top: 1rem;
    text-transform: uppercase;
    border-radius: 50px;
}

.btn-primary{
    background-color: #16a083;
    color:#fff;
}

.btn-primary:hover{
    background-color: #119764;
    transition: all 0.3s ease-in-out;
}

/* navbar style */
.navbar input[type="checkbox"],
.navbar .hamburger-lines {
    display: none;
}

.navbar {
    position:fixed;
    width: 100%;
    background: #fff;
    color: #000;
    height: 50px;
    z-index: 12;
    opacity: 0.85;
    box-shadow: 0px 5px 10px 0px #aaa;
}

.navbar-container {
    display:flex;
    justify-content: space-between;
    height: 64px;
    align-items: center;
}

.menu-items {
    order: 2;
    display: flex;
}

.menu-items li {
    list-style: none;
    margin-left: 1.5rem;
    margin-bottom: 0.5rem;
    font-size: 1.2rem;
}

.menu-items a {
    text-decoration: none;
    color:#444;
    font-weight: 500;
    transition: color 0.3s ease-in-out;
}

.menu-items a:hover {
    color: #117964;
    transition: color 0.3s ease-in-out;
}

.logo {
    order: 1;
    font-size: 2.3rem;
    /* margin-bottom: 0.5rem; */
}
/* end of navbar */
/* showcase style */
.showcase-area {
    height: 50vh;
    background:linear-gradient(rgba(240,240,240,0.1444),rgba(255,255,255,0.336)),url('https://i.postimg.cc/wT3TQS3V/header-image2.jpg');
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
}

.showcase-container {
    display:flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    height: 100%;
    font-size: 1.6rem;
}

.main-title {
    text-transform: uppercase;
    margin-top: 1.5rem;
}

/* about section */

#about {
    background: #f5f5f5;
    padding: 50px 0;
}

.about-wrapper {
    display: flex;
    flex-wrap: wrap;
}

#about h2 {
    font-size: 2.3rem;
}

#about p {
    font-size: 1.2rem;
    color: #555;
}

#about .small {
    font-size: 1.2rem;
    color: #666;
    font-weight: 600;
}

.about-img {
    flex: 1 1 400px;
    padding: 30px;
    transform: translateX(150%);
    animation: about-img-animation 1s ease-in-out forwards ;
}

@keyframes about-img-animation {
    100% {
        transform: translate(0);
    }
}

.about-text {
    flex: 1 1 400px;
    padding: 30px;
    margin:auto;
    transform: translate(-150px);
    animation: about-text-animation 1s ease-in-out forwards;
}

@keyframes about-text-animation {
    100% {
        transform: translate(0);
    }
}

.about-img img {
    display: block;
    height: 400px;
    max-width: 100%;
    margin: auto;
    object-fit: cover;
    object-position: right;
}

/* food category */

#food {
    padding: 5rem 0 10rem 0;
}

#food h2 {
    text-align: center;
    font-size: 2.5rem;
    font-weight: 400;
    margin-bottom: 40px;
    color: #117964;
    text-transform: uppercase;
}

.food-container {
    display:flex;
    justify-content: space-between;
}

.food-container img {
    display: block;
    width: 100%;
    margin: auto;
    max-height: 300px;
    object-fit: cover;
    object-position: center;
}

.img-container {
    margin: 0 1rem;
    position: relative;
}

.img-content {
    position: absolute;
    top: 70%;
    left: 50%;
    transform: translate(-50%,-50%);
    opacity: 0;
    z-index: 2;
    text-align: center;
    transition: all 0.4s ease-in-out 0.1s;
}

.img-content h3  {
    color: #fff;
    font-size: 2.2rem;
}

.img-content a {
    font-size: 1.2rem;
}

.img-container::after {
    content: "";
    display: block;
    position: absolute;
    top:  0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.7);
    opacity: 0;
    z-index: 1;
    transform: scaleY(0);
    transform-origin: 100% 100%;
    transition: all 0.3s ease-in-out;
}

.img-container:hover::after {
    transform: scaleY(1);
    opacity: 1;
}

.img-container:hover .img-content {
    opacity: 1;
    top: 40%;
}
/* end  */

/* food menu */
    #food-menu {
        padding: 5rem 0;
        background: #f5f5f5;
    }

    .food-menu-heading {
        text-align: center;
        font-size: 3.4rem;
        font-weight: 500;
        color: #117964;
    }

    .food-menu-container {
        display: flex;
        flex-wrap: wrap;
        padding: 50px 0px 30px 0px;
    }

    .food-menu-container img {
        display: block;
        width: 250px;
        height: 250px;
        border-radius: 50%;
        object-fit: cover;
        object-position: center;
    }

    .food-menu-item {
        display: flex;
        flex: 1 1 600px;
        justify-content: space-evenly;
        margin-bottom: 3rem;
    }

    .food-description {
        margin: auto 1.5rem;
    }

    .food-title {
        font-size: 1.8rem;
        color: #117964;
        font-weight: 500;
        text-transform: uppercase;
    }

    .food-description p {
        font-size: 1.4rem;
        color:#555;
        font-weight: 600;
    }
    .food-description .food-price {
        color:#119764;
        font-weight: 700;
    }
/* food menu ends*/

/* testimonial */
    #testimonials {
        padding: 5rem 0;
    }

    .testimonial-title {
        text-align: center;
        font-size: 2.8rem;
        font-weight: 400;
        color: #117964;
    }

    .testimonial-container {
        display: flex;
        justify-content: space-between;
        font-size: 1.4rem;
        padding: 1rem;
    }

    .customer-photo img {
        display: block;
        width: 150px;
        height: 150px;
        border-radius: 50%;
        object-fit: cover;
        object-position: center;
        margin: auto;
        border-right: 5px solid #119764;
    }

    .testimonial-box .checked {
        color: #119764;
    }

    .testimonial-box .testimonial-text {
        margin: 1rem 0;
        color: #444;
    }

    .testimonial-box {
        text-align: center;
        padding: 1rem;
    }
/* testimonial end */

/* contact form */
#contact {
    background-color: #f5f5f5;
    padding: 5rem 0;
}

.contact-container {
    display:flex;
}

.contact-img {
    width: 50%;
}

.contact-img img {
    display: block;
    width: 100%;
    height: 400px;
    object-fit: cover;
    object-position: center;
}

.form-container {
    padding: 1rem;
    width: 50%;
    margin: auto;
}

.form-container input[type="text"],
.form-container input[type="email"],
.form-container textarea {
    display: block;
    width: 100%;
    border:none;
    outline:none;
    border-bottom: 2px solid #ddd;
    padding: 1rem 0;
    font-size: 1.2rem;
    margin-top: 1rem;
    color:#117964;
    font-weight: 600;
}


.form-container h2 {
    font-size: 2.5rem;
    font-weight: 600;
    color: #117964;
    margin-bottom: 1rem;
    text-align: center;
    margin-top: -1.2rem;
}
/* contact form ends */

#footer{
    text-align: center;
    background: #555;
    color: #fff;
    padding: 2.6rem;
    font-weight: 600;
    font-size: 1.6rem;
}

/* media query css */
@media (max-width: 768px){
    .navbar {
        opacity: 0.95;
    }

    .navbar-container input[type="checkbox"],
    .navbar-container .hamburger-lines {
        display: block;
    }

    .navbar-container {
        display: block;
        position: relative;
        height: 64px;
    }

    .navbar-container input[type="checkbox"] {
        display: block;
        position: absolute;
        height: 32px;
        width: 30px;
        top: 20px;
        left: 20px;
        z-index: 5;
        opacity: 0;
    }

    .navbar-container .hamburger-lines {
        position: absolute;
        top: 17px;
        left: 20px;
        height: 23px;
        width: 35px;
        z-index: 2;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }

    .hamburger-lines .line {
        background: #222;
        display: block;
        height: 4px;
        width: 100%;
        border-radius: 10px;
    }

    .hamburger-lines .line1{
        transform-origin: 0% 0%;
        transition: transform 0.5s ease-in-out;
    }
    .hamburger-lines .line2{
        transition: transform 0.2s ease-in-out;
    }
    .hamburger-lines .line3{
        transform-origin: 0% 100%;
        transition: transform 0.5s ease-in-out;
    }

    .navbar .menu-items {
        padding-top: 100px;
        background: #ddd;
        height: 100vh;
        max-width: 300px;
        display:flex;
        flex-direction: column;
        margin-left: -40px;
        padding-left: 50px;
        transform: translate(-150%);
        box-shadow: 5px 0px 10px #aaa;
        transition: transform 0.5s ease-in-out;
    }

    .menu-items li {
        margin-bottom: 1.5rem;
        font-size: 1.3rem;
        font-weight: 500;
    }

    .logo {
        position: absolute;
        top: 5px;
        right: 15px;
        font-size: 2rem;
    }

    .navbar-container input[type="checkbox"]:checked ~ .menu-items {
        transform: translate(0);
    }

    .navbar-container input[type="checkbox"]:checked ~ .hamburger-lines .line1 {
        transform: rotate(35deg);
    }
    .navbar-container input[type="checkbox"]:checked ~ .hamburger-lines .line2 {
        transform: scaleY(0);
    }
    .navbar-container input[type="checkbox"]:checked ~ .hamburger-lines .line3 {
        transform: rotate(-35deg);
    }

    /* food container */
    .food-container {
        flex-direction: column;
        align-items: stretch;
    }

    .food-type:not(:last-child) {
        margin-bottom: 3rem;
    }

    .food-type {
        box-shadow: 5px 5px 10px 0px #aaa;
    }

    .img-container {
        margin: 0;
    }
}

/* 769-1200px */

@media (min-width:769px) and (max-width: 1200px) {
    .img-container h3 {
        font-size: 1.5rem;
    }

    .img-container .btn {
        font-size: 0.7rem;
    }
}

/* orientation */
@media (orientation: landscape) and (max-height:500px) {
    .showcase-area {
        height: 50vmax;
    }
}

/* below 500px */
    </style>
</head>
<body>
    <!-- navigation menu -->
    <nav class="navbar">
        <div class="container navbar-container">
            <input type="checkbox" name="" id="">

            <div class="hamburger-lines">
                <span class="line line1"></span>
                <span class="line line2"></span>
                <span class="line line3"></span>
            </div>

            <ul class="menu-items">
                <li><a href="#home">Home</a></li>
                
                <li><a href="#about">About</a></li>
                <li><a href="#food">Category</a></li>
                <li><a href="#food-menu">Menu</a></li>
                <li><a href="#testimonials">Testimonials</a></li>
                <li><a href="#contact">Contact</a></li>
                <li><a href="<?php echo base_url('index.php/Welcome/loginview');?>">Login</a></li>
                <li><a href="<?php echo base_url('index.php/Welcome/registration_viewview');?>">Register</a></li>
                <li><a href="<?php echo base_url('index.php/Welcome/adminloginview');?>">Adminlogin</a></li>
                
                

            </ul>

            <h1 class="logo">Northstreet</h1>
        </div>
    </nav>
    <!-- end of menu -->

    <!-- home section -->
        <section id="showcase" class="showcase-area">
            <div class="showcase-container">
                <h1 class="main-title" id="home">Welcome to Northstreet restaurant<span class="sub"></span> </h1>
                <p>Eat Healthy, It is good for our health.</p>
                <a href="#food-menu" class="btn btn-primary">Menu</a>
            </div>
        </section>
    <!-- home section ends -->

    <!-- about section -->
        <section id="about">
            <div class="about-wrapper container">
                <div class="about-text">
                    <p class="small">About Us</p>
                    <h2>We've been making healthy food last for 10 years.</h2>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cumque esse dolorem velit quas porro. Quod, deleniti, blanditiis aut cupiditate esse earum molestias repellendus aperiam, a excepturi incidunt numquam maxime natus!</p>
                </div>
                <div class="about-img">
                    <img src="https://i.postimg.cc/mgpwzmx9/about-photo.jpg" alt="food">
                </div>
            </div>
        </section>
    <!-- about section ends -->

    <!-- food section -->
        <section id="food">
            <h2>Types of Food</h2>
            <div class="food-container container">
                <div class="food-type fruit">
                    <div class="img-container">
                        <img src="https://i.postimg.cc/yxThVPXk/food1.jpg" alt="fruit">
                        <div class="img-content">
                            <h3>Fruit</h3>
                            <a href="#" class="btn btn-primary">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="food-type veg">
                    <div class="img-container">
                        <img src="https://i.postimg.cc/Nffm6Rkk/food2.jpg" alt="veg">
                        <div class="img-content">
                            <h3>Veg</h3>
                            <a href="#" class="btn btn-primary">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="food-type grain">
                    <div class="img-container">
                        <img src="https://i.postimg.cc/76ZwsPsd/food3.jpg" alt="grain">
                        <div class="img-content">
                            <h3>Grains</h3>
                            <a href="#" class="btn btn-primary">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <!-- food section ends-->

    <!-- food menu -->
        <section id="food-menu">
            <h2 class="food-menu-heading">Food Menu</h2>
            <div class="food-menu-container container">
                <?php  
                    foreach ($result as $row)  
                    {  
                    ?>
                <div class="food-menu-item">
                    <div class="food-img">
                        <img src=" <?php echo base_url('uploads/images/'.$row->picture);?>" alt="menu-1">
                    </div>
                    <div class="food-description">
                        <h2 class="food-title"><?php echo $row->item;?></h2>
                        <p><?php echo $row->name;?></p>
                        <p class="food-price"> Price: <?php echo $row->price;?></p>
                        
                    </div>
                    
                        
                        
 
                       
                     </div>
                     <?php }  
                 ?>
                </div>






                
                
                
                
                
            </div>
        </section>
    <!-- food menu ends -->

    <!-- testimonials -->
        <section id="testimonials">
            <h2 class="testimonial-title">What Our Customer Say?</h2>
            <div class="testimonial-container container">
                <div class="testimonial-box">
                    <div class="customer-detail">
                        <div class="customer-photo">
                            <img src="https://i.postimg.cc/5Nrw360Y/male-photo1.jpg" alt="first">
                            <p class="customer-name">Ross Lee</p>
                        </div>
                    </div>
                    <div class="star-rating">
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                    </div>
                    <p class="testimonial-text">Very Good Test.</p>
                </div>
                <div class="testimonial-box">
                    <div class="customer-detail">
                        <div class="customer-photo">
                            <img src="https://i.postimg.cc/sxd2xCD2/female-photo1.jpg" alt="second">
                            <p class="customer-name">Sara Gupta</p>
                        </div>
                    </div>
                    <div class="star-rating">
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star-half-alt checked"></span>
                    </div>
                    <p class="testimonial-text">Maintance is very nice.</p>
                </div>
                <div class="testimonial-box">
                    <div class="customer-detail">
                        <div class="customer-photo">
                            <img src="https://i.postimg.cc/fy90qvkV/male-photo3.jpg" alt="third">
                            <p class="customer-name">John See</p>
                        </div>
                    </div>
                    <div class="star-rating">
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="far fa-star checked"></span>
                        <span class="far fa-star checked"></span>
                    </div>
                    <p class="testimonial-text">Good Test Good Quality.</p>
                </div>
            </div>
        </section>
    <!-- testimonials ends -->

    <!-- contact section -->
        <section id="contact">
            <div class="contact-container container">
                <div class="contact-img">
                    <img src="https://i.postimg.cc/1XvYM67V/restraunt2.jpg" alt="contact img">
                </div>
                <form action="<?php echo base_url('index.php/Welcome/store');?>" method="post" class="form-container">
                    <h2>Contact Us</h2>
                    <input type="text" name="name" id="name" placeholder="Your Name" required>
                    <input type="email" name="email" id="email" placeholder="your mail-id" required>
                    <textarea name="msg" id="msg" cols="30" rows="5" placeholder="Type your message" required></textarea>
                    
                    <button type="submit" class="btn btn-outline-primary">Submit</button>
                </form>
            </div>
        </section>
    <!-- contact section ends -->

    <!-- login page -->



    <footer id="footer">
        <h2>Northstreet &copy; 2023, All Rights Reserved. </h2>
    </footer>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script>
                $(document).ready(function () {
            $("a").on("click", function (event) {
                if(this.hash !== "") {
                    event.preventDefault();
                    var hash = this.hash;
                    $("html,body").animate({ scrollTop: $(hash).offset().top }, 800, function(){
                            window.location.hash = hash;
                    });
                }
            });
        });

    </script>
</body>
</html>