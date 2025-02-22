<?php

use Illuminate\Support\Facades\Facade;

return [

    /*
    |--------------------------------------------------------------------------
    | Application Name
    |--------------------------------------------------------------------------
    |
    | This value is the name of your application. This value is used when the
    | framework needs to place the application's name in a notification or
    | any other location as required by the application or its packages.
    |
    */

    'name' => env('APP_NAME', 'Laravel'),

    /*
    |--------------------------------------------------------------------------
    | Application Environment
    |--------------------------------------------------------------------------
    |
    | This value determines the "environment" your application is currently
    | running in. This may determine how you prefer to configure various
    | services the application utilizes. Set this in your ".env" file.
    |
    */

    'env' => env('APP_ENV', 'production'),

    /*
    |--------------------------------------------------------------------------
    | Application Debug Mode
    |--------------------------------------------------------------------------
    |
    | When your application is in debug mode, detailed error messages with
    | stack traces will be shown on every error that occurs within your
    | application. If disabled, a simple generic error page is shown.
    |
    */

    'debug' => (bool) env('APP_DEBUG', false),

    /*
    |--------------------------------------------------------------------------
    | Application URL
    |--------------------------------------------------------------------------
    |
    | This URL is used by the console to properly generate URLs when using
    | the Artisan command line tool. You should set this to the root of
    | your application so that it is used when running Artisan tasks.
    |
    */

    'url' => env('APP_URL', 'http://localhost'),

    'asset_url' => env('ASSET_URL'),

    /*
    |--------------------------------------------------------------------------
    | Application Timezone
    |--------------------------------------------------------------------------
    |
    | Here you may specify the default timezone for your application, which
    | will be used by the PHP date and date-time functions. We have gone
    | ahead and set this to a sensible default for you out of the box.
    |
    */

    'timezone' => 'UTC',

    /*
    |--------------------------------------------------------------------------
    | Application Locale Configuration
    |--------------------------------------------------------------------------
    |
    | The application locale determines the default locale that will be used
    | by the translation service provider. You are free to set this value
    | to any of the locales which will be supported by the application.
    |
    */

    'locale' => 'en',

    /*
    |--------------------------------------------------------------------------
    | Application Fallback Locale
    |--------------------------------------------------------------------------
    |
    | The fallback locale determines the locale to use when the current one
    | is not available. You may change the value to correspond to any of
    | the language folders that are provided through your application.
    |
    */

    'fallback_locale' => 'en',

    /*
    |--------------------------------------------------------------------------
    | Faker Locale
    |--------------------------------------------------------------------------
    |
    | This locale will be used by the Faker PHP library when generating fake
    | data for your database seeds. For example, this will be used to get
    | localized telephone numbers, street address information and more.
    |
    */

    'faker_locale' => 'en_US',

    /*
    |--------------------------------------------------------------------------
    | Encryption Key
    |--------------------------------------------------------------------------
    |
    | This key is used by the Illuminate encrypter service and should be set
    | to a random, 32 character string, otherwise these encrypted strings
    | will not be safe. Please do this before deploying an application!
    |
    */

    'key' => env('APP_KEY'),

    'cipher' => 'AES-256-CBC',

    /*
    |--------------------------------------------------------------------------
    | Maintenance Mode Driver
    |--------------------------------------------------------------------------
    |
    | These configuration options determine the driver used to determine and
    | manage Laravel's "maintenance mode" status. The "cache" driver will
    | allow maintenance mode to be controlled across multiple machines.
    |
    | Supported drivers: "file", "cache"
    |
    */

    'maintenance' => [
        'driver' => 'file',
        // 'store'  => 'redis',
    ],

    /*
    |--------------------------------------------------------------------------
    | Autoloaded Service Providers
    |--------------------------------------------------------------------------
    |
    | The service providers listed here will be automatically loaded on the
    | request to your application. Feel free to add your own services to
    | this array to grant expanded functionality to your applications.
    |
    */

    'providers' => [

        /*
         * Laravel Framework Service Providers...
         */
        Illuminate\Auth\AuthServiceProvider::class,
        Illuminate\Broadcasting\BroadcastServiceProvider::class,
        Illuminate\Bus\BusServiceProvider::class,
        Illuminate\Cache\CacheServiceProvider::class,
        Illuminate\Foundation\Providers\ConsoleSupportServiceProvider::class,
        Illuminate\Cookie\CookieServiceProvider::class,
        Illuminate\Database\DatabaseServiceProvider::class,
        Illuminate\Encryption\EncryptionServiceProvider::class,
        Illuminate\Filesystem\FilesystemServiceProvider::class,
        Illuminate\Foundation\Providers\FoundationServiceProvider::class,
        Illuminate\Hashing\HashServiceProvider::class,
        Illuminate\Mail\MailServiceProvider::class,
        Illuminate\Notifications\NotificationServiceProvider::class,
        Illuminate\Pagination\PaginationServiceProvider::class,
        Illuminate\Pipeline\PipelineServiceProvider::class,
        Illuminate\Queue\QueueServiceProvider::class,
        Illuminate\Redis\RedisServiceProvider::class,
        Illuminate\Auth\Passwords\PasswordResetServiceProvider::class,
        Illuminate\Session\SessionServiceProvider::class,
        Illuminate\Translation\TranslationServiceProvider::class,
        Illuminate\Validation\ValidationServiceProvider::class,
        Illuminate\View\ViewServiceProvider::class,

        /*
         * Package Service Providers...
         */

        /*
         * Application Service Providers...
         */
        App\Providers\AppServiceProvider::class,
        App\Providers\AuthServiceProvider::class,
        // App\Providers\BroadcastServiceProvider::class,
        App\Providers\EventServiceProvider::class,
        App\Providers\RouteServiceProvider::class,

    ],

    /*
    |--------------------------------------------------------------------------
    | Class Aliases
    |--------------------------------------------------------------------------
    |
    | This array of class aliases will be registered when this application
    | is started. However, feel free to register as many as you wish as
    | the aliases are "lazy" loaded so they don't hinder performance.
    |
    */

    'aliases' => Facade::defaultAliases()->merge([
        // 'ExampleClass' => App\Example\ExampleClass::class,
    ])->toArray(),
	
	/*
|--------------------------------------------------------------------------
| CDN LINK
|--------------------------------------------------------------------------
| By default SweetAlert2 use its local sweetalert.all.js
| file.
| However, you can use its cdn if you want.
|
*/

'cdn' => env('SWEET_ALERT_CDN'),

/*
|--------------------------------------------------------------------------
| Always load the sweetalert.all.js
|--------------------------------------------------------------------------
| There might be situations where you will always want the sweet alert
| js package to be there for you. (for eg. you might use it heavily to
| show notifications or you might want to use the native js) then this
| might be handy.
|
*/

'alwaysLoadJS' => env('SWEET_ALERT_ALWAYS_LOAD_JS', false),

/*
|--------------------------------------------------------------------------
| Never load the sweetalert.all.js
|--------------------------------------------------------------------------
| If you want to handle the sweet alert js package by yourself
| (for eg. you might want to use laravel mix) then this can be
| handy.
| If you set always load js to true & never load js to false,
| it's going to prioritize the never load js.
|
| alwaysLoadJs = true  & neverLoadJs = true  => js will not be loaded
| alwaysLoadJs = true  & neverLoadJs = false => js will be loaded
| alwaysLoadJs = false & neverLoadJs = false => js will be loaded when
| you set alert/toast by using the facade/helper functions.
*/

'neverLoadJS' => env('SWEET_ALERT_NEVER_LOAD_JS', false),

/*
|--------------------------------------------------------------------------
| AutoClose Timer
|--------------------------------------------------------------------------
|
| This is for the all Modal windows.
| For specific modal just use the autoClose() helper method.
|
*/

'timer' => env('SWEET_ALERT_TIMER', 5000),

/*
|--------------------------------------------------------------------------
| Width
|--------------------------------------------------------------------------
|
| Modal window width, including paddings (box-sizing: border-box).
| Can be in px or %.
| The default width is 32rem.
| This is for the all Modal windows.
| for particular modal just use the width() helper method.
*/

'width' => env('SWEET_ALERT_WIDTH', '32rem'),

/*
|--------------------------------------------------------------------------
| Height Auto
|--------------------------------------------------------------------------
| By default, SweetAlert2 sets html's and body's CSS height to auto !important.
| If this behavior isn't compatible with your project's layout,
| set heightAuto to false.
|
*/

'height_auto' => env('SWEET_ALERT_HEIGHT_AUTO', true),

/*
|--------------------------------------------------------------------------
| Padding
|--------------------------------------------------------------------------
|
| Modal window padding.
| Can be in px or %.
| The default padding is 1.25rem.
| This is for the all Modal windows.
| for particular modal just use the padding() helper method.
*/

'padding' => env('SWEET_ALERT_PADDING', '1.25rem'),

/*
|--------------------------------------------------------------------------
| Animation
|--------------------------------------------------------------------------
| Custom animation with [Animate.css](https://daneden.github.io/animate.css/)
| If set to false, modal CSS animation will be use default ones.
| For specific modal just use the animation() helper method.
|
*/

'animation' => [
    'enable' => env('SWEET_ALERT_ANIMATION_ENABLE', false),
],

'animatecss' => env('SWEET_ALERT_ANIMATECSS', 'https://cdn.jsdelivr.net/npm/animate.css'),

/*
|--------------------------------------------------------------------------
| ShowConfirmButton
|--------------------------------------------------------------------------
| If set to false, a "Confirm"-button will not be shown.
| It can be useful when you're using custom HTML description.
| This is for the all Modal windows.
| For specific modal just use the showConfirmButton() helper method.
|
*/

'show_confirm_button' => env('SWEET_ALERT_CONFIRM_BUTTON', true),

/*
|--------------------------------------------------------------------------
| ShowCloseButton
|--------------------------------------------------------------------------
| If set to true, a "Close"-button will be shown,
| which the user can click on to dismiss the modal.
| This is for the all Modal windows.
| For specific modal just use the showCloseButton() helper method.
|
*/

'show_close_button' => env('SWEET_ALERT_CLOSE_BUTTON', false),

/*
|--------------------------------------------------------------------------
| Toast position
|--------------------------------------------------------------------------
| Modal window or toast position, can be 'top',
| 'top-start', 'top-end', 'center', 'center-start',
| 'center-end', 'bottom', 'bottom-start', or 'bottom-end'.
| For specific modal just use the position() helper method.
|
*/

'toast_position' => env('SWEET_ALERT_TOAST_POSITION', 'top-end'),

/*
|--------------------------------------------------------------------------
| Progress Bar
|--------------------------------------------------------------------------
| If set to true, a progress bar at the bottom of a popup will be shown.
| It can be useful with toasts.
|
*/

'timer_progress_bar' => env('SWEET_ALERT_TIMER_PROGRESS_BAR', false),

/*
|--------------------------------------------------------------------------
| Middleware
|--------------------------------------------------------------------------
| Modal window or toast, config for the Middleware
|
*/

'middleware' => [

    'toast_position' => env('SWEET_ALERT_MIDDLEWARE_TOAST_POSITION', 'top-end'),

    'toast_close_button' => env('SWEET_ALERT_MIDDLEWARE_TOAST_CLOSE_BUTTON', true),

    'alert_auto_close' => env('SWEET_ALERT_MIDDLEWARE_ALERT_AUTO_CLOSE', 5000),
    'auto_display_error_messages' => env('SWEET_ALERT_AUTO_DISPLAY_ERROR_MESSAGES', false),
],

/*
|--------------------------------------------------------------------------
| Custom Class
|--------------------------------------------------------------------------
| A custom CSS class for the modal:
|
*/

'customClass' => [

    'container' => env('SWEET_ALERT_CONTAINER_CLASS'),
    'popup' => env('SWEET_ALERT_POPUP_CLASS'),
    'header' => env('SWEET_ALERT_HEADER_CLASS'),
    'title' => env('SWEET_ALERT_TITLE_CLASS'),
    'closeButton' => env('SWEET_ALERT_CLOSE_BUTTON_CLASS'),
    'icon' => env('SWEET_ALERT_ICON_CLASS'),
    'image' => env('SWEET_ALERT_IMAGE_CLASS'),
    'content' => env('SWEET_ALERT_CONTENT_CLASS'),
    'input' => env('SWEET_ALERT_INPUT_CLASS'),
    'actions' => env('SWEET_ALERT_ACTIONS_CLASS'),
    'confirmButton' => env('SWEET_ALERT_CONFIRM_BUTTON_CLASS'),
    'cancelButton' => env('SWEET_ALERT_CANCEL_BUTTON_CLASS'),
    'footer' => env('SWEET_ALERT_FOOTER_CLASS'),
],


];
