@if (Auth::check())
    <!-- Left side column. contains the sidebar -->
    <aside class="main-sidebar">
      <!-- sidebar: style can be found in sidebar.less -->
      <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
          <div class="pull-left image">
            <img src="https://placehold.it/160x160/00a65a/ffffff/&text={{ mb_substr(Auth::user()->name, 0, 1) }}" class="img-circle" alt="User Image">
          </div>
          <div class="pull-left info">
            <p>{{ Auth::user()->name }}</p>
            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
          </div>
        </div>
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
          <li class="header">{{ trans('backpack::base.administration') }}</li>
          <!-- ================================================ -->
          <!-- ==== Recommended place for admin menu items ==== -->
          <!-- ================================================ -->
          <li><a href="{{ url(config('backpack.base.route_prefix', 'admin').'/dashboard') }}"><i class="fa fa-dashboard"></i> <span>{{ trans('backpack::base.dashboard') }}</span></a></li>
          <li class="treeview">
            <a href="#">
              <i class="fa fa-cog fa-spin "></i>
              <span>Operation</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="{{ url(config('backpack.base.route_prefix', 'admin').'/license') }}"><i class="fa fa-certificate"></i> <span>Licenses</span></a></li>
              <li><a href="{{ url(config('backpack.base.route_prefix', 'admin').'/vesselLicense') }}"><i class="fa fa-ship"></i> <span>Vessel Licenses</span></a></li>
              <li><a href="{{ url(config('backpack.base.route_prefix', 'admin').'/renewal') }}"><i class="fa fa-calendar-minus-o"></i> <span>Renewals</span></a></li>
              <li><a href="{{ url(config('backpack.base.route_prefix', 'admin').'/dailyOperation') }}"><i class="fa fa-calendar-check-o"></i> <span>Daily Operations</span></a></li>

              <li><a href="{{ url(config('backpack.base.route_prefix', 'admin').'/licensePayment') }}"><i class="fa fa-money"></i> <span>License Payment</span></a></li>
              <li><a href="{{ url(config('backpack.base.route_prefix', 'admin').'/vesselPayment') }}"><i class="fa fa-money"></i> <span>Vessel Payment</span></a></li>

              <li><a href="{{ url(config('backpack.base.route_prefix', 'admin').'/report/print') }}"><i class="fa fa-window-maximize"></i> <span>Print License</span></a></li>
              <li><a href="{{ url(config('backpack.base.route_prefix', 'admin').'/report/printVessel') }}"><i class="fa fa-window-maximize"></i> <span>Print Vessel License</span></a></li>

            </ul>
          </li>
          <li class="treeview">
            <a href="#">
              <i class="fa fa-newspaper-o"></i>
              <span>Reports</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="{{ url(config('backpack.base.route_prefix', 'admin').'/report/license') }}"><i class="fa fa-file-text-o"></i> <span>License Reports</span></a></li>
              <li><a href="{{ url(config('backpack.base.route_prefix', 'admin').'/report/renewal') }}"><i class="fa fa-file-text-o"></i> <span>Renewals Reports</span></a></li>
              <li><a href="{{ url(config('backpack.base.route_prefix', 'admin').'/report/dailyOperation') }}"><i class="fa fa-file-text-o"></i> <span>D.O Reports</span></a></li>

              <li><a href="{{ url(config('backpack.base.route_prefix', 'admin').'/report/licensePayments') }}"><i class="fa fa-file-text-o"></i> <span>license Payments</span></a></li>
              <li><a href="{{ url(config('backpack.base.route_prefix', 'admin').'/report/vesselPayments') }}"><i class="fa fa-file-text-o"></i> <span>Vessel Payments</span></a></li>
            </ul>
          </li>
          <li class="treeview">
            <a href="#">
              <i class="fa fa-cogs"></i>
              <span>Settings</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="{{ url(config('backpack.base.route_prefix', 'admin').'/businessType') }}"><i class="fa fa-file-text-o"></i> <span>Business Types</span></a></li>
              <li><a href="{{ url(config('backpack.base.route_prefix', 'admin').'/fish') }}"><i class="fa fa-bug"></i> <span>Fishes</span></a></li>
              <li><a href="{{ url(config('backpack.base.route_prefix', 'admin').'/location') }}"><i class="fa fa-anchor"></i> <span>Locations</span></a></li>
              <li><a href="{{ url(config('backpack.base.route_prefix', 'admin').'/town') }}"><i class="fa fa-university"></i> <span>Towns</span></a></li>
              <li><a href="{{ url(config('backpack.base.route_prefix', 'admin').'/ship') }}"><i class="fa fa-ship"></i> <span>Vessels</span></a></li>
              <li><a href="{{ url(config('backpack.base.route_prefix', 'admin').'/shipType') }}"><i class="fa fa-asterisk"></i> <span>ShipTypes</span></a></li>
            </ul>
          </li>




          <!-- ======================================= -->
          <li class="header">{{ trans('backpack::base.user') }}</li>
          <li><a href="{{ url(config('backpack.base.route_prefix', 'admin').'/logout') }}"><i class="fa fa-sign-out"></i> <span>{{ trans('backpack::base.logout') }}</span></a></li>
        </ul>
      </section>
      <!-- /.sidebar -->
    </aside>
@endif
