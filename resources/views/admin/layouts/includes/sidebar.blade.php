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
    @if (auth()->check()) <!-- Check if a user is logged in -->
      @if (auth()->user()->role == 0) <!-- Check if the user is an admin -->
        <!--Admin Dashboard -->
        <li class="menu-item {{ request()->is('admin/dashboard*') ? 'active' : '' }}">
          <a href="{{route('admin.dashboard')}}" class="menu-link">
            <i class="menu-icon tf-icons bx bx-home-circle"></i>
            <div>Dashboard</div>
          </a>
        </li>
        <!-- Manage -->
        <li class="menu-header small text-uppercase">
          <span class="menu-header-text">Manage</span>
        </li>

        <li class="menu-item {{ request()->is('admin/user*') ? 'active open' : '' }}">
          <a href="javascript:void(0)" class="menu-link menu-toggle">
            <i class="menu-icon tf-icons bx bx-user"></i>
            <div data-i18n="User interface">Users Management</div>
          </a>
          <ul class="menu-sub">
            <li class="menu-item {{ request()->is('admin/user') ? 'active' : '' }}">
              <a href="{{ route('admin.user') }}" class="menu-link">
                <div data-i18n="Alerts">List</div>
              </a>
            </li>
            <li class="menu-item {{ request()->is('admin/user/create') ? 'active' : '' }}">
              <a href="{{route('admin.user.create')}}" class="menu-link">
                <div data-i18n="Alerts">Add</div>
              </a>
            </li>
          </ul>
        </li>

        <li class="menu-item {{ request()->is('admin/blog*') ? 'active open' : '' }}">
          <a href="javascript:void(0)" class="menu-link menu-toggle">
            <i class="menu-icon tf-icons bx bx-conversation"></i>
            <div data-i18n="User interface">Blogs Management</div>
          </a>
          <ul class="menu-sub">
            <li class="menu-item {{ request()->is('admin/blog') ? 'active' : '' }}">
              <a href="{{ route('admin.blog') }}" class="menu-link">
                <div data-i18n="Alerts">List</div>
              </a>
            </li>
            <li class="menu-item {{ request()->is('admin/blog/create') ? 'active' : '' }}">
              <a href="{{route('admin.blog.create')}}" class="menu-link">
                <div data-i18n="Alerts">Add</div>
              </a>
            </li>
          </ul>
        </li>

        <li class="menu-item {{ request()->is('admin/product*') ? 'active open' : '' }}">
          <a href="javascript:void(0)" class="menu-link menu-toggle">
            <i class="menu-icon tf-icons bx bx-spreadsheet"></i>
            <div data-i18n="User interface">Products Management</div>
          </a>
          <ul class="menu-sub">
            <li class="menu-item {{ request()->is('admin/product') ? 'active' : '' }}">
              <a href="{{ route('admin.product') }}" class="menu-link">
                <div data-i18n="Alerts">List</div>
              </a>
            </li>
            <li class="menu-item {{ request()->is('admin/product/create') ? 'active' : '' }}">
              <a href="{{route('admin.product.create')}}" class="menu-link">
                <div data-i18n="Alerts">Add</div>
              </a>
            </li>
          </ul>
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
        <!-- Dashboard -->
        <li class="menu-item {{ request()->is('dashboard*') ? 'active' : '' }}">
          <a href="{{route('dashboard')}}" class="menu-link">
            <i class="menu-icon tf-icons bx bx-home-circle"></i>
            <div>Dashboard</div>
          </a>
        </li>
        <!-- Manage -->
        <li class="menu-header small text-uppercase">
          <span class="menu-header-text">Manage</span>
        </li>

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