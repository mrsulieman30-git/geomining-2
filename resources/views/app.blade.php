<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="{{ app()->getLocale() === 'ar' ? 'rtl' : 'ltr' }}">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <title inertia>{{ config('app.name', 'Mining System') }}</title>
    @vite('resources/js/app.ts')
    @inertiaHead
  </head>
  <body class="font-sans antialiased text-gray-900 bg-gray-50 dark:bg-slate-900 dark:text-gray-100">
    @inertia
  </body>
</html>
