<header>
    <div class="container">
        <div class="row">
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                <h1 class="title">@yield('title')
                    <small>@yield('sub-title')</small>
                </h1>
            </div>

            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 text-right">
                @yield('page-actions')
            </div>
        </div>
    </div>
</header>