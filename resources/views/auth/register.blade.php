<x-layout>
    <h2 class="w-full font-bold text-4xl text-center">Register</h2>

    <x-forms.form method='POST' action="{{route('register')}}" enctype="multipart/form-data">
        <x-forms.input label='name' name='name' type='text' />
        <x-forms.input label='Email' name='email' type='email' />
        <x-forms.input label='Password' name='password' type='password' />
        <x-forms.input label='Confirm Password' name='password_confirmation' type='password' />

        <x-forms.divider />

        <x-forms.input label='Employer name' name='employer' type='text' />
        <x-forms.input label='Employer logo' name='logo' type='file' />

        <button type="submit"
            class="py-2 px-3 rounded-lg bg-blue-500 hover:bg-blue-600 duration-200 transition-all text-white text-base">
            Register
        </button>

    </x-forms.form>
</x-layout>