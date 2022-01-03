<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="UTF-8">
        <title>Cabella - Order Form</title>
        <link rel="stylesheet" href="/css/order.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- font -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    </head>
    <body>
        <div class="container">
            @include('alertMessages.messages')
            <div class="content">
                <div class="image-box">
                    <img src="documents/images/cabella2blacktexttransparent (2).png" alt="girl the logo pic" id="logopic">
                </div>
                <form action="orders" method="POST" >
                @csrf
                    <div class="topic">Order Now</div>
                    <div class="input-box">
                        <input type="email" name="customerEmail" required>
                        <label for="customerEmail">Enter your Email</label>
                    </div>
                    <div class="input-box">
                        <input type="text" name="customerName" required>
                        <label for="customerName">Enter your name</label>
                    </div>
                    <div class="input-box">
                        <input type="text" name="customerAddress" required>
                        <label for="customerAddress">Enter your address</label>
                    </div>
                    <div class="input-box">
                        <input type="text" name="customerIG" required>
                        <label for="customerIG">Enter your Instagram name</label>
                    </div>
                    <div class="input-box">
                        <input type="text" name="customerNo" required>
                        <label for="customerNo">Enter your number</label>
                    </div>
                    <div class="input-box">
                        <input type="text" name="MOD" required>
                        <label for="MOD">Method of Delivery</label>
                    </div>
                    <div class="input-box">
                        <input type="text" name="MOP" required>
                        <label for="MOP">Mode of Payment</label>
                    </div>
                    <div class="message-box">
                        <textarea placeholder="Order: " name="productPurchased"></textarea>
                        <label for="productPurchased">Enter your order/s here</label>
                    </div>
                    <div class="input-box">
                        <input type="submit" value="Send Order">
                    </div>     
                </form>
            </div>
        </div>
        <!-- loader  -->
        <div class="loader-container">
            <img src="documents/images/loader order.gif" alt="">
        </div>

        <!-- custom js file link  -->
        <script src="/js/order.js"></script>
    </body>
</html>