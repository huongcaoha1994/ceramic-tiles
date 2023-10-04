<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    include("header.php");
    ?>
    <!-- breadcrumb -->
    <div class="container py-3">
        <div class="row">
            <div class="col-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#" class="display-6">Home</a></li>
                        <li class="breadcrumb-item active display-6" aria-current="page">Shop</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!--  -->
    <div class="container">
        <div class="row">
            <div class="col-3">
                
            </div>
            <div class="col-9">
                <div class="row">
                    <?php
                    include("search.php");
                    ?>
                </div>
            </div>
        </div>
    </div>

    <?php
    include("footer.php");
    ?>
</body>

</html>