<?php
    $websiteDetails = App\Models\WebsiteDetail::Where('id', '1')->first();
?>
<div class="sidebar sidebar-dark sidebar-fixed border-end" id="sidebar">
    <div class="sidebar-header border-bottom">
        <div class="sidebar-brand">
            <a class="" href="{{ url('/admin') }}">
                <img alt="LOGO" src="{{ asset(IMAGE_UPLOAD_PATH.'/'.$websiteDetails['image']) }}" style="height: 81px;width: 83px;border-radius: 47px;"/>
            </a>
            <use xlink:href="{{ asset('backend/images/brand/coreui.svg#full')}}"></use>
            </svg>
            <svg class="sidebar-brand-narrow" width="32" height="32" alt="CoreUI Logo">
            <use xlink:href="{{ asset('backend/images/brand/coreui.svg#signet')}}"></use>
            </svg>
        </div>
        <button class="btn-close d-lg-none" type="button" data-coreui-dismiss="offcanvas" data-coreui-theme="dark" aria-label="Close" onclick="coreui.Sidebar.getInstance(document.querySelector(&quot;#sidebar&quot;)).toggle()"></button>
    </div>
    <ul class="sidebar-nav" data-coreui="navigation" data-simplebar>
        <li class="nav-item"><a class="nav-link" href="{{ url('/admin') }}">
            <svg class="nav-icon"></svg> Dashboard</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ url('/admin/homepage') }}">
            <svg class="nav-icon"></svg>HomePage</a>
        </li>
        <li class="nav-item"><a class="nav-link" href="{{ url('/admin/wesite-details') }}">
            <svg class="nav-icon"></svg>Website Deatils</a>
        </li>
        <li class="nav-item"><a class="nav-link">
            <a class="btn btn-primary" href="javascript:void(0);" onclick="logout()">Logout</a>
        </li>
    </ul>
</div>