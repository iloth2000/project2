<div class="sidebar" data-color="orange" data-background-color="white" data-image="{{ asset('assets/img/sidebar-1.jpg') }}">
  <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
  <div class="logo">
    <a href="https://creative-tim.com/" class="simple-text logo-normal">
      {{ __('Creative Tim') }}
    </a>
  </div>
  <div class="sidebar-wrapper">
    <ul class="nav">
      <li class="nav-item{{ $activePage == 'dashboard' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('home') }}">
          <i class="material-icons">dashboard</i>
            <p>{{ __('Dashboard') }}</p>
        </a>
      </li>
      <li class="nav-item {{ ($activePage == 'cab' || $activePage == 'cab_list') ? ' active' : '' }}">
      <a class="nav-link" data-toggle="collapse" href="#laravelExample" aria-expanded="true">
                    <i class="material-icons">dashboard</i>
                      <p style="color: blueviolet;">{{ __('Danh sách xe') }}
                        <b class="caret"></b>
                      </p>
                    </a>
        <div class="collapse show" id="laravelExample">
          <ul class="nav">
            <li class="nav-item{{ $activePage == 'cab_list' ? ' active' : '' }}">
            <a class="nav-link" href="{{ route('quan_li.cab_list') }}">
                <i class="material-icons">view_list</i>
                <span class="sidebar-normal">{{ __('Danh sách xe') }} </span>
             </a>
            </li>
            <li class="nav-item{{ $activePage == 'cab_insert' ? ' active' : '' }}">
                <a class="nav-link" href="{{ route('quan_li.cab_insert') }}">
                      <i class="material-icons">library_add</i>
                      <span class="sidebar-normal"> {{ __('Thêm xe mới') }} </span>
                 </a>
            </li>
          </ul>
        </div>
      </li>
      <li class="nav-item {{ ($activePage == 'car_type' || $activePage == 'type_list') ? ' active' : '' }}">
      <a class="nav-link" data-toggle="collapse" href="#Abc" aria-expanded="false">
                    <i class="material-icons">content_paste</i>
                      <p style="color: blueviolet;">{{ __('Quản lí loại xe') }}
                        <b class="caret"></b>
                      </p>
                    </a>
        <div class="collapse show" id="laravelExample">
          <ul class="nav">
            <li class="nav-item{{ $activePage == 'type_list' ? ' active' : '' }}">
            <a class="nav-link" href="{{ route('quan_li.car_type') }}">
                            <i class="material-icons">view_list</i>
                            <span class="sidebar-normal">{{ __('Danh sách loại xe') }} </span>
                          </a>
            </li>
            <li class="nav-item{{ $activePage == 'type_insert' ? ' active' : '' }}">
                <a class="nav-link" href="{{ route('quan_li.cab_insert') }}">
                      <i class="material-icons">library_add</i>
                      <span class="sidebar-normal"> {{ __('Thêm xe mới') }} </span>
                 </a>
            </li>
          </ul>
        </div>
      </li>
      <li class="nav-item{{ $activePage == 'car_type' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('quan_li.car_type') }}">
          <i class="material-icons">library_books</i>
            <p>{{ __('Typography') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'car_brand' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('icons') }}">
          <i class="material-icons">bubble_chart</i>
          <p>{{ __('Icons') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'map' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('map') }}">
          <i class="material-icons">location_ons</i>
            <p>{{ __('Maps') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'notifications' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('notifications') }}">
          <i class="material-icons">notifications</i>
          <p>{{ __('Notifications') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'language' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('language') }}">
          <i class="material-icons">language</i>
          <p>{{ __('RTL Support') }}</p>
        </a>
      </li>
      <li class="nav-item active-pro{{ $activePage == 'upgrade' ? ' active' : '' }}">
        <a class="nav-link text-white bg-danger" href="{{ route('upgrade') }}">
          <i class="material-icons text-white">unarchive</i>
          <p>{{ __('Upgrade to PRO') }}</p>
        </a>
      </li>
    </ul>
  </div>
</div>
