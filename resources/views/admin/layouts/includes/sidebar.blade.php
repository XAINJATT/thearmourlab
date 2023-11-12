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
    <li class="menu-item {{ request()->is('admin/user') ? 'active' : '' }}">
      <a href="{{ route('admin.user') }}" class="menu-link">
        <i class="menu-icon tf-icons bx bx-food-menu"></i>
        <div>User Management</div>
      </a>
    </li>
    <li class="menu-item {{ request()->is('admin/invoice*') ? 'active open' : '' }}">
      <a href="javascript:void(0)" class="menu-link menu-toggle">
        <i class="menu-icon tf-icons bx bx-user"></i>
        <div data-i18n="User interface">Work Order</div>
      </a>
      <ul class="menu-sub">
        <li class="menu-item {{ request()->is('admin/invoice') ? 'active' : '' }}">
          <a href="{{route('admin.invoice')}}" class="menu-link">
            <div data-i18n="Alerts">List</div>
          </a>
        </li>
        <li class="menu-item {{ request()->is('admin/invoice/create') ? 'active' : '' }}">
          <a href="{{route('admin.invoice.create')}}" class="menu-link">
            <div data-i18n="Alerts">Add</div>
          </a>
        </li>
      </ul>
    </li>

    <li class="menu-item {{ request()->is('admin/warranty*') ? 'active open' : '' }}">
      <a href="javascript:void(0)" class="menu-link menu-toggle">
        <i class="menu-icon tf-icons bx bx-user"></i>
        <div data-i18n="User interface">Warranty</div>
      </a>
      <ul class="menu-sub">
        <li class="menu-item {{ request()->is('admin/warranty') ? 'active' : '' }}">
          <a href="{{route('admin.warranty')}}" class="menu-link">
            <div data-i18n="Alerts">List</div>
          </a>
        </li>
        <li class="menu-item {{ request()->is('admin/warranty/create') ? 'active' : '' }}">
          <a href="{{route('admin.warranty.create')}}" class="menu-link">
            <div data-i18n="Alerts">Add</div>
          </a>
        </li>
      </ul>
    </li>
    @else
    <li class="menu-item {{ request()->is('invoice') ? 'active' : '' }}">
      <a href="{{ route('user.invoice') }}" class="menu-link">
        <i class="menu-icon tf-icons bx bx-food-menu"></i>
        <div>Work Order</div>
      </a>
    </li>
    <li class="menu-item {{ request()->is('warranty') ? 'active' : '' }}">
      <a href="{{ route('user.warranty') }}" class="menu-link">
        <i class="menu-icon tf-icons bx bx-food-menu"></i>
        <div>Warranty</div>
      </a>
    </li>

    <li class="menu-item {{ request()->is('order-status*') ? 'active open' : '' }}">
      <a href="javascript:void(0)" class="menu-link menu-toggle">
        <i class="menu-icon tf-icons bx bx-user"></i>
        <div data-i18n="User interface">Order</div>
      </a>
      <ul class="menu-sub">
        <li class="menu-item {{ request()->is('order-status') ? 'active' : '' }}">
          <a href="{{route('user.orderStatus')}}" class="menu-link">
            <div data-i18n="Alerts">Order Status</div>
          </a>
        </li>
        <!-- <li class="menu-item {{ request()->is('order-status/order-details') ? 'active' : '' }}">
          <a href="{{route('user.orderDetails')}}" class="menu-link">
            <div data-i18n="Accordion">Order Details</div>
          </a>
        </li> -->
      </ul>
    </li>
    @endif
    @endif

  </ul>
</aside>