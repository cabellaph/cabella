<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cabella - Shop Now</title>

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Balsamiq+Sans&family=Spartan:wght@100&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="css/shop.css">

</head>
<body>


<!-- header section starts  -->
<header>
    <a href="#" class="logo"><i class="fas fa-shopping-bag" id="icon"></i>cabella</a>
    <div id="menu-bar" class="fas fa-bars"></div>
    <nav class="navbar">
        <a href="{{ route('home') }}">Home</a>
        <a href="#">Shop</a>
        <a href="{{ route('order') }}" target="_blank">Order</a>
        <a href="{{ route('contact')}}" target="_blank">Contact Us</a>
    </nav>
</header>
<!-- header section ends -->



<!-- home section starts  -->
<section class="home" id="home">  
</section>



<!-- home section ends -->

<!-- speciality section starts  -->

<section class="speciality" id="speciality">

    <h1 class="heading"> Special <span>promos</span> </h1>

    <div class="box-container">

        <div class="box">
            <img class="image" src="/documents/images/back.png" alt="">
            <div class="content">
                <img src="/documents/images/final2.png" alt="">
                <h3>New Customer</h3>
                <p>We offer a 2% discount to our new customer for their first purchases. -Capped at ₱20.</p>
                
            </div>
        </div>
        <div class="box">
            <img class="image" src="/documents/images/back.png" alt="">
            <div class="content">
                <img src="/documents/images/final3.png" alt="">
                <h3>Bundle Purchase</h3>
                <p>Buy five or more items in one purchase to receive a 7% discount. -capped at ₱30</p>
                
            </div>
        </div>
        <div class="box">
            <img class="image" src="/documents/images/back.png" alt="">
            <div class="content">
                <img src="/documents/images/final1.png" alt="">
                <h3>Beloved Suki</h3>
                <p>We offer a 10% discount for the 10th repeat purchase at our store. -capped at ₱30  </p>
                
            </div>
        </div>
    
    </div>

</section>

<!-- speciality section ends -->

<!-- steps section starts  -->

<div class="step-container">

    <h1 class="heading">how it <span>works</span></h1>

    <section class="steps">

        <div class="box">
            <img src="/documents/images/step1.png" alt="">
            <h3>choose a product</h3>
        </div>
        <div class="box">
            <img src="/documents/images/step2.png" alt="">
            <h3>affordable and fast delivery</h3>
        </div>
        <div class="box">
            <img src="/documents/images/step3.png" alt="">
            <h3>easy payments methods</h3>
        </div>
        <div class="box">
            <img src="/documents/images/step4.png" alt="">
            <h3>and finally, enjoy your products</h3>
        </div>
    
    </section>

</div>

<!-- steps section ends -->

<!-- gallery section starts  -->

<section class="gallery" id="gallery">

    
    <h1 class="heading"> We offer <span>  the finest </span> goods </h1>

    <div class="box-container">

        <div class="box">
            <img src="/documents/images/goods1.jpg" alt="">
            <div class="content">
                <h3>Tank Tops</h3>
                <div class=bag>
                <i class="fas fa-shopping-bag"></i>
                </div>
            </div>
        </div>
        <div class="box">
            <img src="/documents/images/goods2.jpg" alt="">
            <div class="content">
                <h3>Mask Holders</h3>
                <div class=bag>
                    <i class="fas fa-shopping-bag"></i>
                </div>
            </div>
        </div>
        <div class="box">
            <img src="/documents/images/goods3.jpg" alt="">
            <div class="content">
                <h3>Fashionable Masks</h3>
                <div class=bag>
                    <i class="fas fa-shopping-bag"></i>
                </div>
            </div>
        </div>
        <div class="box">
            <img src="/documents/images/goods4.jpg" alt="">
            <div class="content">
                <h3>Stylish Caps</h3>
                <div class=bag>
                    <i class="fas fa-shopping-bag"></i>
                </div>
            </div>
        </div>
        <div class="box">
            <img src="/documents/images/goods5.jpg" alt="">
            <div class="content">
                <h3>Sunglasses</h3>
                <div class=bag>
                    <i class="fas fa-shopping-bag"></i>
                </div>
            </div>
        </div>
        <div class="box">
            <img src="/documents/images/goods6.jpg" alt="">
            <div class="content">
                <h3>Trendy Shirts</h3>
                <div class=bag>
                    <i class="fas fa-shopping-bag"></i>
                </div>
            </div>
        </div>
        
        <div class="box">
            <img src="/documents/images/goods7.jpg" alt="">
            <div class="content">
                <h3>Neckerchiefs</h3>
                <div class=bag>
                    <i class="fas fa-shopping-bag"></i>
                </div>
            </div>
        </div>
        <div class="box">
            <img src="/documents/images/goods8.jpg" alt="">
            <div class="content">
                <h3>Cool Bags</h3>
                <div class=bag>
                    <i class="fas fa-shopping-bag"></i>
                </div>
            </div>
        </div>
        <div class="box">
            <img src="/documents/images/goods9.jpg" alt="">
            <div class="content">
                <h3>Handkerchiefs</h3>
                <div class=bag>
                    <i class="fas fa-shopping-bag"></i>
                </div>
            </div>
        </div>
        <div class="box">
            <img src="/documents/images/goods10.jpg" alt="">
            <div class="content">
                <h3>Bucket Hats</h3>
                <div class=bag>
                    <i class="fas fa-shopping-bag"></i>
                </div>
            </div>
        </div>

    </div>

</section>

<!-- gallery section ends -->


<!-- popular section starts  -->

<section class="popular" id="popular">

    <h1 class="heading"> Available <span>products</span> 
    <div class="box-container">

        <div class="box">
            <span class="price"> ₱150 </span>
            <img src="/documents/images/Black Crop Top -150.jpg" alt="">
            <h3>Black Crop Top</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <a href="{{ route('order') }}" class="btn" target="_blank">order now</a>
        </div>
        <div class="box">
            <span class="price">₱100 </span>
            <img src="/documents/images/CAmi Crop Top-100.jpg" alt="">
            <h3>Cami Crop Top</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <a href="{{ route('order') }}" class="btn" target="_blank">order now</a>
        </div>
        <div class="box">
            <span class="price"> ₱100 </span>
            <img src="/documents/images/Pink Tank Top-100.jpg" alt="">
            <h3>Pink Tank Top</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <a href="{{ route('order') }}"class="btn" target="_blank">order now</a>
        </div>
        <div class="box">
            <span class="price"> ₱165 </span>
            <img src="/documents/images/Pink Patch Halter Top -165.jpg" alt="">
            <h3>Pink Patch Halter Top</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <a href="{{ route('order') }}" class="btn" target="_blank">order now</a>
        </div>
        
    </div>

    <div class="box-container">

        <div class="box">
            <span class="price"> ₱119 </span>
            <img src="/documents/images/Leather Bag Blue-119.jpg" alt="">
            <h3>Leather Blue Bag</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <a href="{{ route('order') }}" class="btn" target="_blank">order now</a>
        </div>
        <div class="box">
            <span class="price"> ₱250 </span>
            <img src="/documents/images/Cow Print BAg-250.jpg" alt="">
            <h3>Cow Print Bag</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <a href="{{ route('order') }}" class="btn" target="_blank">order now</a>
        </div>
        <div class="box">
            <span class="price"> ₱220 </span>
            <img src="/documents/images/Ruched Bag Pink-220.jpg" alt="">
            <h3>Ruched Pink Bag</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <a href="{{ route('order') }}" class="btn" target="_blank">order now</a>
        </div>
        <div class="box">
            <span class="price"> ₱80 </span>
            <img src="/documents/images/One Sided Crop Top -80.jpg" alt="">
            <h3>One Sided Crop Top</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <a href="{{ route('order') }}" class="btn" target="_blank">order now</a>
        </div>
        
    </div>

    <div class="box-container">

        <div class="box">
            <span class="price"> ₱270 </span>
            <img src="/documents/images/Leather Cap-270.jpg" alt="">
            <h3>Leather Cap</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <a href="{{ route('order') }}" class="btn" target="_blank">order now</a>
        </div>
        <div class="box">
            <span class="price"> ₱250 </span>
            <img src="/documents/images/Smiley drew Cap-250.jpg" alt="">
            <h3>Smiley Drew Cap</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <a href="{{ route('order') }}" class="btn" target="_blank">order now</a>
        </div>
        <div class="box">
            <span class="price"> ₱170 </span>
            <img src="/documents/images/Palsey Bucket Hat -170.jpg" alt="">
            <h3>Palsey Bucket Hat</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <a href="{{ route('order') }}" class="btn" target="_blank">order now</a>
        </div>
        <div class="box">
            <span class="price"> ₱80 </span>
            <img src="/documents/images/Cat Eye Glassess-80.jpg" alt="">
            <h3>Cat Eye Glasses</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <a href="{{ route('order') }}" class="btn" target="_blank">order now</a>
        </div>
        
    </div>

    <div class="box-container">

        <div class="box">
            <span class="price"> ₱95-₱120 </span>
            <img src="/documents/images/Bead bracelet 95-120.jpg" alt="">
            <h3>Bead Bracelet</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <a href="{{ route('order') }}" class="btn" target="_blank">order now</a>
        </div>
        <div class="box">
            <span class="price"> ₱14 </span>
            <img src="/documents/images/Curated ring beads-14.jpg" alt="">
            <h3>Curated Ring Beads</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <a href="{{ route('order') }}" class="btn" target="_blank">order now</a>
        </div>
        <div class="box">
            <span class="price"> ₱110 </span>
            <img src="/documents/images/Mask Holder 85-110.jpg" alt="">
            <h3>Mask Holder</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <a href="{{ route('order') }}" class="btn" target="_blank">order now</a>
        </div>
        <div class="box">
            <span class="price"> ₱299 </span>
            <img src="/documents/images/NASA Shirt -299.jpg" alt="">
            <h3>NASA Shirt</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <a href="{{ route('order') }}" class="btn" target="_blank">order now</a>
        </div>
        
    </div>

    <div class="box-container">

        <div class="box">
            <span class="price"> ₱99 </span>
            <img src="/documents/images/Cow Print  Pink Mask- 99.jpg" alt="">
            <h3>Pink Cow Print Mask</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <a href="{{ route('order') }}" class="btn" target="_blank">order now</a>
        </div>
        <div class="box">
            <span class="price"> ₱99 </span>
            <img src="/documents/images/Cow Print Blue Mask -99.jpg" alt="">
            <h3>Blue Cow Print Mask</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <a href="{{ route('order') }}" class="btn" target="_blank">order now</a>
        </div>
        <div class="box">
            <span class="price"> ₱99 </span>
            <img src="/documents/images/Flower Mask -99.jpg" alt="">
            <h3>Flower Mask</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <a href="{{ route('order') }}" class="btn" target="_blank">order now</a>
        </div>
        <div class="box">
            <span class="price"> ₱99 </span>
            <img src="/documents/images/Piny Wavy Mask -99.jpg" alt="">
            <h3>Piny Wavy Mask</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <a href="{{ route('order') }}" class="btn" target="_blank">order now</a>
        </div>
        
    </div>

    <div class="box-container">

        <div class="box">
            <span class="price"> ₱120 </span>
            <img src="/documents/images/PPG Mask-120.jpg" alt="">
            <h3>PPG Mask</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <a href="{{ route('order') }}"class="btn" target="_blank">order now</a>
        </div>
        <div class="box">
            <span class="price"> ₱99 </span>
            <img src="/documents/images/Retro Face Mask -99.jpg" alt="">
            <h3>Retro Face Mask</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <a href="{{ route('order') }}"class="btn" target="_blank">order now</a>
        </div>
        <div class="box">
            <span class="price"> ₱120 </span>
            <img src="/documents/images/Y2k pink mask-120.jpg" alt="">
            <h3>Y2K Pink Mask</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <a href="{{ route('order') }}" class="btn" target="_blank">order now</a>
        </div>
        <div class="box">
            <span class="price"> ₱99 </span>
            <img src="/documents/images/Kawii Mask -99.jpg" alt="">
            <h3>Kawaii Mask</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <a href="{{ route('order') }}" class="btn" target="_blank">order now</a>
        </div>
        
    </div>

</section>
<!-- popular section ends -->



<!-- footer section starts  -->
<section class="footer">
    <h1 class="credit"><span>Cabella</span> | all rights reserved 2021</h1>
    <h2 class="moreInfo">Catalunan Grande, Davao City | 09123456789</h2>
    <div class="share">
        <a href="https://web.facebook.com/cabella.ph" target="_blank" class="btn" id="mediabtn">facebook</a>
        <a href="https://www.instagram.com/cabella.ph/" target="_blank" class="btn" id="mediabtn">instagram</a>
        <a href="#" class="btn" id="mediabtn">Gmail</a>
    </div>
</section>
<!-- footer section ends -->

<!-- scroll top button  -->
<a href="#home" class="fas fa-angle-up" id="scroll-top"></a>

<!-- loader  -->
<div class="loader-container">
    <img  src="/documents/images/loader order.gif" alt="" >
</div>
<!-- custom js file link  -->
<script src="/js/shop.js"></script> 
</body>
</html>