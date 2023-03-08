  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?= base_url();?>/dashboard" class="brand-link">
      <img src="Assets/images/uploads/logo_dashboard.png" alt="a" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Matemáticas</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-4 pb-2 mb-3 d-flex">
        <div class="image">
          <img src="<?= media(); ?>/images/uploads/avatar.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <p class="text-light">Cristian San Martin</p>
          <p class="text-light">Administrador</p>
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
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="<?= base_url();?>/dashboard" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Inicio
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
            <i class="nav-icon fa fa-users"></i>
              <p>
                 Usuarios
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= base_url();?>/#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Crear Usuario</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url();?>/usuarios" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Usuarios</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url();?>/roles" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Roles</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url();?>/permisos" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Permisos</p>
                </a>
              </li>
            </ul>
          </li>
          
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Layout Options
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right">6</span>
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="<?= base_url();?>/logout" class="nav-link">
              <i class="nav-icon fa fa-power-off"></i>
              <p>
                Cerrar sesión
              </p>
            </a>
          </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>