<aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="light">
        <!--begin::Sidebar Brand-->
        <div class="sidebar-brand">
          <!--begin::Brand Link-->
          <a href="./index.html" class="brand-link">
            <!--begin::Brand Image-->
            <img
              src="/dashboard/assets/img/tecflix.png"
              alt=""
              class="brand-image opacity-75 shadow"
            />
            <!--end::Brand Image-->
            <!--begin::Brand Text-->
            <span class="brand-text fw-light"></span>
            <!--end::Brand Text-->
          </a>
          <!--end::Brand Link-->
        </div>
        <!--end::Sidebar Brand-->
        <!--begin::Sidebar Wrapper-->
        <div class="sidebar-wrapper">
          <nav class="mt-2">
            <!--begin::Sidebar Menu-->
            <ul
              class="nav sidebar-menu flex-column"
              data-lte-toggle="treeview"
              role="menu"
              data-accordion="false"
            >
            <li class="nav-item menu-open">
                <a href="{{ url('/admin') }}" class="nav-link active">
                <i class="bi bi-house"></i>
                  <p>Home</p>
                </a>
            </li>
            <li class="nav-item menu-open">
                <a href="{{ url('/admin/movies') }}" class="nav-link active">
                <i class="bi bi-camera-reels"></i>
                  <p>Movies</p>
                </a>
            </li>
            <li class="nav-item menu-open">
                <a href="{{ url('/admin/series') }}" class="nav-link active">
                <i class="bi bi-film"></i>
                <p>Series</p>
                </a>
            </li>
            <li class="nav-item menu-open">
                <a href="{{ url('/admin/viewinghistory') }}" class="nav-link active">
                <i class="bi bi-clock-history"></i>                
                <p>viewing history</p>
                </a>
            </li>
            <li class="nav-item menu-open">
                <a href="{{ url('/admin/configuration') }}" class="nav-link active">
                <i class="bi bi-gear"></i>               
                <p>Configuration</p>
                </a>
            </li>
            </ul>  
            <!--end::Sidebar Menu-->
          </nav>
        </div>
        <!--end::Sidebar Wrapper-->
      </aside>