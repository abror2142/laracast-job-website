<x-layout>
    <x-slot:heading>Job Page</x-slot:heading>
    <div class="bg-gray-200 px-5 py-3 rounded">
        <p class="font-semibold text-blue-500">{{ $job->company['name'] }}</p>
        <h2>Job: <strong>{{ $job['title']}}</strong></h2>
        <p>
            Salary: <strong>${{ $job['salary']}}</strong> per year.
        </p>
    </div>
    <div class="flex justify-between mx-8 my-4">
        <div class="mt-2 text-center">
            <a class="py-2 px-5 bg-black text-white font-semibold rounded" href="/jobs">Back</a>
        </div>
        @can('edit-job', $job)
            <div class="mt-2 text-center">
                <a class="py-2 px-5 bg-gray-200 font-semibold rounded" href="/jobs/{{ $job->id }}/edit">Edit</a>
            </div>
        @endcan
    </div>
</x-layout>