@props([
    'content' => [],
    'config' => [],
    'locale' => app()->getLocale()
])

@php
$paver = app(Jeffreyvr\Paver\Paver::class);

$paver->locale = $locale;

if(array_key_exists('blocks', $config)) {
    foreach ($config['blocks'] as $block)
    {
        try {
            $paver->registerBlock($block);
        } catch (\Throwable $th) {
            throw new \Exception("Block {$block} cannot be added.");
        }
    }
}

@endphp

{!! $paver->render($content, $config) !!}
