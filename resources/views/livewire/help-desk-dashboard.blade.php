
<div class="flex h-screen bg-gray-100">
    <!-- Sidebar -->
    <aside class="fixed inset-y-0 left-0 z-50 w-64 bg-white shadow-lg transition-transform duration-300 ease-in-out lg:translate-x-0 lg:static lg:inset-0 {{ $sidebarOpen ? 'translate-x-0' : '-translate-x-full' }}">
        <div class="flex h-full flex-col">
            <div class="flex items-center justify-between px-4 py-6">
                <span class="text-2xl font-semibold text-blue-600">HelpDesk</span>
                <button class="lg:hidden" wire:click="toggleSidebar">
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                </button>
            </div>
            <nav class="flex-1 space-y-2 px-2">
                <a href="#" class="flex items-center px-4 py-2 text-gray-700 hover:bg-gray-100 rounded-md">
                    <svg class="h-5 w-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>
                    Dashboard
                </a>
                <a href="#" class="flex items-center px-4 py-2 text-gray-700 hover:bg-gray-100 rounded-md">
                    <svg class="h-5 w-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"></path></svg>
                    My Tickets
                </a>
                <a href="#" class="flex items-center px-4 py-2 text-gray-700 hover:bg-gray-100 rounded-md">
                    <svg class="h-5 w-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    FAQs
                </a>
                <a href="#" class="flex items-center px-4 py-2 text-gray-700 hover:bg-gray-100 rounded-md">
                    <svg class="h-5 w-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                    Settings
                </a>
            </nav>
        </div>
    </aside>

    <!-- Main content -->
    <div class="flex flex-1 flex-col overflow-hidden">
        <!-- Top navigation -->
        <header class="bg-white shadow-sm">
            <div class="flex items-center justify-between px-4 py-3">
                <button class="lg:hidden" wire:click="toggleSidebar">
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg>
                </button>
                <div class="flex items-center space-x-4">
                    <livewire:notifications-dropdown />
                    <livewire:user-profile-dropdown />
                </div>
            </div>
        </header>

        <!-- Main content area -->
        <main class="flex-1 overflow-y-auto p-4">
            <div class="mb-6">
                <h1 class="text-2xl font-semibold text-gray-900">Welcome back, </h1>
                <p class="text-sm text-gray-600">Here's an overview of your help desk activity.</p>
            </div>

            <!-- Search bar -->
            <div class="mb-6">
                <input type="search" placeholder="Search tickets, FAQs, or knowledge base..." class="w-full px-4 py-2 border rounded-md">
            </div>

            <!-- Ticket summary -->
            <div class="mb-6 grid gap-6 md:grid-cols-2 lg:grid-cols-3">
                <livewire:ticket-summary-card title="Open Tickets" count="5" description="2 high priority" />
                <livewire:ticket-summary-card title="Resolved Tickets" count="12" description="This week" />
                <livewire:ticket-summary-card title="Average Response Time" count="3h 24m" description="Last 7 days" />
            </div>

            <!-- Recent tickets -->
            <livewire:recent-tickets />

            <!-- Knowledge base -->
            <livewire:knowledge-base />
        </main>

        <!-- Footer -->
        <footer class="bg-white px-4 py-3 text-center text-sm text-gray-600">
            <div class="space-x-4">
                <a href="#" class="hover:text-blue-600">Terms of Service</a>
                <a href="#" class="hover:text-blue-600">Privacy Policy</a>
                <a href="#" class="hover:text-blue-600">Contact Support</a>
            </div>
        </footer>
    </div>

    <!-- Live chat button -->
    <button class="fixed bottom-4 right-4 bg-blue-500 text-white rounded-full p-3 shadow-lg hover:bg-blue-600">
        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z"></path></svg>
        <span class="sr-only">Start live chat</span>
    </button>
</div>
