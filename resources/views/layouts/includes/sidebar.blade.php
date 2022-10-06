<aside class="main-sidebar sidebar-dark-primary elevation-4" style="background-color: rgba(253, 117, 41, 0.98);">
     <!-- Brand Logo -->
     <a href="index3.html" class="brand-link">
         <img src="{{ asset('assets/dist/img/logo.jpg') }}" alt="AdminLTE Logo"
             class="brand-image img-circle elevation-3" style="opacity: .8;  color:#FE6108">
         <span class="brand-text font-weight-light" style="color: #000000; font-family: sans-serif;">itenas</span>
     </a>

     <!-- Sidebar -->
     <div class="sidebar">
         <!-- Sidebar user panel (optional) -->
         <div class="user-panel mt-3 pb-3 mb-3 d-flex">
             <div class="image">
                 <img src="{{ asset('assets/dist/img/index.png') }}" class="img-circle elevation-2"
                     alt="User Image">
             </div>
             <div class="info">
                 <a href="#" class="d-block" style="color: #000000;">{{ Auth::user()->name }}</a>
             </div>
         </div>

         <!-- SidebarSearch Form -->

         <!-- Sidebar Menu -->
         <nav class="mt-2">
             <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                 data-accordion="false">
                 <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                 <li class="nav-item">
                     <a href="#" class="nav-link ">
                         <i class="nav-icon fas fa-tachometer-alt" style="color: #000000;"></i>
                         <p style="color: #000000;">
                             Dashboard
                             {{-- <i class="right fas fa-angle-left"></i> --}}
                         </p>
                     </a>

                 </li>
                 <li class="nav-item">
                     <a href="{{ route('prodi.index') }}"
                         class="nav-link ">
                         <i class="nav-icon fas fa-th" style="color: #000000;"></i>
                         <p style="color: #000000;">
                            Data Prodi
                         </p>
                     </a>
                 </li>
                 <li class="nav-item">
                     <a href="{{ route('semester.index') }}" class="nav-link ">
                         <i class="nav-icon fas fa-th" style="color: #000000;"></i>
                         <p style="color: #000000;">
                             Data Semester
                         </p>
                     </a>
                 </li>
                 <li class="nav-item">
                     <a href="{{ route('dosen.index') }}" class="nav-link ">
                         <i class="nav-icon fas fa-copy" style="color: #000000;"></i>
                         <p style="color: #000000;">
                             Data dosen
                         </p>
                     </a>
                 </li>
                 <li class="nav-item">
                     <a href="{{ route('koor.index') }}"
                         class="nav-link ">
                         <i class="nav-icon fas fa-copy" style="color: #000000;"></i>
                         <p style="color: #000000;">
                             Data Kordinator
                         </p>
                     </a>
                 </li>
                 <li class="nav-item">
                     <a href="{{ route('kelas.index') }}"
                         class="nav-link ">
                         <i class="nav-icon fas fa-copy" style="color: #000000;"></i>
                         <p style="color: #000000;">
                             Data Kelas
                         </p>
                     </a>
                 </li>
                 <li class="nav-item">
                     <a href="{{ route('mahasiswa.index') }}" class="nav-link ">
                         <i class="nav-icon fas fa-copy" style="color: #000000;"></i>
                         <p style="color: #000000;">
                            Data Mahasiswa
                         </p>
                     </a>
                 </li>
             </ul>
         </nav>
         <!-- /.sidebar-menu -->
     </div>
     <!-- /.sidebar -->
 </aside>
