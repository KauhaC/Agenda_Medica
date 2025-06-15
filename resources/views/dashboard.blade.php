<x-layouts.app :title="__('Dashboard')">
    <div class="flex h-full w-full flex-1 flex-col gap-4 rounded-xl">
        <div class="grid auto-rows-min gap-4 md:grid-cols-2 lg:grid-cols-4">
            {{-- Card: Médicos --}}
            <a href="{{ route('medicos.index') }}"
               class="relative aspect-video overflow-hidden rounded-xl border border-neutral-200 bg-white p-6 shadow-md transition hover:scale-[1.02] hover:shadow-lg dark:border-neutral-700 dark:bg-neutral-800">
                <div class="flex h-full w-full flex-col justify-between">
                    <div class="text-xl font-semibold text-neutral-900 dark:text-white">
                        👨‍⚕️ Médicos
                    </div>
                    <div class="text-sm text-neutral-600 dark:text-neutral-300">
                        Gerencie os médicos cadastrados
                    </div>
                </div>
            </a>

            {{-- Card: Plantões --}}
            <a href="{{ route('plantoes.index') }}"
               class="relative aspect-video overflow-hidden rounded-xl border border-neutral-200 bg-white p-6 shadow-md transition hover:scale-[1.02] hover:shadow-lg dark:border-neutral-700 dark:bg-neutral-800">
                <div class="flex h-full w-full flex-col justify-between">
                    <div class="text-xl font-semibold text-neutral-900 dark:text-white">
                        🩺 Plantões
                    </div>
                    <div class="text-sm text-neutral-600 dark:text-neutral-300">
                        Controle os plantões disponíveis
                    </div>
                </div>
            </a>

            {{-- Card: Escalas --}}
            <a href="{{ route('escalas.index') }}"
               class="relative aspect-video overflow-hidden rounded-xl border border-neutral-200 bg-white p-6 shadow-md transition hover:scale-[1.02] hover:shadow-lg dark:border-neutral-700 dark:bg-neutral-800">
                <div class="flex h-full w-full flex-col justify-between">
                    <div class="text-xl font-semibold text-neutral-900 dark:text-white">
                        📅 Escalas
                    </div>
                    <div class="text-sm text-neutral-600 dark:text-neutral-300">
                        Acompanhe as escalas de trabalho
                    </div>
                </div>
            </a>

            {{-- Card: Horas Trabalhadas --}}
            <a href="{{ route('controle_horas.index') }}"
               class="relative aspect-video overflow-hidden rounded-xl border border-neutral-200 bg-white p-6 shadow-md transition hover:scale-[1.02] hover:shadow-lg dark:border-neutral-700 dark:bg-neutral-800">
                <div class="flex h-full w-full flex-col justify-between">
                    <div class="text-xl font-semibold text-neutral-900 dark:text-white">
                        ⏱️ Horas Trabalhadas
                    </div>
                    <div class="text-sm text-neutral-600 dark:text-neutral-300">
                        Registre e consulte as horas
                    </div>
                </div>
            </a>
        </div>

       
        <div class="relative h-[350px] overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700">
            <img src="{{ asset('images/hospital.jpg') }}" alt="Imagem de hospital"
            class="w-full h-full object-cover" />
        </div>


    </div>
</x-layouts.app>
