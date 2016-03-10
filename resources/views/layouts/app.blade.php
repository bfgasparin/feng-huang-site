<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>{{ trans('core.institute') }}</title>
    <link href="{{ elixir('css/app.css') }}" rel="stylesheet">
</head>

<body id="app-layout">
    <fh-nav-bar title="{{ trans('core.institute') }}" logo="{{asset('images/logo.png')}}">
        <fh-nav-bar-item active url="/">{{ trans('menu.home') }} <span class="sr-only">(current)</span></fh-nav-bar-item>
        <fh-nav-bar-item url="#">{{ trans('menu.the-master') }}</fh-nav-bar-item>
        <fh-nav-bar-item url="#">{{ trans('menu.modalities') }}</fh-nav-bar-item>
        <fh-nav-bar-item url="#">{{ trans('menu.news') }}</fh-nav-bar-item>
        <fh-nav-bar-item url="#">{{ trans('menu.contact') }}</fh-nav-bar-item>
    </fh-nav-bar>
    
    <component is="{{ $vueView }}" inline-template>
        <!-- the vueView component will not be cached! -->
        @yield('content')
    </component>

    <fh-footer back-to-top="Back to top" color="ping">
        <!-- left section -->
        <fh-social-icon-list slot="left" text="{{ trans('core.follow-institute', ['institute' => trans('core.institute')]) }}">
            <fh-social-icon-item type='twitter' user="institutobfh"></fh-social-icon-item>
            <fh-social-icon-item type='facebook' user="institutofenghuang"></fh-social-icon-item>
            <fh-social-icon-item type='youtube' user="institutobfh"></fh-social-icon-item>
        </fh-social-icon-list>      

        <!-- middle section -->
        <address>
            <strong>{{ trans('core.telephones') }}</strong><br>
            <fh-telephone type="mobile" title="{{ trans('core.telephone-cellphone') }}",  abbr="{{ trans('core.telephone-cel-abbr') }}" number="1130893774"></fh-telephone>
            <fh-telephone type="phone"  title="{{ trans('core.telephone-commercial') }}", abbr="{{ trans('core.telephone-com-abbr') }}" number="1130693939"></fh-telephone>
            <fh-telephone type="phone"  title="{{ trans('core.telephone-commercial') }}", abbr="{{ trans('core.telephone-com-abbr') }}" number="1130893774"></fh-telephone>
        </address>
        
        <!-- middle right -->
        <address slot="right">
            <strong>{{ trans('core.email') }}</strong><br>
            <fh-email email="institutobfh@gmail.com"</fh-email>
        </address>
    </fh-footer>

    <!-- JavaScripts -->
    <script src="{{ elixir('js/app.js') }}"></script>
</body>
</html>
