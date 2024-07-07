<aside class="left-sidebar" data-sidebarbg="skin6">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li class="sidebar-item"> <a
                        class="sidebar-link waves-effect waves-dark sidebar-link {{ Request::is('admin/dashboard') ? 'bg-primary' : '' }}"
                        href="/admin/dashboard" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span
                            class="hide-menu">Dashboard</span></a></li>
                <li class="sidebar-item"> <a
                        class="sidebar-link waves-effect waves-dark sidebar-link {{ Request::is('admin/mobil') ? 'bg-primary' : '' }}"
                        href="/admin/mobil" aria-expanded="false"><i class="fa-solid fa-car me-2"></i><span
                            class="hide-menu">Mobil</span></a></li>
                <li class="sidebar-item"> <a
                        class="sidebar-link waves-effect waves-dark sidebar-link {{ Request::is('admin/transaksi') ? 'bg-primary' : '' }}"
                        href="/admin/transaksi" aria-expanded="false"><i class="fa-solid fa-receipt me-2"></i><span
                            class="hide-menu">Transaksi</span></a></li>
                <li class="sidebar-item"> <a
                        class="sidebar-link waves-effect waves-dark sidebar-link {{ Request::is('admin/penyewa') ? 'bg-primary' : '' }}"
                        href="/admin/penyewa" aria-expanded="false"><i class="fa-solid fa-address-card me-2"></i><span
                            class="hide-menu">Penyewa</span></a></li>
                <li class="sidebar-item"> <a
                        class="sidebar-link waves-effect waves-dark sidebar-link {{ Request::is('admin/user') ? 'bg-primary' : '' }}"
                        href="/admin/user" aria-expanded="false"><i class="fa-solid fa-user me-2"></i><span
                            class="hide-menu">Users</span></a></li>
                {{-- <li class="text-center p-40 upgrade-btn">
                    <a href="https://www.wrappixel.com/templates/flexy-bootstrap-admin-template/"
                        class="btn d-block w-100 btn-danger text-white" target="_blank">Upgrade to Pro</a>
                </li> --}}
            </ul>

        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
