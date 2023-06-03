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
          <a class="nav-link {{ Request::is('dashboard/obat*')?'active':'' }}" href="/dashboard/posts">
            <span data-feather="file"></span>
             Dokter
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/obat*')?'active':'' }}" href="/dashboard/posts">
            <span data-feather="file"></span>
             pegawai
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/obat*')?'active':'' }}" href="/dashboard/posts">
            <span data-feather="file"></span>
             Pasien
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/obat*')?'active':'' }}" href="/dashboard/posts">
            <span data-feather="file"></span>
             Master Data obat
          </a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard/rekam*')?'active':'' }}" href="/dashboard/jadwal">
              <span data-feather="file"></span>
              Data rekam medis
            </a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard/obat*')?'active':'' }}" href="/dashboard/posts">
              <span data-feather="file"></span>
              transaksi pembayaran
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard/obat*')?'active':'' }}" href="/dashboard/posts">
              <span data-feather="file"></span>
               laporan
            </a>
          </li>
      </ul>


    </div>
  </nav>