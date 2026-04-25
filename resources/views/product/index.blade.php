<x-app-layout>
    <div class="py-12 min-h-screen bg-navy-950">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            {{-- Header Area --}}
            <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-6 mb-10">
                <div>
                    <h1 class="text-3xl font-bold text-white tracking-tight">Product Inventory</h1>
                    <p class="text-gray-500 mt-1">Manage and track your assets in real-time.</p>
                </div>

                <a href="{{ route('product.create') }}"
                    class="inline-flex items-center gap-2 px-6 py-3.5 bg-brand-primary hover:bg-brand-secondary text-white text-sm font-bold rounded-xl transition-all shadow-xl shadow-brand-primary/20 hover:scale-[1.02] active:scale-[0.98]">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M12 4v16m8-8H4" />
                    </svg>
                    New Product
                </a>
            </div>

            {{-- Flash Message --}}
            @if (session('success'))
                <div class="mb-8 px-6 py-4 bg-green-500/10 border border-green-500/20 text-green-400 rounded-2xl text-sm flex items-center gap-4 animate-fade-in">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                    </svg>
                    <span class="font-semibold">{{ session('success') }}</span>
                </div>
            @endif

            {{-- Table Container --}}
            <div class="bg-navy-900 border border-white/5 shadow-2xl rounded-3xl overflow-hidden">
                <div class="overflow-x-auto">
                    <table class="min-w-full divide-y divide-white/5">
                        <thead class="bg-white/5">
                            <tr>
                                <th class="px-8 py-5 text-left text-xs font-bold text-gray-500 uppercase tracking-widest">#</th>
                                <th class="px-8 py-5 text-left text-xs font-bold text-gray-500 uppercase tracking-widest">Product</th>
                                <th class="px-8 py-5 text-left text-xs font-bold text-gray-500 uppercase tracking-widest">Stock</th>
                                <th class="px-8 py-5 text-left text-xs font-bold text-gray-500 uppercase tracking-widest">Price</th>
                                <th class="px-8 py-5 text-left text-xs font-bold text-gray-500 uppercase tracking-widest">Category</th>
                                <th class="px-8 py-5 text-left text-xs font-bold text-gray-500 uppercase tracking-widest">Owner</th>
                                <th class="px-8 py-5 text-right text-xs font-bold text-gray-500 uppercase tracking-widest">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-white/5">
                            @forelse ($products as $product)
                                <tr class="group hover:bg-white/[0.02] transition-colors">
                                    <td class="px-8 py-6 text-sm text-gray-500 font-mono">
                                        {{ sprintf('%02d', $loop->iteration) }}
                                    </td>
                                    <td class="px-8 py-6">
                                        <div class="text-sm font-bold text-white group-hover:text-brand-primary transition-colors">
                                            {{ $product->name }}
                                        </div>
                                    </td>
                                    <td class="px-8 py-6">
                                        @php
                                            $stockLevel = $product->qty > 10 ? 'high' : 'low';
                                            $badgeClasses = $stockLevel === 'high' 
                                                ? 'text-green-400 bg-green-400/10' 
                                                : 'text-red-400 bg-red-400/10';
                                        @endphp
                                        <span class="inline-flex items-center px-3 py-1 rounded-lg text-xs font-bold {{ $badgeClasses }}">
                                            {{ $product->qty }} units
                                        </span>
                                    </td>
                                    <td class="px-8 py-6 text-sm text-gray-300 font-mono font-bold">
                                        Rp {{ number_format($product->price, 0, ',', '.') }}
                                    </td>
                                    <td class="px-8 py-6">
                                        <span class="text-sm text-gray-400 font-medium bg-white/5 px-2 py-1 rounded-md">
                                            {{ $product->category->name ?? 'Uncategorized' }}
                                        </span>
                                    </td>
                                    <td class="px-8 py-6">
                                        <div class="flex items-center gap-2">
                                            <div class="w-6 h-6 rounded-full bg-navy-800 flex items-center justify-center text-[10px] font-bold text-gray-400 border border-white/10 uppercase">
                                                {{ substr($product->user->name ?? '?', 0, 1) }}
                                            </div>
                                            <span class="text-sm text-gray-400 font-medium">{{ $product->user->name ?? 'Unknown' }}</span>
                                        </div>
                                    </td>
                                    <td class="px-8 py-6 text-right">
                                        <div class="flex items-center justify-end gap-3">
                                            {{-- Always show View for everyone --}}
                                            <a href="{{ route('product.show', $product->id) }}"
                                                class="p-2 rounded-xl bg-white/5 text-gray-400 hover:text-white hover:bg-brand-primary transition-all"
                                                title="View Detail">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                                </svg>
                                            </a>

                                            {{-- Edit based on policy --}}
                                            @can('update', $product)
                                                <a href="{{ route('product.edit', $product) }}"
                                                    class="p-2 rounded-xl bg-white/5 text-gray-400 hover:text-white hover:bg-yellow-500/20 transition-all">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                                    </svg>
                                                </a>
                                            @endcan

                                            {{-- Delete based on policy --}}
                                            @can('delete', $product)
                                                <form action="{{ route('product.delete', $product->id) }}" method="POST"
                                                    onsubmit="return confirm('Silahkan konfirmasi penghapusan produk ini')">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit"
                                                        class="p-2 rounded-xl bg-white/5 text-gray-400 hover:text-red-500 hover:bg-red-500/10 transition-all">
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                        </svg>
                                                    </button>
                                                </form>
                                            @endcan
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="6" class="px-8 py-32 text-center text-gray-500">
                                        <div class="flex flex-col items-center">
                                            <div class="p-6 bg-white/5 rounded-full mb-6">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4" />
                                                </svg>
                                            </div>
                                            <p class="text-xl font-bold text-white mb-2">No Products Yet</p>
                                            <p class="mb-8">Start your inventory by adding a new item.</p>
                                            <a href="{{ route('product.create') }}" class="text-brand-primary font-bold hover:underline">Add First Product</a>
                                        </div>
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>

                {{-- Pagination --}}
                @if ($products->hasPages())
                    <div class="p-8 bg-white/[0.02] border-t border-white/5">
                        {{ $products->links() }}
                    </div>
                @endif
            </div>

        </div>
    </div>
</x-app-layout>
t>