<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
    <head>
        @include('partials.head')
    </head>
    <body class="min-h-screen bg-white dark:bg-zinc-800">
        <flux:sidebar sticky stashable class="border-r border-zinc-200 bg-zinc-50 dark:border-zinc-700 dark:bg-zinc-900">
            <flux:sidebar.toggle class="lg:hidden" icon="x-mark" />

            <a href="{{ route('dashboard') }}" class="mr-5 flex items-center space-x-2" wire:navigate>
                <x-app-logo />
            </a>

            <flux:navlist variant="outline">

    <flux:navlist.item
    :href="route('dashboard')"
    :current="request()->routeIs('dashboard')"
    wire:navigate
>
    <div class="flex items-center gap-2">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 21v-8.25M15.75 21v-8.25M8.25 21v-8.25M3 9l9-6 9 6m-1.5 12V10.332A48.36 48.36 0 0 0 12 9.75c-2.551 0-5.056.2-7.5.582V21M3 21h18M12 6.75h.008v.008H12V6.75Z" />
        </svg>
        {{ __('Dashboard') }}
    </div>
    </flux:navlist.item>

    <flux:navlist.group
        heading="Médicos"
        expandable
        :expanded="request()->routeIs('medicos.*')"
        class="mt-4">

        <flux:navlist.item
            icon="home"
            :href="route('medicos.index')"
            :current="request()->routeIs('medicos.index')"
            wire:navigate
        >
            {{ __('Listar') }}
        </flux:navlist.item>

        <flux:navlist.item
            icon="home"
            :href="route('medicos.create')"
            :current="request()->routeIs('medicos.create')"
            wire:navigate
        >
            {{ __('Novo') }}
        </flux:navlist.item>
    </flux:navlist.group>

    <flux:navlist.group
        heading="Plantões"
        expandable
        :expanded="request()->routeIs('plantoes.*')"
        class="mt-4">

        <flux:navlist.item
            icon="home"
            :href="route('plantoes.index')"
            :current="request()->routeIs('plantoes.index')"
            wire:navigate
        >
            {{ __('Listar') }}
        </flux:navlist.item>

        <flux:navlist.item
            icon="home"
            :href="route('plantoes.create')"
            :current="request()->routeIs('plantoes.create')"
            wire:navigate
        >
            {{ __('Novo') }}
        </flux:navlist.item>
    </flux:navlist.group>

    <flux:navlist.group
        heading="Escalas"
        expandable
        :expanded="request()->routeIs('escalas.*')"
        class="mt-4">

        <flux:navlist.item
            icon="home"
            :href="route('escalas.index')"
            :current="request()->routeIs('escalas.index')"
            wire:navigate
        >
            {{ __('Listar') }}
        </flux:navlist.item>

        <flux:navlist.item
            icon="home"
            :href="route('escalas.create')"
            :current="request()->routeIs('escalas.create')"
            wire:navigate
        >
            {{ __('Nova') }}
        </flux:navlist.item>
    </flux:navlist.group>

    <flux:navlist.group
        heading="Controle de Horas"
        expandable
        :expanded="request()->routeIs('controle_horas.*')"
        class="mt-4">

        <flux:navlist.item
            icon="home"
            :href="route('controle_horas.index')"
            :current="request()->routeIs('controle_horas.index')"
            wire:navigate
        >
            {{ __('Listar') }}
        </flux:navlist.item>

        <flux:navlist.item
            icon="home"
            :href="route('controle_horas.create')"
            :current="request()->routeIs('controle_horas.create')"
            wire:navigate
        >
            {{ __('Novo') }}
        </flux:navlist.item>
    </flux:navlist.group>

</flux:navlist>

<flux:spacer />


            <flux:navlist variant="outline">
                <flux:navlist.item icon="folder-git-2" href="https://github.com/laravel/livewire-starter-kit" target="_blank">
                {{ __('Repository') }}
                </flux:navlist.item>

                <flux:navlist.item icon="book-open-text" href="https://laravel.com/docs/starter-kits" target="_blank">
                {{ __('Documentation') }}
                </flux:navlist.item>
            </flux:navlist>

            <!-- Desktop User Menu -->
            <flux:dropdown position="bottom" align="start">
                <flux:profile
                    :name="auth()->user()->name"
                    :initials="auth()->user()->initials()"
                    icon-trailing="chevrons-up-down"
                />

                <flux:menu class="w-[220px]">
                    <flux:menu.radio.group>
                        <div class="p-0 text-sm font-normal">
                            <div class="flex items-center gap-2 px-1 py-1.5 text-left text-sm">
                                <span class="relative flex h-8 w-8 shrink-0 overflow-hidden rounded-lg">
                                    <span
                                        class="flex h-full w-full items-center justify-center rounded-lg bg-neutral-200 text-black dark:bg-neutral-700 dark:text-white"
                                    >
                                        {{ auth()->user()->initials() }}
                                    </span>
                                </span>

                                <div class="grid flex-1 text-left text-sm leading-tight">
                                    <span class="truncate font-semibold">{{ auth()->user()->name }}</span>
                                    <span class="truncate text-xs">{{ auth()->user()->email }}</span>
                                </div>
                            </div>
                        </div>
                    </flux:menu.radio.group>

                    <flux:menu.separator />

                    <flux:menu.radio.group>
                        <flux:menu.item :href="route('settings.profile')" icon="cog" wire:navigate>{{ __('Settings') }}</flux:menu.item>
                    </flux:menu.radio.group>

                    <flux:menu.separator />

                    <form method="POST" action="{{ route('logout') }}" class="w-full">
                        @csrf
                        <flux:menu.item as="button" type="submit" icon="arrow-right-start-on-rectangle" class="w-full">
                            {{ __('Log Out') }}
                        </flux:menu.item>
                    </form>
                </flux:menu>
            </flux:dropdown>
        </flux:sidebar>

        <!-- Mobile User Menu -->
        <flux:header class="lg:hidden">
            <flux:sidebar.toggle class="lg:hidden" icon="bars-2" inset="left" />

            <flux:spacer />

            <flux:dropdown position="top" align="end">
                <flux:profile
                    :initials="auth()->user()->initials()"
                    icon-trailing="chevron-down"
                />

                <flux:menu>
                    <flux:menu.radio.group>
                        <div class="p-0 text-sm font-normal">
                            <div class="flex items-center gap-2 px-1 py-1.5 text-left text-sm">
                                <span class="relative flex h-8 w-8 shrink-0 overflow-hidden rounded-lg">
                                    <span
                                        class="flex h-full w-full items-center justify-center rounded-lg bg-neutral-200 text-black dark:bg-neutral-700 dark:text-white"
                                    >
                                        {{ auth()->user()->initials() }}
                                    </span>
                                </span>

                                <div class="grid flex-1 text-left text-sm leading-tight">
                                    <span class="truncate font-semibold">{{ auth()->user()->name }}</span>
                                    <span class="truncate text-xs">{{ auth()->user()->email }}</span>
                                </div>
                            </div>
                        </div>
                    </flux:menu.radio.group>

                    <flux:menu.separator />

                    <flux:menu.radio.group>
                        <flux:menu.item :href="route('settings.profile')" icon="cog" wire:navigate>{{ __('Settings') }}</flux:menu.item>
                    </flux:menu.radio.group>

                    <flux:menu.separator />

                    <form method="POST" action="{{ route('logout') }}" class="w-full">
                        @csrf
                        <flux:menu.item as="button" type="submit" icon="arrow-right-start-on-rectangle" class="w-full">
                            {{ __('Log Out') }}
                        </flux:menu.item>
                    </form>
                </flux:menu>
            </flux:dropdown>
        </flux:header>

        {{ $slot }}

        @fluxScripts
    </body>
</html>
