<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cabella</title>

    <link href='https://api.mapbox.com/mapbox-gl-js/v2.3.1/mapbox-gl.css' rel='stylesheet' />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=EB+Garamond&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Yantramanav:wght@300&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Balsamiq+Sans&family=Spartan:wght@100&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="/css/index.css">
</head>
<body>

<!-- header section starts  -->
<header>
    <a href="#" class="logo"><i class="fas fa-shopping-bag" id="icon"></i>cabella</a>
    <div id="menu-bar" class="fas fa-bars"></div>
    <nav class="navbar">
        <a href="#home">Home</a>
        <a href="{{ route('shop') }}">Shop</a>
        <a href="{{ route('order') }}" target="_blank">Order</a>
        <a href="{{ route('contact') }}" target="_blank">Contact Us</a>
    </nav>
</header>
<!-- header section ends -->

<!-- home section starts  -->
<section class="home" id="home">
    <div class="content">
        <h3>wear it confidently</h3>
        <a href="{{ route('shop') }}" class="btn" id="orderbtn">shop now</a>
    </div>
    <div class="image">
        <img src="/documents/images/cabella2transparent (1).png" alt="">
    </div>
</section>
<!-- home section ends -->

<!-- quickshow section starts  -->
<section class="gallery" id="firstRow">
    <h3 class="heading">Bucket Hats</h3>
    <div class="box-container">
        <div class="box">
            <img src="/documents/images/ann2.jpg" alt="">
        </div>
        <div class="box">
            <img src="/documents/images/Palsey Bucket Hat -170.jpg" alt="">
        </div>
        <div class="box">
            <img src="/documents/images/goods10.jpg" alt="">
        </div>
    </div>
</section>
<section class="gallery" id="secondRow">
    <h3 class="heading">Face Mask</h3>
    <div class="box-container">
        <div class="box">
            <img src="/documents/images/mask1.jpg" alt="">
        </div>
        <div class="box">
            <img src="/documents/images/mask2.jpg" alt="">
        </div>
        <div class="box">
            <img src="/documents/images/mask3.jpg" alt="">
        </div>
    </div>
</section>
<section class="gallery" id="thirdRow">
    <h3 class="heading">Bags</h3>
    <div class="box-container">
        <div class="box">
            <img src="/documents/images/Leather Bag Blue-119.jpg" alt="">
        </div>
        <div class="box">
            <img src="/documents/images/goods8.jpg" alt="">
        </div>
        <div class="box">
            <img src="/documents/images/Cow Print BAg-250.jpg" alt="">
        </div>
    </div>
</section>
<!-- quickShow section ends -->

<!-- review section starts  -->
<section class="review" id="review">
    <h1 class="heading"> our customers <span>reviews</span> </h1>
    <div class="box-container">
        <div class="box">
            <img src="/documents/images/review1.jpg" alt="">
            <h3>Fuyumi Engay</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
            </div>
            <p>Nice quality and so comfy.</p>
        </div>
        <div class="box">
            <img src="/documents/images/review2.jpg" alt="">
            <h3>Reggie Boy</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
            </div>
            <p>Affordable and worth it.</p>
        </div>
        <div class="box">
            <img src="/documents/images/pic3.png" alt="">
            <h3>arthur lapido</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <p>I wore it multiple times.</p>
        </div>
    </div>
</section>
<!-- review section ends -->

<!-- about us section starts -->
<section class="aboutUs">
    <h1 class="heading"> About <span>Us</span> </h1>
    <div class="box-container">
        <div class="box">
            <img src="/documents/images/owner.jpg" alt="">
            <p><span id="brand">CABELLA</span> is owned by <span> Ms. Cherryl Anne M. Abella</span> Founded at 2020, Ms. Abella started the business at the age of 18 years old. Cabella is a shop that sells apparel and clothing, ensuring the customer's satisfaction and guaranteeing that the customer would be able to wear it confidently. Since 2020, Cabella has succeeded in providing their customers products that make its consumer confident and proud. Whatever the circumstances may be; Cabella promises to continue thriving.</p>
        </div>        
    </div>
</section>
<!-- about us section ends -->

<!-- Contact us starts -->
<section class="contacts">
    <div class="container" id="contacts">
        <div class="content">
            <!-- <form action="#">
                <h1 class="heading"> Contact <span>Us</span> </h1>
                <div class="input-box">
                    <input type="text" required placeholder="Enter Your Name">
                </div>
                <div class="input-box">
                    <input type="text" required placeholder="Enter Your Email">
                </div>
                <div class="message-box">
                    <textarea placeholder="Message"></textarea>
                </div>
                <div class="input-box" id="submit">
                    <input type="submit" value="Send">
                </div>     
            </form> -->
            <div class="map" id="rowmap">
                <div class="col-md">
                <div id="map">
                </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- contacts section ends -->

<!-- footer section starts  -->
<section class="footer">
    <h1 class="credit"><span>Cabella</span> | all rights reserved 2021</h1>
    <h2 class="moreInfo">Catalunan Grande, Davao City | 09123456789</h2>
    <div class="share">
        <a href="https://web.facebook.com/cabella.ph" target="_blank" class="btn">facebook</a>
        <a href="https://www.instagram.com/cabella.ph/" target="_blank" class="btn">instagram</a>
        <a href="#" class="btn">Gmail</a>
    </div>
</section>
<!-- footer section ends -->


<!-- scroll top button  -->
<a href="#home" class="fas fa-angle-up" id="scroll-top"></a>

<!-- loader  -->
<div class="loader-container">
    <img src="/documents/images/loader1.gif" alt="">
</div>

<!-- custom js file link  -->
<script src="/js/index.js"></script>
    
<script src='https://api.mapbox.com/mapbox-gl-js/v2.3.1/mapbox-gl.js'></script>

<script>
    mapboxgl.accessToken = 'pk.eyJ1IjoianVsaWV6YXJhcGVyIiwiYSI6ImNrdTNpc3oxODEwamcybm5paHdyYjV5Y2cifQ.hO3QeFKSkRP6HT5OQ3EjSg';
    var map = new mapboxgl.Map({
    container: 'map',
    style: 'mapbox://styles/mapbox/streets-v11',
    center:[125.54272262702847,7.080904947017572],
    zoom: 17.5,
    });
</script>
</body>
</html>

