<nav class="navbar navbar-inverse">
    <div class="container">
        <div class="navbar-header">
            <button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target="#collapsible-menu" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">{{ $site_title }}</a>
        </div>
        <div class="collapse navbar-collapse navbar-right" id="collapsible-menu">
            <ul class="nav navbar-nav">
                @foreach ($navigation as $item)
                    <li{!! ($item['active']) ? ' class="active"' : '' !!}><a class="nav-link" href="{{ $item['url'] }}">{{ $item['title'] }}</a></li>
                @endforeach
            </ul>
        </div>
    </div>
</nav>
