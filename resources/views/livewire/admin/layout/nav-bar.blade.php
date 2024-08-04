<div>
    <header class="main-header">
        <nav class="navbar d-flex flex-column flex-sm-row navbar-expand-lg py-0 ">
            <div
                class="d-flex d-md-none align-items-center justify-content-between justify-content-sm-center w-100 px-2 px-sm-0">
                <div class="nav-logo-wrapper d-none d-sm-block d-md-none">
                    <img src="{{ asset('images/logo.jpg') }}" alt="est">
                </div>
                <div class="nav-logo-wrapper d-sm-none">
                    <img src="{{ asset('images/logo.jpg') }}" alt="est">
                </div>
                <div class="nav-item dropdown custom-dropdown account-dropdown d-block d-sm-none">
                    <a class="nav-link align-items-center" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false" href="">
                        <div class="d-inline-flex align-items-start">
                            <div class="avatar-wrapper">
                                <img src="{{ asset(Auth::user()->image ?? 'images/admin.jpg') }}"
                                    alt="{{ Auth::user()->firstname . ' ' . Auth::user()->lastname }}">
                            </div>
                        </div>
                    </a>
                    <ul class="dropdown-menu @if (!App::isLocale('ar')) dropdown-menu-right @endif">
                        <li class="dropdown-item align-items-center px-3">
                            <div class="d-inline-flex align-items-center">
                                <div class="avatar-wrapper">
                                    <img src="{{ asset(Auth::user()->avatar ?? 'images/admin.jpg') }}"
                                        alt="{{ Auth::user()->firstname . ' ' . Auth::user()->lastname }}">
                                </div>
                                <div style="margin-inline-start: 0.75rem;">
                                    <h5 class="admin-name">
                                        {{ Auth::user()->firstname . ' ' . Auth::user()->lastname }}
                                    </h5>
                                    <span
                                        class="admin-function">{{ __(preg_replace('/_+/', ' ', ucfirst(Auth::user()->roles->first()->name))) }}</span>
                                </div>
                            </div>
                        </li>
                        <hr>
                        <li class="dropdown-item align-items-center">
                            <a href="{{ route('admin.profile.index') }}" class="align-items-center">
                                <svg class="list-group-item-icon special-icon" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 13 16" fill="none">
                                    <path
                                        d="M6.49982 7.70859C8.16196 7.70859 9.5094 6.36113 9.5094 4.69898C9.5094 3.03683 8.16196 1.68945 6.49982 1.68945C4.83767 1.68945 3.49023 3.03683 3.49023 4.69898C3.49023 6.36113 4.83767 7.70859 6.49982 7.70859Z"
                                        stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    <path
                                        d="M11.6673 15.0194C11.6673 12.6944 9.35523 10.8086 6.50065 10.8086C3.64607 10.8086 1.33398 12.6944 1.33398 15.0194"
                                        stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                                {{ __('Mon compte') }}
                            </a>
                        </li>
                        <li class="dropdown-item align-items-center">
                            @livewire('admin.logout')
                        </li>
                        <div class="d-md-none">
                            <hr>
                            <livewire:admin.languages.index />
                        </div>
                    </ul>
                </div>
            </div>
            <button class="side-menu-togller d-none d-md-block" type="button">
                <span><i class="fas fa-bars"></i></span>
            </button>
            <div class="d-flex justify-content-between align-items-center flex-grow-1 nav-notifs-list">
                <div class="navbar-header">
                    <h5 class="d-none d-md-block header6 mb-0">
                        {{ __('Tableau de bord') }}
                    </h5>
                    <div class="d-block d-md-none dropdown" style="position: unset;">
                        <h5 class="header6 mb-0 dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                            {{ __('Tableau de bord') }}
                        </h5>
                        <ul class="dropdown-menu">
                            <li class="list-group-item @if (request()->routeIs('admin.dashboard.*')) active @endif">
                                <a class="list-group-item-link dropdown-item"
                                    href="{{ route('admin.dashboard.index') }}">
                                    <span class="nav-item-icon">
                                        <svg class="list-group-item-icon special-icon" width="38" height="39"
                                            viewBox="0 0 38 39" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g id="smart-home">
                                                <path id="Path"
                                                    d="M29.3531 13.9722L21.1141 7.31816C19.6267 6.1166 17.5436 6.1166 16.0561 7.31816L7.81565 13.9722C6.81209 14.7826 6.22535 16.0289 6.22595 17.349V28.899C6.22595 30.6709 7.6093 32.1074 9.31575 32.1074H27.8545C29.561 32.1074 30.9443 30.6709 30.9443 28.899V17.349C30.9443 16.0288 30.3573 14.7824 29.3531 13.9722"
                                                    stroke-width="2.75" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                                <path id="Path_2"
                                                    d="M24.7184 24.0627C21.3042 26.2011 15.7704 26.2011 12.3593 24.0627"
                                                    stroke-width="2.75" stroke-linecap="round"
                                                    stroke-linejoin="round" />
                                            </g>
                                        </svg>
                                    </span>
                                    {{ __('Tableau de bord') }}
                                </a>
                            </li>
                            <li class="list-group-item @if (request()->routeIs('admin.settings.index')) active @endif">
                                <a class="list-group-item-link dropdown-item"
                                    href="{{ route('admin.settings.index') }}">
                                    <span class="nav-item-icon">
                                        <svg class="list-group-item-icon special-icon" width="31" height="32"
                                            viewBox="0 0 31 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g id="vuesax/linear/shop">
                                                <g id="shop">
                                                    <path id="Vector"
                                                        d="M3.8877 14.9922V20.7918C3.8877 26.5914 6.2127 28.9164 12.0123 28.9164H18.9744C24.7739 28.9164 27.0989 26.5914 27.0989 20.7918V14.9922"
                                                        stroke-width="2.5" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path id="Vector_2"
                                                        d="M15.5 15.9997C17.8638 15.9997 19.6075 14.0751 19.375 11.7113L18.5225 3.08301H12.4905L11.625 11.7113C11.3925 14.0751 13.1363 15.9997 15.5 15.9997Z"
                                                        stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path id="Vector_3"
                                                        d="M23.6504 15.9997C26.2596 15.9997 28.1712 13.8813 27.9129 11.2851L27.5512 7.73301C27.0862 4.37467 25.7946 3.08301 22.4104 3.08301H18.4708L19.375 12.1376C19.5946 14.2688 21.5192 15.9997 23.6504 15.9997Z"
                                                        stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path id="Vector_4"
                                                        d="M7.28503 15.9997C9.41628 15.9997 11.3409 14.2688 11.5475 12.1376L11.8317 9.28301L12.4517 3.08301H8.51211C5.12795 3.08301 3.83628 4.37467 3.37128 7.73301L3.02253 11.2851C2.7642 13.8813 4.67586 15.9997 7.28503 15.9997Z"
                                                        stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path id="Vector_5"
                                                        d="M15.5002 22.458C13.3431 22.458 12.271 23.5301 12.271 25.6872V28.9163H18.7293V25.6872C18.7293 23.5301 17.6572 22.458 15.5002 22.458Z"
                                                        stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </g>
                                            </g>
                                        </svg>
                                    </span>
                                    {{ __('Paramètres') }}
                                </a>
                            </li>
                            <li class="list-group-item @if (request()->routeIs('admin.managers.*')) active @endif">
                                <a class="list-group-item-link dropdown-item position-relative"
                                    href="{{ route('admin.managers.index') }}">
                                    <span class="nav-item-icon">
                                        <svg class="list-group-item-icon special-icon" width="31" height="32"
                                            viewBox="0 0 31 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g id="vuesax/linear/shopping-cart">
                                                <g id="shopping-cart">
                                                    <path id="Vector"
                                                        d="M2.58337 3.08301H4.83088C6.22588 3.08301 7.32379 4.28426 7.20754 5.66634L6.13546 18.5313C5.95462 20.6367 7.62087 22.4451 9.7392 22.4451H23.4955C25.3555 22.4451 26.983 20.9209 27.125 19.0738L27.8225 9.38635C27.9775 7.24218 26.35 5.49842 24.193 5.49842H7.51755"
                                                        stroke-width="2" stroke-miterlimit="10"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                    <path id="Vector_2"
                                                        d="M20.9896 28.9167C21.8813 28.9167 22.6042 28.1938 22.6042 27.3021C22.6042 26.4104 21.8813 25.6875 20.9896 25.6875C20.0979 25.6875 19.375 26.4104 19.375 27.3021C19.375 28.1938 20.0979 28.9167 20.9896 28.9167Z"
                                                        stroke-width="2" stroke-miterlimit="10"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                    <path id="Vector_3"
                                                        d="M10.6562 28.9167C11.5479 28.9167 12.2708 28.1938 12.2708 27.3021C12.2708 26.4104 11.5479 25.6875 10.6562 25.6875C9.7645 25.6875 9.04163 26.4104 9.04163 27.3021C9.04163 28.1938 9.7645 28.9167 10.6562 28.9167Z"
                                                        stroke-width="2" stroke-miterlimit="10"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                    <path id="Vector_4" d="M11.625 10.833H27.125" stroke-width="2"
                                                        stroke-miterlimit="10" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </g>
                                            </g>
                                        </svg>
                                    </span>
                                    {{ __('Entraîneurs') }}
                                </a>
                            </li>
                            <li class="list-group-item @if (request()->routeIs('admin.categories.*')) active @endif">
                                <a class="list-group-item-link dropdown-item"
                                    href="{{ route('admin.categories.index') }}">
                                    <span class="nav-item-icon">
                                        <svg class="list-group-item-icon special-icon" width="31" height="32"
                                            viewBox="0 0 31 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g id="vuesax/linear/category">
                                                <g id="category">
                                                    <path id="Vector"
                                                        d="M6.45837 13.4163H9.04171C11.625 13.4163 12.9167 12.1247 12.9167 9.54134V6.95801C12.9167 4.37467 11.625 3.08301 9.04171 3.08301H6.45837C3.87504 3.08301 2.58337 4.37467 2.58337 6.95801V9.54134C2.58337 12.1247 3.87504 13.4163 6.45837 13.4163Z"
                                                        stroke-width="2" stroke-miterlimit="10"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                    <path id="Vector_2"
                                                        d="M21.9584 13.4163H24.5417C27.125 13.4163 28.4167 12.1247 28.4167 9.54134V6.95801C28.4167 4.37467 27.125 3.08301 24.5417 3.08301H21.9584C19.375 3.08301 18.0834 4.37467 18.0834 6.95801V9.54134C18.0834 12.1247 19.375 13.4163 21.9584 13.4163Z"
                                                        stroke-width="2" stroke-miterlimit="10"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                    <path id="Vector_3"
                                                        d="M21.9584 28.9163H24.5417C27.125 28.9163 28.4167 27.6247 28.4167 25.0413V22.458C28.4167 19.8747 27.125 18.583 24.5417 18.583H21.9584C19.375 18.583 18.0834 19.8747 18.0834 22.458V25.0413C18.0834 27.6247 19.375 28.9163 21.9584 28.9163Z"
                                                        stroke-width="2" stroke-miterlimit="10"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                    <path id="Vector_4"
                                                        d="M6.45837 28.9163H9.04171C11.625 28.9163 12.9167 27.6247 12.9167 25.0413V22.458C12.9167 19.8747 11.625 18.583 9.04171 18.583H6.45837C3.87504 18.583 2.58337 19.8747 2.58337 22.458V25.0413C2.58337 27.6247 3.87504 28.9163 6.45837 28.9163Z"
                                                        stroke-width="2" stroke-miterlimit="10"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                </g>
                                            </g>
                                        </svg>
                                    </span>
                                    {{ __('Catégories') }}
                                </a>
                            </li>
                            <li class="list-group-item @if (request()->routeIs('admin.players.*')) active @endif">
                                <a class="list-group-item-link dropdown-item"
                                    href="{{ route('admin.players.index') }}">
                                    <span class="nav-item-icon">
                                        <svg class="list-group-item-icon special-icon" width="31" height="32"
                                            viewBox="0 0 31 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g id="vuesax/linear/bag-happy">
                                                <g id="bag-happy">
                                                    <path id="Vector"
                                                        d="M10.9791 18.9062C10.9791 21.3863 13.02 23.4271 15.5 23.4271C17.98 23.4271 20.0208 21.3863 20.0208 18.9062"
                                                        stroke-width="2" stroke-miterlimit="10"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                    <path id="Vector_2" d="M11.3794 3.08301L6.70361 7.77176"
                                                        stroke-width="2" stroke-miterlimit="10"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                    <path id="Vector_3" d="M19.6204 3.08301L24.2962 7.77176"
                                                        stroke-width="2" stroke-miterlimit="10"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                    <path id="Vector_4"
                                                        d="M2.58337 10.64C2.58337 8.25039 3.86212 8.05664 5.45087 8.05664H25.5492C27.138 8.05664 28.4167 8.25039 28.4167 10.64C28.4167 13.4171 27.138 13.2233 25.5492 13.2233H5.45087C3.86212 13.2233 2.58337 13.4171 2.58337 10.64Z"
                                                        stroke-width="2" />
                                                    <path id="Vector_5"
                                                        d="M4.52087 13.417L6.34212 24.577C6.75546 27.0828 7.75004 28.917 11.4442 28.917H19.233C23.25 28.917 23.8442 27.1603 24.3092 24.732L26.4792 13.417"
                                                        stroke-width="2" stroke-linecap="round" />
                                                </g>
                                            </g>
                                        </svg>
                                    </span>
                                    {{ __('Joueurs') }}
                                </a>
                            </li>
                            <li class="list-group-item @if (request()->routeIs('admin.matches.*')) active @endif">
                                <a class="list-group-item-link dropdown-item"
                                    href="{{ route('admin.matches.index') }}">
                                    <span class="nav-item-icon">
                                        <svg class="list-group-item-icon special-icon" width="31" height="32"
                                            viewBox="0 0 31 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g id="vuesax/linear/bubble">
                                                <g id="bubble">
                                                    <path id="Vector"
                                                        d="M20.137 16.3355C23.7966 16.3355 26.7633 13.3688 26.7633 9.70926C26.7633 6.04969 23.7966 3.08301 20.137 3.08301C16.4774 3.08301 13.5107 6.04969 13.5107 9.70926C13.5107 13.3688 16.4774 16.3355 20.137 16.3355Z"
                                                        stroke-width="2" stroke-miterlimit="10" />
                                                    <path id="Vector_2"
                                                        d="M8.21464 25.61C10.4118 25.61 12.193 23.8288 12.193 21.6317C12.193 19.4345 10.4118 17.6533 8.21464 17.6533C6.01747 17.6533 4.23633 19.4345 4.23633 21.6317C4.23633 23.8288 6.01747 25.61 8.21464 25.61Z"
                                                        stroke-width="2" stroke-miterlimit="10" />
                                                    <path id="Vector_3"
                                                        d="M21.4676 28.917C23.2938 28.917 24.7742 27.4366 24.7742 25.6104C24.7742 23.7842 23.2938 22.3037 21.4676 22.3037C19.6413 22.3037 18.1609 23.7842 18.1609 25.6104C18.1609 27.4366 19.6413 28.917 21.4676 28.917Z"
                                                        stroke-width="2" stroke-miterlimit="10" />
                                                </g>
                                            </g>
                                        </svg>
                                    </span>
                                    {{ __('Matchs') }}
                                </a>
                            </li>
                            <li class="list-group-item @if (request()->routeIs('admin.training.*')) active @endif">
                                <a class="list-group-item-link dropdown-item"
                                    href="{{ route('admin.training.index') }}">
                                    <span class="nav-item-icon">
                                        <svg class="list-group-item-icon special-icon"
                                            xmlns="http://www.w3.org/2000/svg" width="31" height="31"
                                            viewBox="0 0 31 31" fill="none">
                                            <path d="M8.396 28.4167V19.375" stroke-width="2" stroke-miterlimit="10"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M8.396 6.45898V2.58398" stroke-width="2" stroke-miterlimit="10"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M22.604 28.416V24.541" stroke-width="2" stroke-miterlimit="10"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M22.604 11.6257V2.58398" stroke-width="2" stroke-miterlimit="10"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                            <path
                                                d="M12.271 9.04232V16.7923C12.271 18.2132 11.6252 19.3757 9.68766 19.3757H7.10433C5.16683 19.3757 4.521 18.2132 4.521 16.7923V9.04232C4.521 7.62148 5.16683 6.45898 7.10433 6.45898H9.68766C11.6252 6.45898 12.271 7.62148 12.271 9.04232Z"
                                                stroke-width="2" stroke-miterlimit="10" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path
                                                d="M26.479 14.2083V21.9583C26.479 23.3792 25.8332 24.5417 23.8957 24.5417H21.3123C19.3748 24.5417 18.729 23.3792 18.729 21.9583V14.2083C18.729 12.7875 19.3748 11.625 21.3123 11.625H23.8957C25.8332 11.625 26.479 12.7875 26.479 14.2083Z"
                                                stroke-width="2" stroke-miterlimit="10" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>
                                    </span>
                                    {{ __('Entraînement') }}
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="d-none collapse-nav-list">
                    <button data-toggle="collapse" data-target="#navbarSupportedContent" role="button"
                        aria-expanded="false" aria-controls="navbarSupportedContent">
                        <div aria-label="Votre profil"
                            class="oajrlxb2 qu0x051f esr5mh6w e9989ue4 r7d6kgcz nhd2j8a9 p7hjln8o kvgmc6g5 cxmmr5t8 oygrvhab hcukyx3x i1ao9s8h esuyzwwr f1sip0of abiwlrkh p8dawk7l lzcic4wl bp9cbjyn s45kfl79 emlxlaya bkmhp75w spb7xbtv rt8b4zig n8ej3o3l agehan2d sk4xxmp2 rq0escxv j83agx80 taijpn5t jb3vyjys rz4wbd8a qt6c0cv9 a8nywdso l9j0dhe7 qypqp5cg q676j6op oo1teu6h"
                            role="button" tabindex="0">
                            <svg fill="currentColor" viewBox="0 0 20 20" width="30px" height="30px"
                                class="a8c37x1j ms05siws l3qrxjdp b7h9ocf4 q66pz984 jnigpg78 odw8uiq3">
                                <path
                                    d="M10 14a1 1 0 0 1-.755-.349L5.329 9.182a1.367 1.367 0 0 1-.205-1.46A1.184 1.184 0 0 1 6.2 7h7.6a1.18 1.18 0 0 1 1.074.721 1.357 1.357 0 0 1-.2 1.457l-3.918 4.473A1 1 0 0 1 10 14z">
                                </path>
                            </svg>
                            <div class="i09qtzwb n7fi1qx3 b5wmifdl hzruof5a pmk7jnqg j9ispegn kr520xx4 c5ndavph art1omkt ot9fgl3s rnr61an3 s45kfl79 emlxlaya bkmhp75w spb7xbtv"
                                data-visualcompletion="ignore"></div>
                        </div>
                    </button>
                </div>
                <ul class="top-navigation-bar nav align-items-center ">
                    <div>
                        <ul class="top-navigation-bar nav align-items-center">
                            <li class="d-none d-md-block nav-item language-selector">
                                <a class="nav-link align-items-center" style="padding-inline-end: 0 !important;"
                                    href="{{ 'https://' . env('DOMAIN', 'est.com') }}" target="_blank">
                                    <div class="lang-switcher">
                                        <img height="27px" src="{{ asset('images/logo.jpg') }}" alt="est">
                                    </div>
                                </a>
                            </li>
                            <div class="d-none d-md-block">
                                <livewire:admin.languages.index />
                            </div>
                        </ul>
                    </div>
                    <li class="nav-item dropdown custom-dropdown account-dropdown d-none d-sm-block">
                        <a class="nav-link align-items-center" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false" href="">
                            <div class="d-inline-flex align-items-start">
                                <div class="avatar-wrapper">
                                    <img src="{{ asset(Auth::user()->image ?? 'images/images.png') }}"
                                        alt="{{ Auth::user()->firstname . ' ' . Auth::user()->lastname }}">
                                </div>
                            </div>
                        </a>
                        <ul class="dropdown-menu @if (!App::isLocale('ar')) dropdown-menu-right @endif">
                            <li class="dropdown-item align-items-center px-3">
                                <div class="d-inline-flex align-items-center">
                                    <div class="avatar-wrapper">
                                        <img src="{{ asset(Auth::user()->image ?? 'images/images.png') }}"
                                            alt="{{ Auth::user()->firstname . ' ' . Auth::user()->lastname }}">
                                    </div>
                                    <div style="margin-inline-start: 0.75rem;">
                                        <h5 class="admin-name">
                                            {{ Auth::user()->firstname . ' ' . Auth::user()->lastname }}
                                        </h5>
                                        <span
                                            class="admin-function">{{ __(preg_replace('/_+/', ' ', ucfirst(Auth::user()->roles->first()->name))) }}</span>
                                    </div>
                                </div>
                            </li>
                            <hr>
                            <li class="dropdown-item align-items-center">
                                <a href="{{ route('admin.profile.index') }}" class="align-items-center">
                                    <svg class="list-group-item-icon special-icon" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 13 16" fill="none">
                                        <path
                                            d="M6.49982 7.70859C8.16196 7.70859 9.5094 6.36113 9.5094 4.69898C9.5094 3.03683 8.16196 1.68945 6.49982 1.68945C4.83767 1.68945 3.49023 3.03683 3.49023 4.69898C3.49023 6.36113 4.83767 7.70859 6.49982 7.70859Z"
                                            stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                        <path
                                            d="M11.6673 15.0194C11.6673 12.6944 9.35523 10.8086 6.50065 10.8086C3.64607 10.8086 1.33398 12.6944 1.33398 15.0194"
                                            stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                    {{ __('Mon compte') }}
                                </a>
                            </li>
                            <li class="dropdown-item align-items-center">
                                @livewire('admin.logout')
                            </li>
                            <div class="d-md-none">
                                <hr>
                                <livewire:admin.languages.index />
                            </div>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
</div>
