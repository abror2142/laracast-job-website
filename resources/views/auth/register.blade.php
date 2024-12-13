<x-layout>
    <x-slot:heading>
        Register
    </x-slot:heading> 

    <form method='POST' action="/register" autocomplete="off">
        @csrf

        <div class="space-y-12">
          <div class="border-b border-gray-900/10 pb-12">
            <div class="mt-4 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
              
                <x-form-field>
                    <x-form-label for="name">Username:</x-form-label>
                    <div class="mt-2">
                        <x-form-input 
                                name="name" 
                                id="name" 
                                required
                        />
                    </div>
                    <x-from-error field="name"></x-from-error>
                </x-form-field>
 
                <x-form-field>
                    <x-form-label for="email">Email</x-form-label>
                    <div class="mt-2">
                        <x-form-input 
                            name="email" 
                            id="email" 
                            required
                        />
                    </div>
                    <x-from-error field="email"></x-from-error>
                </x-form-field>

                <x-form-field>
                    <x-form-label for="password">Password</x-form-label>
                    <div class="mt-2">
                        <x-form-input 
                            type="password"
                            name="password" 
                            id="password" 
                            required
                        />
                    </div>
                    <x-from-error field="password"></x-from-error>
                </x-form-field>

                <x-form-field>
                    <x-form-label for="password_confirmation">Confirm Password</x-form-label>
                    <div class="mt-2">
                        <x-form-input 
                            type="password"
                            name="password_confirmation" 
                            id="password_confirmation" 
                            required
                        />
                    </div>
                    <x-from-error field="password_confirmation"></x-from-error>
                </x-form-field>

            </div>
          </div>
        </div>
        <div class="mt-6 flex items-center justify-end gap-x-6">
          <x-button href="/" type="button" class="text-sm/6 font-semibold text-gray-900">Cancel</x-button>
          <x-form-button>Save</x-form-button>
        </div>
      </form>

</x-layout>