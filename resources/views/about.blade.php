<x-app-layout>
    <div class="py-12 min-h-screen">
        <div class="max-w-2xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <div class="relative group">
                {{-- Decorative background glow --}}
                <div class="absolute -inset-1 bg-gradient-to-r from-brand-primary to-brand-secondary rounded-3xl blur opacity-25 group-hover:opacity-40 transition duration-1000 group-hover:duration-200"></div>
                
                <div class="relative bg-navy-800 border border-navy-700/50 rounded-3xl overflow-hidden shadow-2xl">
                    
                    {{-- Profile Header --}}
                    <div class="h-40 bg-navy-900 relative">
                        <div class="absolute inset-0 bg-gradient-to-br from-brand-primary/20 to-transparent"></div>
                        <div class="absolute -bottom-16 left-8">
                            <div class="w-32 h-32 rounded-2xl bg-navy-800 p-1 shadow-2xl border border-navy-700/50">
                                <div class="w-full h-full rounded-xl bg-gradient-to-br from-brand-primary to-brand-secondary flex items-center justify-center text-white text-4xl font-black">
                                    ER
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="pt-20 px-10 pb-12">
                        <div class="flex justify-between items-start mb-8">
                            <div>
                                <h1 class="text-3xl font-black text-white tracking-tight">Eko Ramadhan Nugroho</h1>
                                <p class="text-brand-primary font-bold mt-1 text-lg">Teknologi Informasi</p>
                            </div>
                            <div class="px-4 py-1.5 bg-navy-900/50 border border-navy-700/50 rounded-full text-xs font-bold text-gray-400">
                                NIM: 20230140114
                            </div>
                        </div>

                        <div class="grid grid-cols-1 gap-6">
                            <div class="p-5 bg-navy-900/30 border border-navy-700/30 rounded-2xl">
                                <h3 class="text-xs font-bold text-gray-500 uppercase tracking-widest mb-3">About Me</h3>
                                <p class="text-gray-300 leading-relaxed">
                                    I am a student at the Information Technology department, focusing on creating efficient and beautiful digital solutions. 
                                    I have a passion for technology and enjoy exploring new ways to solve complex problems through code.
                                </p>
                            </div>

                            <div class="flex items-center gap-4">
                                <div class="flex-1 p-5 bg-navy-900/30 border border-navy-700/30 rounded-2xl">
                                    <h3 class="text-xs font-bold text-gray-500 uppercase tracking-widest mb-2">Hobby</h3>
                                    <div class="flex items-center gap-2 text-white font-bold">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-brand-secondary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z" />
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                        Fishing 🎣
                                    </div>
                                </div>
                                <div class="flex items-center gap-3">
                                    <button class="p-4 bg-navy-900/50 border border-navy-700/50 rounded-2xl text-gray-400 hover:text-white transition-all"><svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/></svg></button>
                                    <button class="p-4 bg-navy-900/50 border border-navy-700/50 rounded-2xl text-gray-400 hover:text-white transition-all"><svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M12 0c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm-2 16h-2v-6h2v6zm-1-6.891c-.607 0-1.1-.493-1.1-1.1s.493-1.1 1.1-1.1 1.1.493 1.1 1.1-.493 1.1-1.1 1.1zm9 6.891h-2v-3.868c0-2.135-2.507-1.977-2.507 0v3.868h-2v-6h2v1.061c.911-1.687 4.507-1.812 4.507 1.557v3.382z"/></svg></button>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>