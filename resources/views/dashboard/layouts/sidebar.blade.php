<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard')?'active':'' }}" aria-current="page" href="/dashboard">
            <span data-feather="home"></span>
            Dashboard
          </a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/obat*')?'active':'' }}" href="#">
            <span data-feather="file"></span>
             Data
          </a>
          <ul class="nav-item ">
            <a class="nav-link {{ Request::is('dashboard/wilayah*')?'active':'' }}" href="/dashboard/wilayah">
              <span data-feather="file"></span>
               Wilayah specialis
            </a>
          </ul>
          <ul class="nav-item">
            <a class="nav-link {{ Request::is('dashboard/dokter*')?'active':'' }}" href="/dashboard/dokter">
              <span data-feather="file"></span>
               Dokter
            </a>
          </ul>
          <ul class="nav-item">
            <a class="nav-link {{ Request::is('dashboard/pegawai*')?'active':'' }}" href="/dashboard/pegawai">
              <span data-feather="file"></span>
               Pegawai
            </a>
          </ul>
          <ul class="nav-item">
            <a class="nav-link {{ Request::is('dashboard/tindakan*')?'active':'' }}" href="/dashboard/tindakan">
              <span data-feather="file"></span>
               Tindakan
            </a>
          </ul>
          <ul class="nav-item">
            <a class="nav-link {{ Request::is('dashboard/obat*')?'active':'' }}" href="/dashboard/obat">
              <span data-feather="file"></span>
               Obat
            </a>
          </ul>
        </li>
        </li>

        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/pendaftara*')?'active':'' }}" href="/dashboard/pendaftaran">
            <span data-feather="file"></span>
             Pendaftaraan Pasien
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/rekamedis*')?'active':'' }}" href="/dashboard/rekammedis">
            <span data-feather="file"></span>
             Data rekam medis
          </a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/pembayaran*')?'active':'' }}" href="/dashboard/pembayaran">
            <span data-feather="file"></span>
             Pembayaran
          </a>
        </li>
        
          <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard/laporan*')?'active':'' }}" href="/dashboard/laporan">
              <span data-feather="file"></span>
               laporan
            </a>
          </li>
      </ul>


    </div>
  </nav>