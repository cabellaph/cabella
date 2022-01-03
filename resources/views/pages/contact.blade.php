<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="UTF-8">
        <title>Cabella - Contacts Form</title>
        <link rel="stylesheet" href="/css/contact.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- font -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    </head>
    <body>
        <!-- Contact us starts -->
        <section class="contacts">
        </section>
        <div class="container" id="contacts">
            @include('alertMessages.messages')
            <div class="content">
                <div class="image-box">
                    <img src="documents/images/cabella2blacktexttransparent (2).png" alt="girl the logo pic" id="logopic">
                </div>
                <form action="contacts" method="POST">
                @csrf
                    <h1 class="topic"> Contact Us</h1>
                    <div class="input-box">
                        <input type="text" name="contactName" required>
                        <label for="contactName">Enter Your Name</label>
                    </div>
                    <div class="input-box">
                        <input type="email" name="contactEmail" required>
                        <label for="contactEmail">Enter Your Email</label>
                    </div>
                    <div class="input-box">
                        <input type="text" name="contactSubject" required>
                        <label for="contactSubject">Enter Subject</label>
                    </div>
                    <div class="message-box">
                        <textarea placeholder="Message" name="message"></textarea>
                        <label for="message">Enter Message</label>
                    </div>
                    <div class="input-box" id="submit">
                        <input type="submit" value="Send">
                    </div>     
                </form>
            </div>
        </div>
        <!-- contacts section ends -->


        <!-- loader  -->
        <div class="loader-container">
            <img src="documents/images/loader order.gif" alt="">
        </div>

        <!-- custom js file link  -->
        <script src="/js/contact.js"></script>
    </body>
</html>