<form class="m-5" wire:submit="registerUser">
    @csrf
    <div class="text-slate-900 dark:text-slate-200">Name</div>
    <input wire:model="name" type="text" value="{{ old('name') }}"
        class="text-slate-800 dark:text-slate-200 input-create mt-3 w-full h-9 border border-gray-200 dark:border-gray-500 rounded-md focus-visible:outline-gray-300 dark:focus-visible:outline-gray-400 pl-2" />
    <div class="text-sm text-red-700 mb-5 mt-2">
        @error('name')
            {{ $message }}
        @enderror
    </div>
    <div class="text-slate-900 dark:text-slate-200">Email</div>
    <input wire:model="email" type="email" value="{{ old('email') }}"
        class="text-slate-800 dark:text-slate-200 input-create mt-3 w-full h-9 border border-gray-200 dark:border-gray-500 rounded-md focus-visible:outline-gray-300 dark:focus-visible:outline-gray-400 pl-2" />
    <div class="text-sm text-red-700 mb-5 mt-2">
        @error('email')
            {{ $message }}
        @enderror
    </div>

    <div class="text-slate-900 dark:text-slate-200">Password</div>
    <input wire:model="password" type="password"
        class="text-slate-800 dark:text-slate-200 input-create mt-3 w-full h-9 border border-gray-200 dark:border-gray-500 rounded-md focus-visible:outline-gray-300 dark:focus-visible:outline-gray-400 pl-2" />
    <div class="text-sm text-red-700 mb-5 mt-2">
        @error('password')
            {{ $message }}
        @enderror
    </div>
{{--
    <div class="text-slate-900 dark:text-slate-200">Confirm Password</div>
    <input name="password_confirmation" type="password"
        class="text-slate-800 dark:text-slate-200 input-create mt-3 w-full h-9 border border-gray-200 dark:border-gray-500 rounded-md focus-visible:outline-gray-300 dark:focus-visible:outline-gray-400 pl-2" />
    <div class="text-sm text-red-700 mb-5 mt-2">
        @error('confirm_password')
            {{ $message }}
        @enderror
    </div> --}}

    <button type="submit"
        class="rounded-lg p-2 transition-all bg-gray-500 text-white hover:bg-gray-400 text-center">Submit</button>
</form>
