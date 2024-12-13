<x-layout>
    <x-slot:heading>
        Update Job: {{ $job->title }}.
    </x-slot:heading> 

    <form method='POST' action="/jobs/{{ $job->id }}">
        @csrf
        @method('PATCH')

        <div class="space-y-12">
          <div class="border-b border-gray-900/10 pb-12">
            <div class="mt-4 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">

                <x-form-field>
                    <x-form-label for="title">Job title:</x-form-label>
                    <div class="mt-2">
                        <x-form-input 
                                name="title" 
                                id="title" 
                                placeholder="Senior Software Engineer"
                                required
                                value="{{ $job->title }}"
                        />
                    </div>
                    <x-from-error field="title"></x-from-error>
                </x-form-field>

                <x-form-field>
                    <x-form-label for="salary">Salary (per year):</x-form-label>
                    <div class="mt-2">
                        <x-form-input 
                                name="salary" 
                                id="salary" 
                                placeholder="Senior Software Engineer"
                                required
                                value="{{ $job->salary }}"
                        />
                    </div>
                    <x-from-error field="title"></x-from-error>
                </x-form-field>

            </div>
          </div>
        </div>
        
        <div class="flex justify-between mt-6">
            <div class=" flex items-center justify-start">
                <x-button href="/jobs">Cancel</x-button>
            </div>
            <div class="flex items-center justify-end gap-x-4">
                <x-form-button>Update</x-form-button>
                <x-form-button form="delete-form" class="bg-red-600 hover:bg-red-500">Delete</x-form-button>
            </div>
        </div>
      </form>

      <form method="POST" action="/jobs/{{ $job->id }}" id="delete-form" class="hidden">
        @csrf
        @method('DELETE')

      </form>

</x-layout>
