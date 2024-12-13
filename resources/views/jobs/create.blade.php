<x-layout>
    <x-slot:heading>
        Create Job Page
    </x-slot:heading> 

    <form method='POST' action="/jobs">
        @csrf
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
                            placeholder="100,000" 
                            required
                        />
                    </div>
                    <x-from-error field="salary"></x-from-error>
                </x-form-field>

            </div>
          </div>
        </div>
        <div class="mt-6 flex items-center justify-end gap-x-6">
          <x-button href="/jobs" type="button" class="text-sm/6 font-semibold text-gray-900">Cancel</x-button>
          <x-form-button>Save</x-form-button>
        </div>
      </form>

</x-layout>
