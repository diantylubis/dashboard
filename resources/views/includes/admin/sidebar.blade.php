<ul class="navbar-nav bg-gradient-light sidebar sidebar-light accordion" id="accordionSidebar"> 

    <!-- Sidebar - Brand -->
    <div class="col-auto">
        <img src="admin/img/logo-pegadaian.jpg" style="width: 200px" >
    </div>
    
    <div class="container">
     <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
    <li class="{{request()->is('dashboard') ? 'active' : '' }}">
        <a class="nav-link" href="dashboard">
            <span>DASHBOARD</span>
        </a>

    <li class="{{request()->is('squad') ? 'active' : '' }}">
        <a class="nav-link" href="squad">
            <i class=""></i>
            <span>SQUAD</span></a>
    </li>
    
   
     <!-- Nav Item - Dashboard -->
     <li class="{{request()->is('project') ? 'active' : '' }}">
        <a class="nav-link" href="project">
            <i class=""></i>
            <span>PROJECT</span></a>

    </li>
     <!-- Nav Item - Dashboard -->
     <li class="{{request()->is('status') ? 'active' : '' }}">
        <a class="nav-link" href="status">
            <i class=""></i>
            <span>STATUS</span></a>
    </li> 

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
 <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
</div>
 </ul>
