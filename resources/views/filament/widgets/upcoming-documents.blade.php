<x-filament-widgets::widget>

    <x-filament::section>

        <x-slot name="heading">
            📄 أقرب الوثائق انتهاءً
        </x-slot>

        <div>

            {{-- رؤوس الأعمدة --}}
            <div class="grid grid-cols-2 items-center px-4 pb-3 text-xs font-semibold uppercase tracking-wide text-slate-500">

                <div class="justify-self-end">
                    📄 الوثيقة
                </div>

                <div class="text-center">
                    📅 تاريخ الانتهاء
                </div>

            </div>

            <div class="divide-y divide-slate-800">

                @forelse($documents as $document)

                    @php
                        $days = now()->startOfDay()->diffInDays($document->expiry_date, false);

                        if ($days < 0) {
                            $badge = 'danger';
                            $text = 'منتهية';
                        } elseif ($days <= 30) {
                            $badge = 'warning';
                            $text = $days . ' يوم';
                        } else {
                            $badge = 'success';
                            $text = $days . ' يوم';
                        }
                    @endphp

                    <a
                        href="{{ route('filament.admin.resources.documents.edit', $document) }}"
                        class="group grid grid-cols-2 items-center rounded-xl px-4 py-1.5 transition hover:bg-slate-800/60">

                        {{-- الوثيقة --}}
                        <div class="flex items-center justify-self-end gap-3">

                            <div class="flex h-9 w-9 shrink-0 items-center justify-center rounded-full bg-emerald-500/15 ring-1 ring-emerald-500/20">
                                <x-heroicon-o-document-text class="h-4 w-4 text-emerald-400"/>
                            </div>

                            <div class="flex items-center gap-8">

                                <div class="font-semibold text-white group-hover:text-emerald-400 transition">
                                    {{ $document->name }}
                                </div>

                                <x-filament::badge :color="$badge">
                                    {{ $text }}
                                </x-filament::badge>

                            </div>

                        </div>

                        {{-- التاريخ --}}
                        <div class="text-center">

                            <div class="text-sm font-semibold text-slate-200">
                                {{ \Carbon\Carbon::parse($document->expiry_date)->translatedFormat('d F Y') }}
                            </div>

                        </div>

                    </a>

                @empty

                    <div class="py-8 text-center text-slate-500">
                        لا توجد وثائق.
                    </div>

                @endforelse

            </div>

        </div>

    </x-filament::section>

</x-filament-widgets::widget>
