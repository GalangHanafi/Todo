<?php

use Livewire\Volt\Component;

new class extends Component
{
    public function logout(): void
    {
        auth()->guard('web')->logout();

        session()->invalidate();
        session()->regenerateToken();

        $this->redirect('/  ', navigate: true);
    }
}; ?>

<div class="mx-auto max-w-7xl navbar">
    <div class="navbar-start">
        <div class="dropdown">
            <label tabindex="0" class="btn btn-ghost lg:hidden">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" />
                </svg>
            </label>
            <ul tabindex="0" class="font-semibold menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow rounded-box w-52">
                <li><a href="{{ route('todo') }}" wire:navigate class="{{\Request::route()->getName() == "todo"
                        ? "active" : "" }}">Todo</a></li>
                <li><a href="{{ route('deleted') }}" wire:navigate class="{{\Request::route()->getName() == "deleted"
                        ? "active" : "" }}">Deleted Todo</a></li>
            </ul>
        </div>
        <a href="{{ route('todo') }}" wire:navigate class="flex items-center space-x-2 prose">
            <img src="{{asset('images/logo-todo.png')}}" alt="Image by catalyststuff" class="w-16">
            <div class="text-3xl font-bold normal-case">Todo App</div>
        </a>
    </div>
    <div class="hidden navbar-center lg:flex">
        <ul class="px-1 font-semibold menu menu-horizontal">
            <li><a href="{{ route('todo') }}" wire:navigate class="{{\Request::route()->getName() == "todo" ? "active"
                    : "" }}">Todo</a></li>
            <li><a href="{{ route('deleted') }}" wire:navigate class="{{\Request::route()->getName() == "deleted"
                    ? "active" : "" }}">Deleted Todo</a></li>
        </ul>
    </div>
    <div class="flex space-x-2 navbar-end">
        <div class="dropdown dropdown-end">
            <label tabindex="0" class="m-1 normal-case btn btn-ghost">{{ auth()->user()->name }}
                <span>
                    <svg class="w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                            clip-rule="evenodd" />
                    </svg>
                </span>
            </label>
            <ul tabindex="0" class="dropdown-content z-[1] menu p-2 shadow bg-base-100 rounded-box w-52">
                <li><a href="{{route('profile')}}" wire:navigate class="{{\Request::route()->getName() == "profile"
                        ? "active" : "" }}">Profile</a></li>
                <li><a wire:click="logout" class="text-error hover:text-error">Logout</a></li>
            </ul>
        </div>
        <div class="avatar">
            <div class="w-10 rounded-full">
                <img src="https://daisyui.com/images/stock/photo-1534528741775-53994a69daeb.jpg" />
            </div>
        </div>
    </div>
</div>
