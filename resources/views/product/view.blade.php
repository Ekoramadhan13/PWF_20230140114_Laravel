<x-app-layout>
    <div class="py-20 min-h-screen bg-navy-950 flex justify-center px-4">
        <div class="max-w-4xl w-full">
            
            {{-- Navigation Back --}}
            <div class="mb-10">
                <a href="{{ route('product.index') }}" class="inline-flex items-center gap-2 text-gray-500 hover:text-white transition-colors group">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 group-hover:-translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                    </svg>
                    <span class="font-bold tracking-tight">Back to Inventory</span>
                </a>
            </div>

            <div class="bg-navy-900 border border-white/5 shadow-2xl rounded-[2.5rem] overflow-hidden">
                {{-- Detail Banner --}}
                <div class="h-48 bg-navy-800 relative">
                    <div class="absolute inset-0 bg-gradient-to-br from-brand-primary/20 to-transparent"></div>
                    <div class="absolute bottom-10 left-12">
                        <h1 class="text-4xl font-black text-white tracking-tighter">{{ $product->name }}</h1>
                        <p class="text-gray-400 mt-2 font-medium">Product Detailed Specifications</p>
                    </div>
                </div>

                <div class="p-12">
                    {{-- Stats Grid --}}
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-12">
                        {{-- Stock Card --}}
                        <div class="p-8 bg-navy-950/50 border border-white/5 rounded-3xl group hover:border-brand-primary transition-all">
                            <div class="flex items-center justify-between mb-6">
                                <span class="text-xs font-black text-gray-500 uppercase tracking-widest">Available Stock</span>
                                <div class="p-2 bg-brand-primary/10 rounded-xl">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-brand-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4" />
                                    </svg>
                                </div>
                            </div>
                            <div class="text-4xl font-black text-white">{{ $product->qty }} <span class="text-sm font-bold text-gray-500 uppercase">Units</span></div>
                        </div>

                        {{-- Price Card --}}
                        <div class="p-8 bg-navy-950/50 border border-white/5 rounded-3xl group hover:border-green-500 transition-all">
                            <div class="flex items-center justify-between mb-6">
                                <span class="text-xs font-black text-gray-500 uppercase tracking-widest">Market Price</span>
                                <div class="p-2 bg-green-500/10 rounded-xl">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-green-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                </div>
                            </div>
                            <div class="text-4xl font-black text-white">Rp {{ number_format($product->price, 0, ',', '.') }}</div>
                        </div>
                    </div>

                    {{-- Information Section --}}
                    <div class="space-y-8 mb-12">
                        <div class="pb-6 border-b border-white/5">
                            <h3 class="text-sm font-black text-gray-500 uppercase tracking-widest mb-4">Ownership Information</h3>
                            <div class="flex items-center gap-4">
                                <div class="w-12 h-12 rounded-2xl bg-brand-primary flex items-center justify-center text-white text-xl font-black">
                                    {{ substr($product->user->name ?? '?', 0, 1) }}
                                </div>
                                <div class="flex-1">
                                    <p class="text-white font-bold leading-none">{{ $product->user->name ?? 'System Admin' }}</p>
                                    <p class="text-gray-500 text-sm mt-1 uppercase font-bold tracking-tighter">{{ $product->user->role ?? 'Staff' }}</p>
                                </div>
                            </div>
                        </div>

                        <div class="pb-6 border-b border-white/5">
                            <h3 class="text-sm font-black text-gray-500 uppercase tracking-widest mb-4">Category Details</h3>
                            <div class="flex items-center gap-4">
                                <div class="w-12 h-12 rounded-2xl bg-navy-800 flex items-center justify-center text-brand-primary text-xl font-black border border-white/5">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z" />
                                    </svg>
                                </div>
                                <div class="flex-1">
                                    <p class="text-white font-bold leading-none">{{ $product->category->name ?? 'Uncategorized' }}</p>
                                    <p class="text-gray-500 text-sm mt-1 uppercase font-bold tracking-tighter">Product Classification</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Footer Actions --}}
                    <div class="flex items-center justify-between pt-8 border-t border-white/5">
                        <p class="text-gray-600 text-xs font-bold uppercase tracking-widest">Modified at: {{ $product->updated_at->format('M d, Y') }}</p>
                        
                        <div class="flex gap-4">
                            @can('update', $product)
                                <a href="{{ route('product.edit', $product) }}" 
                                    class="px-8 py-3 bg-white/5 border border-white/10 text-white font-bold rounded-2xl hover:bg-brand-primary transition-all">
                                    Edit Information
                                </a>
                            @endcan

                            @can('delete', $product)
                                <form action="{{ route('product.delete', $product->id) }}" method="POST" onsubmit="return confirm('Silahkan konfirmasi penghapusan produk ini')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="px-8 py-3 bg-red-500/10 border border-red-500/20 text-red-500 font-bold rounded-2xl hover:bg-red-500 hover:text-white transition-all">
                                        Remove Product
                                    </button>
                                </form>
                            @endcan
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
ayout>