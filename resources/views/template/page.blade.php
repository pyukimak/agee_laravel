        @include('template/head')
        @include('template/sidebar')
        <!-- Main Content -->
		<div class="page-wrapper">
            @yield('content')
            {{-- @include('template/foot') --}}
		</div>
        <!-- /Main Content -->
        @include('template/sc_foot')
        