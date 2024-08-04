<section class="main-content-section">
    <div class="main-content-section-header d-md-flex">
        <div class="d-flex align-items-center mb-3 mb-md-0">
            <div class="dropdown" style="width: 100%;">
                <button class="submit-btn dropdown-toggle w-100" type="button" id="dropdownMenuButton"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="min-width: 100%">
                    {{ __('name') }}
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="#"
                        wire:click.prevent="setFilter('FILTER_BY_YESTERDAY')">
                        {{ __('Yesterday') }}
                    </a>
                    <a class="dropdown-item" href="#"
                        wire:click.prevent="setFilter('FILTER_BY_LAST_WEEK')">
                        {{ __('Last_number_days', ['number' => 7]) }}
                    </a>
                    <a class="dropdown-item" href="#"
                        wire:click.prevent="setFilter('FILTER_BY_LAST_MONTH')">
                        {{ __('Last_number_days', ['number' => 30]) }}
                    </a>
                    <a class="dropdown-item" href="#"
                        wire:click.prevent="setFilter('FILTER_BY_LAST_YEAR')">
                        {{ __('Last_number_months', ['number' => 12]) }}
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="row row-cols-1 row-cols-lg-3 mx-0">
        <div class="col mb-4 stat-card" id="orders-card">
            <div class="card h-100">
                <div class="card-body">
                    <div class="row">
                        <div class="col mt-0">
                            <h5 class="card-title">{{ __('Orders') }}</h5>
                        </div>

                        <div class="col-auto">
                            <div class="stat text-primary">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="feather feather-shopping-cart align-middle">
                                    <circle cx="9" cy="21" r="1"></circle>
                                    <circle cx="20" cy="21" r="1"></circle>
                                    <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6">
                                    </path>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <h3 class="card-subtitle mt-1 mb-3">10</h3>
                    <div class="mb-0">
                        <span class="text-muted">
                            {{ __('Since_temp') }}
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col mb-4 stat-card" id="Hidden-orders-card">
            <div class="card h-100">
                <div class="card-body">
                    <div class="row">
                        <div class="col mt-0">
                            <h5 class="card-title">{{ __('Hidden Orders') }}</h5>
                        </div>

                        <div class="col-auto">
                            <div class="stat text-primary">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="feather feather-shopping-cart align-middle">
                                    <circle cx="9" cy="21" r="1"></circle>
                                    <circle cx="20" cy="21" r="1"></circle>
                                    <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6">
                                    </path>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <h3 class="card-subtitle mt-1 mb-3">10</h3>
                    <div class="mb-0">
                        <span class="text-muted">
                            {{ __('Subscription start date') }}: {{ date('d/m/Y', strtotime(setting('start_date'))) }}
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col mb-4 stat-card" id="Confirmed-orders-card">
            <div class="card h-100">
                <div class="card-body">
                    <div class="row">
                        <div class="col mt-0">
                            <h5 class="card-title">{{ __('Confirmed orders') }}</h5>
                        </div>

                        <div class="col-auto">
                            <div class="stat text-primary">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="feather feather-truck align-middle">
                                    <rect x="1" y="3" width="15" height="13"></rect>
                                    <polygon points="16 8 20 8 23 11 23 16 16 16 16 8"></polygon>
                                    <circle cx="5.5" cy="18.5" r="2.5"></circle>
                                    <circle cx="18.5" cy="18.5" r="2.5"></circle>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <h3 class="card-subtitle mt-1 mb-3">
                       20
                    </h3>
                    <div class="mb-0">
                        <span class="text-muted">
                            {{ __('Since_temp')}}
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col mb-4 stat-card" id="sales-card">
            <div class="card h-100">
                <div class="card-body">
                    <div class="row">
                        <div class="col mt-0">
                            <h5 class="card-title">{{ __('Sales') }}</h5>
                        </div>
                        <div class="col-auto">
                            <div class="stat text-primary">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="feather feather-dollar-sign align-middle">
                                    <line x1="12" y1="1" x2="12" y2="23"></line>
                                    <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <h3 class="card-subtitle mt-1 mb-3 @if (App::isLocale('ar')) text-right @endif"
                        style="@if (App::isLocale('ar')) direction: ltr; @endif">
                        @if ($this->currency == 'DZD' && App::isLocale('ar'))
                            10
                            {{ __('Price_da') }}
                        @else
                            20
                            {{ $this->currency }}
                        @endif
                    </h3>
                    <div class="mb-0">
                        <span class="text-muted">
                            {{ __('Since_temp') }}
                        </span>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
