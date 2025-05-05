@php
    $breadcrumbs = $breadcrumbs ?? [
        ['title' => 'Home', 'url' => url('/')],
        ['title' => ucfirst(request()->segment(count(request()->segments()))), 'url' => '']
    ];
@endphp

<nav class="bg-gray-100 py-3 px-5 rounded mb-4" aria-label="Breadcrumb">
    <ol class="list-reset flex text-gray-700">
        @foreach ($breadcrumbs as $index => $breadcrumb)
            @if ($breadcrumb['url'] && $index < count($breadcrumbs) - 1)
                <li>
                    <a href="{{ $breadcrumb['url'] }}" class="text-blue-600 hover:underline">
                        {{ $breadcrumb['title'] }}
                    </a>
                    <span class="mx-2">/</span>
                </li>
            @else
                <li class="font-semibold" aria-current="page">{{ $breadcrumb['title'] }}</li>
            @endif
        @endforeach
    </ol>
</nav>
