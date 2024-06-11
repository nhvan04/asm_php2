<nav class="sidebar vertical-scroll  ps-container ps-theme-default ps-active-y">
    <div class="logo d-flex justify-content-between">
        <a href="index-2.html"><img src="{{asset('assets/admin/img/logo.png') }}" alt></a>
        <div class="sidebar_close_icon d-lg-none">
            <i class="ti-close"></i>
        </div>
    </div>
    <ul id="sidebar_menu">
        <li class="mm-active">
            <a class="has-arrow" href="#" aria-expanded="false">
                <div class="icon_menu">
                    <img src="{{asset('assets/admin/img/menu-icon/dashboard.svg') }}" alt>
                </div>
                <span>Dashboard</span>
            </a>
            <ul>
                <li><a class="active" href="index-2.html">Quản lý người dùng</a></li>
                <li><a href="index_2.html">Default</a></li>
                <li><a href="index_3.html">Dark Menu</a></li>
            </ul>
        </li>
 
        <li class>
            <a href="Board.html" aria-expanded="false">
                <div class="icon_menu">
                    <img src="{{asset('assets/admin/img/menu-icon/5.svg') }}" alt>
                </div>
                <span>Board</span>
            </a>
        </li>
        
        <li class>
            <a class="has-arrow" href="#" aria-expanded="false">
                <div class="icon_menu">
                    <img src="{{asset('assets/admin/img/menu-icon/8.svg') }}" alt>
                </div>
                <span>Products</span>
            </a>
            <ul>
                <li><a href="Products.html">Products</a></li>
                <li><a href="Product_Details.html">Product Details</a></li>
                <li><a href="Cart.html">Cart</a></li>
                <li><a href="Checkout.html">Checkout</a></li>
            </ul>
        </li>

    </ul>
</nav>