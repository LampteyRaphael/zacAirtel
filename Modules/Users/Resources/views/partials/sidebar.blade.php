<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/" class="brand-link">
      <img src="assets/img/AdminLTELogo.png" alt="" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">EDA INVETORY</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="assets/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{ auth()->user()->name??'' }}</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div><div class="sidebar-search-results"><div class="list-group"><a href="#" class="list-group-item"><div class="search-title"><strong class="text-light"></strong>N<strong class="text-light"></strong>o<strong class="text-light"></strong> <strong class="text-light"></strong>e<strong class="text-light"></strong>l<strong class="text-light"></strong>e<strong class="text-light"></strong>m<strong class="text-light"></strong>e<strong class="text-light"></strong>n<strong class="text-light"></strong>t<strong class="text-light"></strong> <strong class="text-light"></strong>f<strong class="text-light"></strong>o<strong class="text-light"></strong>u<strong class="text-light"></strong>n<strong class="text-light"></strong>d<strong class="text-light"></strong>!<strong class="text-light"></strong></div><div class="search-path"></div></a></div></div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

          <li class="nav-item">
            <a href="{{ route('users.index') }}" class="nav-link {{ $elementActive ?? '' == 'home' ? 'active' : '' }}">
              <i class="nav-icon fas fa-home"></i>
              <p>
                  Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('user-inventory.index') }}" class="nav-link  {{ $elementActive ?? '' == 'brands' ? 'active' : '' }}">
            <i class="nav-icon fas fa-id-card-alt"></i>
              <p>
                 Inventory
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('brands.index') }}" class="nav-link  {{ $elementActive ?? '' == 'brands' ? 'active' : '' }}">
            <i class="nav-icon fas fa-id-card-alt"></i>
              <p>
                 Brands
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('item.index') }}" class="nav-link  {{ $elementActive ?? '' == 'items' ? 'active' : '' }}">
            <i class="nav-icon fas fa-id-card-alt"></i>
              <p>
                 Items
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('category.index') }}" class="nav-link  {{ $elementActive ?? '' == 'category' ? 'active' : '' }}">
            <i class="nav-icon fas fa-id-card-alt"></i>
              <p>
                 Category
              </p>
            </a>
          </li>
          <ul class="nav nav-treeview">
            <li class="nav-item active"><a class="nav-link active" href="/project1/backend/web/index.php?r=site%2Findex"><i class="nav-icon far fa-circle"></i> <p>Active Page  </p></a></li>
            <li class="nav-item"><a class="nav-link " href="#"><i class="nav-icon far fa-circle"></i> <p>Inactive Page  </p></a></li>
          </ul>

          <li class="nav-header text-uppercase">Ware House</li>
          <li class="nav-item">
              <a class="nav-link {{ $elementActive ?? '' == 'warehouse' ? 'active' : '' }} " href="{{ route('warehouse.index') }}">
                  <i class="nav-icon fas fa-home"></i>
                  <p>WareHouse</p>
                </a>
            </li>
          <li class="nav-item">
              <a class="nav-link {{ $elementActive ?? '' == 'wareHouseRequest' ? 'active' : '' }}" href="{{ route('wareHouseRequest.index') }}">
              <i class="nav-icon far fa-circle"></i> <p>Approved</p>
            </a>
            </li>
          <li class="nav-item"><a class="nav-link {{ $elementActive ?? '' == 'wareHouseRequestCreate' ? 'active' : '' }}" href="{{ route('wareHouseRequest.create') }}">
              <i class="nav-icon far fa-circle"></i>
               <p>Pending  </p></a>
            </li>
          <li class="nav-item"><a class="nav-link " href="{{ route('wareHouseRequest.reject') }}">
              <i class="nav-icon far fa-circle"></i>
              <p>Rejected  </p></a>
            </li>
          <li class="nav-header text-uppercase">Sales Point</li>
          <li class="nav-item">
            <a href="{{ route('userpointofsale.index') }}" class="nav-link  {{ $elementActive ?? '' == 'contact' ? 'active' : '' }}">
            <i class="nav-icon fas fa-id-card-alt"></i>
              <p>
                Sales Point

              </p>
            </a>
          </li>
          <li class="nav-item"><a class="nav-link " href="#"><i class="nav-icon far fa-circle text-danger"></i> <p>Important  </p></a></li>
          <li class="nav-item"><a class="nav-link " href="#"><i class="nav-icon far fa-circle text-warning"></i> <p>Warning  </p></a></li>
          <li class="nav-item"><a class="nav-link " href="#"><i class="nav-icon far fa-circle text-info"></i> <p>Informational  </p></a></li>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
