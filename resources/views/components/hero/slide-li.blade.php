@props(['active'])


<li
    class="bg-gradient-to-r from-purple-400 via-blue-400 to-pink-400 text-transparent bg-clip-text bg-300% animate-gradient">
    <a {{ $attributes->merge(['class' => '']) }}>
        {{ $slot }}
    </a>
</li>
