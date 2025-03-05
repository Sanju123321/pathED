<div class="container-fluid border-bottom px-4">
    <button class="header-toggler" type="button" onclick="coreui.Sidebar.getInstance(document.querySelector('#sidebar')).toggle()" style="margin-inline-start: -14px;">
    <svg class="icon icon-lg">
        <use xlink:href="{{ asset('backend/coreui/icons/sprites/free.svg#cil-menu')}}"></use>
    </svg>
    </button>
    <ul class="header-nav">
        <li class="nav-item dropdown"><a class="nav-link py-0 pe-0" data-coreui-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
            <div class="avatar avatar-md"><img class="avatar-img" src="{{ asset('backend/images/img/avatars/8.jpg') }}" alt="user@email.com"></div></a>
            <div class="dropdown-menu dropdown-menu-end pt-0">
            <div class="dropdown-header text-body-secondary fw-semibold rounded-top mb-2"></div>
                <a class="dropdown-item" href="{{ url('/admin/profile') }}">Profile</a>
                <a class="dropdown-item" onclick="logout()" href="javascript:void(0);">Logout</a>
            </div>
        </li>
    </ul>
</div>