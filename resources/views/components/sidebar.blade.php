<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper ">
        <div class="sidebar-brand">
            <a href="{{ url('/') }}" class="" style="width:100%">
                {{-- <img alt="image" class="rounded-circle mr-3" width="50" src="{{ asset('img/logo-lms.png') }}"> --}}
                <span style="width: 50%">SI REDAH (Riset Daerah)</span>
            </a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="{{ route('home') }}">

                SR
            </a>
        </div>
        <div class=" d-flex flex-column justify-content-between " style="height: 90vh">
            <ul class="sidebar-menu">

                @if (Session('user')['role'] == 'Masyarakat')
                    <li class="{{ Request::is('home') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ url('masyarakat/home') }}"><i class="fas fa-th-large"></i>
                            <span>Dashboard</span></a>
                    </li>
                    <li class="{{ Request::is('blank-page') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ url('masyarakat/penelitian') }}"><i class="fas fa-home"></i>
                            <span>Ajukan Penelitian</span></a>
                    </li>
                @endif
                {{-- <li class="menu-header">Dashboard</li> --}}

                @if (Session('user')['role'] == 'Admin')
                    <li class="{{ Request::is('/admin/home') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ url('admin/home') }}"><i class="fas fa-th-large"></i>
                            <span>Dashboard</span></a>
                    </li>
                    <li class="{{ Request::is('admin/riset') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ url('admin/riset') }}"><i class="fas fa-home"></i>
                            <span>Managemen Riset</span></a>
                    </li>
                    <li class="{{ Request::is('admin/topik-riset') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ url('admin/topik-riset') }}"><i class="fas fa-file-pen"></i>
                            <span>Managemen Topik Riset</span></a>
                    </li>
                    <li class="{{ Request::is('admin/usulan-penelitian') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ url('admin/usulan-penelitian') }}"><i class="fas fa-file-pen"></i>
                            <span>Usulan Penelitian</span></a>
                    </li>
                @endif

                @if (Session('user')['role'] == 'Pemerintah Daerah')
                    <li class="{{ Request::is('/admin/home') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ url('pemerintah-daerah/home') }}"><i class="fas fa-th-large"></i>
                            <span>Dashboard</span></a>
                    </li>
                    <li class="{{ Request::is('admin/riset') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ url('pemerintah-daerah/riset') }}"><i class="fas fa-home"></i>
                            <span>Managemen Riset</span></a>
                    </li>
                @endif


            </ul>

            {{-- <div class="hide-sidebar-mini mt-4 mb-4 p-3">
                <a href="https://getstisla.com/docs" class="btn btn-primary btn-lg btn-block btn-icon-split">
                    <i class="fas fa-rocket"></i> Documentation
                </a>
            </div> --}}
        </div>

    </aside>
</div>
