<div class="sidebar" data-color="purple" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">
    <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
    <div class="logo"><a href="{{route('dashboard')}}" class="simple-text logo-normal">
         AudioVisuel
      </a></div>
    <div class="sidebar-wrapper">
      <ul class="nav">
        <li class="nav-item {{ Request::is('dashboard') ? 'active' : '' }}  ">
          <a class="nav-link" href="{{route('dashboard')}}">
            <i class="material-icons">dashboard</i>
            <p>Dashboard</p>
          </a>
        </li>
        <li class="nav-item {{ Request::is('categories') ? 'active' : '' }} ">
          <a class="nav-link" href="{{route('categories')}}">
            <i class="material-icons">person</i>
            <p>category</p>
          </a>
        </li>
        <li class="nav-item {{ Request::is('products') ? 'active' : '' }} ">
          <a class="nav-link" href="{{route('products')}}">
            <i class="material-icons">person</i>
            <p>Products</p>
          </a>
        </li>
        
      </ul>
    </div>
  </div>