@props([
    'backgroundUrl' => '',
    'title' => '',
    'href' => '',
])

<div>
    <div class="w-64 bg-contain py-8" style="background-image: url('{{ $backgroundUrl }}')">

    </div>
    <a href="{{ $href }}" class="font-bold">
        {{ $title }}
    </a>
</div>
