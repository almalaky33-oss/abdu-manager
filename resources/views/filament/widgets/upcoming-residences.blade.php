<x-filament-widgets::widget>

    <x-filament::section>

        <x-slot name="heading">
            📋 أقرب الإقامات انتهاءً
        </x-slot>

        <div>

            {{-- رؤوس الأعمدة --}}
            <div class="grid grid-cols-2 items-center px-5 pb-3 text-sm font-semibold tracking-wide text-slate-500">

                <div class="justify-self-end">
                    👤 الموظف
                </div>

                <div class="text-center">
                    📅 تاريخ الانتهاء
                </div>

            </div>

            <div class="divide-y divide-slate-800">

                @forelse($employees as $employee)

                    @php
                        $days = now()->startOfDay()->diffInDays($employee->residence_expiry, false);

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
                        href="{{ route('filament.admin.resources.employees.edit', $employee) }}"
                        class="group grid grid-cols-2 items-center rounded-xl px-5 py-1 transition hover:bg-slate-800/60">

                        {{-- الموظف --}}
                        <div class="flex items-center justify-self-end gap-2.5">

                            <div class="flex h-9 w-9 items-center justify-center rounded-full bg-amber-500/15 ring-1 ring-amber-500/20">
                                <x-heroicon-o-user class="h-4 w-4 text-amber-400"/>
                            </div>

                            <div class="flex items-center gap-8">

                                <div class="font-semibold text-white group-hover:text-amber-300 transition">
                                    {{ $employee->name }}
                                </div>

                                <x-filament::badge :color="$badge">
                                    {{ $text }}
                                </x-filament::badge>

                            </div>

                        </div>

                        {{-- التاريخ --}}
                        <div class="text-center">

                            <div class="text-sm font-semibold text-slate-200">
                                {{ \Carbon\Carbon::parse($employee->residence_expiry)->translatedFormat('d F Y') }}
                            </div>

                        </div>

                    </a>

                @empty

                    <div class="py-8 text-center text-slate-500">
                        لا توجد بيانات.
                    </div>

                @endforelse

            </div>

        </div>

    </x-filament::section>

</x-filament-widgets::widget>
