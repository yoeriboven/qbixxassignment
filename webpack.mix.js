const mix = require('laravel-mix')

mix.disableNotifications()
mix.vue()

if (mix.inProduction()) {
    mix.version()
}

mix.js('resources/js/app.js', 'public/js')

mix.postCss('resources/css/app.css', 'public/css', [
    require('tailwindcss'),
])
