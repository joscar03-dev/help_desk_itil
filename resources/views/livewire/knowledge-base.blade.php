<div class="bg-white shadow overflow-hidden sm:rounded-lg">
    <div class="px-4 py-5 sm:px-6">
        <h3 class="text-lg leading-6 font-medium text-gray-900">
            Knowledge Base
        </h3>
        <p class="mt-1 max-w-2xl text-sm text-gray-500">
            Popular articles and tutorials
        </p>
    </div>
    <div class="border-t border-gray-200">
        <ul role="list" class="divide-y divide-gray-200">
            @foreach($articles as $article)
            <li class="px-4 py-4 sm:px-6">
                <div class="flex items-center justify-between">
                    <p class="text-sm font-medium text-indigo-600 truncate">
                        {{ $article['title'] }}
                    </p>
                    <div class="ml-2 flex-shrink-0 flex">
                        <p class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                            {{ $article['views'] }} views
                        </p>
                    </div>
                </div>
                <div class="mt-2 flex justify-end">
                    <a href="#" class="font-medium text-indigo-600 hover:text-indigo-500">Read article</a>
                </div>
            </li>
            @endforeach
        </ul>
    </div>
</div>
