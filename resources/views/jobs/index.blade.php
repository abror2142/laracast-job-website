<x-layout>
    <x-slot:heading>
        <div class="flex justify-between">
            <p>Jobs Page</p>
            <x-button
                href="/jobs/create"
            >
                Create Job
            </x-button>
        </div>    
        
    </x-slot:heading>
    <div class="grid grid-cols-2 gap-4">
        @foreach ($jobs as $job)
            <div class="bg-gray-200 px-5 py-2">
                <p class="text-blue-500 font-semibold">{{ $job->company->name }}</p>
                <a href="/jobs/{{ $job['id'] }}/" class="">
                    <p>
                        Job: <strong>{{ $job['title'] }}</strong>
                    </p>
                    <p>Pays: ${{ $job['salary'] }} per year.</p>
                </a>
            </div>
        @endforeach
    </div>
    {{ $jobs->links() }}
</x-layout>