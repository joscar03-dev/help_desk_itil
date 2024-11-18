<div class="relative">
    <button wire:click="toggleDropdown" class="relative p-1 text-gray-400 hover:bg-gray-100 hover:text-gray-500 rounded-full">
        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"></path></svg>
        <span class="sr-only">View notifications</span>
        <span class="absolute top-0 right-0 block h-2 w-2 rounded-full bg-red-400 ring-2 ring-white"></span>
    </button>

    @if($showDropdown)
    <div class="origin-top-right absolute right-0 mt-2 w-80 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5">
        <div class="py-1" role="menu" aria-orientation="vertical" aria-labelledby="options-menu">
            <div class="px-4 py-2 text-sm text-gray-700">
                <strong>Notifications</strong>
            </div>
            <div class="border-t border-gray-100"></div>
            <a href="#" class="px-4 py-2 flex items-center hover:bg-gray-100" role="menuitem">
                <img class="h-8 w-8 rounded-full mr-3" src="https://via.placeholder.com/32" alt="User avatar">
                <div>
                    <p class="text-sm font-medium text-gray-900">John Doe replied to your ticket</p>
                    <p class="text-xs text-gray-500">2 hours ago</p>
                </div>
            </a>
            <a href="#" class="px-4 py-2 flex items-center hover:bg-gray-100" role="menuitem">
                <img class="h-8 w-8 rounded-full mr-3" src="https://via.placeholder.com/32" alt="User avatar">
                <div>
                    <p class="text-sm font-medium text-g ray-900">Your ticket #1234 has been resolved</p>
                    <p class="text-xs text-gray-500">1 day ago</p>
                </div>
            </a>
        </div>
    </div>
    @endif
</div>
