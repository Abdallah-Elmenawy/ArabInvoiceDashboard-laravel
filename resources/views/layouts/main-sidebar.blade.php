<!-- main-sidebar -->
		<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
		<aside class="app-sidebar sidebar-scroll">
			<div class="main-sidebar-header active">
				<a class="desktop-logo logo-light active" style="color: black" href="#">
					برامج الفواتير
					{{-- <img src="{{URL::asset('assets/img/brand/logo.png')}}" class="main-logo" alt="logo"> --}}
				</a>
				{{-- <a class="desktop-logo logo-dark active" href="{{ url('/' . $page='index') }}"><img src="{{URL::asset('assets/img/brand/logo-white.png')}}" class="main-logo dark-theme" alt="logo"></a>
				<a class="logo-icon mobile-logo icon-light active" href="{{ url('/' . $page='index') }}"><img src="{{URL::asset('assets/img/brand/favicon.png')}}" class="logo-icon" alt="logo"></a>
				<a class="logo-icon mobile-logo icon-dark active" href="{{ url('/' . $page='index') }}"><img src="{{URL::asset('assets/img/brand/favicon-white.png')}}" class="logo-icon dark-theme" alt="logo"></a> --}}
			</div>
			<div class="main-sidemenu">
				<div class="app-sidebar__user clearfix">
					<div class="dropdown user-pro-body">
						<div class="">
							<img alt="user-img" class="avatar avatar-xl brround" src="{{URL::asset('assets/img/faces/6.jpg')}}"><span class="avatar-status profile-status bg-green"></span>
						</div>
						<div class="user-info">
							<h4 class="font-weight-semibold mt-3 mb-0">{{ Auth::user()->name }}</h4>
							<span class="mb-0 text-muted">{{ Auth::user()->email }}</span>
						</div>
					</div>
				</div>
				<ul class="side-menu">
					<li class="side-item side-item-category">برنامج الفواتير</li>
					<li class="slide">
						<a class="side-menu__item" href="{{ url('/' . $page='home') }}">
							<svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24">
								<path d="M0 0h24v24H0V0z" fill="none"/>
								<path d="M10 20v-6h4v6h5v-8h3L12 3 2 12h3v8z"/>
							</svg>
							<span class="side-menu__label">الرئيسية</span>
						</a>
					</li>
				@can('الفواتير')
					<li class="side-item side-item-category">الفواتير</li>

					<li class="slide">
						<a class="side-menu__item" data-toggle="slide" href="{{ url('/' . $page='#') }}">
							<svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24">
								<path d="M0 0h24v24H0V0z" fill="none"/>
								<path d="M19 5H5v14h14V5zM9 17H7v-7h2v7zm4 0h-2V7h2v10zm4 0h-2v-4h2v4z" opacity=".3"/>
								<path d="M3 5v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2H5c-1.1 0-2 .9-2 2zm2 0h14v14H5V5zm2 5h2v7H7zm4-3h2v10h-2zm4 6h2v4h-2zm-8-6h2v-2H7zm4 0h2v-2h-2zm4 0h2v-2h-2z"/>
							</svg>
							<span class="side-menu__label">الفواتير</span><i class="angle fe fe-chevron-down"></i>
						</a>
						<ul class="slide-menu">
							@can('قائمة الفواتير')
								<li><a class="slide-item" href="{{ url('/' . $page='invoices') }}">قائمة الفواتير</a></li>
							@endcan
							
							@can('الفواتير المدفوعة')
								<li><a class="slide-item" href="{{ url('/' . $page='Invoice_Paid') }}">الفواتير المدفوعة </a></li>
							@endcan
							
							@can('الفواتير الغير مدفوعة')
								<li><a class="slide-item" href="{{ url('/' . $page='Invoice_unPaid') }}">الفواتير الغير مدفوعة</a></li>
							@endcan
							
							@can('الفواتير المدفوعة')
								<li><a class="slide-item" href="{{ url('/' . $page='Invoice_Partial') }}">الفواتير المدفوعة جزئياً</a></li>
							@endcan
							
							@can('ارشيف الفواتير')
								<li><a class="slide-item" href="{{ url('/' . $page='Archive') }}"> ارشيف الفواتير</a></li>
							@endcan
						</ul>
					</li>
				@endcan

				@can('التقارير')
					<li class="side-item side-item-category">التقارير</li>
					<li class="slide">
						<a class="side-menu__item" data-toggle="slide" href="{{ url('/' . $page='#') }}">
							<svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24">
								<path d="M0 0h24v24H0V0z" fill="none"/>
								<path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 16H5V5h14v14zM7 7h10v2H7zm0 4h10v2H7zm0 4h10v2H7z"/>
							</svg>
							<span class="side-menu__label">التقارير</span><i class="angle fe fe-chevron-down"></i></a>
						<ul class="slide-menu">
							@can('تقرير الفواتير')
								<li><a class="slide-item" href="{{ url('/' . $page='invoices_report') }}">تقارير الفواتير</a></li>
							@endcan

							@can('تقرير العملاء')
								<li><a class="slide-item" href="{{ url('/' . $page='customers_report') }}">تقارير العملاء</a></li>
							@endcan
						</ul>
					</li>
				@endcan

				@can('المستخدمين')
					<li class="side-item side-item-category">المستخدمين</li>
					<li class="slide">
						<a class="side-menu__item" data-toggle="slide" href="{{ url('/' . $page='#') }}">
							<svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24">
								<path d="M0 0h24v24H0V0z" fill="none"/>
								<path d="M16 11c1.66 0 2.99-1.34 2.99-3S17.66 5 16 5s-3 1.34-3 3 1.34 3 3 3zm-8 0c1.66 0 2.99-1.34 2.99-3S9.66 5 8 5 5 6.34 5 8s1.34 3 3 3zm8 5c-1.66 0-3 1.34-3 3v1h6v-1c0-1.66-1.34-3-3-3zm-8 0c-1.66 0-3 1.34-3 3v1h6v-1c0-1.66-1.34-3-3-3z" opacity=".3"/>
								<path d="M16 13c1.66 0 2.99-1.34 2.99-3S17.66 7 16 7s-3 1.34-3 3 1.34 3 3 3zm-8 0c1.66 0 2.99-1.34 2.99-3S9.66 7 8 7 5 8.34 5 10s1.34 3 3 3zm8 5c-1.66 0-3 1.34-3 3v1h6v-1c0-1.66-1.34-3-3-3zm-8 0c-1.66 0-3 1.34-3 3v1h6v-1c0-1.66-1.34-3-3-3z"/>
							</svg>
							<span class="side-menu__label">المستخدمين</span><i class="angle fe fe-chevron-down"></i></a>
						<ul class="slide-menu">
							@can('قائمة المستخدمين')
								<li><a class="slide-item" href="{{ url('/' . $page='users') }}">قائمة المستخدمين</a></li>
							@endcan

							@can('صلاحيات المستخدمين')
								<li><a class="slide-item" href="{{ url('/' . $page='roles') }}">صلاحيات المستخدمين</a></li>
							@endcan
							
						</ul>
					</li>
				@endcan
				@can('الاعدادات')
					<li class="side-item side-item-category">الاعدادات</li>
					<li class="slide">
						<a class="side-menu__item" data-toggle="slide" href="{{ url('/' . $page='#') }}">
							<svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24">
								<path d="M0 0h24v24H0V0z" fill="none"/>
								<path d="M12 15.5A3.5 3.5 0 0 1 8.5 12 3.5 3.5 0 0 1 12 8.5a3.5 3.5 0 0 1 3.5 3.5 3.5 3.5 0 0 1-3.5 3.5zm0-6A2.5 2.5 0 0 0 9.5 12a2.5 2.5 0 0 0 2.5 2.5 2.5 2.5 0 0 0 2.5-2.5A2.5 2.5 0 0 0 12 9.5zM12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8z"/>
							</svg>
							<span class="side-menu__label">الاعدادات</span><i class="angle fe fe-chevron-down"></i></a>
						<ul class="slide-menu">
							@can('الاقسام')
								<li><a class="slide-item" href="{{ url('/' . $page='sections') }}">الاقسام</a></li>
							@endcan

							@can('المنتجات')
								<li><a class="slide-item" href="{{ url('/' . $page='products') }}">المنتجات</a></li>
							@endcan

						</ul>
					</li>
				@endcan
				</ul>
			</div>
		</aside>
<!-- main-sidebar -->
