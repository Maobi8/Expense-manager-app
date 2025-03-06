<!-- resources/views/home.blade.php -->
@extends('layouts.navigation')



@section('content')
     <!-- Breadcrumb -->
     <div class="d-md-flex d-block align-items-center justify-content-between page-breadcrumb mb-3">
        <div class="my-auto mb-2">
            <h2 class="mb-1">Dashboard</h2>
           
        </div>
        <div class="d-flex my-xl-auto right-content align-items-center flex-wrap ">
            <div class="input-icon mb-2 position-relative">
                <span class="input-icon-addon">
                    <i class="ti ti-calendar text-gray-9"></i>
                </span>
                <input type="text" class="form-control date-range bookingrange" placeholder="dd/mm/yyyy - dd/mm/yyyy">
            </div>
            <div class="ms-2 head-icons">
                <a href="javascript:void(0);" class="" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Collapse" id="collapse-header">
                    <i class="ti ti-chevrons-up"></i>
                </a>
            </div>
        </div>
    </div>
    <!-- /Breadcrumb -->
    
            <!-- Welcome Wrap -->
            <div class="welcome-wrap mb-4">
                <div class=" d-flex align-items-center justify-content-between flex-wrap">
                    <div class="mb-3">
                        <h2 class="mb-1 text-white">Welcome Back, {{ Auth::user()->name }}</h2>
                        
                    </div>
                   
                </div>
                <div class="welcome-bg">
                    <img src="https://smarthr.dreamstechnologies.com/laravel/template/public/build/img/bg/welcome-bg-02.svg" alt="img" class="welcome-bg-01">
                    <img src="https://smarthr.dreamstechnologies.com/laravel/template/public/build/img/bg/welcome-bg-03.svg" alt="img" class="welcome-bg-02">
                    <img src="https://smarthr.dreamstechnologies.com/laravel/template/public/build/img/bg/welcome-bg-01.svg" alt="img" class="welcome-bg-03">
                </div>
            </div>	
            <!-- /Welcome Wrap -->

            <div class="row">

                <!-- Total Companies -->
                <div class="col-xl-3 col-sm-6 d-flex">
                    <div class="card flex-fill">
                        <div class="card-body">
                            <div class="d-flex align-items-center justify-content-between">
                                <span class="avatar avatar-md bg-dark mb-3">
                                    <i class="ti ti-building fs-16"></i>
                                </span>
                                <span class="badge bg-success fw-normal mb-3">
                                    +19.01%
                                </span>
                            </div>
                            <div class="d-flex align-items-center justify-content-between">
                                <div>
                                    <h2 class="mb-1">{{number_format($dailyTotal)}}</h2>
                                    <p class="fs-13">Daily Expenses</p>
                                </div>
                                <div class="company-bar1">5,10,7,5,10,7,5</div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Total Companies -->

                <!-- Active Companies -->
                <div class="col-xl-3 col-sm-6 d-flex">
                    <div class="card flex-fill">
                        <div class="card-body">
                            <div class="d-flex align-items-center justify-content-between">
                                <span class="avatar avatar-md bg-dark mb-3">
                                    <i class="ti ti-carousel-vertical fs-16"></i>
                                </span>
                                <span class="badge bg-danger fw-normal mb-3">
                                    -12%
                                </span>
                            </div>
                            <div class="d-flex align-items-center justify-content-between">
                                <div>
                                    <h2 class="mb-1">{{number_format($weeklyTotal)}}</h2>
                                    <p class="fs-13">Weekly Expenses</p>
                                </div>
                                <div class="company-bar2">5,3,7,6,3,10,5</div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Active Companies -->

                <!-- Total Subscribers -->
                <div class="col-xl-3 col-sm-6 d-flex">
                    <div class="card flex-fill">
                        <div class="card-body">
                            <div class="d-flex align-items-center justify-content-between">
                                <span class="avatar avatar-md bg-dark mb-3">
                                    <i class="ti ti-chalkboard-off fs-16"></i>
                                </span>
                                <span class="badge bg-success fw-normal mb-3">
                                    +6%
                                </span>
                            </div>
                            <div class="d-flex align-items-center justify-content-between">
                                <div>
                                    <h2 class="mb-1">{{number_format($monthlyTotal)}}</h2>
                                    <p class="fs-13">Monthly Expenses</p>
                                </div>
                                <div class="company-bar3">8,10,10,8,8,10,8</div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Total Subscribers -->

                <!-- Total Earnings -->
                <div class="col-xl-3 col-sm-6 d-flex">
                    <div class="card flex-fill">
                        <div class="card-body">
                            <div class="d-flex align-items-center justify-content-between">
                                <span class="avatar avatar-md bg-dark mb-3">
                                    <i class="ti ti-businessplan fs-16"></i>
                                </span>
                                <span class="badge bg-danger fw-normal mb-3">
                                    -16%
                                </span>
                            </div>
                            <div class="d-flex align-items-center justify-content-between">
                                <div>
                                    <h2 class="mb-1">{{number_format($subTotal)}}</h2>
                                    <p class="fs-13">Total Expenses</p>
                                </div>
                                <div class="company-bar4">5,10,7,5,10,7,5</div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Total Earnings -->

            </div>
            <div class="row">

                <!-- Companies -->
                <div class="col-xxl-3 col-lg-6 d-flex">
                    <div class="card flex-fill">
                        <div class="card-header pb-2 d-flex align-items-center justify-content-between flex-wrap">
                            <h5 class="mb-2">Companies</h5>								
                            <div class="dropdown mb-2">
                                <a href="javascript:void(0);" class="btn btn-white border btn-sm d-inline-flex align-items-center" data-bs-toggle="dropdown">
                                    <i class="ti ti-calendar me-1"></i>This Week
                                </a>
                                <ul class="dropdown-menu  dropdown-menu-end p-3">
                                    <li>
                                        <a href="javascript:void(0);" class="dropdown-item rounded-1">This Month</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="dropdown-item rounded-1">This Week</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="dropdown-item rounded-1">Today</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-body">
                            <div id="company-chart"></div>
                            <p class="f-13 d-inline-flex align-items-center"><span class="badge badge-success me-1">+6%</span> 5 Companies  from last month</p>
                        </div>
                    </div>
                </div>
                <!-- /Companies -->
                
                <!-- Revenue -->
                <div class="col-lg-6 d-flex">
                    <div class="card flex-fill">
                        <div class="card-header pb-2 d-flex align-items-center justify-content-between flex-wrap">
                            <h5 class="mb-2">Revenue</h5>								
                            <div class="dropdown mb-2">
                                <a href="javascript:void(0);" class="btn btn-white border btn-sm d-inline-flex align-items-center" data-bs-toggle="dropdown">
                                    <i class="ti ti-calendar me-1"></i>2025
                                </a>
                                <ul class="dropdown-menu  dropdown-menu-end p-3">
                                    <li>
                                        <a href="javascript:void(0);" class="dropdown-item rounded-1">2024</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="dropdown-item rounded-1">2025</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="dropdown-item rounded-1">2023</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-body pb-0">
                            <div class="d-flex align-items-center justify-content-between flex-wrap">
                                <div class="mb-1">
                                    <h5 class="mb-1">$45787</h5>
                                    <p><span class="text-success fw-bold">+40%</span> increased from last year</p>
                                </div>
                                <p class="fs-13 text-gray-9 d-flex align-items-center mb-1"><i class="ti ti-circle-filled me-1 fs-6 text-primary"></i>Revenue</p>
                            </div>
                            <div id="revenue-income"></div>
                        </div>
                    </div>
                </div>
                <!-- /Revenue -->

                <!-- Top Plans -->
                <div class="col-xxl-3 col-xl-12 d-flex">
                    <div class="card flex-fill">
                        <div class="card-header pb-2 d-flex align-items-center justify-content-between flex-wrap">
                            <h5 class="mb-2">Top Plans</h5>							
                            <div class="dropdown mb-2">
                                <a href="javascript:void(0);" class="btn btn-white border btn-sm d-inline-flex align-items-center" data-bs-toggle="dropdown">
                                    <i class="ti ti-calendar me-1"></i>This Month
                                </a>
                                <ul class="dropdown-menu  dropdown-menu-end p-3">
                                    <li>
                                        <a href="javascript:void(0);" class="dropdown-item rounded-1">This Month</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="dropdown-item rounded-1">This Week</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="dropdown-item rounded-1">Today</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-body">
                            <div id="plan-overview"></div>
                            <div class="d-flex align-items-center justify-content-between mb-2">
                                <p class="f-13 mb-0"><i class="ti ti-circle-filled text-primary me-1"></i>Basic </p>
                                <p class="f-13 fw-medium text-gray-9">60%</p>
                            </div>
                            <div class="d-flex align-items-center justify-content-between mb-2">
                                <p class="f-13 mb-0"><i class="ti ti-circle-filled text-warning me-1"></i>Premium</p>
                                <p class="f-13 fw-medium text-gray-9">20%</p>
                            </div>
                            <div class="d-flex align-items-center justify-content-between mb-0">
                                <p class="f-13 mb-0"><i class="ti ti-circle-filled text-info me-1"></i>Enterprise</p>
                                <p class="f-13 fw-medium text-gray-9">20%</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Top Plans -->

            </div>
@endsection
