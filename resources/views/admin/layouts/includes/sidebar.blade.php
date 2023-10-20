<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
  <div class="app-brand demo">
    <a href="dashboard" class="app-brand-link">
      <span class="app-brand-logo demo">
        <img src="{{ asset('storage/logo/logo.webp') }}" alt="" height="60px" width="100%">
      </span>
    </a>

    <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
      <i class="bx bx-chevron-left bx-sm align-middle"></i>
    </a>
  </div>

  <div class="menu-inner-shadow"></div>

  <ul class="menu-inner py-1">
    <!-- Dashboard -->
    <li class="menu-item {{ request()->is('dashboard') ? 'active' : '' }}">
      <a href="{{route('dashboard')}}" class="menu-link">
        <i class="menu-icon tf-icons bx bx-home-circle"></i>
        <div>Dashboard</div>
      </a>
    </li>
    <!-- Manage -->
    <li class="menu-header small text-uppercase">
      <span class="menu-header-text">Manage</span>
    </li>
    <?php

    //     <!-- 
        // @if(Auth::user()->role == 1)
        // <li class="menu-item {{ request()->is('admin.invoice') ? 'active' : '' }}">
        //   <a href="{{route('admin.invoice')}}" class="menu-link">
        //     <i class="menu-icon tf-icons bx bx-food-menu"></i>
        //     <div>Work Order</div>
        //   </a>
        // </li>
        // <li class="menu-item {{ request()->is('admin.warranty') ? 'active' : '' }}">
        //   <a href="{{route('admin.warranty')}}" class="menu-link">
        //     <i class="menu-icon tf-icons bx bx-food-menu"></i>
        //     <div>Warranty</div>
        //   </a>
        // </li>
        // @elseif(Auth::user()->role == 0)
        // <li class="menu-item {{ request()->is('user.invoice') ? 'active' : '' }}">
        //   <a href="{{route('user.invoice')}}" class="menu-link">
        //     <i class="menu-icon tf-icons bx bx-food-menu"></i>
        //     <div>Work Order</div>
        //   </a>
        // </li>
        // <li class="menu-item {{ request()->is('user.warranty') ? 'active' : '' }}">
        //   <a href="{{route('user.warranty')}}" class="menu-link">
        //     <i class="menu-icon tf-icons bx bx-food-menu"></i>
        //     <div>Warranty</div>
        //   </a>
        // </li>
        // @endif
    //  -->

    ?>

@if (auth()->check()) <!-- Check if a user is logged in -->
    @if (auth()->user()->role == 0) <!-- Check if the user is an admin -->
        <li class="menu-item {{ request()->is('admin.invoice') ? 'active' : '' }}">
            <a href="{{ route('admin.invoice') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-food-menu"></i>
                <div>Work Order</div>
            </a>
        </li>
        <li class="menu-item {{ request()->is('admin.warranty') ? 'active' : '' }}">
            <a href="{{ route('admin.warranty') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-food-menu"></i>
                <div>Warranty</div>
            </a>
        </li>
    @else
        <li class="menu-item {{ request()->is('user.invoice') ? 'active' : '' }}">
            <a href="{{ route('user.invoice') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-food-menu"></i>
                <div>Work Order</div>
            </a>
        </li>
        <li class="menu-item {{ request()->is('user.warranty') ? 'active' : '' }}">
            <a href="{{ route('user.warranty') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-food-menu"></i>
                <div>Warranty</div>
            </a>
        </li>
    @endif
@endif

  </ul>
</aside>