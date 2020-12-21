<div>
    <h3 class="mt-4 font-bold text-red-700">
        {{ $slot }}
    </h3>

    <ul>
        @foreach($items as $item)
            <li class="hover:text-yellow-500">
                <a href="{{ $item->path }}">
                    {{ $item->name }}
                </a>
            </li>
        @endforeach
    </ul>
</div>
