<?php 
    headerAdmin($data);
    getModal('modalRoles',$data);
?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>
                <i class="fa-solid fa-user-tag"></i> <?= $data['page_tag']; ?>&nbsp;
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" onclick="openModal();" data-bs-target="#exampleModal"><i class="fa-sharp fa-solid fa-circle-plus"></i> Nuevo</button>
            </h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= base_url();?>/roles"><?= $data['page_title']; ?></a></li>
              <li class="breadcrumb-item active"><?= $data['page_tag2']; ?></li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    
    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Roles de Usuario</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
          <div class="row align-items-stretch">
            <div class="col-md-40 table-responsive">
              <table id="dataRoles" class="table table-striped" style="width:100%">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Rol</th>
                    <th>Descripcion</th>
                    <th>Estado</th>
                    <th>Acciones</th>
                  </tr>
                </thead>
                <tbody>
                  
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <!-- /.card-body -->
      </div>
    </section>
  </div>
<?php footerAdmin($data); ?>
