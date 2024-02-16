<style>
    .menu .app-brand.demo {
        height: auto !important;
        margin-bottom: 30px;
    }
</style>
<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="/dashboard" class="app-brand-link">
            <span class="app-brand-logo demo">
                <img height="100" src="{{ asset('logo.webp') }}">
            </span>
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
        @if (auth()->check()) <!-- Check if a user is logged in -->
            @if (auth()->user()->role == 0)
                <!-- Check if the user is an admin -->
                <!--Admin Dashboard -->

                <li class="menu-item {{ request()->is('admin/dashboard*') ? 'active' : '' }}">
                    <a href="{{ route('admin.dashboard') }}" class="menu-link">
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
                            <a href="{{ route('admin.user.create') }}" class="menu-link">
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
                            <a href="{{ route('admin.blog.create') }}" class="menu-link">
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
                            <a href="{{ route('admin.product.create') }}" class="menu-link">
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
                            <a href="{{ route('admin.invoice') }}" class="menu-link">
                                <div data-i18n="Alerts">List</div>
                            </a>
                        </li>
                        <li class="menu-item {{ request()->is('admin/invoice/create') ? 'active' : '' }}">
                            <a href="{{ route('admin.invoice.create') }}" class="menu-link">
                                <div data-i18n="Alerts">Add</div>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="menu-item {{ request()->is('admin/upload-invoice*') ? 'active open' : '' }}">
                    <a href="javascript:void(0)" class="menu-link menu-toggle">
                        <i class="menu-icon tf-icons bx bx-file"></i>
                        <div data-i18n="User interface">Invoices</div>
                    </a>
                    <ul class="menu-sub">
                        <li class="menu-item {{ request()->is('admin/upload-invoice') ? 'active' : '' }}">
                            <a href="{{ route('admin.upload-invoice.create') }}" class="menu-link">
                                <div data-i18n="Alerts">Upload Invoice</div>
                            </a>
                        </li>
                        <!-- The Customer Invoices section might be accessed from within a specific customer's profile view -->
                        {{-- <li class="menu-item">
                            <a href="#" class="menu-link">
                                <div data-i18n="Alerts">Customer Invoices</div>
                            </a>
                        </li> --}}
                    </ul>
                </li>


                <li class="menu-item {{ request()->is('admin/warranty*') ? 'active open' : '' }}">
                    <a href="javascript:void(0)" class="menu-link menu-toggle">
                        <i class="menu-icon tf-icons bx bx-user"></i>
                        <div data-i18n="User interface">Warranty</div>
                    </a>
                    <ul class="menu-sub">
                        <li class="menu-item {{ request()->is('admin/warranty') ? 'active' : '' }}">
                            <a href="{{ route('admin.warranty') }}" class="menu-link">
                                <div data-i18n="Alerts">List</div>
                            </a>
                        </li>
                        <li class="menu-item {{ request()->is('admin/warranty/create') ? 'active' : '' }}">
                            <a href="{{ route('admin.warranty.create') }}" class="menu-link">
                                <div data-i18n="Alerts">Add</div>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="menu-item {{ request()->is('admin/shop/order*') ? 'active' : '' }}">
                    <a href="{{ route('admin.shopOrder') }}" class="menu-link">
                        <i class="menu-icon tf-icons bx bx-food-menu"></i>
                        <div>Shop Orders Management</div>
                    </a>
                </li>
                <li class="menu-item {{ request()->is('admin/icon/contact*') ? 'active' : '' }}">
                    <a href="{{ route('admin.icon.contact') }}" class="menu-link">
                        <i class="menu-icon tf-icons bx bx-food-menu"></i>
                        <div>Icon Rocklear</div>
                    </a>
                </li>

                <!-- <li class="menu-item {{ request()->is('admin/WorkOrderStatus*') ? 'active open' : '' }}">
          <a href="javascript:void(0)" class="menu-link menu-toggle">
            <i class="menu-icon tf-icons bx bx-user"></i>
            <div data-i18n="User interface">Work Order Status</div>
          </a>
          <ul class="menu-sub">
            <li class="menu-item {{ request()->is('admin/WorkOrderStatus') ? 'active' : '' }}">
              <a href="{{ route('admin.WorkOrderStatus') }}" class="menu-link">
                <div data-i18n="Alerts">List</div>
              </a>
            </li>
            <li class="menu-item {{ request()->is('admin/WorkOrderStatus/create') ? 'active' : '' }}">
              <a href="{{ route('admin.WorkOrderStatus.create') }}" class="menu-link">
                <div data-i18n="Alerts">Add</div>
              </a>
            </li>
          </ul>
        </li> -->

                <li class="menu-item {{ request()->is('admin/contact') ? 'active' : '' }}">
                    <a href="{{ route('admin.contact') }}" class="menu-link">
                        <i class="menu-icon tf-icons bx bx-food-menu"></i>
                        <div>Contact Us</div>
                    </a>
                </li>
                <li class="menu-item {{ request()->is('admin/media') ? 'active' : '' }}">
                    <a href="{{ route('admin.media') }}" class="menu-link">
                        <i class="menu-icon tf-icons bx bx-food-menu"></i>
                        <div>Media</div>
                    </a>
                </li>

                <li
                    class="menu-item {{ request()->is('admin/contests') || request()->is('admin/contests/create') ? 'active open' : '' }}">
                    <a href="javascript:void(0)" class="menu-link menu-toggle">
                        <i class="menu-icon tf-icons bx bx-user"></i>
                        <div data-i18n="User interface">Contests Wheel</div>
                    </a>
                    <ul class="menu-sub">
                        <li class="menu-item {{ request()->is('admin/contests/create') ? 'active' : '' }}">
                            <a href="{{ route('admin.contest.create') }}" class="menu-link">
                                <div data-i18n="Alerts">Add</div>
                            </a>
                        </li>
                        <li class="menu-item {{ request()->is('admin/contests') ? 'active' : '' }}">
                            <a href="{{ route('admin.contests') }}" class="menu-link">
                                <div data-i18n="Alerts">List</div>
                            </a>
                        </li>
                        <li class="menu-item {{ request()->is('admin/winners') ? 'active' : '' }}">
                            <a href="{{ route('admin.winners') }}" class="menu-link">
                                <div data-i18n="Alerts">Winners</div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li
                    class="menu-item {{ request()->is('admin/pick/winners') || request()->is('admin/contests/create') ? 'active open' : '' }}">
                    <a href="javascript:void(0)" class="menu-link menu-toggle">
                        <i class="menu-icon tf-icons bx bx-user"></i>
                        <div data-i18n="User interface">Giveaway</div>
                    </a>
                    <ul class="menu-sub">
                        <li class="menu-item {{ request()->is('admin/pick/winners') ? 'active' : '' }}">
                            <a href="{{ route('admin.pick.winners') }}" class="menu-link">
                                <div data-i18n="Alerts">Pick Winner</div>
                            </a>
                        </li>

                        <li class="menu-item {{ request()->is('admin/giveaway/users') ? 'active' : '' }}">
                            <a href="{{ route('admin.list.giveaway') }}" class="menu-link">
                                <div data-i18n="Alerts">List Users</div>
                            </a>
                        </li>
                        <li class="menu-item {{ request()->is('admin/winners') ? 'active' : '' }}">
                            <a href="{{ route('admin.giveaway.winners') }}" class="menu-link">
                                <div data-i18n="Alerts">Winners</div>
                            </a>
                        </li>
                    </ul>
                </li>

                <li
                    class="menu-item {{ request()->is('admin/testimonials') || request()->is('admin/testimonials/create') ? 'active open' : '' }}">
                    <a href="javascript:void(0)" class="menu-link menu-toggle">
                        <i class="menu-icon tf-icons bx bx-user"></i>
                        <div data-i18n="User interface">Testimonials</div>
                    </a>
                    <ul class="menu-sub">
                        <li class="menu-item {{ request()->is('admin/testimonials/create') ? 'active' : '' }}">
                            <a href="{{ route('admin.testimonials.create') }}" class="menu-link">
                                <div data-i18n="Alerts">Add</div>
                            </a>
                        </li>
                        <li class="menu-item {{ request()->is('admin/testimonials') ? 'active' : '' }}">
                            <a href="{{ route('testimonials.index') }}" class="menu-link">
                                <div data-i18n="Alerts">List</div>
                            </a>
                        </li>
                    </ul>
                </li>
            @else
                <!-- Dashboard -->
                <li class="menu-item {{ request()->is('dashboard*') ? 'active' : '' }}">
                    <a href="{{ route('dashboard') }}" class="menu-link">
                        <i class="menu-icon tf-icons bx bx-home-circle"></i>
                        <div>Dashboard</div>
                    </a>
                </li>
                <!-- Manage -->
                <li class="menu-header small text-uppercase">
                    <span class="menu-header-text">Manage</span>
                </li>

                <!-- Work Order -->
                <li class="menu-item {{ request()->is('invoice') ? 'active' : '' }}">
                    <a href="{{ route('user.invoice') }}" class="menu-link">
                        <i class="menu-icon tf-icons bx bx-receipt"></i>
                        <div>Work Order</div>
                    </a>
                </li>

                <!-- Invoices -->
                <li class="menu-item {{ request()->is('invoices') ? 'active' : '' }}">
                    <a href="{{ route('user.view-invoices') }}" class="menu-link">
                        <i class="menu-icon tf-icons bx bx-file"></i>
                        <div data-i18n="User interface">Invoices</div>
                    </a>
                </li>

                <!-- Warranty -->
                <li class="menu-item {{ request()->is('warranty') ? 'active' : '' }}">
                    <a href="{{ route('user.warranty') }}" class="menu-link">
                        <i class="menu-icon tf-icons bx bx-shield"></i>
                        <div>Warranty</div>
                    </a>
                </li>

                <!-- Shop Orders Management -->
                <li class="menu-item {{ request()->is('shop/order*') ? 'active' : '' }}">
                    <a href="{{ route('user.shopOrder') }}" class="menu-link">
                        <i class="menu-icon tf-icons bx bx-cart"></i>
                        <div>Shop Orders</div>
                    </a>
                </li>

                {{-- <li class="menu-item {{ request()->is('contests*') ? 'active' : '' }}">
          <a href="{{ route('contests') }}" class="menu-link">
            <i class="menu-icon tf-icons bx bx-user"></i>
            <div>Contests</div>
          </a>
        </li> --}}


                <!-- <li class="menu-item {{ request()->is('order-status*') ? 'active' : '' }}">
          <a href="{{ route('user.orderStatus') }}" class="menu-link">
            <i class="menu-icon tf-icons bx bx-food-menu"></i>
            <div>Order Status</div>
          </a>
        </li> -->
            @endif
        @endif

    </ul>
</aside>
