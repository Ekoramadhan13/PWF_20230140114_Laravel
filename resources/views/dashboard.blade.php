<x-app-layout>
    <div class="py-12 min-h-screen">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            {{-- Welcome Area --}}
            <div class="relative overflow-hidden bg-navy-800 border border-navy-700/50 rounded-3xl p-8 mb-8 shadow-2xl">
                <div class="absolute top-0 right-0 -translate-y-12 translate-x-12 w-64 h-64 bg-brand-primary/10 rounded-full blur-3xl"></div>
                <div class="absolute bottom-0 left-0 translate-y-12 -translate-x-12 w-64 h-64 bg-brand-secondary/10 rounded-full blur-3xl"></div>
                
                <div class="relative z-10">
                    <h1 class="text-4xl font-black text-white tracking-tight">Welcome back, {{ Auth::user()->name }}! 🚀</h1>
                    <p class="text-gray-400 mt-2 text-lg">Here's what's happening with your inventory today.</p>
                </div>
            </div>

            {{-- Quick Stats --}}
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
                <div class="bg-navy-800 border border-navy-700/50 p-6 rounded-2xl shadow-lg">
                    <div class="flex items-center justify-between mb-4">
                        <div class="p-2 bg-brand-primary/10 rounded-lg">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-brand-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4" />
                            </svg>
                        </div>
                        <span class="text-xs font-bold text-gray-500 uppercase tracking-widest">Total Products</span>
                    </div>
                    <div class="text-3xl font-black text-white">124</div>
                    <div class="text-green-500 text-xs mt-1 font-bold">+12% from last month</div>
                </div>

                <div class="bg-navy-800 border border-navy-700/50 p-6 rounded-2xl shadow-lg">
                    <div class="flex items-center justify-between mb-4">
                        <div class="p-2 bg-brand-secondary/10 rounded-lg">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-brand-secondary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <span class="text-xs font-bold text-gray-500 uppercase tracking-widest">Revenue</span>
                    </div>
                    <div class="text-3xl font-black text-white">Rp 48.5M</div>
                    <div class="text-brand-secondary text-xs mt-1 font-bold">Stable performance</div>
                </div>

                <div class="bg-navy-800 border border-navy-700/50 p-6 rounded-2xl shadow-lg">
                    <div class="flex items-center justify-between mb-4">
                        <div class="p-2 bg-red-500/10 rounded-lg">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-red-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                            </svg>
                        </div>
                        <span class="text-xs font-bold text-gray-500 uppercase tracking-widest">Low Stock</span>
                    </div>
                    <div class="text-3xl font-black text-white">8 Items</div>
                    <div class="text-red-500 text-xs mt-1 font-bold">Requires attention</div>
                </div>
            </div>

            {{-- Activity area --}}
            <div class="bg-navy-800 border border-navy-700/50 rounded-2xl shadow-xl overflow-hidden">
                <div class="p-6 border-b border-navy-700/50">
                    <h2 class="text-xl font-bold text-white">Recent Activities</h2>
                </div>
                <div class="p-6">
                    <p class="text-gray-400">You're all caught up! No urgent notifications.</p>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>
