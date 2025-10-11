<div class="sidebar shadow-sm bg-white" style="border-radius: 16px; margin: 16px;">
    <div class="logo-text-wrapper d-flex align-items-center" style="padding: 20px;">
        <img src="{{ asset('assets/img/logo1.png') }}" alt="Logo" />
    </div>
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
            <ul class="nav nav-secondary">
                <li class="nav-item active">
                    <a data-bs-toggle="collapse" href="#dashboard" aria-expanded="true"
                        style="width: 100%; display: flex;">
                        <i class="fas fa-home"></i>
                        <p class="dashboard-text">Dashboard</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a data-bs-toggle="collapse" href="#base">
                        <i class="fas fa-cog"></i>
                        <p>Pengaturan</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="base">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="components/avatars.html">
                                    <span class="sub-item">Avatars</span>
                                </a>
                            </li>
                            <li>
                                <a href="components/buttons.html">
                                    <span class="sub-item">Buttons</span>
                                </a>
                            </li>
                            <li>
                                <a href="components/gridsystem.html">
                                    <span class="sub-item">Grid System</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a data-bs-toggle="collapse" href="#submenu">
                        <i class="fas fa-edit"></i>
                        <p>Basis Data</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="submenu">
                        <ul class="nav nav-collapse">
                            <li>
                                <a data-bs-toggle="collapse" href="#subnav1">
                                    <span class="sub-item">Driver</span>
                                    <span class="caret"></span>
                                </a>
                                <div class="collapse" id="subnav1">
                                    <ul class="nav nav-collapse subnav">
                                        <li>
                                            <a href="{{ route('driver.create') }}">
                                                <span class="sub-item">Register Driver</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ route('driver.index') }}">
                                                <span class="sub-item">Data Driver</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <a data-bs-toggle="collapse" href="#subnav5">
                                    <span class="sub-item">Armada</span>
                                    <span class="caret"></span>
                                </a>
                                <div class="collapse" id="subnav5">
                                    <ul class="nav nav-collapse subnav">
                                        <li>
                                            <a href="{{ route('armadas.create') }}">
                                                <span class="sub-item">Register Armada</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ route('armadas.index') }}">
                                                <span class="sub-item">Data Armada</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <a data-bs-toggle="collapse" href="#subnav2">
                                    <span class="sub-item">Pelanggan</span>
                                    <span class="caret"></span>
                                </a>
                                <div class="collapse" id="subnav2">
                                    <ul class="nav nav-collapse subnav">
                                        <li>
                                            <a href="{{ route('customers.create') }}">
                                                <span class="sub-item">Register Pelanggan</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ route('customers.index') }}">
                                                <span class="sub-item">Data Pelanggan</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a data-bs-toggle="collapse" href="#farmi">
                        <i class="fa fa-list-alt"></i>
                        <p>Tahapan Perguliran</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="farmi">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="{{ route('orders.create') }}">
                                    <span class="sub-item">Register Pesanan</span>
                                </a>
                            </li>
                            <li>
                                <a href="farmi/farmi.html">
                                    <span class="sub-item">Status Pesanan</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a data-bs-toggle="collapse" href="#forms">
                        <i class="fa fa-recycle"></i>
                        <p>Transaksi</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="forms">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="forms/forms.html">
                                    <span class="sub-item">Basic Form</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a data-bs-toggle="collapse" href="#tables">
                        <i class="fas fa-file"></i>
                        <p>Laporan</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="tables">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="tables/tables.html">
                                    <span class="sub-item">Basic Table</span>
                                </a>
                            </li>
                            <li>
                                <a href="tables/datatables.html">
                                    <span class="sub-item">Datatables</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
