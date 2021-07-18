 <aside class="main-sidebar sidebar-dark-primary elevation-4">

   <!-- Sidebar -->
   <div class="sidebar">
     <!-- Sidebar user panel (optional) -->
     <div class="user-panel mt-3 pb-3 mb-3 d-flex">
       <div class="image">
         <img src="<?= base_url('asset') ?>/images/admin.png" class="img-circle elevation-2" alt="User Image">
       </div>
       <div class="info">
         <a href="#" class="d-block">Admin</a>
       </div>
     </div>

     <!-- Sidebar Menu -->
     <nav class="mt-2">
       <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
         <li class="nav-header">Menu</li>
         <li class="nav-item has-treeview">
           <a href="#" class="nav-link">
             <i class="nav-icon fas fa-th"></i>
             <p>Master Data
               <i class="fas fa-angle-left right"></i>
             </p>
           </a>
           <ul class="nav nav-treeview">
             <li class="nav-item">
               <a href="<?= base_url('wisata'); ?>" class="nav-link">
                 <i class="fas fa-mountain nav-icon"></i>
                 <p>Daftar Wisata</p>
               </a>
             </li>
             <li class="nav-item">
               <a href="<?= base_url('rute'); ?>" class="nav-link">
                 <i class="fas fa-route nav-icon"></i>
                 <p>Daftar Rute</p>
               </a>
             </li>
             <li class="nav-item">
               <a href="<?= base_url('perlengkapan'); ?>" class="nav-link">
                 <i class="fas fa-tools nav-icon"></i>
                 <p>Daftar Perlengkapan</p>
               </a>
             </li>
             <li class="nav-item">
               <a href="<?= base_url('krisar'); ?>" class="nav-link">
                 <i class="fas fa-comments nav-icon"></i>
                 <p>Kritik dan Saran</p>
               </a>
             </li>
           </ul>
         </li>
         <li class="nav-item">
           <a href="<?= base_url('auth/logout'); ?>" class="nav-link logout" onclick="return confirm('yakin logout?')">
             <i class="nav-icon fas fa-sign-out-alt text-danger"></i>
             <p>
               Logout
             </p>
           </a>
         </li>

       </ul>
     </nav>
     <!-- /.sidebar-menu -->
   </div>
   <!-- /.sidebar -->
 </aside>