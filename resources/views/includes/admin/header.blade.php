<!-- if user has 'SuperAdmin' role assigned to them. -->


  <!-- BEGIN: Header-->

    <header class="page-topbar" id="header">
      <div class="navbar navbar-fixed"> 
        <nav class="navbar-main navbar-color nav-collapsible sideNav-lock navbar-dark gradient-45deg-indigo-purple no-shadow">

          <div class="nav-wrapper">
            <div class="header-search-wrapper hide-on-med-and-down">
              <p>@yield('header-title')</p>
            </div>
            <ul class="navbar-list right">
             	<li><a class="waves-effect waves-block waves-light notification-button" href="javascript:void(0);" data-target="notifications-dropdown"><i class="material-icons">notifications_none<small class="notification-badge">5</small></i></a></li>

              <li><a class="waves-effect waves-block waves-light profile-button" href="javascript:void(0);" data-target="profile-dropdown"><span class="avatar-status avatar-online">

               
                
                <i></i></span></a></li>

              {{-- <li><a class="waves-effect waves-block waves-light profile-button" href="javascript:void(0);" data-target="profile-dropdown"><span class="avatar-status avatar-online"><img src="{{ asset('assets/admin/images/avatar/avatar-7.png')}}" alt="avatar"><i></i></span></a></li> --}}
              
            </ul>
       
            <!-- notifications-dropdown-->
            <ul class="dropdown-content" id="notifications-dropdown">
              <li>
                <h6>NOTIFICATIONS<span class="new badge">5</span></h6>
              </li>
              <li class="divider"></li>
              <li><a class="grey-text text-darken-2" href="#!"><span class="material-icons icon-bg-circle cyan small">add_shopping_cart</span> A new order has been placed!</a>
                <time class="media-meta" datetime="2015-06-12T20:50:48+08:00">2 hours ago</time>
              </li>
              <li><a class="grey-text text-darken-2" href="#!"><span class="material-icons icon-bg-circle red small">stars</span> Completed the task</a>
                <time class="media-meta" datetime="2015-06-12T20:50:48+08:00">3 days ago</time>
              </li>
              <li><a class="grey-text text-darken-2" href="#!"><span class="material-icons icon-bg-circle teal small">settings</span> Settings updated</a>
                <time class="media-meta" datetime="2015-06-12T20:50:48+08:00">4 days ago</time>
              </li>
              <li><a class="grey-text text-darken-2" href="#!"><span class="material-icons icon-bg-circle deep-orange small">today</span> Director meeting started</a>
                <time class="media-meta" datetime="2015-06-12T20:50:48+08:00">6 days ago</time>
              </li>
              <li><a class="grey-text text-darken-2" href="#!"><span class="material-icons icon-bg-circle amber small">trending_up</span> Generate monthly report</a>
                <time class="media-meta" datetime="2015-06-12T20:50:48+08:00">1 week ago</time>
              </li>
            </ul>
            <!-- profile-dropdown-->
            <ul class="dropdown-content" id="profile-dropdown">
              {{-- <li><a class="grey-text text-darken-1" href="user-profile-page.html"><i class="material-icons">person_outline</i> Profile</a></li>
              <li><a class="grey-text text-darken-1" href="app-chat.html"><i class="material-icons">chat_bubble_outline</i> Chat</a></li>
              <li><a class="grey-text text-darken-1" href="page-faq.html"><i class="material-icons">help_outline</i> Help</a></li>
              <li class="divider"></li>
              <li><a class="grey-text text-darken-1" href="user-lock-screen.html"><i class="material-icons">lock_outline</i> Lock</a></li> --}}
              <li><a class="grey-text text-darken-1" href="{{ route('logout') }}"
                onclick="event.preventDefault();document.getElementById('logout-form').submit();"><i class="material-icons">keyboard_tab</i> Logout</a></li>

              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
              </form>
            </ul>
          </div>
          <nav class="display-none search-sm">
            <div class="nav-wrapper">
              <form>
                <div class="input-field">
                  <input class="search-box-sm" type="search" required="">
                  <label class="label-icon" for="search"><i class="material-icons search-sm-icon">search</i></label><i class="material-icons search-sm-close">close</i>
                </div>
              </form>
            </div>
          </nav>
        </nav>
      </div>
    </header>

    <!-- END: Header-->



    <!-- BEGIN: SideNav-->

    <aside class="sidenav-main nav-expanded nav-lock nav-collapsible sidenav-light sidenav-active-square">
      <div class="brand-sidebar">
        <h1 class="logo-wrapper"><a class="brand-logo darken-1" href="{{ route('admin.home') }}"><img src="{{ asset('assets/admin/images/logo/materialize-logo-color.png')}}" alt="materialize logo"/><span class="logo-text hide-on-med-and-down">Estore</span></a><a class="navbar-toggler" href="#"><i class="material-icons">radio_button_checked</i></a></h1>
      </div>
      <ul class="sidenav sidenav-collapsible leftside-navigation collapsible sidenav-fixed menu-shadow" id="slide-out" data-menu="menu-navigation" data-collapsible="menu-accordion">
        <li class="active bold">
        	<a class="waves-effect waves-cyan " href="{{ route('admin.home') }}"><i class="material-icons">settings_input_svideo</i><span class="menu-title" data-i18n="">Dashboard</span>
        	{{-- <span class="badge badge pill orange float-right mr-10">3</span> --}}
        	</a>
        </li>

          {{-- <li><a class="collapsible-header waves-effect waves-cyan" href="#" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>User Management</span></a>
	        <div class="collapsible-body">
	          <ul class="collapsible" data-collapsible="accordion">
	            <li><a class="collapsible-body" href="{{ route('users.index') }}" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Users</span></a>
	            </li>
 --}}
              {{-- <li><a class="collapsible-body" href="" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Roles</span></a>
              </li>


              <li><a class="collapsible-body" href="" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Permissions</span></a>
              </li> --}}
{{-- 
	          </ul>
	        </div>
	       </li>
 --}}
        <li><a class="collapsible-header waves-effect waves-cyan" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>User Management</span></a>
          <div class="collapsible-body">
            @can('user.userList',Auth::user())
            <ul class="collapsible" data-collapsible="accordion">
              <li><a class="collapsible-body" href="{{ route('users.index') }}" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Users</span></a>
                </li>
              <li><a class="collapsible-body" href="{{route('roles.index')}}" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Roles</span></a>
                </li>

              <li><a class="collapsible-body" href="{{route('permissions.index')}}" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Permissions</span></a>
                </li>
            </ul>
            @endcan
          </div>
        </li>

         {{-- <li><a class="collapsible-body" href="{{ route('clients.index') }}" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Clients</span></a>
              </li>

         <li><a class="collapsible-body" href="{{ route('stores.index') }}" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Stores</span></a>
              </li>

         <li><a class="collapsible-body" href="{{ route('announcements.index') }}" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Announcements</span></a>
              </li>

         <li><a class="collapsible-body" href="{{ route('packages.index') }}" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Packages</span></a>
              </li> --}}

        @can('client.clientList',Auth::user())
         <li><a class="collapsible-header waves-effect waves-cyan" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Clients</span></a>
          <div class="collapsible-body">
            <ul class="collapsible" data-collapsible="accordion">
              <li><a class="collapsible-body" href="{{ route('clients.index') }}" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Clients</span></a>
              </li>
            </ul>
          </div>
         </li>
         @endcan
         @can('store.storeList',Auth::user())    
          <li><a class="collapsible-header waves-effect waves-cyan" href="#" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Stores</span></a>
            <div class="collapsible-body">
              <ul class="collapsible" data-collapsible="accordion">
                <li><a class="collapsible-body" href="{{ route('stores.index') }}" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Stores</span></a>
                </li>
              </ul>
            </div>
          </li>
         @endcan
         @can('announcement.announcementList',Auth::user())
         <li><a class="collapsible-header waves-effect waves-cyan" href="#" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Announcements</span></a>
          <div class="collapsible-body">
            <ul class="collapsible" data-collapsible="accordion">
              <li><a class="collapsible-body" href="{{ route('announcements.index') }}" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Announcements</span></a>
              </li>
            </ul>
          </div>
         </li>
         @endcan
         @can('package.packageList',Auth::user())
         <li><a class="collapsible-header waves-effect waves-cyan" href="#" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Packages</span></a>
          <div class="collapsible-body">
            <ul class="collapsible" data-collapsible="accordion">
              <li><a class="collapsible-body" href="{{ route('packages.index') }}" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Packages</span></a>
              </li>
            </ul>
          </div>
         </li>
         @endcan
         @can('payment.paymentList',Auth::user())
          <li><a class="collapsible-header waves-effect waves-cyan" href="#" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Payment Gateway</span></a>
            <div class="collapsible-body">
              <ul class="collapsible" data-collapsible="accordion">
                @php $payment = App\PaymentGateway::first(); @endphp
                <li><a class="collapsible-body" href="{{ route('payments.edit',encrypt($payment->id)) }}" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Payment Gateway</span></a>
                </li>
              </ul>
            </div>
          </li>

          {{-- <li><a class="collapsible-body" href="{{ route('adminuser.edit',encrypt(Auth::user()->id)) }}" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Profile</span></a>
                </li>
          
         <li><a class="collapsible-body" href="{{ route('admin.subscriptions.index') }}" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Subscriptions</span></a>
                </li> --}}

         @endcan
         @can('profile.profileList',Auth::user())
          <li><a class="collapsible-header waves-effect waves-cyan" href="#" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Profile</span></a>
            <div class="collapsible-body">
              <ul class="collapsible" data-collapsible="accordion">
                <li><a class="collapsible-body" href="{{ route('adminuser.edit',encrypt(Auth::user()->id)) }}" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Profile</span></a>
                </li>
              </ul>
            </div>
          </li>
         @endcan
         @can('subscription.subscriptionAdd',Auth::user())
          <li><a class="collapsible-header waves-effect waves-cyan" href="#" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Subscriptions</span></a>
            <div class="collapsible-body">
              <ul class="collapsible" data-collapsible="accordion">
                <li><a class="collapsible-body" href="{{ route('admin.subscriptions.index') }}" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Subscriptions</span></a>
                </li>
              </ul>
            </div>
          </li>
         @endcan
         @can('email.emailList',Auth::user())
          <li><a class="collapsible-header waves-effect waves-cyan" href="#" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Emails</span></a>
                <div class="collapsible-body">
                  <ul class="collapsible" data-collapsible="accordion">

                    <li><a class="collapsible-body" href="{{ route('admin.emails.register') }}" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Register</span></a>
                    </li>

                    <li><a class="collapsible-body" href="{{ route('admin.emails.subscription') }}" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Subscription</span></a>
                    </li>

                    <li><a class="collapsible-body" href="{{ route('admin.emails.subscriptioncancel') }}" data-i18n=""><i class="material-icons">radio_button_unchecked</i><span>Subscription Cancel</span></a>
                    </li>

                  </ul>
                </div>
              </li>
         @endcan
      </ul>
      <div class="navigation-background"></div><a class="sidenav-trigger btn-sidenav-toggle btn-floating btn-medium waves-effect waves-light hide-on-large-only" href="#" data-target="slide-out"><i class="material-icons">menu</i></a>
    </aside>

    <!-- END: SideNav-->

