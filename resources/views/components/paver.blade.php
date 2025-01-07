@props([
    'content' => [],
    'config' => [],
    'locale' => app()->getLocale(),
    'blocks' => []
])

@php
$paver = app(Jeffreyvr\Paver\Paver::class);

$paver->locale = $locale;

foreach ($blocks as $block) {
    $paver->registerBlock($block);
}

@endphp

{!! $paver->render($content, $config) !!}
