@include('layout.head')

<!DOCTYPE html>
<html>


    <body id="home-version-1" class="home-version-1" data-style="default">

        <div id="site">
            @include('layout.header')

                @yield('body')
        </div>
    </body>
</html>
@include('layout.footer')
@include('layout.scripts')
