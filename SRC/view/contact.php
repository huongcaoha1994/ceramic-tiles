<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

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
                                <p>Email: Nguyenvantruc206@gmail.com</p>
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

        </div>

        <?php
        include("footer.php")
        ?>
</body>

</html>