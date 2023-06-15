@extends('admin.layouts.master')

@section('page')
Dashboard
@endsection

@section('content')
<!-- BEGIN: Body-->
    <!-- BEGIN: Content-->
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper container-xxl p-0">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <!-- Dashboard Ecommerce Starts -->
                <section id="dashboard-ecommerce">
                    <div class="row match-height">
                        <div class="col-lg-4 col-12">
                            <div class="row match-height">
                                <!-- Bar Chart - Orders -->
                                <div class="col-lg-6 col-md-3 col-6">
                                    <div class="card">
                                        <div class="card-body pb-50">
                                            <h6>Orders</h6>
                                            <h2 class="fw-bolder mb-1">2,76k</h2>
                                            <div id="statistics-order-chart"></div>
                                        </div>
                                    </div>
                                </div>
                                <!--/ Bar Chart - Orders -->

                                <!-- Line Chart - Profit -->
                                <div class="col-lg-6 col-md-3 col-6">
                                    <div class="card card-tiny-line-stats">
                                        <div class="card-body pb-50">
                                            <h6>Profit</h6>
                                            <h2 class="fw-bolder mb-1">6,24k</h2>
                                            <div id="statistics-profit-chart"></div>
                                        </div>
                                    </div>
                                </div>
                                <!--/ Line Chart - Profit -->

                                <!-- Earnings Card -->
                                <div class="col-lg-12 col-md-6 col-12">
                                    <div class="card earnings-card">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-6">
                                                    <h4 class="card-title mb-1">Earnings</h4>
                                                    <div class="font-small-2">This Month</div>
                                                    <h5 class="mb-1">$4055.56</h5>
                                                    <p class="card-text text-muted font-small-2">
                                                        <span class="fw-bolder">68.2%</span><span> more earnings than
                                                            last month.</span>
                                                    </p>
                                                </div>
                                                <div class="col-6">
                                                    <div id="earnings-chart"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--/ Earnings Card -->
                            </div>
                        </div>

                        <!-- Revenue Report Card -->
                        <div class="col-lg-4 col-12">
                            <div class="card card-transaction">
                                <div class="card-header">
                                    <h4 class="card-title">Transactions</h4>
                                    <div class="dropdown chart-dropdown">
                                        <i data-feather="more-vertical" class="font-medium-3 cursor-pointer"
                                            data-bs-toggle="dropdown"></i>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" href="index.html#">Last 28 Days</a>
                                            <a class="dropdown-item" href="index.html#">Last Month</a>
                                            <a class="dropdown-item" href="index.html#">Last Year</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="transaction-item">
                                        <div class="d-flex">
                                            <div class="avatar bg-light-primary rounded float-start">
                                                <div class="avatar-content">
                                                    <i data-feather="pocket" class="avatar-icon font-medium-3"></i>
                                                </div>
                                            </div>
                                            <div class="transaction-percentage">
                                                <h6 class="transaction-title">Wallet</h6>
                                                <small>Starbucks</small>
                                            </div>
                                        </div>
                                        <div class="fw-bolder text-danger">- $74</div>
                                    </div>
                                    <div class="transaction-item">
                                        <div class="d-flex">
                                            <div class="avatar bg-light-success rounded float-start">
                                                <div class="avatar-content">
                                                    <i data-feather="check" class="avatar-icon font-medium-3"></i>
                                                </div>
                                            </div>
                                            <div class="transaction-percentage">
                                                <h6 class="transaction-title">Bank Transfer</h6>
                                                <small>Add Money</small>
                                            </div>
                                        </div>
                                        <div class="fw-bolder text-success">+ $480</div>
                                    </div>
                                    <div class="transaction-item">
                                        <div class="d-flex">
                                            <div class="avatar bg-light-danger rounded float-start">
                                                <div class="avatar-content">
                                                    <i data-feather="dollar-sign" class="avatar-icon font-medium-3"></i>
                                                </div>
                                            </div>
                                            <div class="transaction-percentage">
                                                <h6 class="transaction-title">Paypal</h6>
                                                <small>Add Money</small>
                                            </div>
                                        </div>
                                        <div class="fw-bolder text-success">+ $590</div>
                                    </div>
                                    <div class="transaction-item">
                                        <div class="d-flex">
                                            <div class="avatar bg-light-warning rounded float-start">
                                                <div class="avatar-content">
                                                    <i data-feather="credit-card" class="avatar-icon font-medium-3"></i>
                                                </div>
                                            </div>
                                            <div class="transaction-percentage">
                                                <h6 class="transaction-title">Mastercard</h6>
                                                <small>Ordered Food</small>
                                            </div>
                                        </div>
                                        <div class="fw-bolder text-danger">- $23</div>
                                    </div>
                                    <div class="transaction-item">
                                        <div class="d-flex">
                                            <div class="avatar bg-light-info rounded float-start">
                                                <div class="avatar-content">
                                                    <i data-feather="trending-up" class="avatar-icon font-medium-3"></i>
                                                </div>
                                            </div>
                                            <div class="transaction-percentage">
                                                <h6 class="transaction-title">Transfer</h6>
                                                <small>Refund</small>
                                            </div>
                                        </div>
                                        <div class="fw-bolder text-success">+ $98</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--/ Revenue Report Card -->
                    </div>
                </section>
            </div>

        </div>
        <!-- End: Customizer-->

    </div>
    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>
@endsection