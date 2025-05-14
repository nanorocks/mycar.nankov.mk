<!-- filepath: resources/views/components/menu-item.blade.php -->
<li class="group">
    <a href="{{ $route }}" class="flex items-center gap-2" @if ($submenu) onclick="toggleSubMenu(event, '{{ $submenu }}')" @endif>
        {!! $icon !!}
        {{ $label }}
    </a>
    @if ($submenu)
        <ul id="{{ $submenu }}" class="hidden bg-base-200 p-2 rounded shadow-none transition-all duration-300 ease-in-out">
            {{ $slot }}
        </ul>
    @endif
</li>
