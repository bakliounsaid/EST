<section class="login-section">
    <div class="row justify-content-center align-items-center">
        <div class="col-10 col-sm-10 col-md-8 col-lg-7 col-xl-5">
            <div class="login-form-wrapper px-5">
                <div class="login-form-header">
                    <h3 class="login-header text-center">{{ __('Connexion') }}</h3>
                    <p class="login-sub-header text-center">{{ __('Connectez-vous à votre compte pour continuer') }}</p>
                </div>
                @error('loginFailed')
                    <p class="form-error-message">{{ $message }}</p>
                @enderror
                <form class="form-group" wire:submit.prevent="authenticate">
                    <div class="custom-input">
                        <label for="phone" @if(App::isLocale('ar')) class="float-right" @endif>{{ __('Téléphone') }}</label>
                        <input type="tel" placeholder="{{ __('Téléphone') }}" wire:model.lazy="phone" id="phone"
                        style="@if(App::isLocale('ar')) text-align: right !important; padding-inline-end: 20px; @endif">
                        @error('phone')
                            <p class="input-error-message @if(App::isLocale('ar')) text-right @endif">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="custom-input">
                        <label for="password" @if(App::isLocale('ar')) class="float-right" @endif>{{ __('Mot de passe') }}</label>
                        <input type="password" placeholder="{{ __('Mot de passe') }}" wire:model.lazy="password" id="password"
                        style="@if(App::isLocale('ar')) text-align: right !important; padding-inline-end: 20px; @endif">
                        @error('password')
                            <p class="input-error-message @if(App::isLocale('ar')) text-right @endif">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="d-flex justify-content-between">
                        <div class="login-checkbox">
                            <input type="checkbox" id="remember_me" wire:model="remember_me">
                            <label for="remember_me">{{ __('Se souvenir de moi') }}</label>
                        </div>
                    </div>
                    <div class="submit-form-action">
                        <button type="submit" class="submit-btn-full submit-btn center" wire:loading.attr="disabled">{{ __('Connexion') }}
                            <span wire:loading wire:target="authenticate" class="spinner-border spinner-border-sm"
                            role="status" aria-hidden="true"></span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

