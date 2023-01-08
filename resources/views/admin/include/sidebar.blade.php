<?php
// finds the last URL segment
$urlArray = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$segments = explode('/', $urlArray);
$numSegments = count($segments);
$currentSegment = $segments[$numSegments - 1];
if ($currentSegment == 'master-height') {
    $segment_uri = 'active';
    $seg_css = 'block';
} else {
    $segment_uri = '';
    $seg_css = 'none';
}
?>

<header class="main-nav">
    <div class="sidebar-user text-center">
        <a class="setting-primary" href="javascript:void(0)"><i data-feather="settings"></i></a>
        <img class="img-90 rounded-circle" src="{{ asset('backend/assets/images/dashboard/1.png') }}" alt="">
        <div class="badge-bottom"><span class="badge badge-primary">New</span></div>
        <a href="{{ route('administrator.dashboard') }}">
            <h6 class="mt-3 f-14 f-w-600">{{ Auth::guard('administrator')->user()->name }}</h6>
        </a>
        <p class="mb-0 font-roboto">Dashboard</p>
    </div>
    <nav>
        <div class="main-navbar">
            <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
            <div id="mainnav">
                <ul class="nav-menu custom-scrollbar">
                    <li class="back-btn">
                        <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2"
                                aria-hidden="true"></i></div>
                    </li>
                    <li class="sidebar-main-title">
                        <div>
                            <h6>Side Bar</h6>
                        </div>
                    </li>
                    <li>
                        <a class="nav-link menu-title" href="{{ route('administrator.dashboard') }}">
                            <i data-feather="home"></i><span>Dashboard </span>
                        </a>
                    </li>
                    <li class="dropdown">
                        <a class="nav-link menu-title {{ $segment_uri }}" href="javascript:void(0)">
                            <i data-feather="airplay"></i><span>Category</span></a>
                        <ul class="nav-submenu menu-content">
                            <li><a href="{{ route('administrator.category.category_list') }}">Create Category</a></li>
                            <li><a href="{{ route('administrator.category.list_category') }}">List Category</a></li>
                            <li>
                                <a href="{{ route('administrator.category.sub_category_create') }}">Create Sub
                                    Category</a>
                            </li>
                            <li>
                                <a href="{{ route('administrator.category.list_sub_category') }}">List Sub Category</a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown"><a class="nav-link menu-title {{ $segment_uri }}" href="javascript:void(0)"><i
                                data-feather="airplay"></i><span>Combination Panel</span></a>
                        <ul class="nav-submenu menu-content">
                            <li><a href="">Report Details</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
        </div>
    </nav>
</header>
