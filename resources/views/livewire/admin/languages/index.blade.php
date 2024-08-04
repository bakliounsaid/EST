<div >
 {{--    <li class="d-none d-md-block nav-item dropdown language-selector">
        <a class="nav-link align-items-center" style="padding-inline-end: 0 !important;" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="">
            <div class="lang-switcher">
                <img style="height: 27px;" src="{{ asset('images/'.Config::get('languages')[App::getLocale()]['flag-icon']) }}" alt="not found">
            </div>
        </a>
        <ul class="dropdown-menu dropdown-menu-right">
            @foreach (Config::get('languages') as $lang => $language)
            @if ($lang != App::getLocale())
            <li class="dropdown-item align-items-center">
                <a href="{{ route('admin.lang.switch', $lang) }}" class="d-flex align-items-center">
                    <div class="lang-switcher" style="margin-inline-end: 1rem;">
                        <img style="height: 27px;" src="{{ asset('images/'.$language['flag-icon']) }}" alt="not found">
                    </div>
                    {{__($language['display'])}}
                </a>
            </li>
            @endif
            @endforeach

        </ul>
    </li>
    <div class="d-flex d-md-none row mx-auto" style="justify-content: space-evenly;">
        @foreach (Config::get('languages') as $lang => $language)
        <a href="{{ route('admin.lang.switch', $lang) }}">
            <a href="{{ route('admin.lang.switch', $lang) }}" class="d-flex align-items-center">
                <div class="lang-switcher" style="margin-inline-end: 1rem;">
                    <img style="height: 27px;" src="{{ asset('img/'.$language['flag-icon']) }}" alt="not found">
                </div>
            </a>
        </a>
        @endforeach
    </div> --}}
</div>
