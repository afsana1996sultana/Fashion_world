<div class="main-sidebar sidebar-style-2">
  <aside id="sidebar-wrapper">
    <div class="sidebar-brand">
      <a href="{{url('/dashboard')}}">Fashion World</a>
    </div>
    <ul class="sidebar-menu">
      <li class="active"><a class="nav-link" href="{{url('/dashboard')}}"><i class="fas fa-home"></i><span>Dashboard</span></a></li>     
      <li class=""><a class="nav-link" href="{{url('/contactus')}}"><i class="fas fa-home"></i><span>Contact Us</span></a></li>
      <li class=""><a class="nav-link" href="{{url('/users')}}"><i class="fas fa-user"></i><span>Users</span></a></li>


      <li class="nav-item dropdown">
        <a href="#" class="nav-link has-dropdown"><i class="fas fa-envelope"></i><span>Inbox</span></a>
        <ul class="dropdown-menu">
          <li class=""><a class="nav-link" href="{{url('/newsletter')}}">Newsletter</a></li>
        </ul>
      </li>

      <li class="nav-item dropdown">
        <a href="#" class="nav-link has-dropdown"><i class="fas fa-cog"></i><span>Settings</span></a>
        <ul class="dropdown-menu">
          <li class=""><a class="nav-link" href="">General Setting</a></li>
          <li class=""><a class="nav-link" href="{{url('/status')}}">Status</a></li>
          <li class=""><a class="nav-link" href="{{url('/units')}}">Units</a></li>
        </ul>
      </li>

      <li class="nav-item dropdown">
        <a href="#" class="nav-link has-dropdown"><i class="fas fa-th-large"></i><span>Manage Categories</span></a>
        <ul class="dropdown-menu">
          <li class="active"><a class="nav-link" href="{{url('/category')}}">Categories</a></li>
          <li class=""><a class="nav-link" href="{{url('/sub-category')}}">Sub Categories</a></li>
          <li class=""><a class="nav-link" href="{{url('/child-category')}}">Child Categories</a></li>
        </ul>
      </li>

      <li class="nav-item dropdown">
        <a href="#" class="nav-link has-dropdown"><i class="fas fa-th-large"></i><span>Manage Products</span></a>
        <ul class="dropdown-menu">
          <li class=""><a class="nav-link" href="{{url('/brands')}}">Brands</a></li>
          <li><a class="nav-link" href="{{ route('products.create') }}">Create Product</a></li>
          <li class=""><a class="nav-link" href="{{url('/products')}}">Products</a></li>
        </ul>
      </li>

      <li class="nav-item dropdown">
        <a href="#" class="nav-link has-dropdown"><i class="fas fa-globe"></i><span>Manage Website</span></a>
        <ul class="dropdown-menu">
          <li class=""><a class="nav-link" href="{{url('topbar/1/edit')}}">Topbar Contact</a></li>
        </ul>
      </li>

      <li class="nav-item dropdown">
        <a href="#" class="nav-link has-dropdown"><i class="fas fa-th-large"></i><span>Website Footer</span></a>
        <ul class="dropdown-menu">
          <li class=""><a class="nav-link" href="{{url('footer/1/edit')}}">Footer</a></li>
          <li class=""><a class="nav-link" href="{{url('/social-link')}}">Social Links</a></li>
          <li class=""><a class="nav-link" href="{{url('/quick-link')}}">Quick Links</a></li>
        </ul>
      </li>

      <li class="nav-item dropdown ">
        <a href="#" class="nav-link has-dropdown"><i class="fas fa-columns"></i><span>Pages</span></a>
        <ul class="dropdown-menu">
            <li class=""><a class="nav-link" href="">About Us</a></li>
            <li class=""><a class="nav-link" href="">Contact Us</a></li>
            <li class=""><a class="nav-link" href="{{url('/team')}}">Our Team</a></li>
            <li class=""><a class="nav-link" href="{{url('/partners')}}">Our Partners</a></li>
            <li class=""><a class="nav-link" href="">Privacy Policy</a></li>
            <li class=""><a class="nav-link" href="">FAQ</a></li>
            <li class=""><a class="nav-link" href="">Login Page</a></li>
        </ul>
      </li>

      <li class="nav-item dropdown ">
        <a href="#" class="nav-link has-dropdown"><i class="fas fa-th-large"></i><span>Blogs</span></a>
        <ul class="dropdown-menu">
          <li class=""><a class="nav-link" href="">Categories</a></li>
          <li class=""><a class="nav-link" href="">Blogs</a></li>
          <li class=""><a class="nav-link" href="">Comments</a></li>
        </ul>
      </li>
    </ul>       
  </aside>
</div>
