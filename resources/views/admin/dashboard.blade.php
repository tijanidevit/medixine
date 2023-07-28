@extends('admin.layout.app')

@section('title')
    Dashboard
@endsection

@section('body')
    <!-- Page Sidebar Start-->

    <!-- Page Sidebar Ends-->

    <!-- index body start -->
    <div class="page-body">
        <div class="container-fluid">
            <div class="row">
                <!-- chart caard section start -->
                <div class="col-sm-6 col-xxl-3 col-lg-6">
                    <div class="main-tiles border-5 border-0  card-hover card o-hidden">
                        <div class="custome-1-bg b-r-4 card-body">
                            <div class="media align-items-center static-top-widget">
                                <div class="media-body p-0">
                                    <span class="m-0">Total Revenue</span>
                                    <h4 class="mb-0 counter">$6659
                                        <span class="badge badge-light-primary grow">
                                            <i data-feather="trending-up"></i>8.5%</span>
                                    </h4>
                                </div>
                                <div class="align-self-center text-center">
                                    <i class="ri-database-2-line"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-xxl-3 col-lg-6">
                    <div class="main-tiles border-5 card-hover border-0 card o-hidden">
                        <div class="custome-2-bg b-r-4 card-body">
                            <div class="media static-top-widget">
                                <div class="media-body p-0">
                                    <span class="m-0">Total Orders</span>
                                    <h4 class="mb-0 counter">9856
                                        <span class="badge badge-light-danger grow">
                                            <i data-feather="trending-down"></i>8.5%</span>
                                    </h4>
                                </div>
                                <div class="align-self-center text-center">
                                    <i class="ri-shopping-bag-3-line"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-xxl-3 col-lg-6">
                    <div class="main-tiles border-5 card-hover border-0  card o-hidden">
                        <div class="custome-3-bg b-r-4 card-body">
                            <div class="media static-top-widget">
                                <div class="media-body p-0">
                                    <span class="m-0">Total Products</span>
                                    <h4 class="mb-0 counter">893
                                        <a href="add-new-product.html" class="badge badge-light-secondary grow">
                                            ADD NEW</a>
                                    </h4>
                                </div>

                                <div class="align-self-center text-center">
                                    <i class="ri-chat-3-line"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-xxl-3 col-lg-6">
                    <div class="main-tiles border-5 card-hover border-0 card o-hidden">
                        <div class="custome-4-bg b-r-4 card-body">
                            <div class="media static-top-widget">
                                <div class="media-body p-0">
                                    <span class="m-0">Total Customers</span>
                                    <h4 class="mb-0 counter">4.6k
                                        <span class="badge badge-light-success grow">
                                            <i data-feather="trending-down"></i>8.5%</span>
                                    </h4>
                                </div>

                                <div class="align-self-center text-center">
                                    <i class="ri-user-add-line"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12">
                    <div class="card o-hidden card-hover">
                        <div class="card-header border-0 pb-1">
                            <div class="card-header-title p-0">
                                <h4>Category</h4>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div class="category-slider no-arrow">
                                <div>
                                    <div class="dashboard-category">
                                        <a href="javascript:void(0)" class="category-image">
                                            <img src="assets/svg/vegetable.svg" class="img-fluid" alt="">
                                        </a>
                                        <a href="javascript:void(0)" class="category-name">
                                            <h6>Vegetables & Fruit</h6>
                                        </a>
                                    </div>
                                </div>

                                <div>
                                    <div class="dashboard-category">
                                        <a href="javascript:void(0)" class="category-image">
                                            <img src="assets/svg/cup.svg" class="img-fluid" alt="">
                                        </a>
                                        <a href="javascript:void(0)" class="category-name">
                                            <h6>Beverages</h6>
                                        </a>
                                    </div>
                                </div>

                                <div>
                                    <div class="dashboard-category">
                                        <a href="javascript:void(0)" class="category-image">
                                            <img src="assets/svg/meats.svg" class="img-fluid" alt="">
                                        </a>
                                        <a href="javascript:void(0)" class="category-name">
                                            <h6>Meats & Seafood</h6>
                                        </a>
                                    </div>
                                </div>

                                <div>
                                    <div class="dashboard-category">
                                        <a href="javascript:void(0)" class="category-image">
                                            <img src="assets/svg/breakfast.svg" class="img-fluid" alt="">
                                        </a>
                                        <a href="javascript:void(0)" class="category-name">
                                            <h6>Breakfast</h6>
                                        </a>
                                    </div>
                                </div>

                                <div>
                                    <div class="dashboard-category">
                                        <a href="javascript:void(0)" class="category-image">
                                            <img src="assets/svg/frozen.svg" class="img-fluid" alt="">
                                        </a>
                                        <a href="javascript:void(0)" class="category-name">
                                            <h6>Frozen Foods</h6>
                                        </a>
                                    </div>
                                </div>

                                <div>
                                    <div class="dashboard-category">
                                        <a href="javascript:void(0)" class="category-image">
                                            <img src="assets/svg/milk.svg" class="img-fluid" alt="">
                                        </a>
                                        <a href="javascript:void(0)" class="category-name">
                                            <h6>Milk & Dairies</h6>
                                        </a>
                                    </div>
                                </div>

                                <div>
                                    <div class="dashboard-category">
                                        <a href="javascript:void(0)" class="category-image">
                                            <img src="assets/svg/pet.svg" class="img-fluid" alt="">
                                        </a>
                                        <a href="javascript:void(0)" class="category-name">
                                            <h6>Pet Food</h6>
                                        </a>
                                    </div>
                                </div>

                                <div>
                                    <div class="dashboard-category">
                                        <a href="javascript:void(0)" class="category-image">
                                            <img src="assets/svg/vegetable.svg" class="img-fluid" alt="">
                                        </a>
                                        <a href="javascript:void(0)" class="category-name">
                                            <h6>Vegetables & Fruit</h6>
                                        </a>
                                    </div>
                                </div>

                                <div>
                                    <div class="dashboard-category">
                                        <a href="javascript:void(0)" class="category-image">
                                            <img src="assets/svg/cup.svg" class="img-fluid" alt="">
                                        </a>
                                        <a href="javascript:void(0)" class="category-name">
                                            <h6>Beverages</h6>
                                        </a>
                                    </div>
                                </div>

                                <div>
                                    <div class="dashboard-category">
                                        <a href="javascript:void(0)" class="category-image">
                                            <img src="assets/svg/meats.svg" class="img-fluid" alt="">
                                        </a>
                                        <a href="javascript:void(0)" class="category-name">
                                            <h6>Meats & Seafood</h6>
                                        </a>
                                    </div>
                                </div>

                                <div>
                                    <div class="dashboard-category">
                                        <a href="javascript:void(0)" class="category-image">
                                            <img src="assets/svg/breakfast.svg" class="img-fluid" alt="">
                                        </a>
                                        <a href="javascript:void(0)" class="category-name">
                                            <h6>Breakfast</h6>
                                        </a>
                                    </div>
                                </div>

                                <div>
                                    <div class="dashboard-category">
                                        <a href="javascript:void(0)" class="category-image">
                                            <img src="assets/svg/frozen.svg" class="img-fluid" alt="">
                                        </a>
                                        <a href="javascript:void(0)" class="category-name">
                                            <h6>Frozen Foods</h6>
                                        </a>
                                    </div>
                                </div>

                                <div>
                                    <div class="dashboard-category">
                                        <a href="javascript:void(0)" class="category-image">
                                            <img src="assets/svg/milk.svg" class="img-fluid" alt="">
                                        </a>
                                        <a href="javascript:void(0)" class="category-name">
                                            <h6>Milk & Dairies</h6>
                                        </a>
                                    </div>
                                </div>

                                <div>
                                    <div class="dashboard-category">
                                        <a href="javascript:void(0)" class="category-image">
                                            <img src="assets/svg/pet.svg" class="img-fluid" alt="">
                                        </a>
                                        <a href="javascript:void(0)" class="category-name">
                                            <h6>Pet Food</h6>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- chart card section End -->


                <!-- Recent orders start-->
                <div class="col-xl-6">
                    <div class="card o-hidden card-hover">
                        <div class="card-header card-header-top card-header--2 px-0 pt-0">
                            <div class="card-header-title">
                                <h4>Recent Orders</h4>
                            </div>
                        </div>

                        <div class="card-body p-0">
                            <div>
                                <div class="table-responsive">
                                    <table class="best-selling-table table border-0">
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="best-product-box">
                                                        <div class="product-name">
                                                            <h5>Aata Buscuit</h5>
                                                            <h6>#64548</h6>
                                                        </div>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="product-detail-box">
                                                        <h6>Date Placed</h6>
                                                        <h5>5/1/22</h5>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="product-detail-box">
                                                        <h6>Price</h6>
                                                        <h5>$250.00</h5>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="product-detail-box">
                                                        <h6>Order Status</h6>
                                                        <h5>Completed</h5>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="product-detail-box">
                                                        <h6>Payment</h6>
                                                        <h5 class="text-danger">Unpaid</h5>
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <div class="best-product-box">
                                                        <div class="product-name">
                                                            <h5>Aata Buscuit</h5>
                                                            <h6>26-08-2022</h6>
                                                        </div>
                                                    </div>
                                                </td>


                                                <td>
                                                    <div class="product-detail-box">
                                                        <h6>Date Placed</h6>
                                                        <h5>5/1/22</h5>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="product-detail-box">
                                                        <h6>Price</h6>
                                                        <h5>$250.00</h5>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="product-detail-box">
                                                        <h6>Order Status</h6>
                                                        <h5>Completed</h5>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="product-detail-box">
                                                        <h6>Payment</h6>
                                                        <h5 class="theme-color">Paid</h5>
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <div class="best-product-box">
                                                        <div class="product-name">
                                                            <h5>Aata Buscuit</h5>
                                                            <h6>26-08-2022</h6>
                                                        </div>
                                                    </div>
                                                </td>


                                                <td>
                                                    <div class="product-detail-box">
                                                        <h6>Date Placed</h6>
                                                        <h5>5/1/22</h5>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="product-detail-box">
                                                        <h6>Price</h6>
                                                        <h5>$250.00</h5>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="product-detail-box">
                                                        <h6>Order Status</h6>
                                                        <h5>Completed</h5>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="product-detail-box">
                                                        <h6>Payment</h6>
                                                        <h5 class="theme-color">Paid</h5>
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <div class="best-product-box">
                                                        <div class="product-name">
                                                            <h5>Aata Buscuit</h5>
                                                            <h6>26-08-2022</h6>
                                                        </div>
                                                    </div>
                                                </td>


                                                <td>
                                                    <div class="product-detail-box">
                                                        <h6>Date Placed</h6>
                                                        <h5>5/1/22</h5>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="product-detail-box">
                                                        <h6>Price</h6>
                                                        <h5>$250.00</h5>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="product-detail-box">
                                                        <h6>Order Status</h6>
                                                        <h5>Completed</h5>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="product-detail-box">
                                                        <h6>Payment</h6>
                                                        <h5 class="theme-color">Paid</h5>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Recent orders end-->
            </div>
        </div>
        <!-- Container-fluid Ends-->

        <!-- footer start-->

        <!-- footer End-->
    </div>
    <!-- index body end -->

</div>
@endsection
