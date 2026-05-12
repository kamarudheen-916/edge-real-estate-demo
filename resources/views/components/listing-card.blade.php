@props(['image', 'price', 'title', 'location', 'beds', 'baths', 'sqft', 'agentImage', 'agentName', 'agentRole', 'delay' => false])

<div class="bg-brand-dark border border-brand-border rounded-3xl hover:border-brand-gold/30 transition-all duration-500 group reveal {{ $delay ? 'delay-100' : '' }}">
    <div class="relative h-[400px] overflow-hidden rounded-t-3xl">
        <img src="{{ $image }}" class="w-full h-full object-cover transition-transform duration-1000 group-hover:scale-105" alt="{{ $title }}">
        <div class="absolute top-6 left-6 bg-brand-dark/80 backdrop-blur px-4 py-2 rounded-full text-white font-medium text-sm tracking-wider border border-white/10">
            AED {{ number_format($price) }}
        </div>
    </div>
    <div class="p-8">
        <div class="flex justify-between items-start mb-6">
            <div>
                <h3 class="text-2xl font-heading text-white mb-2">{{ $title }}</h3>
                <p class="text-brand-text-muted font-light flex items-center">
                    <svg class="w-4 h-4 mr-2 text-brand-gold" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                    {{ $location }}
                </p>
            </div>
        </div>
        
        <div class="flex space-x-8 border-y border-brand-border py-4 mb-6">
            <div class="text-center">
                <span class="block text-white font-heading text-xl">{{ $beds }}</span>
                <span class="text-xs text-brand-text-muted tracking-wider uppercase">Beds</span>
            </div>
            <div class="text-center">
                <span class="block text-white font-heading text-xl">{{ $baths }}</span>
                <span class="text-xs text-brand-text-muted tracking-wider uppercase">Baths</span>
            </div>
            <div class="text-center">
                <span class="block text-white font-heading text-xl">{{ number_format($sqft) }}</span>
                <span class="text-xs text-brand-text-muted tracking-wider uppercase">Sq Ft</span>
            </div>
        </div>

        <div class="flex items-center justify-between">
            <div class="flex items-center space-x-4">
                <img src="{{ $agentImage }}" class="w-12 h-12 rounded-full object-cover border border-brand-gold/30" alt="Agent">
                <div>
                    <p class="text-white text-sm font-medium">{{ $agentName }}</p>
                    <p class="text-xs text-brand-text-muted">{{ $agentRole }}</p>
                </div>
            </div>
            <div class="flex space-x-3">
                <button class="w-10 h-10 rounded-full border border-brand-border flex items-center justify-center text-white hover:border-brand-gold hover:text-brand-gold transition-colors">
                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M12.012 2c-5.506 0-9.989 4.478-9.99 9.984a9.964 9.964 0 001.533 5.303l-1.545 5.64 5.773-1.514a10.012 10.012 0 004.23.936h.002c5.505 0 9.988-4.478 9.989-9.984 0-5.504-4.484-9.985-9.992-9.985M17.26 14.322c-.288-.144-1.704-.842-1.967-.938-.264-.096-.455-.144-.647.144-.191.288-.742.938-.91 1.13-.167.192-.334.216-.622.072-1.222-.613-2.316-1.393-3.23-2.31-.796-.799-1.385-1.745-1.737-2.775-.05-.145-.008-.27.067-.367.098-.126.241-.295.361-.444.121-.149.16-.255.241-.426.08-.171.04-.321-.02-.465-.06-.144-.647-1.56-.886-2.136-.233-.561-.469-.485-.647-.494h-.551c-.192 0-.503.072-.767.361-.264.288-1.006.985-1.006 2.404 0 1.419 1.03 2.791 1.174 2.983.143.192 2.034 3.107 4.93 4.298.692.285 1.23.455 1.65.583.694.21 1.325.18 1.821.11.558-.08 1.704-.696 1.944-1.368.24-.672.24-1.248.168-1.368-.073-.12-.265-.192-.553-.336"/></svg>
                </button>
                <button class="bg-brand-gold text-brand-dark px-6 py-2 rounded-full text-sm font-medium tracking-widest hover:bg-brand-gold-soft transition-colors">
                    DETAILS
                </button>
            </div>
        </div>
    </div>
</div>
