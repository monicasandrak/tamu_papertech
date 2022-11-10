<section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="image">
                    <img src="{{asset('template3')}}/images/user3.png" width="48" height="48" alt="User" />
                </div>
                <div class="info-container">
                    <div class="username" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    @if(Auth::user()->level == 'security')
                        <a class="name">{{Auth::user()->username}}</a>
                        <div class="email">Security</div>
                    @endif
                    @if(Auth::user()->level == 'klinik')
                        <a class="name">{{Auth::user()->username}}</a>
                        <div class="email">Pegawai Klinik</div>
                        @endif
                    @if(Auth::user()->level == 'admin')
                        <a class="name">{{Auth::user()->username}}</a>
                        <div class="email">Admin</div>
                        @endif
                </div>
                    <!-- <div class="email">john.doe@example.com</div> -->
                    <div class="btn-group user-helper-dropdown">
                        <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="{{route('account')}}"><i class="material-icons">person</i>Account</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="{{route('password')}}"><i class="material-icons">vpn_key</i>Change Password</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="{{route('logout')}}"><i class="material-icons">input</i>Logout</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">MAIN NAVIGATION</li>
                    @if (auth()->user()->level == "security")
                    <li>
                        <a href="/dashboard">
                        <i class="material-icons">home</i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="/kelola_tamu">
                        <i class="material-icons">group</i>
                            <span>Kelola Tamu</span>
                        </a>
                    </li>
                    <li>
                        <a href="/kelola_security">
                        <i class="material-icons">group</i>
                            <span>Kelola Security</span>
                        </a>
                    </li>
                    <li class="has-sub">
                        <a href="javascript:void(0);" class="menu-toggle">
                        <i class="material-icons">content_copy</i>
                            <span>Laporan</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="/laporan">Laporan Tamu</a>
                            </li>
                            <li>
                                <a href="../../pages/tables/jquery-datatable.html">Laporan Security</a>
                            </li>
                        </ul>
                    </li>
                    @endif
                    @if (auth()->user()->level == "klinik")
                    <li>
                        <a href="/dashboard">
                        <i class="material-icons">home</i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="/kelola_pasien_tamu">
                            <i class="fa-sharp fa-solid fa-people-roof"></i>
                            <span>Kelola Pasien Tamu</span>
                        </a>
                    </li>
                    <li>
                        <a href="/kelola_pasien">
                            <i class="fa-sharp fa-solid fa-people-roof"></i>
                            <span>Kelola Pasien Pegawai</span>
                        </a>
                    </li>
                    <li>
                        <a href="/kelola_obat">
                            <i class="fa-sharp fa-solid fa-people-roof"></i>
                            <span>Kelola Pasien Obat</span>
                        </a>
                    </li>
                    <li>
                        <a href="/laporan_klinik">
                            <i class="fa-solid fa-file"></i>
                            <span>Laporan Klinik</span>
                        </a>
                    </li>
                    @endif

                    @if (auth()->user()->level == "admin")
                    <li>
                        <a href="/dashboard">
                        <i class="material-icons">home</i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="/kelola_user">
                        <i class="material-icons">account_box</i>
                            <span>Kelola User</span>
                        </a>
                    </li>
                    <li class="has-sub">
                        <a href="javascript:void(0);" class="menu-toggle">
                        <i class="material-icons">content_copy</i>
                            <span>Laporan</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="/laporan_user">Laporan User</a>
                            </li>
                        </ul>
                    </li>
                    @endif

                   
                    
                    
                    
                    
                    
                    
                </ul>
            </div>
            <!-- #Menu -->
            <!-- Footer -->
            <div class="legal">
                <div class="copyright">
                    &copy;  @php echo date("Y"); @endphp <a href="javascript:void(0);">Monica & Rissa</a>.
                </div>
                <div class="version">
                    <b> Politeknik Negeri Subang </b> 
                </div>
            </div>
            <!-- #Footer -->
        </aside>
        <!-- #END# Left Sidebar -->
        <!-- Right Sidebar -->
        
        <!-- #END# Right Sidebar -->
    </section>