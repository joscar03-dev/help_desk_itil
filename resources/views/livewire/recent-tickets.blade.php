<div class="bg-white shadow overflow-hidden sm:rounded-lg mb-6">
    <div class="px-4 py-5 sm:px-6">
        <h3 class="text-lg leading-6 font-medium text-gray-900">
            Recent Tickets
        </h3>
        <p class="mt-1 max-w-2xl text-sm text-gray-500">
            Your most recent support requests
        </p>
    </div>
    <div class="border-t border-gray-200">
        <ul role="list" class="divide-y divide-gray-200">
            @foreach($tickets as $ticket)
            <li class="px-4 py-4 sm:px-6">
                <div class="flex items-center justify-between">
                    <div class="flex items-center">
                        <p class="text-sm font-medium text-indigo-600 truncate">
                            {{ $ticket['title'] }}
                        </p>
                        <div class="ml-2 flex-shrink-0 flex">
                            <p class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                {{ $ticket['status'] }}
                            </p>
                        </div>
                    </div>
                    <div class="ml-2 flex-shrink-0 flex">
                        <p class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">
                            {{ $ticket['priority'] }}
                        </p>
                    </div>
                </div>
                <div class="mt-2 sm:flex sm:justify-between">
                    <div class="sm:flex">
                        <p class="flex items-center text-sm text-gray-500">
                            Created on {{ $ticket['created_at'] }}
                        </p>
                    </div>
                    <div class="mt-2 flex items-center text-sm text-gray-500 sm:mt-0">
                        <a href="#" class="font-medium text-indigo-600 hover:text-indigo-500">
                            View ticket
                        </a>
                    </div>
                </div>
            </li>
            @endforeach
        </ul>
    </div>
</div>