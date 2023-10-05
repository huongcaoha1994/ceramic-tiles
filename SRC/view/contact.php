<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../ceramic-tiles/SRC/css/contact.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <?php
    include("header.php")
    ?>

    <div class="container text-align-center">
        <div class="row">
            <div class="col-12 ">
                <h3>Contact</h3>
                <p>Thank you for your interest in Nanomart. We want to hear from you, if you have questions, comments or answers. Please contact us using the following information.</p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-6">
                <div class="main-content">
                    <div class="content">
                        <h3>CÔNG TY TNHH TITLE LUXURY</h3>

                        <ul>
                            <li>
                                <p>NumBer: <b>0915 324 128</b></p>
                            </li>
                            <li>
                                <p>Collaborators: <b>0979 697 715 | 0979 957 815</b></p>
                            </li>
                            <li>
                                <a href="mailto:Nguyenvantruc206@gmail.com">Nguyenvantruc206@gmail.com</a>
                            </li>
                            <li>
                                <p> Website: https://tilesLuxury.vn</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <div class="sidebar">
                    <form>
                        <h3>Email liên hệ</h3>
                        <label for="name">Your Name:</label>
                        <input type="text" id="name" name="name" required>

                        <label for="name">Number:</label>
                        <input type="text" id="name" name="name" required>

                        <label for="email">Email:</label>
                        <input type="email" id="email" name="email" required>

                        <label for="message">Message Content:</label>
                        <textarea id="message" name="message" required></textarea>

                        <input type="submit" value="Submit">
                    </form>

                </div>
            </div>
            <div class="col-12">
                <form>
                    <h5>Our Location</h5>
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.940115968208!2d105.8494022744659!3d21.035081980615843!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135abbf5c6e7ce3%3A0xcfa017611623993c!2zMTkwMCBMZSBUaMOpw6J0cmU!5e0!3m2!1svi!2s!4v1695882844641!5m2!1svi!2s"
                        width="100%" height="150" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </form>
            </div>
        </div>

        <?php
        include("footer.php")
        ?>
</body>

</html>