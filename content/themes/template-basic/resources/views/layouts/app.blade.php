<!doctype html>
<html @php language_attributes() @endphp>
  @include('partials.head')
  <body @php body_class() @endphp>
    @php do_action('get_header') @endphp
    <div class="wrap container-fluid" role="document">
      <div class="content">
        <main class="main">
          @yield('content')
        </main>
        @if (App\display_sidebar())
          <aside class="sidebar">
            @include('partials.sidebar')
          </aside>
        @endif
      </div>
    </div>
    <link href="https://fonts.googleapis.com/css?family=Lato:400,400i,700|Oswald" rel="stylesheet">
    @php do_action('get_footer') @endphp
    @include('partials.footer')
    @php wp_footer() @endphp    
  </body>
</html>
