<header class="site-header banner">
  <div class="container">
    <nav class="navbar navbar-expand-lg navbar-light">
      <a class="brand" href="{{ home_url('/') }}">
        <img src="@asset('images/logo.jpg')" width="30" height="30" class="d-inline-block align-top" alt="">
        Open your .. mind, soul and source.
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        @if (has_nav_menu('primary_navigation'))
          {!! wp_nav_menu([
            'theme_location' => 'primary_navigation',
            'menu_class'     => 'nav ml-auto',
            'container'      => ''
            ]) !!}
        @endif
      </div>
    </nav>
  </div>
</header>
