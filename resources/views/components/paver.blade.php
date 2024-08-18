@props([
    'content' => [],
    'config' => []
])

{!! app(Jeffreyvr\Paver\Paver::class)->render($content, $config) !!}
