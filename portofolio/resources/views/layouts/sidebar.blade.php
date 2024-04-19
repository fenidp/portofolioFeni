<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

 <!-- Sidebar - Brand -->
 <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
     <div class="sidebar-brand-icon rotate-n-15">
         <i class="fas fa-laugh-wink"></i>
     </div>
     <div class="sidebar-brand-text mx-3">Portofolio</div>
 </a>

 <hr class="sidebar-divider">

 <!-- Heading -->
 <div class="sidebar-heading">
     Menu
 </div>

 <hr class="sidebar-divider">

 <!-- Heading -->

 <!-- Nav Item - Tables -->
 <li class="nav-item">
     <a class="nav-link" href="{{ route('keahlian.index') }}">
         <i class="fas fa-fw fa-table"></i>
         <span>Keahlian</span></a>
 </li>
 <li class="nav-item">
     <a class="nav-link" href="{{ route('kontak.index') }}">
         <i class="fas fa-fw fa-table"></i>
         <span>Kontak</span></a>
 </li>
 <li class="nav-item">
     <a class="nav-link" href="{{ route('pengalaman.index') }}">
         <i class="fas fa-fw fa-table"></i>
         <span>Pengalaman</span></a>
 </li>
 <li class="nav-item">
     <a class="nav-link" href="{{ route('review.index') }}">
         <i class="fas fa-fw fa-table"></i>
         <span>Review</span></a>
 </li>
 <li class="nav-item">
     <a class="nav-link" href="{{ route('saya.index') }}">
         <i class="fas fa-fw fa-table"></i>
         <span>Saya</span></a>
 </li>
 <!-- Divider -->
 <hr class="sidebar-divider d-none d-md-block">

 <!-- Sidebar Toggler (Sidebar) -->
 <div class="text-center d-none d-md-inline">
     <button class="rounded-circle border-0" id="sidebarToggle"></button>
 </div>

</ul>
