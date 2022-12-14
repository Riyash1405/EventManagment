<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Complete Responsive Event Organizer Website Design Tutorial</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="style.css">

</head>
<body>
    
<!-- header section starts  -->

<header class="header">
    <a href="#" class="logo"><span>MR</span>evento</a>
    <nav class="navbar">
        <a href="#">Hello, 
            <?php
                $con= new mysqli("localhost","root","","login");
                $q="SELECT * FROM cuser";
                $x=mysqli_query($con,$q);
                $x1=mysqli_fetch_array($x);

                print_r($x1[0]);
            ?>
        </a>
        <a href="#home">home</a>
        <a href="#service">service</a>
        <a href="#about">about</a>
        <a href="#gallery">gallery</a>
        <a href="#price">price</a>
        <a href="#review">review</a>
        <a href="#contact">contact</a>
        <a href="index.html">Log Out</a>
    </nav>

    <div id="menu-bars" class="fas fa-bars"></div>

</header>

<!-- header section ends -->


<!-- home section starts  -->

<section class="home" id="home">

    <div class="content">
        <h3>its time to celebrate! the best <span> event organizers </span></h3>
        <a href="event_register.html" class="btn">Register Your Event Now</a>
    </div>

    <div class="swiper-container home-slider" style="align-content:centre ;">
        <div class="swiper-wrapper">
            <div class="swiper-slide"><img src="images/slide-1.jpg" alt=""></div>
            
            <div class="swiper-slide"><img src="images/slide-3.jpg" alt=""></div>
            <div class="swiper-slide"><img src="images/slide-4.jpg" alt=""></div>
            <div class="swiper-slide"><img src="images/slide-5.jpg" alt=""></div>
            <div class="swiper-slide"><img src="images/slide-6.jpg" alt=""></div>
        </div>
    </div>

</section>

<!-- home section ends -->


<table>
    <tr>
        <td> abc</td>
    </tr>
</table>

<!-- service section starts  -->

<section class="service" id="service">

    <h1 class="heading"> our <span>services</span> </h1>

    <div class="box-container">

        <div class="box">
            <i class="fas fa-map-marker-alt"></i>
            <h3>venue selection</h3>
            <button type="menu" class="btn">Add</button>
        </div>

        <div class="box">
            <i class="fas fa-envelope"></i>
            <h3>invitation card</h3>
            <button type="button" class="btn">Add</button>
        </div>

        <div class="box">
            <i class="fas fa-music"></i>
            <h3>entertainment</h3>
            <button type="button" class="btn">Add</button>
        </div>

        <div class="box">
            <i class="fas fa-utensils"></i>
            <h3>food and drinks</h3>
            <button type="button" class="btn">Add</button>
        </div>

        <div class="box">
            <i class="fas fa-photo-video"></i>
            <h3>photos and videos</h3>
            <button type="button" class="btn">Add</button>
           
        </div>

        <div class="box">
            <i class="fas fa-birthday-cake"></i>
            <h3>custom food</h3>
            <button type="button" class="btn">Add</button>
        </div>

    </div>

</section>

<!-- service section ends -->

<!-- about section starts  -->

<section class="about" id="about">

<h1 class="heading"><span>about</span> us </h1>

<div class="row">

    <div class="image">
        <img src="images/about-img.jpg" alt="">
    </div>

    <div class="content">
        <h3>we will give a very special celebration for you</h3>
        <p>Search the finest professionals and resources in a huge network at our wedding management company. Compare wedding experts for their service quality, pricing, and other specifications. Find experienced professionals who hold qualifications and knowledge to serve your needs.</p>
       
        <a href="#contact" class="btn">contact us</a>
    </div>

</div>

</section>

<!-- about section ends -->

<!-- gallery section starts  -->

<section class="gallery" id="gallery">

    <h1 class="heading">our <span>gallery</span></h1>

    <div class="box-container">

        <div class="box">
            <img src="images/g-1.jpg" alt="">
            <h3 class="title">photos and events</h3>
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
        </div>

       

        <div class="box">
            <img src="images/g-3.jpg" alt="">
            <h3 class="title">photos and events</h3>
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
        </div>

        <div class="box">
            <img src="images/g-4.jpg" alt="">
            <h3 class="title">photos and events</h3>
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
        </div>

        <div class="box">
            <img src="images/g-5.jpg" alt="">
            <h3 class="title">photos and events</h3>
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
        </div>

        <div class="box">
            <img src="images/g-6.jpg" alt="">
            <h3 class="title">photos and events</h3>
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
        </div>

        <div class="box">
            <img src="images/g-7.jpg" alt="">
            <h3 class="title">photos and events</h3>
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
        </div>

        <div class="box">
            <img src="images/g-8.jpg" alt="">
            <h3 class="title">photos and events</h3>
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
        </div>

        <div class="box">
            <img src="images/g-9.jpg" alt="">
            <h3 class="title">photos and events</h3>
            <div class="icons">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-share"></a>
                <a href="#" class="fas fa-eye"></a>
            </div>
        </div>

    </div>

</section>

<!-- gallery section ends -->

<!-- price section starts  -->

<section class="price" id="price">

    <h1 class="heading"> our <span>price</span> </h1>

    <div class="box-container">

        <div class="box">
            <h3 class="title">for birthdays</h3>
            <h3 class="amount">20000 INR</h3>
            <ul>
                <li><i class="fas fa-check"></i>full services</li>
                <li> <i class="fas fa-check"></i> decorations </li>
                <li> <i class="fas fa-check"></i> music and photos </li>
                <li> <i class="fas fa-check"></i> food and drinks </li>
                <li> <i class="fas fa-check"></i> invitation card </li>
            </ul>
            
        </div>

        <div class="box">
            <h3 class="title">for weddings</h3>
            <h3 class="amount">300000 INR</h3>
            <ul>
                <li><i class="fas fa-check"></i>full services</li>
                <li> <i class="fas fa-check"></i> decorations </li>
                <li> <i class="fas fa-check"></i> music and photos </li>
                <li> <i class="fas fa-check"></i> food and drinks </li>
                <li> <i class="fas fa-check"></i> invitation card </li>
            </ul>
            
        </div>

        <div class="box">
            <h3 class="title">for concerts</h3>
            <h3 class="amount">70000 INR</h3>
            <ul>
                <li><i class="fas fa-check"></i>full services</li>
                <li> <i class="fas fa-check"></i> decorations </li>
                <li> <i class="fas fa-check"></i> music and photos </li>
                <li> <i class="fas fa-check"></i> food and drinks </li>
                <li> <i class="fas fa-check"></i> invitation card </li>
            </ul>
        </div>

        <div class="box">
            <h3 class="title">for others</h3>
            <h3 class="amount">50000 INR</h3>
            <ul>
                <li><i class="fas fa-check"></i>full services</li>
                <li> <i class="fas fa-check"></i> decorations </li>
                <li> <i class="fas fa-check"></i> music and photos </li>
                <li> <i class="fas fa-check"></i> food and drinks </li>
                <li> <i class="fas fa-check"></i> invitation card </li>
            </ul>
        </div>

    </div>


</section>

<!-- price section ends -->

<!-- review section starts  -->

<section class="reivew" id="review"> 
    
    <h1 class="heading">client's <span>review</span></h1>

    <div class="review-slider swiper-container">

        <div class="swiper-wrapper">

            <div class="swiper-slide box">
                <i class="fas fa-quote-right"></i>
                <div class="user">
                    <img src="images/pic-1.png" alt="">
                    <div class="user-info">
                        <h3>Mr. Khan</h3>
                        <span>happy clients</span>
                    </div>
                </div>
                <p>Thank you so much for making our wedding day so amazing and the best day of our lives! It really was like a dream come true, and everything was perfect.</p>
            </div>

            <div class="swiper-slide box">
                <i class="fas fa-quote-right"></i>
                <div class="user">
                    <img src="images/pic-2.png" alt="">
                    <div class="user-info">
                        <h3>Mrs. Patel</h3>
                        <span>happy clients</span>
                    </div>
                </div>
                <p>A great experiance with Mr.Evento, thank you so much for making our day memorible thank you so much...</p>
            </div>

            <div class="swiper-slide box">
                <i class="fas fa-quote-right"></i>
                <div class="user">
                    <img src="images/pic-3.png" alt="">
                    <div class="user-info">
                        <h3>john deo</h3>
                        <span>happy clients</span>
                    </div>
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis dolor dicta cum. Eos beatae eligendi, magni numquam nemo sed ut corrupti, ipsam iure nisi unde et assumenda perspiciatis voluptatibus nihil.</p>
            </div>

            <div class="swiper-slide box">
                <i class="fas fa-quote-right"></i>
                <div class="user">
                    <img src="images/pic-4.png" alt="">
                    <div class="user-info">
                        <h3>Mr.Ashvin</h3>
                        <span>happy clients</span>
                    </div>
                </div>
                <p>Thank you so much for all your help and care with our wedding . we had the most amazing day!! It surpassed our expectations in every way and we loved every second of it!</p>
            </div>

        </div>

    </div>

</section>

<!-- review section ends -->

<!-- review section ends -->

<!-- contact section starts  -->

<section class="contact" id="contact">

    <h1 class="heading"> <span>contact</span> us </h1>

    <form action="mailto:patelriyash.20.cs@iite.indusuni.ac.in" method="post">
        <div class="inputBox">
            <input type="text" placeholder="name">
            <input type="email" placeholder="email">
        </div>
        <div class="inputBox">
            <input type="number" placeholder="number">
            <input type="text" placeholder="subject">
        </div>
        <textarea name="" placeholder="your message" id="" cols="30" rows="10"></textarea>
        <input type="submit" value="send message" class="btn">
    </form>

</section>

<!-- contact section ends -->

<!-- footer section starts  -->

<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3>branches</h3>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> Ahmedabad </a>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> Surat </a>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> Unjha </a>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> Dhangdhra </a>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> Valsad</a>
        </div>

        <div class="box">
            <h3>quick links</h3>
            <a href="index.html"> <i class="fas fa-arrow-right"></i> home </a>
            <a href="#service"> <i class="fas fa-arrow-right"></i> service </a>
            <a href="#about"> <i class="fas fa-arrow-right"></i> about </a>
            <a href="#gallery"> <i class="fas fa-arrow-right"></i> gallery </a>
            <a href="#price"> <i class="fas fa-arrow-right"></i> price </a>
            <a href="#review"> <i class="fas fa-arrow-right"></i> review </a>
            <a href="#contact"> <i class="fas fa-arrow-right"></i> contact </a>
            
        
        </div>

        <div class="box">
            <h3>contact info</h3>
            <a href="tel:8160094330"> <i class="fas fa-phone"></i> +91-8160094330 </a>
            <a href="tel:9913548779"> <i class="fas fa-phone"></i> +91-9913548779</a>
            <a href="mailto:patelriyash.20.cs@iite.indusuni.ac.in"> <i class="fas fa-envelope"></i> patelriyash.20.cs@iite.indusuni.ac.in </a>
            <a href="mailto:mokshakothari.20.cs@iite.indusuni.ac.in"> <i class="fas fa-envelope"></i>mokshakothari.20.cs@iite.indusuni.ac.in</a>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> Ahmedabad, india -382480 </a>
        </div>

        <div class="box">
            <h3>follow us</h3>
            <a href="https://www.facebook.com/riyash.patel.39"> <i class="fab fa-facebook-f"></i> facebook </a>
            <a href="https://twitter.com/RPatel1405?t=lT6wZTN9smqbpEZQhtrwxQ&s=09"> <i class="fab fa-twitter"></i> twitter </a>
            <a href="https://www.instagram.com/invites/contact/?i=zmnpz6vm3nmv&utm_content=3jtpi3q"> <i class="fab fa-instagram"></i> instagram </a>
            <a href="https://www.linkedin.com/in/riyash-patel-03730b201"> <i class="fab fa-linkedin"></i> linkedin </a>
        </div>

    </div>

    <div class="credit"> created by <span>Moksha Kothari & Riyash Patel</span> | &copy all rights reserved </div>

</section>

<!-- footer section ends -->

<!-- theme toggler  -->

<div class="theme-toggler">

    <div class="toggle-btn">
        <i class="fas fa-cog"></i>
    </div>

    <h3>choose color</h3>

    <div class="buttons">
        <div class="theme-btn" style="background: #3867d6;"></div>
        <div class="theme-btn" style="background: #f7b731;"></div>
        <div class="theme-btn" style="background: #ff0033;"></div>
        <div class="theme-btn" style="background: #20bf6b;"></div>
        <div class="theme-btn" style="background: #fa8231;"></div>
        <div class="theme-btn" style="background: #FC427B;"></div>
    </div>

</div>




<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>
