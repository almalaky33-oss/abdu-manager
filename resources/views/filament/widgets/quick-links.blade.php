<x-filament-widgets::widget>

    <div class="grid grid-cols-1 xl:grid-cols-2 gap-8">

        {{-- العمال --}}
        <a href="{{ route('filament.admin.resources.employees.index') }}"
           class="group relative overflow-hidden rounded-3xl h-[220px]
                  bg-gradient-to-br from-amber-400 via-amber-500 to-orange-500
                  shadow-xl transition-all duration-500
                  hover:-translate-y-2 hover:shadow-amber-500/30">

            {{-- زخارف --}}
            <div class="absolute -top-16 -left-16 w-56 h-56 rounded-full bg-white/10"></div>
            <div class="absolute -bottom-20 -right-20 w-72 h-72 rounded-full bg-black/10"></div>

            <div class="relative h-full flex items-center justify-between px-10">

                {{-- النص --}}
                <div class="text-white max-w-md">

                    <h2 class="text-4xl font-bold mb-3">
                        العمال
                    </h2>

                    <p class="text-white/90 leading-7">
                        إدارة بيانات العمال والجوازات والإقامات والإجازات.
                    </p>

                    <div
                        class="mt-8 inline-flex items-center gap-3
                               rounded-2xl bg-white text-amber-700
                               px-6 py-3 font-bold
                               shadow-lg transition-all duration-300
                               group-hover:scale-105">

                        فتح القائمة

                        <span class="text-xl">→</span>

                    </div>

                </div>

                {{-- الأيقونة --}}
                <div
                    class="flex items-center justify-center
                           w-32 h-32 rounded-full
                           bg-white/15 backdrop-blur-sm
                           border border-white/20
                           shadow-2xl
                           transition-all duration-500
                           group-hover:scale-110 group-hover:rotate-6">

                    <x-heroicon-o-users class="w-16 h-16 text-white"/>

                </div>

            </div>

        </a>

        {{-- الوثائق --}}
        <a href="{{ route('filament.admin.resources.documents.index') }}"
           class="group relative overflow-hidden rounded-3xl h-[220px]
                  bg-gradient-to-br from-emerald-400 via-emerald-500 to-teal-500
                  shadow-xl transition-all duration-500
                  hover:-translate-y-2 hover:shadow-emerald-500/30">

            <div class="absolute -top-16 -left-16 w-56 h-56 rounded-full bg-white/10"></div>
            <div class="absolute -bottom-20 -right-20 w-72 h-72 rounded-full bg-black/10"></div>

            <div class="relative h-full flex items-center justify-between px-10">

                <div class="text-white max-w-md">

                    <h2 class="text-4xl font-bold mb-3">
                        الوثائق
                    </h2>

                    <p class="text-white/90 leading-7">
                        إدارة جميع الوثائق والمرفقات والتنبيهات الخاصة بها.
                    </p>

                    <div
                        class="mt-8 inline-flex items-center gap-3
                               rounded-2xl bg-white text-emerald-700
                               px-6 py-3 font-bold
                               shadow-lg transition-all duration-300
                               group-hover:scale-105">

                        فتح القائمة

                        <span class="text-xl">→</span>

                    </div>

                </div>

                <div
                    class="flex items-center justify-center
                           w-32 h-32 rounded-full
                           bg-white/15 backdrop-blur-sm
                           border border-white/20
                           shadow-2xl
                           transition-all duration-500
                           group-hover:scale-110 group-hover:rotate-6">

                    <x-heroicon-o-document-text class="w-16 h-16 text-white"/>

                </div>

            </div>

        </a>

    </div>

</x-filament-widgets::widget>
