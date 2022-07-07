<aside class="main-sidebar  elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{asset('admin/dist/img/AdminLTELogo.png')}}" alt="Ryan Williams Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light" style="color: black;">Smart Card</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image" style="margin-left: 28%;" >
          <div  class="img-circle elevation-2" ></div>
        </div>
        <div class="info">
          <a href="#" class="d-block" style="color: black;">{{ Auth::user()->first_name }} {{ Auth::user()->last_name }}</a>
        </div>
      </div>


      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="/" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                
              </p>
            </a>
          
          </li>
          
            <li class="nav-item">
            <a href="/package" class="nav-link">
              <i class="nav-icon fas fa-columns"></i>
              <p>
                Package
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="/package" class="nav-link">
                      <i class="far fa-circle nav-icon "></i>
                      <p>List Package</p>
                    </a>
                  </li>
            </ul>
          </li>
         
          <li class="nav-item">
            <a href="/region" class="nav-link">
              <i class="nav-icon far fa-calendar-alt"></i>
              <p>
                Locations
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="/region" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>List Regions</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="/state" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>List States</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="/city" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>List Cities</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="/area" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>List Areas</p>
                    </a>
                  </li>
            </ul>
          </li>
          
          <li class="nav-item">
            <a href="/category" class="nav-link">
              <i class="nav-icon far fa-calendar-alt"></i>
              <p>
                Category
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="/category" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>List Category</p>
                    </a>
                  </li>
            </ul>
          </li>
          
        
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>Buyers & Traders<i class="right fas fa-angle-left"></i></p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="/buyer" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>List Buyers</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="/trader" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>List Traders</p>
                    </a>
                  </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="/category" class="nav-link">
              <i class="nav-icon far fa-calendar-alt"></i>
              <p>
                Branch
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="/branch" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>List Branch</p>
                    </a>
                  </li>
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
