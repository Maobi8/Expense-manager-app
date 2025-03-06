{{-- <nav x-data="{ open: false }" class="bg-white dark:bg-gray-800 border-b border-gray-100 dark:border-gray-700">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('dashboard') }}">
                        <x-application-logo class="block h-9 w-auto fill-current text-gray-800 dark:text-gray-200" />
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                        {{ __('Dashboard') }}
                    </x-nav-link>
                </div>
            </div>

            <!-- Settings Dropdown -->
            <div class="hidden sm:flex sm:items-center sm:ms-6">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 dark:text-gray-400 bg-white dark:bg-gray-800 hover:text-gray-700 dark:hover:text-gray-300 focus:outline-none transition ease-in-out duration-150">
                            <div>{{ Auth::user()->name }}</div>

                            <div class="ms-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <x-dropdown-link :href="route('profile.edit')">
                            {{ __('Profile') }}
                        </x-dropdown-link>

                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            </div>

            <!-- Hamburger -->
            <div class="-me-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 dark:text-gray-500 hover:text-gray-500 dark:hover:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-900 focus:outline-none focus:bg-gray-100 dark:focus:bg-gray-900 focus:text-gray-500 dark:focus:text-gray-400 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                {{ __('Dashboard') }}
            </x-responsive-nav-link>
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200 dark:border-gray-600">
            <div class="px-4">
                <div class="font-medium text-base text-gray-800 dark:text-gray-200">{{ Auth::user()->name }}</div>
                <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
            </div>

            <div class="mt-3 space-y-1">
                <x-responsive-nav-link :href="route('profile.edit')">
                    {{ __('Profile') }}
                </x-responsive-nav-link>

                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>
            </div>
        </div>
    </div>
</nav> --}}

<!DOCTYPE html>

	<html lang="en">


<!-- Mirrored from smarthr.dreamstechnologies.com/laravel/template/public/dashboard by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 28 Feb 2025 10:56:54 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
	<meta name="description" content="Smarthr - Bootstrap Admin Template">
	<meta name="keywords" content="admin, estimates, bootstrap, business, html5, responsive, Projects">
	<meta name="author" content="Dreams technologies - Bootstrap Admin Template">
	<meta name="robots" content="noindex, nofollow">
	<title>Smarthr Admin Template</title>


    <!-- Apple Touch Icon -->
<link rel="apple-touch-icon" sizes="180x180" href="https://smarthr.dreamstechnologies.com/laravel/template/public/build/img/apple-touch-icon.png">

<!-- Favicon -->
<link rel="shortcut icon" type="image/x-icon" href="https://smarthr.dreamstechnologies.com/laravel/template/public/build/img/favicon.png">

<!-- Theme Script js -->
<script src="https://smarthr.dreamstechnologies.com/laravel/template/public/build/js/theme-script.js" type="43818bf58cae6c6ba1a63a27-text/javascript"></script>

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://smarthr.dreamstechnologies.com/laravel/template/public/build/css/bootstrap.min.css">


<!-- Fancybox CSS -->
<link rel="stylesheet" href="https://smarthr.dreamstechnologies.com/laravel/template/public/build/plugins/fancybox/jquery.fancybox.min.css">

<!-- Feather CSS -->
<link rel="stylesheet" href="https://smarthr.dreamstechnologies.com/laravel/template/public/build/plugins/icons/feather/feather.css">

<!-- Tabler Icon CSS -->
<link rel="stylesheet" href="https://smarthr.dreamstechnologies.com/laravel/template/public/build/plugins/icons/bootstrap/bootstrap-icons.min.css">

<!-- Tabler Icon CSS -->
<link rel="stylesheet" href="https://smarthr.dreamstechnologies.com/laravel/template/public/build/plugins/tabler-icons/tabler-icons.css">


<!-- Select2 CSS -->
<link rel="stylesheet" href="https://smarthr.dreamstechnologies.com/laravel/template/public/build/plugins/select2/css/select2.min.css">






<!-- Fontawesome CSS -->
<link rel="stylesheet" href="https://smarthr.dreamstechnologies.com/laravel/template/public/build/plugins/fontawesome/css/fontawesome.min.css">
<link rel="stylesheet" href="https://smarthr.dreamstechnologies.com/laravel/template/public/build/plugins/fontawesome/css/all.min.css">

 <!-- Color Picker Css -->
<link rel="stylesheet" href="https://smarthr.dreamstechnologies.com/laravel/template/public/build/plugins/flatpickr/flatpickr.min.css">
<link rel="stylesheet" href="https://smarthr.dreamstechnologies.com/laravel/template/public/build/plugins/@simonwep/pickr/themes/nano.min.css">

<!-- Daterangepikcer CSS -->
<link rel="stylesheet" href="https://smarthr.dreamstechnologies.com/laravel/template/public/build/plugins/daterangepicker/daterangepicker.css">

<!-- Owl carousel CSS -->
<link rel="stylesheet" href="https://smarthr.dreamstechnologies.com/laravel/template/public/build/css/owl.carousel.min.css">

<!-- Datatable CSS -->
<link rel="stylesheet" href="https://smarthr.dreamstechnologies.com/laravel/template/public/build/css/dataTables.bootstrap5.min.css">

<!-- Player CSS -->
<link rel="stylesheet" href="https://smarthr.dreamstechnologies.com/laravel/template/public/build/css/plyr.css">

<!-- Owl Carousel -->
<link rel="stylesheet" href="https://smarthr.dreamstechnologies.com/laravel/template/public/build/plugins/owlcarousel/owl.carousel.min.css">

<!-- Summernote CSS -->
<link rel="stylesheet" href="https://smarthr.dreamstechnologies.com/laravel/template/public/build/plugins/summernote/summernote-lite.min.css">

<!-- Datetimepicker CSS -->
<link rel="stylesheet" href="https://smarthr.dreamstechnologies.com/laravel/template/public/build/css/bootstrap-datetimepicker.min.css">

<!-- Select2 CSS -->
<link rel="stylesheet" href="https://smarthr.dreamstechnologies.com/laravel/template/public/build/plugins/select2/css/select2.min.css">

<!-- Dragula CSS -->
<link rel="stylesheet" href="https://smarthr.dreamstechnologies.com/laravel/template/public/build/plugins/dragula/css/dragula.min.css">

<!-- ChartC3 CSS -->
<link rel="stylesheet" href="https://smarthr.dreamstechnologies.com/laravel/template/public/build/plugins/c3-chart/c3.min.css">

<!-- Bootstrap Tagsinput CSS -->
<link rel="stylesheet" href="https://smarthr.dreamstechnologies.com/laravel/template/public/build/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css">

<!-- Rangeslider CSS -->
<link rel="stylesheet" href="https://smarthr.dreamstechnologies.com/laravel/template/public/build/plugins/ion-rangeslider/css/ion.rangeSlider.min.css">


<!-- Morris CSS -->
<link rel="stylesheet" href="https://smarthr.dreamstechnologies.com/laravel/template/public/build/plugins/morris/morris.css">

<!-- Material CSS -->
<link rel="stylesheet" href="https://smarthr.dreamstechnologies.com/laravel/template/public/build/plugins/material/materialdesignicons.css">

<!-- Pe7 CSS -->
<link rel="stylesheet" href="https://smarthr.dreamstechnologies.com/laravel/template/public/build/plugins/icons/pe7/pe-icon-7.css">



<link rel="stylesheet" href="https://smarthr.dreamstechnologies.com/laravel/template/public/build/plugins/flatpickr/flatpickr.css" />
<link rel="stylesheet" href="https://smarthr.dreamstechnologies.com/laravel/template/public/build/plugins/bootstrap-datepicker/bootstrap-datepicker.css" />
<link rel="stylesheet" href="https://smarthr.dreamstechnologies.com/laravel/template/public/build/plugins/jquery-timepicker/jquery-timepicker.css" />
<link rel="stylesheet" href="https://smarthr.dreamstechnologies.com/laravel/template/public/build/plugins/pickr/pickr-themes.css" />


<!-- Pe7 CSS -->
<link rel="stylesheet" href="https://smarthr.dreamstechnologies.com/laravel/template/public/build/plugins/icons/typicons/typicons.css">

<!-- Pe7 CSS -->
<link rel="stylesheet" href="https://smarthr.dreamstechnologies.com/laravel/template/public/build/plugins/icons/flags/flags.css">

<!-- Pe7 CSS -->
<link rel="stylesheet" href="https://smarthr.dreamstechnologies.com/laravel/template/public/build/plugins/icons/weather/weathericons.css">

<!-- Main CSS -->
<link rel="stylesheet" href="https://smarthr.dreamstechnologies.com/laravel/template/public/build/css/style.css"></head>

<body>










<!-- Main Wrapper -->
<div class="main-wrapper">

            <!-- Header -->
<div class="header">
    <div class="main-header">

        <div class="header-left">
            <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/index" class="logo">
                <img src="https://smarthr.dreamstechnologies.com/laravel/template/public/build/img/logo.svg" alt="Logo">
            </a>
            <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/index" class="dark-logo">
                <img src="https://smarthr.dreamstechnologies.com/laravel/template/public/build/img/logo-white.svg" alt="Logo">
            </a>
        </div>

        <a id="mobile_btn" class="mobile_btn" href="#sidebar">
            <span class="bar-icon">
                <span></span>
                <span></span>
                <span></span>
            </span>
        </a>

        <div class="header-user">
            <div class="nav user-menu nav-list">

                <div class="me-auto d-flex align-items-center" id="header-search">
                    <a id="toggle_btn" href="javascript:void(0);" class="btn btn-menubar me-1">
                        <i class="ti ti-arrow-bar-to-left"></i>
                    </a>
                    <!-- Search -->
                    <div class="input-group input-group-flat d-inline-flex me-1">
                        <span class="input-icon-addon">
                            <i class="ti ti-search"></i>
                        </span>
                        <input type="text" class="form-control" placeholder="Search in HRMS">
                        <span class="input-group-text">
                            <kbd>CTRL + / </kbd>
                        </span>
                    </div>
                    <!-- /Search -->
                    <div class="dropdown crm-dropdown">
                        <a href="#" class="btn btn-menubar me-1" data-bs-toggle="dropdown">
                            <i class="ti ti-layout-grid"></i>
                        </a>
                        <div class="dropdown-menu dropdown-lg dropdown-menu-start">
                            <div class="card mb-0 border-0 shadow-none">
                                <div class="card-header">
                                    <h4>CRM</h4>
                                </div>
                                <div class="card-body pb-1">		
                                    <div class="row">
                                        <div class="col-sm-6">							
                                            <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/contacts" class="d-flex align-items-center justify-content-between p-2 crm-link mb-3">
                                                <span class="d-flex align-items-center me-3">
                                                    <i class="ti ti-user-shield text-default me-2"></i>Contacts
                                                </span>
                                                <i class="ti ti-arrow-right"></i>
                                            </a>							
                                            <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/deals-grid" class="d-flex align-items-center justify-content-between p-2 crm-link mb-3">
                                                <span class="d-flex align-items-center me-3">
                                                    <i class="ti ti-heart-handshake text-default me-2"></i>Deals
                                                </span>
                                                <i class="ti ti-arrow-right"></i>
                                            </a>								
                                            <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/pipeline" class="d-flex align-items-center justify-content-between p-2 crm-link mb-3">
                                                <span class="d-flex align-items-center me-3">
                                                    <i class="ti ti-timeline-event-text text-default me-2"></i>Pipeline
                                                </span>
                                                <i class="ti ti-arrow-right"></i>
                                            </a>		
                                        </div>
                                        <div class="col-sm-6">							
                                            <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/companies-grid" class="d-flex align-items-center justify-content-between p-2 crm-link mb-3">
                                                <span class="d-flex align-items-center me-3">
                                                    <i class="ti ti-building text-default me-2"></i>Companies
                                                </span>
                                                <i class="ti ti-arrow-right"></i>
                                            </a>								
                                            <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/leads-grid" class="d-flex align-items-center justify-content-between p-2 crm-link mb-3">
                                                <span class="d-flex align-items-center me-3">
                                                    <i class="ti ti-user-check text-default me-2"></i>Leads
                                                </span>
                                                <i class="ti ti-arrow-right"></i>
                                            </a>								
                                            <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/activity" class="d-flex align-items-center justify-content-between p-2 crm-link mb-3">
                                                <span class="d-flex align-items-center me-3">
                                                    <i class="ti ti-activity text-default me-2"></i>Activities
                                                </span>
                                                <i class="ti ti-arrow-right"></i>
                                            </a>		
                                        </div>
                                    </div>		
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/profile-settings" class="btn btn-menubar">
                        <i class="ti ti-settings-cog"></i>
                    </a>	
                </div>

                <!-- Horizontal Single -->
                <div class="sidebar sidebar-horizontal" id="horizontal-single">
                    <div class="sidebar-menu">
                        <div class="main-menu">
                            <ul class="nav-menu">
                                <li class="menu-title">
                                    <span>Main</span>
                                </li>
                                <li class="submenu">
                                    <a href="#" class="">
                                        <i class="ti ti-smart-home"></i><span>Dashboard</span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul>
                                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/index" class="">Admin Dashboard</a></li>
                                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/employee-dashboard" class="">Employee Dashboard</a></li>
                                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/deals-dashboard" class="">Deals Dashboard</a></li>
                                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/leads-dashboard" class="">Leads Dashboard</a></li>                                    </ul>
                                </li>
                                <li class="submenu">
                                    <a href="#" class="active subdrop">
                                        <i class="ti ti-user-star"></i><span>Super Admin</span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul>
                                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/dashboard" class="active">Dashboard</a></li>
                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/companies"  class="">Companies</a></li>
                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/subscription" class="">Subscriptions</a></li>
                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/packages" class="">Packages</a></li>
                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/domain" class="">Domain</a></li>
                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/purchase-transaction" class="">Purchase Transaction</a></li>
                                    </ul>
                                </li>
                                <li class="submenu">
                                    <a href="#" class="">
                                        <i class="ti ti-layout-grid-add"></i><span>Applications</span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul>
                                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/chat" class="">Chat</a></li>
                                        <li class="submenu submenu-two">
                                            <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/call" class="">Calls<span
                                                    class="menu-arrow inside-submenu"></span></a>
                                            <ul>
                                                <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/voice-call" class="">Voice Call</a></li>
                                <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/video-call" class="">Video Call</a></li>
                                <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/outgoing-call"  class="">Outgoing Call</a></li>
                                <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/incoming-call" class="">Incoming Call</a></li>
                                <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/call-history"  class="">Call History</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/calendar" class="">Calendar</a></li>
                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/email" class="">Email</a></li>
                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/todo" class="">To Do</a></li>
                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/notes" class="">Notes</a></li>
                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/social-feed" class="">Social Feed</a></li>
                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/file-manager" class="">File Manager</a></li>
                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/kanban-view" class="">Kanban</a></li>
                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/invoices" class="">Invoices</a></li>
                                    </ul>
                                </li>
                                <li class="submenu">
                                    <a href="#" class="">
                                        <i class="ti ti-layout-board-split"></i><span>Layouts</span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul>
                                        <li>
                                            <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/layout-horizontal" class="">
                                                <span>Horizontal</span>
                                            </a>
                                        </li>
                                        <li >
                                            <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/layout-detached" class="">
                                                <span>Detached</span>
                                            </a>
                                        </li>
                                        <li >
                                            <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/layout-modern" class="">
                                                <span>Modern</span>
                                            </a>
                                        </li>
                                        <li >
                                            <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/layout-two-column" class="">
                                                <span>Two Column </span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/layout-hovered" class="">
                                                <span>Hovered</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/layout-box"  class="">
                                                <span>Boxed</span>
                                            </a>
                                        </li>
                                        <li >
                                            <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/layout-horizontal-single" class="">
                                                <span>Horizontal Single</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/layout-horizontal-overlay" class="">
                                                <span>Horizontal Overlay</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/layout-horizontal-box" class="">
                                                <span>Horizontal Box</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/layout-horizontal-sidemenu" class="">
                                                <span>Menu Aside</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/layout-vertical-transparent" class="">
                                                <span>Transparent</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/layout-without-header" class="">
                                                <span>Without Header</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/layout-rtl" class="">
                                                <span>RTL</span>
                                            </a>
                                        </li>
                                        <li> 
                                            <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/layout-dark" class="">
                                                <span>Dark</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="submenu">
                                    <a href="#" class="">
                                        <i class="ti ti-user-star"></i><span>Projects</span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul>
                                        <li>
                                            <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/clients-grid" class=""><span>Clients</span>
                                            </a>
                                        </li>
                                        <li class="submenu">
                                            <a href="javascript:void(0);" class=""><span>Projects</span>
                                                <span class="menu-arrow"></span>
                                            </a>
                                            <ul>
                                                <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/projects-grid" class="">Projects</a></li>
                                                <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/tasks" class="">Tasks</a></li>
                                                <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/task-board" class="">Task Board</a></li>
                                            </ul>
                                        </li>		
                                        <li class="submenu">
                                            <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/call" class="">Crm<span class="menu-arrow"></span></a>
                                            <ul>
                                                <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/contacts-grid" class=""><span>Contacts</span></a></li>
                                <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/companies-grid" class=""><span>Companies</span></a></li>
                                <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/deals-grid" class=""><span>Deals</span></a></li>
                                <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/leads-grid" class=""><span>Leads</span></a></li>
                                <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/pipeline" class=""><span>Pipeline</span></a></li>
                                <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/analytics" class=""><span>Analytics</span></a></li>
                                <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/activity" class=""><span>Activities</span></a></li>
                                            </ul>
                                        </li>
                                        <li class="submenu">
                                            <a href="javascript:void(0);"  class=""><span>Employees</span>
                                                <span class="menu-arrow"></span>
                                            </a>
                                            <ul>
                                                <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/employees" class="">Employee Lists</a></li>
                                                <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/employees-grid" class="">Employee Grid</a></li>
                                                <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/employee-details" class="">Employee Details</a></li>
                                                <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/departments" class="">Departments</a></li>
                                                <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/designations" class="">Designations</a></li>
                                                <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/policy" class="">Policies</a></li>
                                            </ul>
                                        </li>
                                        <li class="submenu">
                                            <a href="javascript:void(0);" class=""><span>Tickets</span>
                                                <span class="menu-arrow"></span>
                                            </a>
                                            <ul>
                                                <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/tickets" class="">Tickets</a></li>
                                               <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/ticket-details" class="">Ticket Details</a></li>

                                            </ul>
                                        </li>
                                        <li class=""><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/holidays"><span>Holidays</span></a></li>                                        <li class="submenu">
                                            <a href="javascript:void(0);" class=""><span>Attendance</span>
                                                <span class="menu-arrow"></span>
                                            </a>
                                            <ul>
                                                <li class="submenu">
                                                    <a href="javascript:void(0);" class="">Leaves<span class="menu-arrow"></span></a>
                                                    <ul>
                                                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/leaves" class="" >Leaves (Admin)</a></li>
                                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/leaves-employee" class="">Leave (Employee)</a></li>
                                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/leave-settings" class="">Leave Settings</a></li>												
                                                    </ul>												
                                                </li>
                                                <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/attendance-admin" class="">Attendance (Admin)</a></li>
                                                <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/attendance-employee" class="">Attendance (Employee)</a></li>
                                                <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/timesheets" class="">Timesheets</a></li>
                                                <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/schedule-timing" class="">Shift & Schedule</a></li>
                                                <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/overtime" class="">Overtime</a></li>
                
                                            </ul>
                                        </li>
                                        <li class="submenu">
                                            <a href="javascript:void(0);" class=""><span>Performance</span>
                                                <span class="menu-arrow"></span>
                                            </a>
                                            <ul>
                                                <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/performance-indicator" class="">Performance Indicator</a></li>
                                <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/performance-review" class="">Performance Review</a></li>
                                <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/performance-appraisal" class="">Performance Appraisal</a></li>
                                <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/goal-tracking" class="">Goal List</a></li>
                                <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/goal-type" class="">Goal Type</a></li>
                                            </ul>
                                        </li>
                                        <li class="submenu">
                                            <a href="javascript:void(0);" class=""><span>Training</span>
                                                <span class="menu-arrow"></span>
                                            </a>
                                            <ul>
                                                <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/training" class="">Training List</a></li>
                                               <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/trainers" class="">Trainers</a></li>
                                                <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/training-type" class="">Training Type</a></li>

                                            </ul>
                                        </li>
                                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/promotion" class=""><span>Promotion</span></a></li>
                                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/resignation" class=""><span>Resignation</span></a></li>
                                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/termination" class=""><span>Termination</span></a></li>														
                                    </ul>
                                </li>
                                <li class="submenu">
                                    <a href="#" class="">
                                        <i class="ti ti-user-star"></i><span>Administration</span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul>
                                        <li class="submenu">
                                            <a href="javascript:void(0);" class=""><span>Sales</span>
                                                <span class="menu-arrow"></span>
                                            </a>
                                            <ul>
                                                <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/estimates" class="">Estimates</a></li>
                                                <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/invoice" class="">Invoices</a></li>
                                                <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/payments" class="">Payments</a></li>
                                                <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/expenses" class="">Expenses</a></li>
                                                <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/provident-fund" class="">Provident Fund</a></li>
                                                <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/taxes" class="">Taxes</a></li>
                                            </ul>
                                        </li>
                                        <li class="submenu">
                                            <a href="javascript:void(0);" class=""><span>Accounting</span>
                                                <span class="menu-arrow"></span>
                                            </a>
                                            <ul>
                                                <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/categories" class="" >Categories</a></li>
                                                <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/budgets" class="">Budgets</a></li>
                                                <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/budget-expenses" class="">Budget Expenses</a></li>
                                                <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/budget-revenues" class="">Budget Revenues</a></li>
                                            </ul>
                                        </li>
                                        <li class="submenu">
                                            <a href="javascript:void(0);"  class=""><span>Payroll</span>
                                                <span class="menu-arrow"></span>
                                            </a>
                                            <ul>
                                                <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/employee-salary" class="">Employee Salary</a></li>
                                                <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/payslip" class="">Payslip</a></li>
                                                <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/payroll" class="">Payroll Items</a></li>
                                            </ul>
                                        </li>
                                        <li class="submenu">
                                            <a href="javascript:void(0);"  class=""><span>Assets</span>
                                                <span class="menu-arrow"></span>
                                            </a>
                                            <ul>
                                                <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/assets" class="">Assets</a></li>
                                                <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/asset-categories" class="">Asset Categories</a></li>
                                            </ul>
                                        </li>
                                        <li class="submenu">
                                            <a href="javascript:void(0);" class=""><span>Help & Supports</span>
                                                <span class="menu-arrow"></span>
                                            </a>
                                            <ul>
                                                <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/knowledgebase" class="">Knowledge Base</a></li>
                                                 <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/activity" class="">Activities</a></li>

                                            </ul>
                                        </li>
                                        <li class="submenu">
                                            <a href="javascript:void(0);" class=""><span>User Management</span>
                                                <span class="menu-arrow"></span>
                                            </a>
                                            <ul>
                                                <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/users" class="">Users</a></li>
                                                <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/roles-permissions" class="">Roles & Permissions</a></li>  </ul>
                                        </li>
                                        <li class="submenu">
                                            <a href="javascript:void(0);" class=""><span>Reports</span>
                                                <span class="menu-arrow"></span>
                                            </a>
                                            <ul>
                                                <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/expenses-report" class="">Expense Report</a></li>
                                <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/invoice-report" class="">Invoice Report</a></li>
                                <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/payment-report" class="">Payment Report</a></li>
                                <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/project-report" class="">Project Report</a></li>
                                <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/task-report" class="">Task Report</a></li>
                                <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/user-report" class="">User Report</a></li>
                                <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/employee-report" class="">Employee Report</a></li>
                                <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/payslip-report" class="">Payslip Report</a></li>
                                <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/attendance-report" class="">Attendance Report</a></li>
                                <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/leave-report" class="">Leave Report</a></li>
                                <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/daily-report" class="">Daily Report</a></li>
                                            </ul>
                                        </li>
                                        <li class="submenu">
                                            <a href="javascript:void(0);" class=""><span>Settings</span>
                                                <span class="menu-arrow"></span>
                                            </a>
                                            <ul>
                                                <li class="submenu">
                                                    <a href="javascript:void(0);" class="">General Settings<span class="menu-arrow"></span></a>
                                                    <ul>
                                                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/profile-settings" class="">Profile</a></li>
                                                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/security-settings" class="">Security</a></li>
                                                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/notification-settings" class="">Notifications</a></li>
                                                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/connected-apps" class="">Connected Apps</a></li>                                                    </ul>
                                                </li>
                                                <li class="submenu">
                                                    <a href="javascript:void(0);" class="">Website Settings<span class="menu-arrow"></span></a>
                                                    <ul>
                                                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/bussiness-settings" class="">Business Settings</a></li>
                                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/seo-settings" class="">SEO Settings</a></li>
                                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/localization-settings" class="">Localization</a></li>
                                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/prefixes" class="">Prefixes</a></li>
                                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/preferences" class="">Preferences</a></li>
                                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/performance-appraisal" class="">Appearance</a></li>
                                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/language" class="">Language</a></li>
                                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/authentication-settings" class="">Authentication</a></li>
                                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/ai-settings" class="">AI Settings</a></li>
                                                    </ul>
                                                </li>
                                                <li class="submenu">
                                                    <a href="javascript:void(0);" class="">App Settings<span class="menu-arrow"></span></a>
                                                    <ul>
                                                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/salary-settings" class="">Salary Settings</a></li>
                                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/approval-settings" class="">Approval Settings</a></li>
                                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/invoice-settings" class="">Invoice Settings</a></li>
                                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/leave-type" class="">Leave Type</a></li>
                                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/custom-fields" class="">Custom Fields</a></li>
                                                    </ul>
                                                </li>
                                                <li class="submenu">
                                                    <a href="javascript:void(0);" class="">System Settings<span class="menu-arrow"></span></a>
                                                    <ul>
                                                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/email-settings" class="">Email Settings</a></li>
                                                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/email-template" class="">Email Templates</a></li>
                                                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/sms-settings" class="">SMS Settings</a></li>
                                                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/sms-template" class="">SMS Templates</a></li>
                                                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/otp-settings" class="">OTP</a></li>
                                                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/gdpr" class="">GDPR Cookies</a></li>
                                                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/maintenance-mode" class="">Maintenance Mode</a></li>
                
                                                    </ul>
                                                </li>
                                                <li class="submenu">
                                                    <a href="javascript:void(0);" class="">Financial Settings<span class="menu-arrow"></span></a>
                                                    <ul>
                                                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/payment-gateways" class="">Payment Gateways</a></li>
                                                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/tax-rates" class="">Tax Rate</a></li>
                                                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/currencies" class="">Currencies</a></li>
                                                    </ul>
                                                </li>
                                                <li class="submenu">
                                                    <a href="javascript:void(0);" class="">Other Settings<span class="menu-arrow"></span></a>
                                                    <ul>
                                                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/custom-css" class="">Custom CSS</a></li>
                                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/custom-js" class="">Custom JS</a></li>
                                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/cronjob" class="">Cronjob</a></li>
                                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/storage-settings" class="">Storage</a></li>
                                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/ban-ip-address" class="">Ban IP Address</a></li>
                                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/backup" class="">Backup</a></li>
                                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/clear-cache" class="">Clear Cache</a></li>

                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="submenu">
                                    <a href="#" class="">
                                        <i class="ti ti-page-break"></i><span>Pages</span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul>
                                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/starter" class=""><span>Starter</span></a></li>
                                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/profile" class=""><span>Profile</span></a></li>
                                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/gallery" class=""><span>Gallery</span></a></li>
                                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/search-result" class=""><span>Search Results</span></a></li>
                                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/timeline" class=""><span>Timeline</span></a></li>
                                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/pricing"  class=""><span>Pricing</span></a></li>
                                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/coming-soon" class=""><span>Coming Soon</span></a></li>
                                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/under-maintenance" class=""><span>Under Maintenance</span></a></li>
                                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/under-construction" class=""><span>Under Construction</span></a></li>
                                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/api-keys" class=""><span>API Keys</span></a></li>
                                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/privacy-policy" class=""><span>Privacy Policy</span></a></li>
                                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/terms-condition"  class=""><span>Terms & Conditions</span></a></li>
                
                                            <li class="submenu">
                                            <a href="#" class=""><span>Content</span> <span class="menu-arrow"></span></a>
                                            <ul>
                                                <li class=""><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/pages">Pages</a></li>
                                                <li class="submenu">
                                                    <a href="javascript:void(0);"class="">Blogs<span class="menu-arrow"></span></a>
                                                    <ul>
                                                        <li class=""><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/blogs">All Blogs</a></li>
                                        <li class=""><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/blog-categories">Categories</a></li>
                                        <li class=""><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/blog-comments">Comments</a></li>
                                        <li class=""><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/blog-tags">Tags</a></li>
                                                    </ul>
                                                </li>
                                                <li class="submenu">
                                                    <a href="javascript:void(0);" class="">Locations<span class="menu-arrow"></span></a>
                                                    <ul>
                                                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/countries" class="">Countries</a></li>
                                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/states" class="">States</a></li>
                                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/cities" class="">Cities</a></li>                                                    </ul>
                                                </li>
                                                <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/testimonials" class="">Testimonials</a></li>
                                <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/faq" class="">FAQ’S</a></li>
                                            </ul>
                                        </li>
                                        <li class="submenu">
                                            <a href="#" class="">
                                                <span>Authentication</span>
                                                <span class="menu-arrow"></span>
                                            </a>
                                            <ul>
                                                <li class="submenu">
                                                    <a href="javascript:void(0);" class="">Login<span class="menu-arrow"></span></a>
                                                    <ul>
                                                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/login" class="">Cover</a></li>
                                                       <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/login-2" class="">Illustration</a></li>
                                                       <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/login-3" class="">Basic</a></li>

                                                    </ul>
                                                </li>
                                                <li class="submenu">
                                                    <a href="javascript:void(0);" class="">Register<span class="menu-arrow"></span></a>
                                                    <ul>
                                                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/register" class="">Cover</a></li>
                                                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/register-2" class="">Illustration</a></li>
                                                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/register-3" class="">Basic</a></li>                                                    </ul>
                                                </li>
                                                <li class="submenu"><a href="javascript:void(0);" class="">Forgot Password<span class="menu-arrow"></span></a>
                                                    <ul>
                                                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/forgot-password" class="">Cover</a></li>
                                                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/forgot-password-2" class="">Illustration</a></li>
                                                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/forgot-password-3" class="">Basic</a></li>
                                                    </ul>
                                                </li>
                                                <li class="submenu">
                                                    <a href="javascript:void(0);" class="">Reset Password<span class="menu-arrow"></span></a>
                                                    <ul>
                                                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/reset-password" class="">Cover</a></li>
                                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/reset-password-2" class="">Illustration</a></li>
                                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/reset-password-3" class="">Basic</a></li>
                                                    </ul>
                                                </li>
                                                <li class="submenu">
                                                    <a href="javascript:void(0);" class="">Email Verification<span class="menu-arrow"></span></a>
                                                    <ul>
                                                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/email-verification" class="">Cover</a></li>
                                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/email-verification-2" class="">Illustration</a></li>
                                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/email-verification-3" class="">Basic</a></li>                                                    </ul>
                                                </li>
                                                <li class="submenu">
                                                    <a href="javascript:void(0);" class="">2 Step Verification<span class="menu-arrow"></span></a>
                                                    <ul>
                                                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/two-step-verification" class="">Cover</a></li>
                                                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/two-step-verification-2" class="">Illustration</a></li>
                                                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/two-step-verification-3" class="">Basic</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/lock-screen" class="">Lock Screen</a></li>
                                                <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/error-404" class="">404 Error</a></li>
                                                <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/error-500" class="">500 Error</a></li>

                                            </ul>
                                        </li>
                                        <li class="submenu">
                                            <a href="#" class="">
                                                <span>UI Interface</span>
                                                <span class="menu-arrow"></span>
                                            </a>
                                            <ul>
                                                <li class="submenu">
                                                    <a href="javascript:void(0);" class="">
                                                        <i class="ti ti-hierarchy-2"></i>
                                                        <span>Base UI</span>
                                                        <span class="menu-arrow"></span>
                                                    </a>
                                                    <ul>
                                                        <li>
                                                            <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/ui-alerts" class="">Alerts</a>
                                                        </li>
                                                        <li>
                                                            <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/ui-accordion" class="">Accordion</a>
                                                        </li>
                                                        <li>
                                                            <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/ui-avatar" class="">Avatar</a>
                                                        </li>
                                                        <li>
                                                            <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/ui-badges" class="">Badges</a>
                                                        </li>
                                                        <li>
                                                            <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/ui-borders" class="">Border</a>
                                                        </li>
                                                        <li>
                                                            <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/ui-buttons" class="">Buttons</a>
                                                        </li>
                                                        <li>
                                                            <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/ui-buttons-group" class="">Button Group</a>
                                                        </li>
                                                        <li>
                                                            <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/ui-breadcrumb" class="">Breadcrumb</a>
                                                        </li>
                                                        <li>
                                                            <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/ui-cards" class="">Card</a>
                                                        </li>
                                                        <li>
                                                            <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/ui-carousel" class="">Carousel</a>
                                                        </li>
                                                        <li>
                                                            <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/ui-colors" class="">Colors</a>
                                                        </li>
                                                        <li>
                                                            <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/ui-dropdowns" class="">Dropdowns</a>
                                                        </li>
                                                        <li>
                                                            <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/ui-grid" class="">Grid</a>
                                                        </li>
                                                        <li>
                                                            <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/ui-images" class="">Images</a>
                                                        </li>
                                                        <li>
                                                            <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/ui-lightbox" class="">Lightbox</a>
                                                        </li>
                                                        <li>
                                                            <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/ui-media" class="">Media</a>
                                                        </li>
                                                        <li>
                                                            <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/ui-modals" class="">Modals</a>
                                                        </li>
                                                        <li>
                                                            <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/ui-offcanvas" class="">Offcanvas</a>
                                                        </li>
                                                        <li>
                                                            <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/ui-pagination" class="">Pagination</a>
                                                        </li>
                                                        <li>
                                                            <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/ui-popovers" class="">Popovers</a>
                                                        </li>
                                                        <li>
                                                            <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/ui-progress" class="">Progress</a>
                                                        </li>
                                                        <li>
                                                            <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/ui-placeholders" class="">Placeholders</a>
                                                        </li>
                                                        <li>
                                                            <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/ui-spinner" class="">Spinner</a>
                                                        </li>
                                                        <li>
                                                            <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/ui-sweetalerts" class="">Sweet Alerts</a>
                                                        </li>
                                                        <li>
                                                            <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/ui-nav-tabs" class="">Tabs</a>
                                                        </li>
                                                        <li>
                                                            <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/ui-toasts" class="">Toasts</a>
                                                        </li>
                                                        <li>
                                                            <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/ui-tooltips" class="">Tooltips</a>
                                                        </li>
                                                        <li>
                                                            <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/ui-typography" class="">Typography</a>
                                                        </li>
                                                        <li>
                                                            <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/ui-video" class="">Video</a>
                                                        </li>
                                                        <li>
                                                            <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/ui-sortable" class="">Sortable</a>
                                                        </li>
                                                        <li>
                                                            <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/ui-swiperjs" class="">Swiperjs</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="submenu">
                                                    <a href="javascript:void(0);" class="">
                                                        <i class="ti ti-hierarchy-3"></i>
                                                        <span>Advanced UI</span>
                                                        <span class="menu-arrow"></span>
                                                    </a>
                                                    <ul>
                                                        <li>
                                                            <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/ui-ribbon" class="">Ribbon</a>
                                                        </li>
                                                        <li>
                                                            <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/ui-clipboard" class="">Clipboard</a>
                                                        </li>
                                                        <li>
                                                            <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/ui-drag-drop" class="">Drag & Drop</a>
                                                        </li>
                                                        <li>
                                                            <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/ui-rangeslider" class="">Range Slider</a>
                                                        </li>
                                                        <li>
                                                            <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/ui-rating" class="">Rating</a>
                                                        </li>
                                                        <li>
                                                            <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/ui-text-editor" class="">Text Editor</a>
                                                        </li>
                                                        <li>
                                                            <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/ui-counter" class="">Counter</a>
                                                        </li>
                                                        <li>
                                                            <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/ui-scrollbar" class="">Scrollbar</a>
                                                        </li>
                                                        <li>
                                                            <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/ui-stickynote" class="">Sticky Note</a>
                                                        </li>
                                                        <li>
                                                            <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/ui-timeline" class="">Timeline</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="submenu">
                                                    <a href="javascript:void(0);" class="">
                                                        <i class="ti ti-input-search"></i>
                                                        <span>Forms</span>
                                                        <span class="menu-arrow"></span>
                                                    </a>
                                                    <ul>
                                                        <li class="submenu submenu-two">
                                                            <a href="javascript:void(0);"  class="">Form Elements <span class="menu-arrow inside-submenu"></span>
                                                            </a>
                                                            <ul>
                                                                <li>
                                                                    <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/form-basic-inputs" class="">Basic Inputs</a>
                                                                </li>
                                                                <li>
                                                                    <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/form-checkbox-radios" class="">Checkbox & Radios</a>
                                                                </li>
                                                                <li>
                                                                    <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/form-input-groups" class="">Input Groups</a>
                                                                </li>
                                                                <li>
                                                                    <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/form-grid-gutters" class="">Grid & Gutters</a>
                                                                </li>
                                                                <li>
                                                                    <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/form-select" class="">Form Select</a>
                                                                </li>
                                                                <li>
                                                                    <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/form-mask" class="">Input Masks</a>
                                                                </li>
                                                                <li>
                                                                    <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/form-fileupload" class="">File Uploads</a>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <li class="submenu submenu-two">
                                                            <a href="javascript:void(0);" class="">Layouts <span class="menu-arrow inside-submenu"></span>
                                                            </a>
                                                            <ul>
                                                                <li>
                                                                    <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/form-horizontal"  class="">Horizontal Form</a>
                                                                </li>
                                                                <li>
                                                                    <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/form-vertical"  class="">Vertical Form</a>
                                                                </li>
                                                                <li>
                                                                    <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/form-floating-labels"  class="">Floating Labels</a>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <li>
                                                            <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/form-validation"  class="">Form Validation</a>
                                                        </li>
                                                        <li>
                                                            <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/form-select2"  class="">Select2</a>
                                                        </li>
                                                        <li>
                                                            <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/form-wizard"  class="">Form Wizard</a>
                                                        </li>
                                                        <li>
                                                            <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/form-pickers"  class="">Form Pickers</a>
                                                        </li>
                                                        
                                                    </ul>
                                                </li>
                                                <li class="submenu">
                                                    <a href="javascript:void(0);" class="">
                                                        <i class="ti ti-table-plus"></i>
                                                        <span>Tables</span>
                                                        <span class="menu-arrow"></span>
                                                    </a>
                                                    <ul>
                                                        <li>
                                                            <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/tables-basic"  class="">Basic Tables </a>
                                                        </li>
                                                        <li>
                                                            <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/data-tables"  class="">Data Table </a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="submenu">
                                                    <a href="javascript:void(0);" class="">
                                                        <i class="ti ti-chart-line"></i>
                                                        <span>Charts</span>
                                                        <span class="menu-arrow"></span>
                                                    </a>
                                                    <ul>
                                                        <li>
                                                            <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/chart-apex"  class="">Apex Charts</a>
                                                        </li>
                                                        <li>
                                                            <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/chart-c3" class="">Chart C3</a>
                                                        </li>
                                                        <li>
                                                            <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/chart-js" class="">Chart Js</a>
                                                        </li>
                                                        <li>
                                                            <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/chart-morris" class="">Morris Charts</a>
                                                        </li>
                                                        <li>
                                                            <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/chart-flot" class="">Flot Charts</a>
                                                        </li>
                                                        <li>
                                                            <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/chart-peity" class="">Peity Charts</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="submenu">
                                                    <a href="javascript:void(0);" class="">
                                                        <i class="ti ti-icons"></i>
                                                        <span>Icons</span>
                                                        <span class="menu-arrow"></span>
                                                    </a>
                                                    <ul>
                                                        <li>
                                                            <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/icon-fontawesome" class="">Fontawesome Icons</a>
                                                        </li>
                                                        <li>
                                                            <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/icon-tabler" class="">Tabler Icons</a>
                                                        </li>
                                                        <li>
                                                            <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/icon-bootstrap" class="">Bootstrap Icons</a>
                                                        </li>
                                                        <li>
                                                            <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/icon-remix" class="">Remix Icons</a>
                                                        </li>
                                                        <li>
                                                            <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/icon-feather" class="">Feather Icons</a>
                                                        </li>
                                                        <li>
                                                            <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/icon-ionic" class="">Ionic Icons</a>
                                                        </li>
                                                        <li>
                                                            <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/icon-material" class="">Material Icons</a>
                                                        </li>
                                                        <li>
                                                            <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/icon-pe7" class="">Pe7 Icons</a>
                                                        </li>
                                                        <li>
                                                            <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/icon-simpleline" class="">Simpleline Icons</a>
                                                        </li>
                                                        <li>
                                                            <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/icon-themify" class="">Themify Icons</a>
                                                        </li>
                                                        <li>
                                                            <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/icon-weather" class="">Weather Icons</a>
                                                        </li>
                                                        <li>
                                                            <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/icon-typicon" class="">Typicon Icons</a>
                                                        </li>
                                                        <li>
                                                            <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/icon-flag" class="">Flag Icons</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="submenu">
                                                    <a href="javascript:void(0);"  class="">
                                                        <i class="ti ti-table-plus"></i>
                                                        <span>Maps</span>
                                                        <span class="menu-arrow"></span>
                                                    </a>
                                                    <ul>
                                                        <li>
                                                            <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/maps-vector" class="">Vector</a>
                                                        </li>
                                                        <li>
                                                            <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/maps-leaflet" class="">Leaflet</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Documentation</a></li>
                                        <li><a href="#">Change Log</a></li>
                                        <li class="submenu">
                                            <a href="javascript:void(0);"><span>Multi Level</span><span class="menu-arrow"></span></a>
                                            <ul>
                                                <li><a href="javascript:void(0);">Multilevel 1</a></li>
                                                <li class="submenu submenu-two">
                                                    <a href="javascript:void(0);">Multilevel 2<span class="menu-arrow inside-submenu"></span></a>
                                                    <ul>
                                                        <li><a href="javascript:void(0);">Multilevel 2.1</a></li>
                                                        <li class="submenu submenu-two submenu-three">
                                                            <a href="javascript:void(0);">Multilevel 2.2<span class="menu-arrow inside-submenu inside-submenu-two"></span></a>
                                                            <ul>
                                                                <li><a href="javascript:void(0);">Multilevel 2.2.1</a></li>
                                                                <li><a href="javascript:void(0);">Multilevel 2.2.2</a></li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li><a href="javascript:void(0);">Multilevel 3</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- /Horizontal Single -->

                <div class="d-flex align-items-center">
                    
                    
                    <div class="dropdown profile-dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle d-flex align-items-center"
                            data-bs-toggle="dropdown">
                            <span class="avatar avatar-sm online">
                                <img src="" alt="Img" class="img-fluid rounded-circle">
                            </span>
                        </a>
                        <div class="dropdown-menu shadow-none">
                            <div class="card mb-0">
                                <div class="card-header">
                                    <div class="d-flex align-items-center">
                                        <span class="avatar avatar-lg me-2 avatar-rounded">
                                            <img src="https://smarthr.dreamstechnologies.com/laravel/template/public/build/img/profiles/avatar-12.jpg" alt="img">
                                        </span>
                                        <div>
                                            <h5 class="mb-0">{{ Auth::user()->name }}</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    {{-- <x-dropdown-link :href="route('profile.edit')">
                                        {{ __('Profile') }}
                                    </x-dropdown-link> --}}
                                    <a class="dropdown-item d-inline-flex align-items-center p-0 py-2" href="route('profile.edit')">
                                        <i class="ti ti-user-circle me-1"></i>  {{ __('Profile') }}
                                    </a>
                                    <a class="dropdown-item d-inline-flex align-items-center p-0 py-2" href="https://smarthr.dreamstechnologies.com/laravel/template/public/bussiness-settings">
                                        <i class="ti ti-settings me-1"></i>Settings
                                    </a>
                                   
                                      
                                   
                                       
                                    </a> 
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                    <a class="dropdown-item d-inline-flex align-items-center p-0 py-2" href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                        <i class="ti ti-login me-2"></i> {{ __('Log Out') }}
                                    </a>
                                </form>
                               
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div class="dropdown mobile-user-menu">
            <a href="javascript:void(0);" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
            <div class="dropdown-menu dropdown-menu-end">
                <a class="dropdown-item" href="https://smarthr.dreamstechnologies.com/laravel/template/public/profile">My Profile</a>
                <a class="dropdown-item" href="https://smarthr.dreamstechnologies.com/laravel/template/public/profile-settings">Settings</a>
                <a class="dropdown-item" href="https://smarthr.dreamstechnologies.com/laravel/template/public/login">Logout</a>
            </div>
        </div>
        <!-- /Mobile Menu -->

    </div>

</div>
<!-- /Header -->        <!-- Sidebar -->
<div class="sidebar" id="sidebar">
    <!-- Logo -->
    <div class="sidebar-logo">
        <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/index" class="logo logo-normal">
            <img src="https://smarthr.dreamstechnologies.com/laravel/template/public/build/img/logo.svg" alt="Logo">
        </a>
        <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/index" class="logo-small">
            <img src="https://smarthr.dreamstechnologies.com/laravel/template/public/build/img/logo-small.svg" alt="Logo">
        </a>
        <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/index" class="dark-logo">
            <img src="https://smarthr.dreamstechnologies.com/laravel/template/public/build/img/logo-white.svg" alt="Logo">
        </a>
    </div>
    <!-- /Logo -->
    <div class="modern-profile p-3 pb-0">
        <div class="text-center rounded bg-light p-3 mb-4 user-profile">
            <div class="avatar avatar-lg online mb-3">
                <img src="https://smarthr.dreamstechnologies.com/laravel/template/public/build/img/profiles/avatar-02.jpg" alt="Img" class="img-fluid rounded-circle">
            </div>
            <h6 class="fs-12 fw-normal mb-1">Adrian Herman</h6>
            <p class="fs-10">System Admin</p>
        </div>
        <div class="sidebar-nav mb-3">
            <ul class="nav nav-tabs nav-tabs-solid nav-tabs-rounded nav-justified bg-transparent" role="tablist">
                <li class="nav-item"><a class="nav-link active border-0" href="#">Menu</a></li>
                <li class="nav-item"><a class="nav-link border-0" href="https://smarthr.dreamstechnologies.com/laravel/template/public/chat">Chats</a></li>
                <li class="nav-item"><a class="nav-link border-0" href="https://smarthr.dreamstechnologies.com/laravel/template/public/email">Inbox</a></li>
            </ul>
        </div>
    </div>
    <div class="sidebar-header p-3 pb-0 pt-2">
        <div class="text-center rounded bg-light p-2 mb-4 sidebar-profile d-flex align-items-center">
            <div class="avatar avatar-md onlin">
                <img src="https://smarthr.dreamstechnologies.com/laravel/template/public/build/img/profiles/avatar-02.jpg" alt="Img" class="img-fluid rounded-circle">
            </div>
            <div class="text-start sidebar-profile-info ms-2">
                <h6 class="fs-12 fw-normal mb-1">Adrian Herman</h6>
                <p class="fs-10">System Admin</p>
            </div>
        </div>
        <div class="input-group input-group-flat d-inline-flex mb-4">
            <span class="input-icon-addon">
                <i class="ti ti-search"></i>
            </span>
            <input type="text" class="form-control" placeholder="Search in HRMS">
            <span class="input-group-text">
                <kbd>CTRL + / </kbd>
            </span>
        </div>
        <div class="d-flex align-items-center justify-content-between menu-item mb-3">
            <div class="me-3">
                <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/calendar" class="btn btn-menubar">
                    <i class="ti ti-layout-grid-remove"></i>
                </a>
            </div>
            <div class="me-3">
                <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/chat" class="btn btn-menubar position-relative">
                    <i class="ti ti-brand-hipchat"></i>
                    <span class="badge bg-info rounded-pill d-flex align-items-center justify-content-center header-badge">5</span>
                </a>
            </div>
            <div class="me-3 notification-item">
                <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/activity" class="btn btn-menubar position-relative me-1">
                    <i class="ti ti-bell"></i>
                    <span class="notification-status-dot"></span>
                </a>
            </div>
            <div class="me-0">
                <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/email" class="btn btn-menubar">
                    <i class="ti ti-message"></i>
                </a>
            </div>
        </div>
    </div>
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                <li class="menu-title"><span>MAIN MENU</span></li>
                <li>
                    <ul>
                        <li class="submenu">
                            <a href="javascript:void(0);" class="">
                                <i class="ti ti-smart-home"></i>
                                <span>Dashboard</span>
                                <span class="badge badge-danger fs-10 fw-medium text-white p-1">Hot</span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul>
                                <li><a href="" class="">Admin Dashboard</a></li>
                                <li><a href="expenses" class="">Show Expenses</a></li>
                                <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/deals-dashboard" class="">Calender</a></li>
                                <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/leads-dashboard" class="">Leads Dashboard</a></li>
                            </ul>
                        </li>
                       
                        <li>
                            <a href="/dashboard" >
                                <i class="ti ti-user-star"></i><span>Home</span>
                            </a>
                        </li>
                        <li>
                            <a href="/expenses/create" >
                                <i class="ti ti-user-star"></i><span>Add Expenses</span>
                            </a>
                        </li>
                        <li >
                            <a href="/expenses" class="active subdrop">
                                <i class="ti ti-user-star"></i><span>Show Expenses</span>
                            </a>
                        </li>
                        <li >
                            <a href="/settings" class="active subdrop">
                                <i class="ti ti-user-star"></i><span>Settings</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="active subdrop">
                                <i class="ti ti-user-star"></i><span>Calender</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="menu-title"><span>LAYOUT</span></li>
                <li>
                    <ul>
                        <li class="">
                            <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/layout-horizontal">
                                <i class="ti ti-layout-navbar"></i><span>Horizontal</span>
                            </a>
                        </li>
                        <li  class="">
                            <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/layout-detached">
                                <i class="ti ti-details"></i><span>Detached</span>
                            </a>
                        </li>
                        <li  class="">
                            <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/layout-modern">
                                <i class="ti ti-layout-board-split"></i><span>Modern</span>
                            </a>
                        </li>
                        <li  class="">
                            <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/layout-two-column">
                                <i class="ti ti-columns-2"></i><span>Two Column </span>
                            </a>
                        </li>
                        <li  class="">
                            <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/layout-hovered">
                                <i class="ti ti-column-insert-left"></i><span>Hovered</span>
                            </a>
                        </li>
                        <li  class="">
                            <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/layout-box">
                                <i class="ti ti-layout-align-middle"></i><span>Boxed</span>
                            </a>
                        </li>
                        <li  class="">
                            <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/layout-horizontal-single">
                                <i class="ti ti-layout-navbar-inactive"></i><span>Horizontal Single</span>
                            </a>
                        </li>
                        <li  class="">
                            <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/layout-horizontal-overlay">
                                <i class="ti ti-layout-collage"></i><span>Horizontal Overlay</span>
                            </a>
                        </li>
                        <li  class="">
                            <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/layout-horizontal-box">
                                <i class="ti ti-layout-board"></i><span>Horizontal Box</span>
                            </a>
                        </li>
                        <li  class="">
                            <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/layout-horizontal-sidemenu">
                                <i class="ti ti-table"></i><span>Menu Aside</span>
                            </a>
                        </li>
                        <li  class="">
                            <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/layout-vertical-transparent">
                                <i class="ti ti-layout"></i><span>Transparent</span>
                            </a>
                        </li>
                        <li  class="">
                            <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/layout-without-header">
                                <i class="ti ti-layout-sidebar"></i><span>Without Header</span>
                            </a>
                        </li>
                        <li  class="">
                            <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/layout-rtl">
                                <i class="ti ti-text-direction-rtl"></i><span>RTL</span>
                            </a>
                        </li>
                        <li  class="">
                            <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/layout-dark">
                                <i class="ti ti-moon"></i><span>Dark</span>
                            </a>
                        </li>
                    </ul>
                </li>
                
            </ul>
        </div>
    </div>
</div>
<!-- /Sidebar -->

<!-- Horizontal Menu -->
<div class="sidebar sidebar-horizontal" id="horizontal-menu">
    <div class="sidebar-menu">
        <div class="main-menu">
            <ul class="nav-menu">
                <li class="menu-title">
                    <span>Main</span>
                </li>
                <li class="submenu">
                    <a href="#"   class="">
                        <i class="ti ti-smart-home"></i><span>Dashboard</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul>
                        <li><a href="" class="">Admin Dashboard</a></li>
                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/employee-dashboard" class="">Employee Dashboard</a></li>
                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/deals-dashboard" class="">Deals Dashboard</a></li>
                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/leads-dashboard" class="">Leads Dashboard</a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="#" class="active subdrop">
                        <i class="ti ti-user-star"></i><span>Super Admin</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul>
                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/dashboard" class="active">Dashboard</a></li>
                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/companies"  class="">Companies</a></li>
                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/subscription" class="">Subscriptions</a></li>
                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/packages" class="">Packages</a></li>
                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/domain" class="">Domain</a></li>
                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/purchase-transaction" class="">Purchase Transaction</a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="#" class="">
                        <i class="ti ti-layout-grid-add"></i><span>Applications</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul>
                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/chat" class="">Chat</a></li>
                        <li class="submenu submenu-two">
                            <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/call" class="">Calls<span class="menu-arrow inside-submenu"></span></a>
                            <ul>
                                <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/voice-call" class="">Voice Call</a></li>
                                <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/video-call" class="">Video Call</a></li>
                                <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/outgoing-call"  class="">Outgoing Call</a></li>
                                <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/incoming-call" class="">Incoming Call</a></li>
                                <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/call-history"  class="">Call History</a></li>
                            </ul>
                        </li>
                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/calendar" class="">Calendar</a></li>
                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/email" class="">Email</a></li>
                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/todo" class="">To Do</a></li>
                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/notes" class="">Notes</a></li>
                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/social-feed" class="">Social Feed</a></li>
                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/file-manager" class="">File Manager</a></li>
                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/kanban-view" class="">Kanban</a></li>
                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/invoices" class="">Invoices</a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="#" class="">
                        <i class="ti ti-layout-board-split"></i><span>Layouts</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul>
                        <li >
                            <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/layout-horizontal" class="">
                                <span>Horizontal</span>
                            </a>
                        </li>
                        <li >
                            <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/layout-detached" class="">
                                <span>Detached</span>
                            </a>
                        </li>
                        <li>
                            <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/layout-modern"  class="">
                                <span>Modern</span>
                            </a>
                        </li>
                        <li>
                            <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/layout-two-column" class="">
                                <span>Two Column </span>
                            </a>
                        </li>
                        <li>
                            <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/layout-hovered" class="">
                                <span>Hovered</span>
                            </a>
                        </li>
                        <li>
                            <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/layout-box" class="">
                                <span>Boxed</span>
                            </a>
                        </li>
                        <li>
                            <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/layout-horizontal-single" class="">
                                <span>Horizontal Single</span>
                            </a>
                        </li>
                        <li>
                            <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/layout-horizontal-overlay" class="">
                                <span>Horizontal Overlay</span>
                            </a>
                        </li>
                        <li>
                            <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/layout-horizontal-box" class="">
                                <span>Horizontal Box</span>
                            </a>
                        </li>
                        <li>
                            <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/layout-horizontal-sidemenu" class="">
                                <span>Menu Aside</span>
                            </a>
                        </li>
                        <li>
                            <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/layout-vertical-transparent" class="">
                                <span>Transparent</span>
                            </a>
                        </li>
                        <li>
                            <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/layout-without-header" class="">
                                <span>Without Header</span>
                            </a>
                        </li>
                        <li>
                            <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/layout-rtl" class="">
                                <span>RTL</span>
                            </a>
                        </li>
                        <li> 
                            <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/layout-dark" class="">
                                <span>Dark</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="#" class="">
                        <i class="ti ti-user-star"></i><span>Projects</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul>
                        <li>
                            <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/clients-grid" class=""><span>Clients</span>
                            </a>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);"class=""><span>Projects</span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul>
                                <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/projects-grid" class="">Projects</a></li>
                                <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/tasks" class="">Tasks</a></li>
                                <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/task-board" class="">Task Board</a></li>
                            </ul>
                        </li>		
                        <li class="submenu">
                            <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/call" class="">Crm<span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/contacts-grid" class=""><span>Contacts</span></a></li>
                                <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/companies-grid" class=""><span>Companies</span></a></li>
                                <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/deals-grid" class=""><span>Deals</span></a></li>
                                <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/leads-grid" class=""><span>Leads</span></a></li>
                                <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/pipeline" class=""><span>Pipeline</span></a></li>
                                <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/analytics" class=""><span>Analytics</span></a></li>
                                <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/activity" class=""><span>Activities</span></a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);" class=""><span>Employees</span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul>
                                <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/employees" class="">Employee Lists</a></li>
                                <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/employees-grid" class="">Employee Grid</a></li>
                                <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/employee-details" class="">Employee Details</a></li>
                                <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/departments" class="">Departments</a></li>
                                <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/designations" class="">Designations</a></li>
                                <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/policy" class="">Policies</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);"  class=""><span>Tickets</span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul>
                                <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/tickets" class="">Tickets</a></li>
                                <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/ticket-details" class="">Ticket Details</a></li>
                            </ul>
                        </li>
                        <li class=""><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/holidays"><span>Holidays</span></a></li>
                        <li class="submenu">
                            <a href="javascript:void(0);" class=""><span>Attendance</span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul>
                                <li class="submenu">
                                    <a href="javascript:void(0);" class="">Leaves<span class="menu-arrow"></span></a>
                                    <ul>
                                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/leaves" class="" >Leaves (Admin)</a></li>
                                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/leaves-employee" class="">Leave (Employee)</a></li>
                                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/leave-settings" class="">Leave Settings</a></li>												
                                    </ul>												
                                </li>
                                <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/attendance-admin" class="">Attendance (Admin)</a></li>
                                <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/attendance-employee" class="">Attendance (Employee)</a></li>
                                <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/timesheets" class="">Timesheets</a></li>
                                <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/schedule-timing" class="">Shift & Schedule</a></li>
                                <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/overtime" class="">Overtime</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);" class=""><span>Performance</span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul>
                                <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/performance-indicator" class="">Performance Indicator</a></li>
                                <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/performance-review" class="">Performance Review</a></li>
                                <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/performance-appraisal" class="">Performance Appraisal</a></li>
                                <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/goal-tracking" class="">Goal List</a></li>
                                <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/goal-type" class="">Goal Type</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);" class=""><span>Training</span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul>
                                <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/training" class="">Training List</a></li>
                                <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/trainers" class="">Trainers</a></li>
                                <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/training-type" class="">Training Type</a></li>
                            </ul>
                        </li>
                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/promotion" class=""><span>Promotion</span></a></li>
                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/resignation" class=""><span>Resignation</span></a></li>
                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/termination"  class=""><span>Termination</span></a></li>														
                    </ul>
                </li>
                <li class="submenu">
                    <a href="#" class="">
                        <i class="ti ti-user-star"></i><span>Administration</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul>
                        <li class="submenu">
                            <a href="javascript:void(0);" class=""><span>Sales</span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul>
                                <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/estimates" class="">Estimates</a></li>
                                <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/invoice" class="">Invoices</a></li>
                                <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/payments" class="">Payments</a></li>
                                <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/expenses" class="">Expenses</a></li>
                                <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/provident-fund" class="">Provident Fund</a></li>
                                <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/taxes" class="">Taxes</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);" class=""><span>Accounting</span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul>
                                <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/categories" class="" >Categories</a></li>
                                <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/budgets" class="">Budgets</a></li>
                                <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/budget-expenses" class="">Budget Expenses</a></li>
                                <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/budget-revenues" class="">Budget Revenues</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);" class=""><span>Payroll</span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul>
                                <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/employee-salary" class="">Employee Salary</a></li>
                                <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/payslip" class="">Payslip</a></li>
                                <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/payroll" class="">Payroll Items</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);" class=""><span>Assets</span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul>
                                <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/assets" class="">Assets</a></li>
                                <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/asset-categories" class="">Asset Categories</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);" class=""><span>Help & Supports</span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul>
                                <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/knowledgebase" class="">Knowledge Base</a></li>
                                <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/activity" class="">Activities</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);" class=""><span>User Management</span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul>
                                <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/users" class="">Users</a></li>
                                <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/roles-permissions" class="">Roles & Permissions</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);" class=""><span>Reports</span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul>
                                <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/expenses-report" class="">Expense Report</a></li>
                                <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/invoice-report" class="">Invoice Report</a></li>
                                <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/payment-report" class="">Payment Report</a></li>
                                <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/project-report" class="">Project Report</a></li>
                                <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/task-report" class="">Task Report</a></li>
                                <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/user-report" class="">User Report</a></li>
                                <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/employee-report" class="">Employee Report</a></li>
                                <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/payslip-report" class="">Payslip Report</a></li>
                                <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/attendance-report" class="">Attendance Report</a></li>
                                <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/leave-report" class="">Leave Report</a></li>
                                <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/daily-report" class="">Daily Report</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);" class=""><span>Settings</span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul>
                                <li class="submenu">
                                    <a href="javascript:void(0);" class="">General Settings<span class="menu-arrow"></span></a>
                                    <ul>
                                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/profile-settings" class="">Profile</a></li>
                                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/security-settings" class="">Security</a></li>
                                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/notification-settings" class="">Notifications</a></li>
                                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/connected-apps" class="">Connected Apps</a></li>
                                    </ul>
                                </li>
                                <li class="submenu">
                                    <a href="javascript:void(0);" class="">Website Settings<span class="menu-arrow"></span></a>
                                    <ul>
                                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/bussiness-settings" class="">Business Settings</a></li>
                                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/seo-settings" class="">SEO Settings</a></li>
                                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/localization-settings" class="">Localization</a></li>
                                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/prefixes" class="">Prefixes</a></li>
                                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/preferences" class="">Preferences</a></li>
                                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/performance-appraisal" class="">Appearance</a></li>
                                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/language" class="">Language</a></li>
                                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/authentication-settings" class="">Authentication</a></li>
                                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/ai-settings" class="">AI Settings</a></li>
                                    </ul>
                                </li>
                                <li class="submenu">
                                    <a href="javascript:void(0);" class="">App Settings<span class="menu-arrow"></span></a>
                                    <ul>
                                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/salary-settings" class="">Salary Settings</a></li>
                                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/approval-settings" class="">Approval Settings</a></li>
                                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/invoice-settings" class="">Invoice Settings</a></li>
                                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/leave-type" class="">Leave Type</a></li>
                                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/custom-fields" class="">Custom Fields</a></li>
                                    </ul>
                                </li>
                                <li class="submenu">
                                    <a href="javascript:void(0);" class="">System Settings<span class="menu-arrow"></span></a>
                                    <ul>
                                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/email-settings" class="">Email Settings</a></li>
                                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/email-template" class="">Email Templates</a></li>
                                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/sms-settings" class="">SMS Settings</a></li>
                                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/sms-template" class="">SMS Templates</a></li>
                                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/otp-settings" class="">OTP</a></li>
                                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/gdpr" class="">GDPR Cookies</a></li>
                                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/maintenance-mode" class="">Maintenance Mode</a></li>
                                    </ul>
                                </li>
                                <li class="submenu">
                                    <a href="javascript:void(0);" class="">Financial Settings<span class="menu-arrow"></span></a>
                                    <ul>
                                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/payment-gateways" class="">Payment Gateways</a></li>
                                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/tax-rates" class="">Tax Rate</a></li>
                                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/currencies" class="">Currencies</a></li>
                                    </ul>
                                </li>
                                <li class="submenu">
                                    <a href="javascript:void(0);" class="">Other Settings<span class="menu-arrow"></span></a>
                                    <ul>
                                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/custom-css" class="">Custom CSS</a></li>
                                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/custom-js" class="">Custom JS</a></li>
                                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/cronjob" class="">Cronjob</a></li>
                                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/storage-settings" class="">Storage</a></li>
                                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/ban-ip-address" class="">Ban IP Address</a></li>
                                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/backup" class="">Backup</a></li>
                                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/clear-cache" class="">Clear Cache</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="#" class="">
                        <i class="ti ti-page-break"></i><span>Pages</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul>
                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/starter" class=""><span>Starter</span></a></li>
                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/profile" class=""><span>Profile</span></a></li>
                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/gallery" class=""><span>Gallery</span></a></li>
                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/search-result" class=""><span>Search Results</span></a></li>
                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/timeline" class=""><span>Timeline</span></a></li>
                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/pricing"  class=""><span>Pricing</span></a></li>
                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/coming-soon" class=""><span>Coming Soon</span></a></li>
                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/under-maintenance" class=""><span>Under Maintenance</span></a></li>
                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/under-construction" class=""><span>Under Construction</span></a></li>
                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/api-keys" class=""><span>API Keys</span></a></li>
                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/privacy-policy" class=""><span>Privacy Policy</span></a></li>
                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/terms-condition"  class=""><span>Terms & Conditions</span></a></li>
                        <li class="submenu">
                            <a href="#" class=""><span>Content</span> <span class="menu-arrow"></span></a>
                            <ul>
                                <li class=""><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/pages">Pages</a></li>
                                <li class="submenu">
                                    <a href="javascript:void(0);" class="">Blogs<span class="menu-arrow"></span></a>
                                    <ul>
                                        <li class=""><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/blogs">All Blogs</a></li>
                                        <li class=""><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/blog-categories">Categories</a></li>
                                        <li class=""><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/blog-comments">Comments</a></li>
                                        <li class=""><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/blog-tags">Tags</a></li>
                                    </ul>
                                </li>
                                <li class="submenu">
                                    <a href="javascript:void(0);" class="">Locations<span class="menu-arrow"></span></a>
                                    <ul>
                                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/countries" class="">Countries</a></li>
                                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/states" class="">States</a></li>
                                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/cities" class="">Cities</a></li>
                                    </ul>
                                </li>
                                <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/testimonials" class="">Testimonials</a></li>
                                <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/faq" class="">FAQ’S</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#" class="">
                                <span>Authentication</span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul>
                                <li class="submenu">
                                    <a href="javascript:void(0);" class="">Login<span class="menu-arrow"></span></a>
                                    <ul>
                                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/login" class="">Cover</a></li>
                                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/login-2" class="">Illustration</a></li>
                                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/login-3" class="">Basic</a></li>
                                    </ul>
                                </li>
                                <li class="submenu">
                                    <a href="javascript:void(0);" class="">Register<span class="menu-arrow"></span></a>
                                    <ul>
                                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/register" class="">Cover</a></li>
                                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/register-2" class="">Illustration</a></li>
                                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/register-3" class="">Basic</a></li>
                                    </ul>
                                </li>
                                <li class="submenu"><a href="javascript:void(0);" class="">Forgot Password<span class="menu-arrow"></span></a>
                                    <ul>
                                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/forgot-password" class="">Cover</a></li>
                                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/forgot-password-2" class="">Illustration</a></li>
                                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/forgot-password-3" class="">Basic</a></li>
                                    </ul>
                                </li>
                                <li class="submenu">
                                    <a href="javascript:void(0);" class="">Reset Password<span class="menu-arrow"></span></a>
                                    <ul>
                                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/reset-password" class="">Cover</a></li>
                                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/reset-password-2" class="">Illustration</a></li>
                                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/reset-password-3" class="">Basic</a></li>
                                    </ul>
                                </li>
                                <li class="submenu">
                                    <a href="javascript:void(0);" class="">Email Verification<span class="menu-arrow"></span></a>
                                    <ul>
                                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/email-verification" class="">Cover</a></li>
                                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/email-verification-2" class="">Illustration</a></li>
                                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/email-verification-3" class="">Basic</a></li>
                                    </ul>
                                </li>
                                <li class="submenu">
                                    <a href="javascript:void(0);" class="">2 Step Verification<span class="menu-arrow"></span></a>
                                    <ul>
                                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/two-step-verification" class="">Cover</a></li>
                                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/two-step-verification-2" class="">Illustration</a></li>
                                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/two-step-verification-3" class="">Basic</a></li>
                                    </ul>
                                </li>
                                <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/lock-screen" class="">Lock Screen</a></li>
                                <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/error-404" class="">404 Error</a></li>
                                <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/error-500" class="">500 Error</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#" class="">
                                <span>UI Interface</span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul>
                                <li class="submenu">
                                    <a href="javascript:void(0);" class="">
                                        <i class="ti ti-hierarchy-2"></i>
                                        <span>Base UI</span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul>
                                        <li>
                                            <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/ui-alerts" class="">Alerts</a>
                                        </li>
                                        <li>
                                            <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/ui-accordion" class="">Accordion</a>
                                        </li>
                                        <li>
                                            <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/ui-avatar" class="">Avatar</a>
                                        </li>
                                        <li>
                                            <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/ui-badges" class="">Badges</a>
                                        </li>
                                        <li>
                                            <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/ui-borders" class="">Border</a>
                                        </li>
                                        <li>
                                            <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/ui-buttons" class="">Buttons</a>
                                        </li>
                                        <li>
                                            <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/ui-buttons-group" class="">Button Group</a>
                                        </li>
                                        <li>
                                            <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/ui-breadcrumb" class="">Breadcrumb</a>
                                        </li>
                                        <li>
                                            <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/ui-cards" class="">Card</a>
                                        </li>
                                        <li>
                                            <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/ui-carousel" class="">Carousel</a>
                                        </li>
                                        <li>
                                            <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/ui-colors" class="">Colors</a>
                                        </li>
                                        <li>
                                            <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/ui-dropdowns" class="">Dropdowns</a>
                                        </li>
                                        <li>
                                            <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/ui-grid" class="">Grid</a>
                                        </li>
                                        <li>
                                            <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/ui-images" class="">Images</a>
                                        </li>
                                        <li>
                                            <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/ui-lightbox" class="">Lightbox</a>
                                        </li>
                                        <li>
                                            <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/ui-media" class="">Media</a>
                                        </li>
                                        <li>
                                            <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/ui-modals" class="">Modals</a>
                                        </li>
                                        <li>
                                            <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/ui-offcanvas" class="">Offcanvas</a>
                                        </li>
                                        <li>
                                            <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/ui-pagination" class="">Pagination</a>
                                        </li>
                                        <li>
                                            <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/ui-popovers" class="">Popovers</a>
                                        </li>
                                        <li>
                                            <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/ui-progress" class="">Progress</a>
                                        </li>
                                        <li>
                                            <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/ui-placeholders" class="">Placeholders</a>
                                        </li>
                                        <li>
                                            <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/ui-spinner" class="">Spinner</a>
                                        </li>
                                        <li>
                                            <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/ui-sweetalerts" class="">Sweet Alerts</a>
                                        </li>
                                        <li>
                                            <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/ui-nav-tabs" class="">Tabs</a>
                                        </li>
                                        <li>
                                            <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/ui-toasts" class="">Toasts</a>
                                        </li>
                                        <li>
                                            <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/ui-tooltips" class="">Tooltips</a>
                                        </li>
                                        <li>
                                            <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/ui-typography" class="">Typography</a>
                                        </li>
                                        <li>
                                            <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/ui-video" class="">Video</a>
                                        </li>
                                        <li>
                                            <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/ui-sortable" class="">Sortable</a>
                                        </li>
                                        <li>
                                            <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/ui-swiperjs" class="">Swiperjs</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="submenu">
                                    <a href="javascript:void(0);" class="">
                                        <i class="ti ti-hierarchy-3"></i>
                                        <span>Advanced UI</span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul>
                                        <li>
                                            <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/ui-ribbon" class="">Ribbon</a>
                                        </li>
                                        <li>
                                            <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/ui-clipboard" class="">Clipboard</a>
                                        </li>
                                        <li>
                                            <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/ui-drag-drop" class="">Drag & Drop</a>
                                        </li>
                                        <li>
                                            <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/ui-rangeslider" class="">Range Slider</a>
                                        </li>
                                        <li>
                                            <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/ui-rating" class="">Rating</a>
                                        </li>
                                        <li>
                                            <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/ui-text-editor" class="">Text Editor</a>
                                        </li>
                                        <li>
                                            <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/ui-counter" class="">Counter</a>
                                        </li>
                                        <li>
                                            <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/ui-scrollbar" class="">Scrollbar</a>
                                        </li>
                                        <li>
                                            <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/ui-stickynote" class="">Sticky Note</a>
                                        </li>
                                        <li>
                                            <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/ui-timeline" class="">Timeline</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="submenu">
                                    <a href="javascript:void(0);"  class="">
                                        <i class="ti ti-input-search"></i>
                                        <span>Forms</span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul>
                                        <li class="submenu submenu-two">
                                            <a href="javascript:void(0);" class="">Form Elements <span class="menu-arrow inside-submenu"></span>
                                            </a>
                                            <ul>
                                                <li>
                                                    <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/form-basic-inputs" class="">Basic Inputs</a>
                                                </li>
                                                <li>
                                                    <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/form-checkbox-radios" class="">Checkbox & Radios</a>
                                                </li>
                                                <li>
                                                    <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/form-input-groups" class="">Input Groups</a>
                                                </li>
                                                <li>
                                                    <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/form-grid-gutters" class="">Grid & Gutters</a>
                                                </li>
                                                <li>
                                                    <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/form-select" class="">Form Select</a>
                                                </li>
                                                <li>
                                                    <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/form-mask" class="">Input Masks</a>
                                                </li>
                                                <li>
                                                    <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/form-fileupload" class="">File Uploads</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="submenu submenu-two">
                                            <a href="javascript:void(0);" class="">Layouts <span class="menu-arrow inside-submenu"></span>
                                            </a>
                                            <ul>
                                                <li>
                                                    <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/form-horizontal"  class="">Horizontal Form</a>
                                                </li>
                                                <li>
                                                    <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/form-vertical"  class="">Vertical Form</a>
                                                </li>
                                                <li>
                                                    <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/form-floating-labels"  class="">Floating Labels</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/form-validation"  class="">Form Validation</a>
                                        </li>
                                        <li>
                                            <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/form-select2"  class="">Select2</a>
                                        </li>
                                        <li>
                                            <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/form-wizard"  class="">Form Wizard</a>
                                        </li>
                                        <li>
                                            <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/form-pickers"  class="">Form Pickers</a>
                                        </li>
                                        
                                    </ul>
                                </li>
                                <li class="submenu">
                                    <a href="javascript:void(0);" class="">
                                        <i class="ti ti-table-plus"></i>
                                        <span>Tables</span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul>
                                        <li>
                                            <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/tables-basic"  class="">Basic Tables </a>
                                        </li>
                                        <li>
                                            <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/data-tables"  class="">Data Table </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="submenu">
                                    <a href="javascript:void(0);" class="">
                                        <i class="ti ti-chart-line"></i>
                                        <span>Charts</span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul>
                                        <li>
                                            <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/chart-apex"  class="">Apex Charts</a>
                                        </li>
                                        <li>
                                            <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/chart-c3" class="">Chart C3</a>
                                        </li>
                                        <li>
                                            <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/chart-js" class="">Chart Js</a>
                                        </li>
                                        <li>
                                            <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/chart-morris" class="">Morris Charts</a>
                                        </li>
                                        <li>
                                            <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/chart-flot" class="">Flot Charts</a>
                                        </li>
                                        <li>
                                            <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/chart-peity" class="">Peity Charts</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="submenu">
                                    <a href="javascript:void(0);" class="">
                                        <i class="ti ti-icons"></i>
                                        <span>Icons</span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul>
                                        <li>
                                            <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/icon-fontawesome" class="">Fontawesome Icons</a>
                                        </li>
                                        <li>
                                            <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/icon-tabler" class="">Tabler Icons</a>
                                        </li>
                                        <li>
                                            <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/icon-bootstrap" class="">Bootstrap Icons</a>
                                        </li>
                                        <li>
                                            <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/icon-remix" class="">Remix Icons</a>
                                        </li>
                                        <li>
                                            <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/icon-feather" class="">Feather Icons</a>
                                        </li>
                                        <li>
                                            <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/icon-ionic" class="">Ionic Icons</a>
                                        </li>
                                        <li>
                                            <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/icon-material" class="">Material Icons</a>
                                        </li>
                                        <li>
                                            <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/icon-pe7" class="">Pe7 Icons</a>
                                        </li>
                                        <li>
                                            <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/icon-simpleline" class="">Simpleline Icons</a>
                                        </li>
                                        <li>
                                            <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/icon-themify" class="">Themify Icons</a>
                                        </li>
                                        <li>
                                            <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/icon-weather" class="">Weather Icons</a>
                                        </li>
                                        <li>
                                            <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/icon-typicon" class="">Typicon Icons</a>
                                        </li>
                                        <li>
                                            <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/icon-flag" class="">Flag Icons</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="submenu">
                                    <a href="javascript:void(0);"  class="">
                                        <i class="ti ti-table-plus"></i>
                                        <span>Maps</span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul>
                                        <li>
                                            <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/maps-vector" class="">Vector</a>
                                        </li>
                                        <li>
                                            <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/maps-leaflet" class="">Leaflet</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li><a href="#">Documentation</a></li>
                        <li><a href="#">Change Log</a></li>
                        <li class="submenu">
                            <a href="javascript:void(0);"><span>Multi Level</span><span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="javascript:void(0);">Multilevel 1</a></li>
                                <li class="submenu submenu-two">
                                    <a href="javascript:void(0);">Multilevel 2<span class="menu-arrow inside-submenu"></span></a>
                                    <ul>
                                        <li><a href="javascript:void(0);">Multilevel 2.1</a></li>
                                        <li class="submenu submenu-two submenu-three">
                                            <a href="javascript:void(0);">Multilevel 2.2<span class="menu-arrow inside-submenu inside-submenu-two"></span></a>
                                            <ul>
                                                <li><a href="javascript:void(0);">Multilevel 2.2.1</a></li>
                                                <li><a href="javascript:void(0);">Multilevel 2.2.2</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="javascript:void(0);">Multilevel 3</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
            <div class="d-xl-flex align-items-center d-none">
                <a href="#" class="me-3 avatar avatar-sm">
                    <img src="https://smarthr.dreamstechnologies.com/laravel/template/public/build/img/profiles/avatar-07.jpg" alt="profile" class="rounded-circle">
                </a>
                <a href="#" class="btn btn-icon btn-sm rounded-circle mode-toggle">
                    <i class="ti ti-sun"></i>
                </a>
            </div>
        </div>
    </div>
</div>
<!-- /Horizontal Menu -->

<!-- Two Col Sidebar -->
<div class="two-col-sidebar" id="two-col-sidebar">
    <div class="sidebar sidebar-twocol">
        <div class="twocol-mini">
            <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/index" class="logo-small">
                <img src="https://smarthr.dreamstechnologies.com/laravel/template/public/build/img/logo-small.svg" alt="Logo">
            </a>
            <div class="sidebar-left slimscroll">
                <div class="nav flex-column align-items-center nav-pills" id="sidebar-tabs" role="tablist" aria-orientation="vertical">
                    <a href="#" class="nav-link " title="Dashboard" data-bs-toggle="tab" data-bs-target="#dashboard">
                        <i class="ti ti-smart-home"></i>
                    </a>
                    <a href="#" class="nav-link " title="Apps" data-bs-toggle="tab" data-bs-target="#application">
                        <i class="ti ti-layout-grid-add"></i>
                    </a>
                    <a href="#" class="nav-link show active" title="Super Admin" data-bs-toggle="tab" data-bs-target="#super-admin">
                        <i class="ti ti-user-star"></i>
                    </a>
                    <a href="#" class="nav-link " title="Layout" data-bs-toggle="tab" data-bs-target="#layout">
                        <i class="ti ti-layout-board-split"></i>
                    </a>
                    <a href="#" class="nav-link " title="Projects" data-bs-toggle="tab" data-bs-target="#projects">
                        <i class="ti ti-users-group"></i>
                    </a>
                    <a href="#" class="nav-link " title="Crm" data-bs-toggle="tab" data-bs-target="#crm">
                        <i class="ti ti-user-shield"></i>
                    </a>
                    <a href="#" class="nav-link " title="Hrm" data-bs-toggle="tab" data-bs-target="#hrm">
                        <i class="ti ti-user"></i>
                    </a>
                    <a href="#" class="nav-link " title="Finance" data-bs-toggle="tab" data-bs-target="#finance">
                        <i class="ti ti-shopping-cart-dollar"></i>
                    </a>
                    <a href="#" class="nav-link " title="Administration" data-bs-toggle="tab" data-bs-target="#administration">
                        <i class="ti ti-cash"></i>
                    </a>
                    <a href="#" class="nav-link " title="Content" data-bs-toggle="tab" data-bs-target="#content">
                        <i class="ti ti-license"></i>
                    </a>
                    <a href="#" class="nav-link " title="Pages" data-bs-toggle="tab" data-bs-target="#pages">
                        <i class="ti ti-page-break"></i>
                    </a>
                    <a href="#" class="nav-link  " title="Authentication" data-bs-toggle="tab"
                        data-bs-target="#authentication">
                        <i class="ti ti-lock-check"></i>
                    </a>
                    <a href="#" class="nav-link " title="UI Elements" data-bs-toggle="tab"
                        data-bs-target="#ui-elements">
                        <i class="ti ti-ux-circle"></i>
                    </a>
                    <a href="#" class="nav-link " title="Extras" data-bs-toggle="tab" data-bs-target="#extras">
                        <i class="ti ti-vector-triangle"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="sidebar-right">
            <div class="sidebar-logo mb-4">
                <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/index" class="logo logo-normal">
                    <img src="https://smarthr.dreamstechnologies.com/laravel/template/public/build/img/logo.svg" alt="Logo">
                </a>
                <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/index" class="dark-logo">
                    <img src="https://smarthr.dreamstechnologies.com/laravel/template/public/build/img/logo-white.svg" alt="Logo">
                </a>
            </div>
            <div class="sidebar-scroll">
                <h6 class="mb-3">Welcome to SmartHR</h6>
                <div class="text-center rounded bg-light p-3 mb-4">
                    <div class="avatar avatar-lg online mb-3">
                        <img src="https://smarthr.dreamstechnologies.com/laravel/template/public/build/img/profiles/avatar-02.jpg" alt="Img" class="img-fluid rounded-circle">
                    </div>
                    <h6 class="fs-12 fw-normal mb-1">Adrian Herman</h6>
                    <p class="fs-10">System Admin</p>
                </div>
                <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade " id="dashboard">
                        <ul>
                            <li class="menu-title"><span>MAIN MENU</span></li>
                            <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/index" class="">Admin Dashboard</a></li>
                            <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/employee-dashboard" class="">Employee Dashboard</a></li>
                            <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/deals-dashboard" class="">Deals Dashboard</a></li>
                            <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/leads-dashboard" class="">Leads Dashboard</a></li>
                        </ul>
                    </div>
                    <div class="tab-pane fade " id="application">
                        <ul>
                            <li class="menu-title"><span>APPLICATION</span></li>
                            <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/voice-call"class="" >Voice Call</a></li>
                            <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/video-call" class="">Video Call</a></li>
                            <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/outgoing-call" class="">Outgoing Call</a></li>
                            <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/incoming-call" class="">Incoming Call</a></li>
                            <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/call-history" class="">Call History</a></li>
                            <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/calendar" class="">Calendar</a></li>
                            <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/email" class="">Email</a></li>
                            <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/todo" class="">To Do</a></li>
                            <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/notes"class="">Notes</a></li>
                            <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/social-active" class="">File Manager</a></li>
                            <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/file-manager" class="">File Manager</a></li>
                            <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/kanban-view" class="">Kanban</a></li>
                            <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/invoices" class="">Invoices</a></li>
                        </ul>
                    </div>
                    <div class="tab-pane fade   show active" id="super-admin">
                        <ul>
                            <li class="menu-title"><span>SUPER ADMIN</span></li>
                            <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/dashboard" class="active">Dashboard</a></li>
                            <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/companies" class="">Companies</a></li>
                            <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/subscription" class="">Subscriptions</a></li>
                            <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/packages" class="">Packages</a></li>
                            <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/domain" class="">Domain</a></li>
                            <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/purchase-transaction" class="">Purchase Transaction</a></li>
                        </ul>
                    </div>
                    <div class="tab-pane fade " id="layout">
                        <ul>
                            <li class="menu-title"><span>LAYOUT</span></li>
                            <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/layout-horizontal" class=""><span>Horizontal</span></a></li>
                            <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/layout-detached" class=""><span>Detached</span></a></li>
                            <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/layout-modern" class=""><span>Modern</span></a></li>
                            <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/layout-two-column" class=""><span>Two Column </span></a></li>
                            <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/layout-hovered" class=""><span>Hovered</span></a></li>
                            <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/layout-box" class=""><span>Boxed</span></a></li>
                            <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/layout-horizontal-single" class=""><span>Horizontal Single</span></a></li>
                            <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/layout-horizontal-overlay" class=""><span>Horizontal Overlay</span></a></li>
                            <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/layout-horizontal-box" class=""><span>Horizontal Box</span></a></li>
                            <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/layout-horizontal-sidemenu" class=""><span>Menu Aside</span></a></li>
                            <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/layout-vertical-transparent" class=""><span>Transparent</span></a></li>
                            <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/layout-without-header" class=""><span>Without Header</span></a></li>
                            <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/layout-rtl" class=""><span>RTL</span></a></li>
                            <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/layout-dark" class=""><span>Dark</span></a></li>
                        </ul>
                    </div>
                    <div class="tab-pane fade " id="projects">
                        <ul>
                            <li class="menu-title"><span>PROJECTS</span></li>
                            <li class=""><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/clients-grid">Clients</a></li>
                            <li class="submenu">
                                <a href="javascript:void(0);"><span>Projects</span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul>
                                    <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/projects-grid" class="">Projects</a></li>
                                    <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/tasks" class="">Tasks</a></li>
                                    <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/task-board" class="">Task Board</a></li>
                                </ul>
                            </li>	
                        </ul>
                    </div>
                    <div class="tab-pane fade " id="crm">
                        <ul>
                            <li class="menu-title"><span>CRM</span></li>
                            <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/contacts-grid" class="" ><span>Contacts</span></a></li>
                            <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/companies-grid" class=""><span>Companies</span></a></li>
                            <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/deals-grid" class=""><span>Deals</span></a></li>
                            <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/leads-grid" class=""><span>Leads</span></a></li>
                            <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/pipeline" class=""><span>Pipeline</span></a></li>
                            <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/analytics" class=""><span>Analytics</span></a></li>
                            <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/activity" class=""><span>Activities</span></a></li>
                        </ul>
                    </div>
                    <div class="tab-pane fade " id="hrm">
                        <ul>
                            <li class="menu-title"><span>HRM</span></li>
                            <li class="submenu">
                                <a href="javascript:void(0);" class=""><span>Employees</span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul>
                                    <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/employees" class="">Employee Lists</a></li>
                                    <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/employees-grid" class="">Employee Grid</a></li>
                                    <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/employee-details" class="">Employee Details</a></li>
                                    <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/departments" class="">Departments</a></li>
                                    <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/designations" class="">Designations</a></li>
                                    <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/policy" class="">Policies</a></li>
                                </ul>
                            </li>
                            <li class="submenu">
                                <a href="javascript:void(0);" class=""><span>Tickets</span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul>
                                    <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/tickets" class="">Tickets</a></li>
                                    <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/ticket-details" class="">Ticket Details</a></li>
                                </ul>
                            </li>
                            <li class=""><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/holidays"><span>Holidays</span></a></li>
                            <li class="submenu">
                                <a href="javascript:void(0);" class=""><span>Attendance</span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul>
                                    <li class="submenu submenu-two">
                                        <a href="javascript:void(0);" class="">Leaves<span
                                                class="menu-arrow inside-submenu"></span></a>
                                        <ul>
                                            <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/leaves" class="">Leaves (Admin)</a></li>
                                            <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/leaves-employee" class="">Leave (Employee)</a></li>
                                            <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/leave-settings" class="">Leave Settings</a></li>												
                                        </ul>												
                                    </li>
                                    <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/attendance-admin" class="">Attendance (Admin)</a></li>
                                    <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/attendance-employee" class="">Attendance (Employee)</a></li>
                                    <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/timesheets" class="">Timesheets</a></li>
                                    <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/schedule-timing" class="">Shift & Schedule</a></li>
                                    <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/overtime" class="">Overtime</a></li>
                                </ul>
                            </li>
                            <li class="submenu">
                                <a href="javascript:void(0);" class=""><span>Performance</span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul>
                                    <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/performance-indicator" class="">Performance Indicator</a></li>
                                    <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/performance-review" class="">Performance Review</a></li>
                                    <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/performance-appraisal" class="">Performance Appraisal</a></li>
                                    <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/goal-tracking" class="">Goal List</a></li>
                                    <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/goal-type" class="">Goal Type</a></li>
                                </ul>
                            </li>
                            <li class="submenu">
                                <a href="javascript:void(0);" class=""><span>Training</span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul>
                                    <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/training" class="">Training List</a></li>
                                    <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/trainers" class="">Trainers</a></li>
                                    <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/training-type" class="">Training Type</a></li>
                                </ul>
                            </li>
                            <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/promotion" class=""><span>Promotion</span></a></li>
                            <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/resignation" class=""><span>Resignation</span></a></li>
                            <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/termination" class=""><span>Termination</span></a></li>
                        </ul>
                    </div>
                    <div class="tab-pane fade " id="finance">
                        <ul>
                            <li class="menu-title"><span>FINANCE & ACCOUNTS</span></li>
                            <li class="submenu">
                                <a href="javascript:void(0);" class=""><span>Sales</span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul>
                                    <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/estimates" class="">Estimates</a></li>
                                    <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/invoice" class="">Invoices</a></li>
                                    <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/payments" class="">Payments</a></li>
                                    <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/expenses" class="">Expenses</a></li>
                                    <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/provident-fund" class="">Provident Fund</a></li>
                                    <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/taxes" class="">Taxes</a></li>
                                </ul>
                            </li>
                            <li class="submenu">
                                <a href="javascript:void(0);" class=""><span>Accounting</span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul>
                                    <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/categories" class="">Categories</a></li>
                                    <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/budgets" class="">Budgets</a></li>
                                    <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/budget-expenses" class="">Budget Expenses</a></li>
                                    <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/budget-revenues" class="">Budget Revenues</a></li>
                                </ul>
                            </li>
                            <li class="submenu">
                                <a href="javascript:void(0);" class=""><span>Payroll</span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul>
                                    <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/employee-salary" class="">Employee Salary</a></li>
                                    <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/payslip" class="">Payslip</a></li>
                                    <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/payroll" class="">Payroll Items</a></li>
                                </ul>
                            </li>									
                        </ul>
                    </div>
                    <div class="tab-pane fade " id="administration">
                        <ul>
                            <li class="menu-title"><span>ADMINISTRATION</span></li>
                            <li class="submenu">
                                <a href="javascript:void(0);" class=""><span>Assets</span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul>
                                    <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/assets" class="">Assets</a></li>
                                    <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/asset-categories" class="">Asset Categories</a></li>
                                </ul>
                            </li>
                            <li class="submenu">
                                <a href="javascript:void(0);" class=""><span>Help & Supports</span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul>
                                    <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/knowledgebase" class="">Knowledge Base</a></li>
                                    <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/activity" class="">Activities</a></li>
                                </ul>
                            </li>
                            <li class="submenu">
                                <a href="javascript:void(0);" class=""><span>User Management</span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul>
                                    <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/users" class="">Users</a></li>
                                    <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/roles-permissions" class="">Roles & Permissions</a></li>
                                </ul>
                            </li>
                            <li class="submenu">
                                <a href="javascript:void(0);" class=""><span>Reports</span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul>
                                    <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/expenses-report" class="">Expense Report</a></li>
                                    <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/invoice-report" class="">Invoice Report</a></li>
                                    <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/payment-report" class="">Payment Report</a></li>
                                    <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/project-report" class="">Project Report</a></li>
                                    <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/task-report" class="">Task Report</a></li>
                                    <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/user-report" class="">User Report</a></li>
                                    <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/employee-report" class="">Employee Report</a></li>
                                    <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/payslip-report" class="">Payslip Report</a></li>
                                    <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/attendance-report" class="">Attendance Report</a></li>
                                    <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/leave-report" class="">Leave Report</a></li>
                                    <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/daily-report" class="">Daily Report</a></li>
                                </ul>
                            </li>
                            <li class="submenu">
                                <a href="javascript:void(0);" class="">
                                    General Settings
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul>
                                    <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/profile-settings" class="">Profile</a></li>
                                    <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/security-settings" class="">Security</a></li>
                                    <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/notification-settings" class="">Notifications</a></li>
                                    <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/connected-apps" class="">Connected Apps</a></li>
                                </ul>
                            </li>
                            <li class="submenu">
                                <a href="javascript:void(0);" class="">
                                    Website Settings
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul>
                                    <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/bussiness-settings" class="">Business Settings</a></li>
                                    <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/seo-settings" class="">SEO Settings</a></li>
                                    <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/localization-settings" class="">Localization</a></li>
                                    <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/prefixes" class="">Prefixes</a></li>
                                    <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/preferences" class="">Preferences</a></li>
                                    <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/performance-appraisal" class="">Appearance</a></li>
                                    <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/language" class="">Language</a></li>
                                    <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/authentication-settings" class="">Authentication</a></li>
                                    <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/ai-settings" class="">AI Settings</a></li>
                                </ul>
                            </li>
                            <li class="submenu">
                                <a href="javascript:void(0);" class="">App Settings<span class="menu-arrow"></span></a>
                                <ul>
                                    <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/salary-settings" class="">Salary Settings</a></li>
                                    <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/approval-settings" class="">Approval Settings</a></li>
                                    <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/invoice-settings" class="">Invoice Settings</a></li>
                                    <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/leave-type" class="">Leave Type</a></li>
                                    <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/custom-fields" class="">Custom Fields</a></li>
                                </ul>
                            </li>
                            <li class="submenu">
                                <a href="javascript:void(0);" class="">
                                    System Settings
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul>
                                    <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/email-settings" class="">Email Settings</a></li>
                                    <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/email-template" class="">Email Templates</a></li>
                                    <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/sms-settings" class="">SMS Settings</a></li>
                                    <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/sms-template" class="">SMS Templates</a></li>
                                    <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/otp-settings" class="">OTP</a></li>
                                    <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/gdpr" class="">GDPR Cookies</a></li>
                                    <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/maintenance-mode" class="">Maintenance Mode</a></li>
                                </ul>
                            </li>
                            <li class="submenu">
                                <a href="javascript:void(0);" class="">
                                    Financial Settings
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul>
                                    <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/payment-gateways" class="">Payment Gateways</a></li>
                                    <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/tax-rates" class="">Tax Rate</a></li>
                                    <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/currencies" class="">Currencies</a></li>
                                </ul>
                            </li>
                            <li class="submenu">
                                <a href="javascript:void(0);" class="">Other Settings<span class="menu-arrow"></span></a>
                                <ul>
                                    <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/custom-css" class="">Custom CSS</a></li>
                                    <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/custom-js" class="">Custom JS</a></li>
                                    <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/cronjob" class="">Cronjob</a></li>
                                    <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/storage-settings" class="">Storage</a></li>
                                    <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/ban-ip-address" class="">Ban IP Address</a></li>
                                    <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/backup" class="">Backup</a></li>
                                    <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/clear-cache" class="">Clear Cache</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-pane fade " id="content">
                        <ul>
                            <li class="menu-title"><span>CONTENT</span></li>
                            <li class=""><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/pages">Pages</a></li>
                            <li class="submenu">
                                <a href="javascript:void(0);" class="">
                                    Blogs
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul>
                                    <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/blogs" class="">All Blogs</a></li>
                                    <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/blog-categories" class="">Categories</a></li>
                                    <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/blog-comments" class="">Comments</a></li>
                                    <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/blog-tags" class="">Blog Tags</a></li>
                                </ul>
                            </li>
                            <li class="submenu">
                                <a href="javascript:void(0);" class="">
                                    Locations
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul>
                                    <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/countries" class="">Countries</a></li>
                                    <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/states" class="">States</a></li>
                                    <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/cities" class="">Cities</a></li>
                                </ul>
                            </li>
                            <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/testimonials" class="">Testimonials</a></li>
                            <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/faq" class="">FAQ’S</a></li>
                        </ul>
                    </div>
                    <div class="tab-pane fade  " id="pages">
                        <ul>
                            <li class="menu-title"><span>PAGES</span></li>
                            <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/starter" class=""><span>Starter</span></a></li>
                            <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/profile" class=""><span>Profile</span></a></li>
                            <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/gallery" class=""><span>Gallery</span></a></li>
                            <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/search-result" class=""><span>Search Results</span></a></li>
                            <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/timeline" class=""><span>Timeline</span></a></li>
                            <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/pricing" class=""><span>Pricing</span></a></li>
                            <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/coming-soon" class=""><span>Coming Soon</span></a></li>
                            <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/under-maintenance" class=""><span>Under Maintenance</span></a></li>
                            <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/under-construction" class=""><span>Under Construction</span></a></li>
                            <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/api-keys" class=""><span>API Keys</span></a></li>
                            <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/privacy-policy" class=""><span>Privacy Policy</span></a></li>
                            <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/terms-condition" class=""><span>Terms & Conditions</span></a></li>
                        </ul>
                    </div>
                    <div class="tab-pane fade  " id="authentication">
                        <ul>
                            <li class="menu-title"><span>AUTHENTICATION</span></li>
                            <li class="submenu">
                                <a href="javascript:void(0);" class="">
                                    Login<span class="menu-arrow"></span>
                                </a>
                                <ul>
                                    <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/login" class="">Cover</a></li>
                                    <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/login-2" class="">Illustration</a></li>
                                    <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/login-3" class="">Basic</a></li>
                                </ul>
                            </li>
                            <li class="submenu">
                                <a href="javascript:void(0);" class="">
                                    Register<span class="menu-arrow"></span>
                                </a>
                                <ul>
                                    <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/register" class="">Cover</a></li>
                                    <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/register-2" class="">Illustration</a></li>
                                    <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/register-3" class="">Basic</a></li>
                                </ul>
                            </li>
                            <li class="submenu">
                                <a href="javascript:void(0);" class="">
                                    Forgot Password<span class="menu-arrow"></span>
                                </a>
                                <ul>
                                    <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/forgot-password" class="">Cover</a></li>
                                    <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/forgot-password-2" class="">Illustration</a></li>
                                    <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/forgot-password-3" class="">Basic</a></li>
                                </ul>
                            </li>
                            <li class="submenu">
                                <a href="javascript:void(0);" class="">
                                    Reset Password<span class="menu-arrow"></span>
                                </a>
                                <ul>
                                    <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/reset-password" class="">Cover</a></li>
                                    <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/reset-password-2" class="">Illustration</a></li>
                                    <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/reset-password-3" class="">Basic</a></li>
                                </ul>
                            </li>
                            <li class="submenu">
                                <a href="javascript:void(0);" class="">
                                    Email Verification<span class="menu-arrow"></span>
                                </a>
                                <ul>
                                    <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/email-verification" class="">Cover</a></li>
                                    <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/email-verification-2" class="">Illustration</a></li>
                                    <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/email-verification-3" class="">Basic</a></li>
                                </ul>
                            </li>
                            <li class="submenu">
                                <a href="javascript:void(0);" class="">
                                    2 Step Verification<span class="menu-arrow"></span>
                                </a>
                                <ul>
                                    <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/two-step-verification" class="">Cover</a></li>
                                    <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/two-step-verification-2" class="">Illustration</a></li>
                                    <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/two-step-verification-3" class="">Basic</a></li>
                                </ul>
                            </li>
                            <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/lock-screen" class="">Lock Screen</a></li>
                            <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/error-404" class="">404 Error</a></li>
                            <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/error-500" class="">500 Error</a></li>
                        </ul>
                    </div>
                    <div class="tab-pane fade " id="ui-elements">
                        <ul>
                            <li class="menu-title"><span>UI INTERFACE</span></li>
                            <li class="submenu">
                                <a href="javascript:void(0);"  class="">Base UI<span class="menu-arrow"></span>
                                </a>
                                <ul>
                                    <li>
                                        <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/ui-alerts" class="">Alerts</a>
                                    </li>
                                    <li>
                                        <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/ui-accordion" class="">Accordion</a>
                                    </li>
                                    <li>
                                        <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/ui-avatar" class="">Avatar</a>
                                    </li>
                                    <li>
                                        <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/ui-badges" class="">Badges</a>
                                    </li>
                                    <li>
                                        <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/ui-borders" class="">Border</a>
                                    </li>
                                    <li>
                                        <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/ui-buttons" class="">Buttons</a>
                                    </li>
                                    <li>
                                        <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/ui-buttons-group" class="">Button Group</a>
                                    </li>
                                    <li>
                                        <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/ui-breadcrumb" class="">Breadcrumb</a>
                                    </li>
                                    <li>
                                        <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/ui-cards" class="">Card</a>
                                    </li>
                                    <li>
                                        <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/ui-carousel" class="">Carousel</a>
                                    </li>
                                    <li>
                                        <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/ui-colors" class="">Colors</a>
                                    </li>
                                    <li>
                                        <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/ui-dropdowns" class="">Dropdowns</a>
                                    </li>
                                    <li>
                                        <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/ui-grid" class="">Grid</a>
                                    </li>
                                    <li>
                                        <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/ui-images" class="">Images</a>
                                    </li>
                                    <li>
                                        <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/ui-lightbox" class="">Lightbox</a>
                                    </li>
                                    <li>
                                        <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/ui-media" class="">Media</a>
                                    </li>
                                    <li>
                                        <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/ui-modals" class="">Modals</a>
                                    </li>
                                    <li>
                                        <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/ui-offcanvas" class="">Offcanvas</a>
                                    </li>
                                    <li>
                                        <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/ui-pagination" class="">Pagination</a>
                                    </li>
                                    <li>
                                        <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/ui-popovers" class="">Popovers</a>
                                    </li>
                                    <li>
                                        <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/ui-progress" class="">Progress</a>
                                    </li>
                                    <li>
                                        <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/ui-placeholders" class="">Placeholders</a>
                                    </li>
                                    <li>
                                        <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/ui-spinner" class="">Spinner</a>
                                    </li>
                                    <li>
                                        <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/ui-sweetalerts" class="">Sweet Alerts</a>
                                    </li>
                                    <li>
                                        <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/ui-nav-tabs" class="">Tabs</a>
                                    </li>
                                    <li>
                                        <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/ui-toasts" class="">Toasts</a>
                                    </li>
                                    <li>
                                        <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/ui-tooltips" class="">Tooltips</a>
                                    </li>
                                    <li>
                                        <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/ui-typography" class="">Typography</a>
                                    </li>
                                    <li>
                                        <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/ui-video" class="">Video</a>
                                    </li>
                                    <li>
                                        <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/ui-sortable" class="">Sortable</a>
                                    </li>
                                    <li>
                                        <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/ui-swiperjs" class="">Swiperjs</a>
                                    </li>
                                </ul>
                                   
                            </li>
                            <li class="submenu">
                                <a href="javascript:void(0);"  class=""> Advanced UI <span class="menu-arrow"></span> </a>
                                <ul>
                                    <li>
                                        <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/ui-ribbon" class="">Ribbon</a>
                                    </li>
                                    <li>
                                        <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/ui-clipboard" class="">Clipboard</a>
                                    </li>
                                    <li>
                                        <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/ui-drag-drop" class="">Drag & Drop</a>
                                    </li>
                                    <li>
                                        <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/ui-rangeslider" class="">Range Slider</a>
                                    </li>
                                    <li>
                                        <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/ui-rating" class="">Rating</a>
                                    </li>
                                    <li>
                                        <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/ui-text-editor" class="">Text Editor</a>
                                    </li>
                                    <li>
                                        <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/ui-counter" class="">Counter</a>
                                    </li>
                                    <li>
                                        <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/ui-scrollbar" class="">Scrollbar</a>
                                    </li>
                                    <li>
                                        <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/ui-stickynote" class="">Sticky Note</a>
                                    </li>
                                    <li>
                                        <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/ui-timeline" class="">Timeline</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="submenu">
                                <a href="javascript:void(0);" class=""> Forms <span class="menu-arrow"></span>
                                </a>
                                <ul>
                                    <li class="submenu submenu-two">
                                        <a href="javascript:void(0);" class="">Form Elements<span class="menu-arrow inside-submenu"></span></a>
                                        <ul>
                                            <li>
                                                <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/form-basic-inputs" class="">Basic Inputs</a>
                                            </li>
                                            <li>
                                                <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/form-checkbox-radios" class="">Checkbox & Radios</a>
                                            </li>
                                            <li>
                                                <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/form-input-groups" class="">Input Groups</a>
                                            </li>
                                            <li>
                                                <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/form-grid-gutters" class="">Grid & Gutters</a>
                                            </li>
                                            <li>
                                                <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/form-select" class="">Form Select</a>
                                            </li>
                                            <li>
                                                <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/form-mask" class="">Input Masks</a>
                                            </li>
                                            <li>
                                                <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/form-fileupload" class="">File Uploads</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="submenu submenu-two">
                                        <a href="javascript:void(0);" class="">Layouts<span class="menu-arrow inside-submenu"></span></a>
                                        <ul>
                                            <li>
                                                <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/form-horizontal"  class="">Horizontal Form</a>
                                            </li>
                                            <li>
                                                <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/form-vertical"  class="">Vertical Form</a>
                                            </li>
                                            <li>
                                                <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/form-floating-labels"  class="">Floating Labels</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/form-validation"  class="">Form Validation</a>
                                    </li>
                                    <li>
                                        <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/form-select2"  class="">Select2</a>
                                    </li>
                                    <li>
                                        <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/form-wizard"  class="">Form Wizard</a>
                                    </li>
                                    <li>
                                        <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/form-pickers"  class="">Form Pickers</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="submenu">
                                <a href="javascript:void(0);" class="">Tables <span class="menu-arrow"></span></a>
                                <ul>
                                    <li>
                                        <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/tables-basic"  class="">Basic Tables </a>
                                    </li>
                                    <li>
                                        <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/data-tables"  class="">Data Table </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="submenu">
                                <a href="javascript:void(0);" class="">Charts<span class="menu-arrow"></span> </a>
                                <ul>
                                    <li>
                                        <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/chart-apex"  class="">Apex Charts</a>
                                    </li>
                                    <li>
                                        <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/chart-c3" class="">Chart C3</a>
                                    </li>
                                    <li>
                                        <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/chart-js" class="">Chart Js</a>
                                    </li>
                                    <li>
                                        <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/chart-morris" class="">Morris Charts</a>
                                    </li>
                                    <li>
                                        <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/chart-flot" class="">Flot Charts</a>
                                    </li>
                                    <li>
                                        <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/chart-peity" class="">Peity Charts</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="submenu">
                                <a href="javascript:void(0);" class="">Icons<span class="menu-arrow"></span> </a>
                                <ul>
                                    <li>
                                        <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/icon-fontawesome" class="">Fontawesome Icons</a>
                                    </li>
                                    <li>
                                        <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/icon-tabler" class="">Tabler Icons</a>
                                    </li>
                                    <li>
                                        <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/icon-bootstrap" class="">Bootstrap Icons</a>
                                    </li>
                                    <li>
                                        <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/icon-remix" class="">Remix Icons</a>
                                    </li>
                                    <li>
                                        <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/icon-feather" class="">Feather Icons</a>
                                    </li>
                                    <li>
                                        <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/icon-ionic" class="">Ionic Icons</a>
                                    </li>
                                    <li>
                                        <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/icon-material" class="">Material Icons</a>
                                    </li>
                                    <li>
                                        <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/icon-pe7" class="">Pe7 Icons</a>
                                    </li>
                                    <li>
                                        <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/icon-simpleline" class="">Simpleline Icons</a>
                                    </li>
                                    <li>
                                        <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/icon-themify" class="">Themify Icons</a>
                                    </li>
                                    <li>
                                        <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/icon-weather" class="">Weather Icons</a>
                                    </li>
                                    <li>
                                        <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/icon-typicon" class="">Typicon Icons</a>
                                    </li>
                                    <li>
                                        <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/icon-flag" class="">Flag Icons</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="submenu">
                                <a href="javascript:void(0);" class="">
                                    <i class="ti ti-table-plus"></i>
                                    <span>Maps</span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul>
                                    <li>
                                        <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/maps-vector" class="">Vector</a>
                                    </li>
                                    <li>
                                        <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/maps-leaflet" class="">Leaflet</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-pane fade" id="extras">
                        <ul>
                            <li class="menu-title"><span>EXTRAS</span></li>
                            <li><a href="#">Documentation</a></li>
                            <li><a href="#">Change Log</a></li>
                            <li class="submenu">
                                <a href="javascript:void(0);"><span>Multi Level</span><span class="menu-arrow"></span></a>
                                <ul>
                                    <li><a href="javascript:void(0);">Multilevel 1</a></li>
                                    <li class="submenu submenu-two">
                                        <a href="javascript:void(0);">Multilevel 2<span class="menu-arrow inside-submenu"></span></a>
                                        <ul>
                                            <li><a href="javascript:void(0);">Multilevel 2.1</a></li>
                                            <li class="submenu submenu-two submenu-three">
                                                <a href="javascript:void(0);">Multilevel 2.2<span class="menu-arrow inside-submenu inside-submenu-two"></span></a>
                                                <ul>
                                                    <li><a href="javascript:void(0);">Multilevel 2.2.1</a></li>
                                                    <li><a href="javascript:void(0);">Multilevel 2.2.2</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="javascript:void(0);">Multilevel 3</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /Two Col Sidebar -->

<!-- Stacked Sidebar -->
<div class="stacked-sidebar" id="stacked-sidebar">
    <div class="sidebar sidebar-stacked" style="display: flex !important;">
        <div class="stacked-mini">
            <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/index" class="logo-small">
                <img src="https://smarthr.dreamstechnologies.com/laravel/template/public/build/img/logo-small.svg" alt="Logo">
            </a>
            <div class="sidebar-left slimscroll">
                <div class="d-flex align-items-center flex-column">
                    <div class="mb-1 notification-item">
                        <a href="#" class="btn btn-menubar position-relative">
                            <i class="ti ti-bell"></i>
                            <span class="notification-status-dot"></span>
                        </a>
                    </div>
                    <div class="mb-1">
                        <a href="#" class="btn btn-menubar btnFullscreen">
                            <i class="ti ti-maximize"></i>
                        </a>
                    </div>
                    <div class="mb-1">
                        <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/calendar" class="btn btn-menubar">
                            <i class="ti ti-layout-grid-remove"></i>
                        </a>
                    </div>
                    <div class="mb-1">
                        <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/chat" class="btn btn-menubar position-relative">
                            <i class="ti ti-brand-hipchat"></i>
                            <span class="badge bg-info rounded-pill d-flex align-items-center justify-content-center header-badge">5</span>
                        </a>
                    </div>
                    <div class="mb-1">
                        <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/email" class="btn btn-menubar">
                            <i class="ti ti-mail"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="sidebar-right d-flex justify-content-between flex-column">
            <div class="sidebar-scroll">
                <h6 class="mb-3">Welcome to SmartHR</h6>
                <div class="sidebar-profile text-center rounded bg-light p-3 mb-4">
                    <div class="avatar avatar-lg online mb-3">
                        <img src="https://smarthr.dreamstechnologies.com/laravel/template/public/build/img/profiles/avatar-02.jpg" alt="Img" class="img-fluid rounded-circle">
                    </div>
                    <h6 class="fs-12 fw-normal mb-1">Adrian Herman</h6>
                    <p class="fs-10">System Admin</p>
                </div>
                <div class="stack-menu">
                    <div class="nav flex-column align-items-center nav-pills" role="tablist" aria-orientation="vertical">
                        <div class="row g-2">
                            <div class="col-6">
                                <a href="#menu-dashboard" role="tab" class="nav-link " title="Dashboard" data-bs-toggle="tab" data-bs-target="#menu-dashboard" aria-selected="true">
                                    <span><i class="ti ti-smart-home"></i></span>
                                    <p>Dashboard</p>
                                </a>
                            </div>
                            <div class="col-6">
                                <a href="#menu-application" role="tab" class="nav-link  " title="Apps" data-bs-toggle="tab" data-bs-target="#menu-application" aria-selected="false">
                                    <span><i class="ti ti-layout-grid-add"></i></span>
                                    <p>Applications</p>
                                </a>
                            </div>
                            <div class="col-6">
                                <a href="#menu-superadmin" role="tab" class="nav-link show active" title="Apps" data-bs-toggle="tab" data-bs-target="#menu-superadmin" aria-selected="false">
                                    <span><i class="ti ti-user-star"></i></span>
                                    <p>Super Admin</p>
                                </a>
                            </div>
                            <div class="col-6">
                                <a href="#menu-layout" role="tab" class="nav-link " title="Layout" data-bs-toggle="tab" data-bs-target="#menu-layout" aria-selected="false">
                                    <span><i class="ti ti-layout-board-split"></i></span>
                                    <p>Layouts</p>
                                </a>
                            </div>
                            <div class="col-6">
                                <a href="#menu-project" role="tab" class="nav-link " title="Projects" data-bs-toggle="tab" data-bs-target="#menu-project" aria-selected="false">
                                    <span><i class="ti ti-folder"></i></span>
                                    <p>Projects</p>
                                </a>
                            </div>
                            <div class="col-6">
                                <a href="#menu-crm" role="tab" class="nav-link " title="CRM" data-bs-toggle="tab" data-bs-target="#menu-crm" aria-selected="false">
                                    <span><i class="ti ti-user-shield"></i></span>
                                    <p>Crm</p>
                                </a>
                            </div>
                            <div class="col-6">
                                <a href="#menu-hrm" role="tab" class="nav-link " title="HRM" data-bs-toggle="tab" data-bs-target="#menu-hrm" aria-selected="false">
                                    <span><i class="ti ti-users"></i></span>
                                    <p>Hrm</p>
                                </a>
                            </div>
                            <div class="col-6">
                                <a href="#menu-finance" role="tab" class="nav-link " title="Finance & Accounts" data-bs-toggle="tab" data-bs-target="#menu-finance" aria-selected="false">
                                    <span><i class="ti ti-shopping-cart-dollar"></i></span>
                                    <p>Finance & Accounts</p>
                                </a>
                            </div>
                            <div class="col-6">
                                <a href="#menu-administration" role="tab" class="nav-link " title="Administration" data-bs-toggle="tab" data-bs-target="#menu-administration" aria-selected="false">
                                    <span><i class="ti ti-cash"></i></span>
                                    <p>Administration</p>
                                </a>
                            </div>
                            <div class="col-6">
                                <a href="#menu-content" role="tab" class="nav-link " title="Content" data-bs-toggle="tab" data-bs-target="#menu-content" aria-selected="false">
                                    <span><i class="ti ti-license"></i></span>
                                    <p>Contents</p>
                                </a>
                            </div>
                            <div class="col-6">
                                <a href="#menu-pages" role="tab" class="nav-link " title="Pages"
                                    data-bs-toggle="tab" data-bs-target="#menu-pages" aria-selected="false">
                                    <span><i class="ti ti-page-break"></i></span>
                                    <p>Pages</p>
                                </a>
                            </div>
                            <div class="col-6">
                                <a href="#menu-authentication" role="tab" class="nav-link  " title="Authentication" data-bs-toggle="tab" data-bs-target="#menu-authentication" aria-selected="false">
                                    <span><i class="ti ti-lock-check"></i></span>
                                    <p>Authentication</p>
                                </a>
                            </div>
                            <div class="col-6">
                                <a href="#menu-ui-elements" role="tab" class="nav-link " title="UI Elements" data-bs-toggle="tab" data-bs-target="#menu-ui-elements" aria-selected="false">
                                    <span><i class="ti ti-ux-circle"></i></span>
                                    <p>Basic UI</p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="tab-content">
                        <div class="tab-pane fade "  id="menu-dashboard">
                            <ul class="stack-submenu">
                                <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/index" class="">Admin Dashboard</a></li>
                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/employee-dashboard" class="">Employee Dashboard</a></li>
                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/deals-dashboard" class="">Deals Dashboard</a></li>
                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/leads-dashboard" class="">Leads Dashboard</a></li>
                            </ul>
                        </div>
                        <div class="tab-pane fade  show active " id="menu-superadmin">
                            <ul class="stack-submenu">
                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/dashboard" class="active">Dashboard</a></li>
                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/companies"  class="">Companies</a></li>
                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/subscription" class="">Subscriptions</a></li>
                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/packages" class="">Packages</a></li>
                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/domain" class="">Domain</a></li>
                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/purchase-transaction" class="">Purchase Transaction</a></li>
                        
                            </ul>
                        </div>
                        <div class="tab-pane fade " id="menu-application">
                            <ul class="stack-submenu">
                                <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/chat" class="">Chat</a></li>
                                <li class="submenu submenu-two">
                                    <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/call" class="">Calls<span
                                            class="menu-arrow inside-submenu"></span></a>
                                    <ul>
                                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/voice-call" class="">Voice Call</a></li>
                                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/video-call" class="">Video Call</a></li>
                                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/outgoing-call"  class="">Outgoing Call</a></li>
                                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/incoming-call" class="">Incoming Call</a></li>
                                         <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/call-history"  class="">Call History</a></li>

                                    </ul>
                                </li>
                                <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/calendar" class="">Calendar</a></li>
                                <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/email" class="">Email</a></li>
                                <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/todo" class="">To Do</a></li>
                                <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/notes" class="">Notes</a></li>
                                <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/file-manager" class="">File Manager</a></li>
                                <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/kanban-view" class="">Kanban</a></li>
                                <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/invoices" class="">Invoices</a></li>
                            </ul>
                        </div>
                        <div class="tab-pane fade " id="menu-layout">
                            <ul class="stack-submenu">
                                <li class="">
                                    <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/layout-horizontal">
                                        <span>Horizontal</span>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/layout-detached">
                                        <span>Detached</span>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/layout-modern">
                                        <span>Modern</span>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/layout-two-column">
                                        <span>Two Column </span>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/layout-hovered">
                                        <span>Hovered</span>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/layout-box">
                                        <span>Boxed</span>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/layout-horizontal-single">
                                        <span>Horizontal Single</span>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/layout-horizontal-overlay">
                                        <span>Horizontal Overlay</span>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/layout-horizontal-box">
                                        <span>Horizontal Box</span>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/layout-horizontal-sidemenu">
                                        <span>Menu Aside</span>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/layout-vertical-transparent">
                                        <span>Transparent</span>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/layout-without-header">
                                        <span>Without Header</span>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/layout-rtl">
                                        <span>RTL</span>
                                    </a>
                                </li>
                                <li class=""> 
                                    <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/layout-dark">
                                        <span>Dark</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-pane fade " id="menu-project">
                            <ul class="stack-submenu">
                                <li class=""><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/clients-grid"><span>Clients</span></a></li>
                                <li class="submenu">
                                    <a href="javascript:void(0);" class=""><span>Projects</span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul>
                                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/projects-grid" class="">Projects</a></li>
                                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/tasks" class="">Tasks</a></li>
                                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/task-board" class="">Task Board</a></li>
                                    </ul>
                                </li>	
                            </ul>
                        </div>
                        <div class="tab-pane fade " id="menu-crm">
                            <ul class="stack-submenu">
                                <li class=""><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/contacts-grid"><span>Contacts</span></a></li>
                                <li  class=""><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/companies-grid"><span>Companies</span></a></li>
                                <li class=""><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/deals-grid"><span>Deals</span></a></li>
                                <li class=""><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/leads-grid"><span>Leads</span></a></li>
                                <li class=""><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/pipeline"><span>Pipeline</span></a></li>
                                <li class=""><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/analytics"><span>Analytics</span></a></li>
                                <li class=""><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/activity"><span>Activities</span></a></li>

                            </ul>
                        </div>
                        <div class="tab-pane fade " id="menu-hrm">
                            <ul class="stack-submenu">
                                <li class="submenu">
                                    <a href="javascript:void(0);" class=""><span>Employees</span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul>
                                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/employees" class="">Employee Lists</a></li>
                                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/employees-grid" class="">Employee Grid</a></li>
                                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/employee-details" class="">Employee Details</a></li>
                                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/departments" class="">Departments</a></li>
                                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/designations" class="">Designations</a></li>
                                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/policy" class="">Policies</a></li>
        
                                    </ul>
                                </li>
                                <li class="submenu">
                                    <a href="javascript:void(0);" class=""><span>Tickets</span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul>
                                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/tickets" class="">Tickets</a></li>
                                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/ticket-details" class="">Ticket Details</a></li>
                                    </ul>
                                </li>
                                <li class=""><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/holidays"><span>Holidays</span></a></li>
                                <li class="submenu">
                                    <a href="javascript:void(0);" class=""><span>Attendance</span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul>
                                        <li class="submenu submenu-two">
                                            <a href="javascript:void(0);" class="">Leaves<span class="menu-arrow inside-submenu"></span></a>
                                            <ul>
                                                <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/leaves" class="" >Leaves (Admin)</a></li>
                                                <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/leaves-employee" class="">Leave (Employee)</a></li>
                                                <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/leave-settings" class="">Leave Settings</a></li>											
                                            </ul>												
                                        </li>
                                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/attendance-admin" class="">Attendance (Admin)</a></li>
                                <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/attendance-employee" class="">Attendance (Employee)</a></li>
                                <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/timesheets" class="">Timesheets</a></li>
                                <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/schedule-timing" class="">Shift & Schedule</a></li>
                                <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/overtime" class="">Overtime</a></li>                                    </ul>
                                </li>
                                <li class="submenu">
                                    <a href="javascript:void(0);"  class=""><span>Performance</span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul>
                                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/performance-indicator" class="">Performance Indicator</a></li>
                                <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/performance-review" class="">Performance Review</a></li>
                                <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/performance-appraisal" class="">Performance Appraisal</a></li>
                                <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/goal-tracking" class="">Goal List</a></li>
                                <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/goal-type" class="">Goal Type</a></li>
                                    </ul>
                                </li>
                                <li class="submenu">
                                    <a href="javascript:void(0);" class=""><span>Training</span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul>
                                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/training" class="">Training List</a></li>
                                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/trainers" class="">Trainers</a></li>
                                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/training-type" class="">Training Type</a></li>
                                    </ul>
                                </li>
                                <li class=""><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/promotion"><span>Promotion</span></a></li>
                                <li class=""><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/resignation"><span>Resignation</span></a></li>
                                <li class=""><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/termination"><span>Termination</span></a></li>		
                            </ul>
                        </div>
                        <div class="tab-pane fade " id="menu-finance">
                            <ul class="stack-submenu">
                                <li class="submenu">
                                    <a href="javascript:void(0);" class=""><span>Sales</span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul>
                                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/estimates" class="">Estimates</a></li>
                                <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/invoice" class="">Invoices</a></li>
                                <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/payments" class="">Payments</a></li>
                                <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/expenses" class="">Expenses</a></li>
                                <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/provident-fund" class="">Provident Fund</a></li>
                                <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/taxes" class="">Taxes</a></li>
                                    </ul>
                                </li>
                                <li class="submenu">
                                    <a href="javascript:void(0);" class=""><span>Accounting</span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul>
                                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/categories" class="" >Categories</a></li>
                                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/budgets" class="">Budgets</a></li>
                                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/budget-expenses" class="">Budget Expenses</a></li>
                                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/budget-revenues" class="">Budget Revenues</a></li>

                                    </ul>
                                </li>
                                <li class="submenu">
                                    <a href="javascript:void(0);" class=""><span>Payroll</span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul>
                                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/employee-salary" class="">Employee Salary</a></li>
                                <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/payslip" class="">Payslip</a></li>
                                <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/payroll" class="">Payroll Items</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-pane fade " id="menu-administration">
                            <ul class="stack-submenu">
                                <li class="submenu">
                                    <a href="javascript:void(0);" class=""><span>Assets</span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul>
                                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/assets" class="">Assets</a></li>
                                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/asset-categories" class="">Asset Categories</a></li>
                                    </ul>
                                </li>
                                <li class="submenu">
                                    <a href="javascript:void(0);" class=""><span>Help & Supports</span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul>
                                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/knowledgebase" class="">Knowledge Base</a></li>
                                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/activity" class="">Activities</a></li>
                                    </ul>
                                </li>
                                <li class="submenu">
                                    <a href="javascript:void(0);" class=""><span>User Management</span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul>
                                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/users" class="">Users</a></li>
                                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/roles-permissions" class="">Roles & Permissions</a></li>
                                    </ul>
                                </li>
                                <li class="submenu">
                                    <a href="javascript:void(0);" class=""><span>Reports</span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul>
                                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/expenses-report" class="">Expense Report</a></li>
                                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/invoice-report" class="">Invoice Report</a></li>
                                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/payment-report" class="">Payment Report</a></li>
                                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/project-report" class="">Project Report</a></li>
                                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/task-report" class="">Task Report</a></li>
                                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/user-report" class="">User Report</a></li>
                                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/employee-report" class="">Employee Report</a></li>
                                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/payslip-report" class="">Payslip Report</a></li>
                                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/attendance-report" class="">Attendance Report</a></li>
                                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/leave-report" class="">Leave Report</a></li>
                                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/daily-report" class="">Daily Report</a></li> </ul>
                                </li>
                                <li class="submenu">
                                    <a href="javascript:void(0);" class="">
                                        General Settings
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul>
                                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/profile-settings" class="">Profile</a></li>
                                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/security-settings" class="">Security</a></li>
                                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/notification-settings" class="">Notifications</a></li>
                                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/connected-apps" class="">Connected Apps</a></li>
                                    </ul>
                                </li>
                                <li class="submenu">
                                    <a href="javascript:void(0);" class="">
                                        Website Settings
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul>
                                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/bussiness-settings" class="">Business Settings</a></li>
                                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/seo-settings" class="">SEO Settings</a></li>
                                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/localization-settings" class="">Localization</a></li>
                                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/prefixes" class="">Prefixes</a></li>
                                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/preferences" class="">Preferences</a></li>
                                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/performance-appraisal" class="">Appearance</a></li>
                                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/language" class="">Language</a></li>
                                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/authentication-settings" class="">Authentication</a></li>
                                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/ai-settings" class="">AI Settings</a></li>
                                    </ul>
                                </li>
                                <li class="submenu">
                                    <a href="javascript:void(0);" class="">App Settings<span class="menu-arrow"></span></a>
                                    <ul>
                                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/salary-settings" class="">Salary Settings</a></li>
                                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/approval-settings" class="">Approval Settings</a></li>
                                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/invoice-settings" class="">Invoice Settings</a></li>
                                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/leave-type" class="">Leave Type</a></li>
                                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/custom-fields" class="">Custom Fields</a></li>                                    </ul>
                                </li>
                                <li class="submenu">
                                    <a href="javascript:void(0);"  class="">
                                        System Settings
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul>
                                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/email-settings" class="">Email Settings</a></li>
                                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/email-template" class="">Email Templates</a></li>
                                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/sms-settings" class="">SMS Settings</a></li>
                                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/sms-template" class="">SMS Templates</a></li>
                                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/otp-settings" class="">OTP</a></li>
                                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/gdpr" class="">GDPR Cookies</a></li>
                                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/maintenance-mode" class="">Maintenance Mode</a></li>

                                    </ul>
                                </li>
                                <li class="submenu">
                                    <a href="javascript:void(0);" class="">
                                        Financial Settings
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul>
                                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/payment-gateways" class="">Payment Gateways</a></li>
                                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/tax-rates" class="">Tax Rate</a></li>
                                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/currencies" class="">Currencies</a></li>
                                    </ul>
                                </li>
                                <li class="submenu">
                                    <a href="javascript:void(0);"  class="">Other Settings<span class="menu-arrow"></span></a>
                                    <ul>
                                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/custom-css" class="">Custom CSS</a></li>
                                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/custom-js" class="">Custom JS</a></li>
                                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/cronjob" class="">Cronjob</a></li>
                                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/storage-settings" class="">Storage</a></li>
                                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/ban-ip-address" class="">Ban IP Address</a></li>
                                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/backup" class="">Backup</a></li>
                                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/clear-cache" class="">Clear Cache</a></li>                                    </ul>
                               
                            </ul>
                        </div>
                        <div class="tab-pane fade " id="menu-content">
                            <ul class="stack-submenu">
                                <li class="submenu">
                                    <a href="javascript:void(0);" class="">Blogs<span class="menu-arrow"></span></a>
                                    <ul>
                                        <li class=""><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/blogs">All Blogs</a></li>
                                        <li class=""><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/blog-categories">Categories</a></li>
                                        <li class=""><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/blog-comments">Comments</a></li>
                                        <li class=""><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/blog-tags">Tags</a></li>
                                    </ul>
                                </li>
                                <li class="submenu">
                                    <a href="javascript:void(0);" class="">Locations<span class="menu-arrow"></span></a>
                                    <ul>
                                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/countries" class="">Countries</a></li>
                                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/states" class="">States</a></li>
                                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/cities" class="">Cities</a></li>

                                    </ul>
                                </li>
                                <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/testimonials" class="">Testimonials</a></li>
                                <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/faq" class="">FAQ’S</a></li>

                            </ul>
                        </div>
                        <div class="tab-pane fade " id="menu-pages">
                            <ul class="stack-submenu">
                                <li class=""><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/starter"><span>Starter</span></a></li>
                        <li class=""><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/profile"><span>Profile</span></a></li>
                        <li class=""><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/gallery"><span>Gallery</span></a></li>
                        <li class=""><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/search-result"><span>Search Results</span></a></li>
                        <li class=""><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/timeline"><span>Timeline</span></a></li>
                        <li class=""><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/pricing"><span>Pricing</span></a></li>
                        <li class=""><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/coming-soon"><span>Coming Soon</span></a></li>
                        <li class=""><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/under-maintenance"><span>Under Maintenance</span></a></li>
                        <li class=""><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/under-construction"><span>Under Construction</span></a></li>
                        <li class=""><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/api-keys"><span>API Keys</span></a></li>
                        <li class=""><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/privacy-policy"><span>Privacy Policy</span></a></li>
                        <li class=""><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/terms-condition"><span>Terms & Conditions</span></a></li>
                            </ul>
                        </div>
                        <div class="tab-pane fade  " id="menu-authentication">
                            <ul class="stack-submenu">
                                <li class="submenu">
                                    <a href="javascript:void(0);" class="">Login<span class="menu-arrow"></span></a>
                                    <ul>
                                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/login" class="">Cover</a></li>
                                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/login-2" class="">Illustration</a></li>
                                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/login-3" class="">Basic</a></li>                                    </ul>
                                </li>
                                <li class="submenu">
                                    <a href="javascript:void(0);" class="">Register<span class="menu-arrow"></span></a>
                                    <ul>
                                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/register" class="">Cover</a></li>
                                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/register-2" class="">Illustration</a></li>
                                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/register-3" class="">Basic</a></li>

                                    </ul>
                                </li>
                                <li class="submenu">
                                    <a href="javascript:void(0);" class="">Reset Password<span class="menu-arrow"></span></a>
                                    <ul>
                                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/reset-password" class="">Cover</a></li>
                                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/reset-password-2" class="">Illustration</a></li>
                                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/reset-password-3" class="">Basic</a></li>
                                    </ul>
                                </li>
                                <li class="submenu">
                                    <a href="javascript:void(0);" class="">Email Verification<span class="menu-arrow"></span></a>
                                    <ul>
                                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/email-verification" class="">Cover</a></li>
                                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/email-verification-2" class="">Illustration</a></li>
                                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/email-verification-3" class="">Basic</a></li>
                                    </ul>
                                </li>
                                <li class="submenu">
                                    <a href="javascript:void(0);" class="">2 Step Verification<span class="menu-arrow"></span></a>
                                    <ul>
                                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/two-step-verification" class="">Cover</a></li>
                                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/two-step-verification-2" class="">Illustration</a></li>
                                        <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/two-step-verification-3" class="">Basic</a></li>
                                    </ul>
                                </li>
                                <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/lock-screen" class="">Lock Screen</a></li>
                                <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/error-404" class="">404 Error</a></li>
                                <li><a href="https://smarthr.dreamstechnologies.com/laravel/template/public/error-500" class="">500 Error</a></li>
                            </ul>
                        </div>
                        <div class="tab-pane fade " id="menu-ui-elements">
                            <ul class="stack-submenu">
                                <li class="submenu">
                                    <a href="javascript:void(0);" class="">Base UI<span class="menu-arrow"></span></a>
                                    <ul>
                                        <li>
                                            <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/ui-alerts" class="">Alerts</a>
                                        </li>
                                        <li>
                                            <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/ui-accordion" class="">Accordion</a>
                                        </li>
                                        <li>
                                            <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/ui-avatar" class="">Avatar</a>
                                        </li>
                                        <li>
                                            <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/ui-badges" class="">Badges</a>
                                        </li>
                                        <li>
                                            <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/ui-borders" class="">Border</a>
                                        </li>
                                        <li>
                                            <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/ui-buttons" class="">Buttons</a>
                                        </li>
                                        <li>
                                            <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/ui-buttons-group" class="">Button Group</a>
                                        </li>
                                        <li>
                                            <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/ui-breadcrumb" class="">Breadcrumb</a>
                                        </li>
                                        <li>
                                            <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/ui-cards" class="">Card</a>
                                        </li>
                                        <li>
                                            <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/ui-carousel" class="">Carousel</a>
                                        </li>
                                        <li>
                                            <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/ui-colors" class="">Colors</a>
                                        </li>
                                        <li>
                                            <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/ui-dropdowns" class="">Dropdowns</a>
                                        </li>
                                        <li>
                                            <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/ui-grid" class="">Grid</a>
                                        </li>
                                        <li>
                                            <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/ui-images" class="">Images</a>
                                        </li>
                                        <li>
                                            <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/ui-lightbox" class="">Lightbox</a>
                                        </li>
                                        <li>
                                            <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/ui-media" class="">Media</a>
                                        </li>
                                        <li>
                                            <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/ui-modals" class="">Modals</a>
                                        </li>
                                        <li>
                                            <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/ui-offcanvas" class="">Offcanvas</a>
                                        </li>
                                        <li>
                                            <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/ui-pagination" class="">Pagination</a>
                                        </li>
                                        <li>
                                            <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/ui-popovers" class="">Popovers</a>
                                        </li>
                                        <li>
                                            <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/ui-progress" class="">Progress</a>
                                        </li>
                                        <li>
                                            <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/ui-placeholders" class="">Placeholders</a>
                                        </li>
                                        <li>
                                            <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/ui-spinner" class="">Spinner</a>
                                        </li>
                                        <li>
                                            <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/ui-sweetalerts" class="">Sweet Alerts</a>
                                        </li>
                                        <li>
                                            <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/ui-nav-tabs" class="">Tabs</a>
                                        </li>
                                        <li>
                                            <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/ui-toasts" class="">Toasts</a>
                                        </li>
                                        <li>
                                            <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/ui-tooltips" class="">Tooltips</a>
                                        </li>
                                        <li>
                                            <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/ui-typography" class="">Typography</a>
                                        </li>
                                        <li>
                                            <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/ui-video" class="">Video</a>
                                        </li>
                                        <li>
                                            <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/ui-sortable" class="">Sortable</a>
                                        </li>
                                        <li>
                                            <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/ui-swiperjs" class="">Swiperjs</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="submenu">
                                    <a href="javascript:void(0);" class=""> Advanced UI<span class="menu-arrow"></span></a>
                                    <ul>
                                        <li>
                                            <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/ui-ribbon" class="">Ribbon</a>
                                        </li>
                                        <li>
                                            <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/ui-clipboard" class="">Clipboard</a>
                                        </li>
                                        <li>
                                            <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/ui-drag-drop" class="">Drag & Drop</a>
                                        </li>
                                        <li>
                                            <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/ui-rangeslider" class="">Range Slider</a>
                                        </li>
                                        <li>
                                            <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/ui-rating" class="">Rating</a>
                                        </li>
                                        <li>
                                            <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/ui-text-editor" class="">Text Editor</a>
                                        </li>
                                        <li>
                                            <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/ui-counter" class="">Counter</a>
                                        </li>
                                        <li>
                                            <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/ui-scrollbar" class="">Scrollbar</a>
                                        </li>
                                        <li>
                                            <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/ui-stickynote" class="">Sticky Note</a>
                                        </li>
                                        <li>
                                            <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/ui-timeline" class="">Timeline</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="submenu">
                                    <a href="javascript:void(0);" class="">Forms<span class="menu-arrow"></span> </a>
                                    <ul>
                                        <li class="submenu submenu-two">
                                            <a href="javascript:void(0);" class="">Form Elements<span class="menu-arrow inside-submenu"></span></a>
                                            <ul>
                                                <li>
                                                    <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/form-basic-inputs" class="">Basic Inputs</a>
                                                </li>
                                                <li>
                                                    <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/form-checkbox-radios" class="">Checkbox & Radios</a>
                                                </li>
                                                <li>
                                                    <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/form-input-groups" class="">Input Groups</a>
                                                </li>
                                                <li>
                                                    <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/form-grid-gutters" class="">Grid & Gutters</a>
                                                </li>
                                                <li>
                                                    <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/form-select" class="">Form Select</a>
                                                </li>
                                                <li>
                                                    <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/form-mask" class="">Input Masks</a>
                                                </li>
                                                <li>
                                                    <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/form-fileupload" class="">File Uploads</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="submenu submenu-two">
                                            <a href="javascript:void(0);" class="">Layouts<span class="menu-arrow inside-submenu"></span></a>
                                            <ul>
                                                <li>
                                                    <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/form-horizontal"  class="">Horizontal Form</a>
                                                </li>
                                                <li>
                                                    <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/form-vertical"  class="">Vertical Form</a>
                                                </li>
                                                <li>
                                                    <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/form-floating-labels"  class="">Floating Labels</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/form-validation"  class="">Form Validation</a>
                                        </li>
                                        <li>
                                            <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/form-select2"  class="">Select2</a>
                                        </li>
                                        <li>
                                            <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/form-wizard"  class="">Form Wizard</a>
                                        </li>
                                        <li>
                                            <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/form-pickers"  class="">Form Pickers</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="submenu">
                                    <a href="javascript:void(0);" class="">Tables<span class="menu-arrow"></span></a>
                                    <ul>
                                        <li>
                                            <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/tables-basic"  class="">Basic Tables </a>
                                        </li>
                                        <li>
                                            <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/data-tables"  class="">Data Table </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="submenu">
                                    <a href="javascript:void(0);" class="">Charts<span class="menu-arrow"></span> </a>
                                    <ul>
                                        <li>
                                            <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/chart-apex"  class="">Apex Charts</a>
                                        </li>
                                        <li>
                                            <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/chart-c3" class="">Chart C3</a>
                                        </li>
                                        <li>
                                            <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/chart-js" class="">Chart Js</a>
                                        </li>
                                        <li>
                                            <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/chart-morris" class="">Morris Charts</a>
                                        </li>
                                        <li>
                                            <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/chart-flot" class="">Flot Charts</a>
                                        </li>
                                        <li>
                                            <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/chart-peity" class="">Peity Charts</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="submenu">
                                    <a href="javascript:void(0);" class="">Icons<span class="menu-arrow"></span> </a>
                                    <ul>
                                        <li>
                                            <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/icon-fontawesome" class="">Fontawesome Icons</a>
                                        </li>
                                        <li>
                                            <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/icon-tabler" class="">Tabler Icons</a>
                                        </li>
                                        <li>
                                            <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/icon-bootstrap" class="">Bootstrap Icons</a>
                                        </li>
                                        <li>
                                            <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/icon-remix" class="">Remix Icons</a>
                                        </li>
                                        <li>
                                            <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/icon-feather" class="">Feather Icons</a>
                                        </li>
                                        <li>
                                            <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/icon-ionic" class="">Ionic Icons</a>
                                        </li>
                                        <li>
                                            <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/icon-material" class="">Material Icons</a>
                                        </li>
                                        <li>
                                            <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/icon-pe7" class="">Pe7 Icons</a>
                                        </li>
                                        <li>
                                            <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/icon-simpleline" class="">Simpleline Icons</a>
                                        </li>
                                        <li>
                                            <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/icon-themify" class="">Themify Icons</a>
                                        </li>
                                        <li>
                                            <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/icon-weather" class="">Weather Icons</a>
                                        </li>
                                        <li>
                                            <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/icon-typicon" class="">Typicon Icons</a>
                                        </li>
                                        <li>
                                            <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/icon-flag" class="">Flag Icons</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="submenu">
                                    <a href="javascript:void(0);" class="">
                                        <i class="ti ti-table-plus"></i>
                                        <span>Maps</span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul>
                                        <li>
                                            <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/maps-vector" class="">Vector</a>
                                        </li>
                                        <li>
                                            <a href="https://smarthr.dreamstechnologies.com/laravel/template/public/maps-leaflet" class="">Leaflet</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="p-3">
                <a href="javascript:void(0);" class="d-flex align-items-center fs-12 mb-3">Documentation</a>
                <a href="javascript:void(0);" class="d-flex align-items-center fs-12">Change Log<span class="badge bg-pink badge-xs text-white fs-10 ms-2">v4.0.2</span></a>
            </div>
        </div>
    </div>
</div>
<!-- /Stacked Sidebar -->


		
    
    <!-- Page Wrapper -->
    <div class="page-wrapper">
        <div class="content">

           @yield('content')

        </div>

        

    </div>
    <!-- /Page Wrapper -->
    

</div>
<!-- /Main Wrapper -->

<!-- jQuery -->
<script data-cfasync="false" src="https://smarthr.dreamstechnologies.com/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="https://smarthr.dreamstechnologies.com/laravel/template/public/build/js/jquery-3.7.1.min.js" type="43818bf58cae6c6ba1a63a27-text/javascript"></script>

<!-- Bootstrap Core JS -->
<script src="https://smarthr.dreamstechnologies.com/laravel/template/public/build/js/bootstrap.bundle.min.js" type="43818bf58cae6c6ba1a63a27-text/javascript"></script>

<!-- Feather Icon JS -->
<script src="https://smarthr.dreamstechnologies.com/laravel/template/public/build/js/feather.min.js" type="43818bf58cae6c6ba1a63a27-text/javascript"></script>

<!-- Slimscroll JS -->
<script src="https://smarthr.dreamstechnologies.com/laravel/template/public/build/js/jquery.slimscroll.min.js" type="43818bf58cae6c6ba1a63a27-text/javascript"></script>

<!-- Summernote JS -->
<script src="https://smarthr.dreamstechnologies.com/laravel/template/public/build/plugins/summernote/summernote-lite.min.js" type="43818bf58cae6c6ba1a63a27-text/javascript"></script>

<!-- Color Picker JS -->
<script src="https://smarthr.dreamstechnologies.com/laravel/template/public/build/js/plyr-js.js" type="43818bf58cae6c6ba1a63a27-text/javascript"></script>
<script src="https://smarthr.dreamstechnologies.com/laravel/template/public/build/plugins/@simonwep/pickr/pickr.es5.min.js" type="43818bf58cae6c6ba1a63a27-text/javascript"></script>

<!-- Datatable JS -->
<script src="https://smarthr.dreamstechnologies.com/laravel/template/public/build/js/jquery.dataTables.min.js" type="43818bf58cae6c6ba1a63a27-text/javascript"></script>
<script src="https://smarthr.dreamstechnologies.com/laravel/template/public/build/js/dataTables.bootstrap5.min.js" type="43818bf58cae6c6ba1a63a27-text/javascript"></script>	

<!-- Bootstrap Tagsinput JS -->
<script src="https://smarthr.dreamstechnologies.com/laravel/template/public/build/plugins/bootstrap-tagsinput/bootstrap-tagsinput.js" type="43818bf58cae6c6ba1a63a27-text/javascript"></script>

<!-- Owl Carousel -->
<script src="https://smarthr.dreamstechnologies.com/laravel/template/public/build/plugins/owlcarousel/owl.carousel.min.js" type="43818bf58cae6c6ba1a63a27-text/javascript"></script>

<!-- Daterangepikcer JS -->
<script src="https://smarthr.dreamstechnologies.com/laravel/template/public/build/js/moment.js" type="43818bf58cae6c6ba1a63a27-text/javascript"></script>
<script src="https://smarthr.dreamstechnologies.com/laravel/template/public/build/plugins/daterangepicker/daterangepicker.js" type="43818bf58cae6c6ba1a63a27-text/javascript"></script>


<!-- Fullcalendar JS -->
<script src="https://smarthr.dreamstechnologies.com/laravel/template/public/build/plugins/fullcalendar/index.global.min.js" type="43818bf58cae6c6ba1a63a27-text/javascript"></script>
<script src="https://smarthr.dreamstechnologies.com/laravel/template/public/build/plugins/fullcalendar/calendar-data.js" type="43818bf58cae6c6ba1a63a27-text/javascript"></script>

<!-- Datetimepicker JS -->
<script src="https://smarthr.dreamstechnologies.com/laravel/template/public/build/js/bootstrap-datetimepicker.min.js" type="43818bf58cae6c6ba1a63a27-text/javascript"></script>

<!-- Select2 JS -->
<script src="https://smarthr.dreamstechnologies.com/laravel/template/public/build/plugins/select2/js/select2.min.js" type="43818bf58cae6c6ba1a63a27-text/javascript"></script>

<!-- Theiastickysidebar JS -->
<script src="https://smarthr.dreamstechnologies.com/laravel/template/public/build/plugins/theia-sticky-sidebar/theia-sticky-sidebar.min.js" type="43818bf58cae6c6ba1a63a27-text/javascript"></script>
<script src="https://smarthr.dreamstechnologies.com/laravel/template/public/build/plugins/theia-sticky-sidebar/ResizeSensor.min.js" type="43818bf58cae6c6ba1a63a27-text/javascript"></script>

<!-- Owl Carousel JS -->
<script src="https://smarthr.dreamstechnologies.com/laravel/template/public/build/js/owl.carousel.min.js" type="43818bf58cae6c6ba1a63a27-text/javascript"></script>








    <!-- Chart JS -->
    <script src="https://smarthr.dreamstechnologies.com/laravel/template/public/build/plugins/apexchart/apexcharts.min.js" type="43818bf58cae6c6ba1a63a27-text/javascript"></script>
    <script src="https://smarthr.dreamstechnologies.com/laravel/template/public/build/plugins/apexchart/chart-data.js" type="43818bf58cae6c6ba1a63a27-text/javascript"></script>


    <!-- Chart JS -->
    <script src="https://smarthr.dreamstechnologies.com/laravel/template/public/build/plugins/chartjs/chart.min.js" type="43818bf58cae6c6ba1a63a27-text/javascript"></script>
    <script src="https://smarthr.dreamstechnologies.com/laravel/template/public/build/plugins/chartjs/chart-data.js" type="43818bf58cae6c6ba1a63a27-text/javascript"></script>


    <!-- Chart JS -->
    <script src="https://smarthr.dreamstechnologies.com/laravel/template/public/build/plugins/peity/jquery.peity.min.js" type="43818bf58cae6c6ba1a63a27-text/javascript"></script>
    <script src="https://smarthr.dreamstechnologies.com/laravel/template/public/build/plugins/peity/chart-data.js" type="43818bf58cae6c6ba1a63a27-text/javascript"></script>


<!-- Slimscroll JS -->
<script src="https://smarthr.dreamstechnologies.com/laravel/template/public/build/js/jquery.slimscroll.min.js" type="43818bf58cae6c6ba1a63a27-text/javascript"></script>







<!-- Sticky Sidebar JS -->
<script src="https://smarthr.dreamstechnologies.com/laravel/template/public/build/plugins/theia-sticky-sidebar/ResizeSensor.js" type="43818bf58cae6c6ba1a63a27-text/javascript"></script>
<script src="https://smarthr.dreamstechnologies.com/laravel/template/public/build/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js" type="43818bf58cae6c6ba1a63a27-text/javascript"></script>







<!-- Fancybox JS -->
<script src="https://smarthr.dreamstechnologies.com/laravel/template/public/build/plugins/fancybox/jquery.fancybox.min.js" type="43818bf58cae6c6ba1a63a27-text/javascript"></script>

<!-- Chart JS -->
<script src="https://smarthr.dreamstechnologies.com/laravel/template/public/build/plugins/chartjs/chart.min.js" type="43818bf58cae6c6ba1a63a27-text/javascript"></script>
<script src="https://smarthr.dreamstechnologies.com/laravel/template/public/build/plugins/chartjs/chart-data.js" type="43818bf58cae6c6ba1a63a27-text/javascript"></script>





<script src="https://smarthr.dreamstechnologies.com/laravel/template/public/build/js/email.js" type="43818bf58cae6c6ba1a63a27-text/javascript"></script>
<script src="https://smarthr.dreamstechnologies.com/laravel/template/public/build/js/kanban.js" type="43818bf58cae6c6ba1a63a27-text/javascript"></script>
<script src="https://smarthr.dreamstechnologies.com/laravel/template/public/build/js/invoice.js" type="43818bf58cae6c6ba1a63a27-text/javascript"></script>
<script src="https://smarthr.dreamstechnologies.com/laravel/template/public/build/js/projects.js" type="43818bf58cae6c6ba1a63a27-text/javascript"></script>
<script src="https://smarthr.dreamstechnologies.com/laravel/template/public/build/js/add-comments.js" type="43818bf58cae6c6ba1a63a27-text/javascript"></script>
<script src="https://smarthr.dreamstechnologies.com/laravel/template/public/build/js/file-manager.js" type="43818bf58cae6c6ba1a63a27-text/javascript"></script>


<!-- Custom JS -->
<script src="https://smarthr.dreamstechnologies.com/laravel/template/public/build/js/todo.js" type="43818bf58cae6c6ba1a63a27-text/javascript"></script>
<script src="https://smarthr.dreamstechnologies.com/laravel/template/public/build/js/theme-colorpicker.js" type="43818bf58cae6c6ba1a63a27-text/javascript"></script>
<script src="https://smarthr.dreamstechnologies.com/laravel/template/public/build/js/script.js" type="43818bf58cae6c6ba1a63a27-text/javascript"></script><script src="https://smarthr.dreamstechnologies.com/cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="43818bf58cae6c6ba1a63a27-|49" defer></script><script defer src="https://static.cloudflareinsights.com/beacon.min.js/vcd15cbe7772f49c399c6a5babf22c1241717689176015" integrity="sha512-ZpsOmlRQV6y907TI0dKBHq9Md29nnaEIPlkf84rnaERnq6zvWvPUqr2ft8M1aS28oN72PdrCzSjY4U6VaAw1EQ==" data-cf-beacon='{"rayId":"918fe3f42ec0998d","version":"2025.1.0","serverTiming":{"name":{"cfExtPri":true,"cfL4":true,"cfSpeedBrain":true,"cfCacheStatus":true}},"token":"3ca157e612a14eccbb30cf6db6691c29","b":1}' crossorigin="anonymous"></script>
</body>


<!-- Mirrored from smarthr.dreamstechnologies.com/laravel/template/public/dashboard by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 28 Feb 2025 10:56:54 GMT -->
</html>

