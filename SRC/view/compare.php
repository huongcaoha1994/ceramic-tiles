<?php
include("header.php");
?>
<!-- Breadcrumb -->
<div class="container">
    <div class="row">
        <div class="col-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Compare</li>
                </ol>
            </nav>
        </div>
    </div>
</div>
<!-- Heading title -->
<div class="container">
    <div class="row">
        <div class="col-12 text-center">
            <h1>Compare <a href=""> sp1</a> vs <a href=""> sp2</a> </h1>
        </div>
    </div>
</div>
<!-- Ảnh sản phẩm -->
<div class="container">
    <div class="row justify-content-center">
        <div class="col-5 py-2">
            <div class="form-outline">
                <input type="search" id="form1" class="form-control" placeholder="Type query" aria-label="Search" />
            </div>
        </div>
        <div class="vr" style="height: 100%;padding: 0"></div>
        <div class="col-5 py-2">
            <div class="form-outline">
                <input type="search" id="form1" class="form-control" placeholder="Type query" aria-label="Search" />
            </div>
        </div>
    </div>
</div>
<!-- Thông tin sản phẩm  -->
<section class="bg-secondary">
    <div class="container py-2">
        <table class="table table-striped table-hover table-bordered rounded-1">
            <thead>
                <tr>
                    <th scope="col" class="d-none d-md-block"> </th>
                    <th scope="col">sp1</th>
                    <th scope="col">sp2</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row" class="d-none d-md-block">Giá tiền</th>
                    <td>Mark</td>
                    <td>Otto</td>
                </tr>
                <tr>
                    <th scope="row" class="d-none d-md-block">Danh mục</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                </tr>
                <tr>
                    <th scope="row" class="d-none d-md-block">Kích thước</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                </tr>
                <tr>
                    <th scope="row" class="d-none d-md-block">Thương hiệu</th>
                    <td>Larry the Bird</td>
                    <td>Larry the Bird</td>
                </tr>
                <tr>
                    <th scope="row" class="d-none d-md-block">Size</th>
                    <td>Larry the Bird</td>
                    <td>Larry the Bird</td>
                </tr>
                <tr>
                    <th scope="row" class="d-none d-md-block">Mô tả</th>
                    <td>Larry the Bird</td>
                    <td>Larry the Bird</td>
                </tr>
            </tbody>
        </table>

    </div>
</section>
<?php
include("footer.php");
?>