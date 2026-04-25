<x-app-layout>
    <div class="py-20 min-h-screen bg-navy-950 flex items-center justify-center">
        <div class="max-w-xl w-full px-4 sm:px-6 lg:px-8">
            <div class="bg-navy-900 border border-white/5 shadow-2xl rounded-[2rem] overflow-hidden">
                <div class="p-12">

                    {{-- Header --}}
                    <div class="flex items-start gap-6 mb-12">
                        <a href="{{ route('category.index') }}"
                            class="mt-1 text-gray-400 hover:text-white transition-colors">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
                            </svg>
                        </a>
                        <div>
                            <h1 class="text-3xl font-bold text-white tracking-tight">Add Category</h1>
                            <p class="text-gray-500 mt-1 text-lg">Create a new category for products</p>
                        </div>
                    </div>

                    {{-- Form --}}
                    <form action="{{ route('category.store') }}" method="POST">
                        @csrf

                        {{-- Name --}}
                        <div class="mb-12">
                            <label for="name" class="block text-sm font-bold text-gray-300 mb-3">
                                Category
                            </label>
                            <input type="text" id="name" name="name" value="{{ old('name') }}"
                                placeholder="e.g. Electronic"
                                class="w-full px-5 py-4 rounded-xl border border-white/10 bg-navy-950/50 text-white focus:border-brand-primary focus:ring-0 transition-all placeholder-gray-600">
                            @error('name')
                                <p class="mt-2 text-xs text-red-500">{{ $message }}</p>
                            @enderror
                        </div>

                        {{-- Actions --}}
                        <div class="flex items-center justify-end gap-5">
                            <a href="{{ route('category.index') }}"
                                class="px-10 py-4 text-white font-semibold rounded-2xl border border-white/10 hover:bg-white/5 transition-all">
                                Cancel
                            </a>
                            <button type="submit"
                                class="px-10 py-4 bg-brand-primary hover:bg-brand-secondary text-white font-bold rounded-2xl transition-all shadow-xl shadow-brand-primary/20">
                                Save Category
                            </button>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
