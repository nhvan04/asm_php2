<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chi Tiết Sản Phẩm</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        .nav-item {
            font-size: 0.9rem;
            /* Đặt kích thước chữ theo ý muốn */
        }
    </style>
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <!-- Logo -->
            <a class="navbar-brand" href="">
                <img src="" alt="Điện Thoại Shop" width="100" height="50">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="{{url('/')}}">Trang Chủ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="products.html">Sản Phẩm</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.html">Giới Thiệu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.html">Liên Hệ</a>
                    </li>
                    <li class="nav-item">
                        <nav>
                            @if (!isset($_SESSION['user']))
                                <a href="{{ url('login') }}"><i class="bi bi-person"></i></a>
                            @endif

                            @if (isset($_SESSION['user']))
                                <a class="btn btn-primary" href="{{ url('logout') }}">Logout</a>
                            @endif
                        </nav>

                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.html"><i class="bi bi-cart3"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <!-- Product Detail -->
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6">
                
                <img class="card-img-top" style="max-height: 400px" src="{{ asset($product['img_thumbnail']) }}"
                    alt="Card image">
            </div>
            <div class="col-md-6">
                <h4 class="card-title">{{ $product['name'] }}</h4>
                <p class="lead" >Giá: <span style="color: red">{{$product['price_regular']}}</span>-<span>{{$product['price_sale']}}</span></p>
                <form action="{{ url('cart/add') }}" method="get">
                    <input type="hidden" name="productID" value="{{ $product['id'] }}">

                    <input type="number" min="1" name="quantity" value="1"><br><br>
                    <button class="btn btn-primary btn-lg" type="submit">Thêm vào giỏ hàng</button>
                </form>
               
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-12">
                <h2>Sản phẩm liên quan</h2>
                <div class="row">
                    <!-- Related Product Card 1 -->
                    <div class="col-md-3">
                        <div class="card mb-3">
                            <img class="card-img-top" style="max-height: 200px" src="{{ asset($product['img_thumbnail']) }}">
                            <div class="card-body">
                                <h5 class="card-title">Sản Phẩm Liên Quan 1</h5>
                                <a href="sanpham1.html" class="btn btn-primary">Chi tiết</a>
                            </div>
                        </div>
                    </div>
                    <!-- Related Product Card 2 -->
                    <div class="col-md-3">
                        <div class="card mb-3">
                            <img class="card-img-top" style="max-height: 200px" src="{{ asset($product['img_thumbnail']) }}">
                            <div class="card-body">
                                <h5 class="card-title">Sản Phẩm Liên Quan 2</h5>
                                <a href="sanpham2.html" class="btn btn-primary">Chi tiết</a>
                            </div>
                        </div>
                    </div>
                    <!-- Related Product Card 3 -->
                    <div class="col-md-3">
                        <div class="card mb-3">
                            <img class="card-img-top" style="max-height: 200px" src="{{ asset($product['img_thumbnail']) }}">
                            <div class="card-body">
                                <h5 class="card-title">Sản Phẩm Liên Quan 3</h5>
                                <a href="sanpham3.html" class="btn btn-primary">Chi tiết</a>
                            </div>
                        </div>
                    </div>
                    <!-- Related Product Card 4 -->
                    <div class="col-md-3">
                        <div class="card mb-3">
                           <img class="card-img-top" style="max-height: 200px" src="{{ asset($product['img_thumbnail']) }}">
                            <div class="card-body">
                                <h5 class="card-title">Sản Phẩm Liên Quan 4</h5>
                                <a href="sanpham4.html" class="btn btn-primary">Chi tiết</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-dark text-white text-center py-3 mt-5">
        &copy; 2024 Tên Công Ty
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>

