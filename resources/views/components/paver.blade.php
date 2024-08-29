@props([
    'content' => [],
    'config' => [],
    'locale' => app()->getLocale()
])

@php
$paver = app(Jeffreyvr\Paver\Paver::class);

$paver->locale = $locale;
@endphp

{!! $paver->render($content, $config) !!}
