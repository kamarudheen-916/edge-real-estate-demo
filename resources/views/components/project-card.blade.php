@props(['image', 'tag', 'title', 'location', 'marginTop' => false])

<div class="group relative h-[600px] overflow-hidden rounded-3xl cursor-pointer reveal {{ $marginTop ? 'md:mt-16' : '' }}">
    <img src="{{ $image }}" class="w-full h-full object-cover transition-transform duration-1000 group-hover:scale-105" alt="{{ $title }}">
    <div class="absolute inset-0 bg-gradient-to-t from-brand-dark via-brand-dark/20 to-transparent opacity-80"></div>
    <div class="absolute bottom-0 left-0 p-10 w-full">
        <span class="px-3 py-1 bg-white/10 backdrop-blur-md rounded-full text-xs tracking-wider text-white border border-white/20 mb-4 inline-block uppercase">{{ $tag }}</span>
        <h3 class="text-3xl font-heading text-white mb-2 group-hover:text-brand-gold transition-colors duration-300">{{ $title }}</h3>
        <p class="text-brand-text-muted font-light mb-4">{{ $location }}</p>
        <div class="w-12 h-px bg-brand-gold transition-all duration-500 group-hover:w-full"></div>
    </div>
</div>
