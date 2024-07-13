<x-layout>
    <h2 class="w-full font-bold text-4xl text-center">Login</h2>

    <x-forms.form method='POST' action="{{route('login')}}">
        <x-forms.input label='Email' name='email' type='email' />
        <x-forms.input label='Password' name='password' type='password' />

        <button type="submit"
            class="py-2 px-3 rounded-lg bg-blue-500 hover:bg-blue-600 duration-200 transition-all text-white text-base">
            Login
        </button>

    </x-forms.form>
</x-layout>