<x-layout>
    <h2 class="w-full font-bold text-4xl text-center">Create Job</h2>

    <x-forms.form method='POST' action="{{route('jobs.store')}}">
        <x-forms.input label='Title' name='title' type='text' />
        <x-forms.input label='Salary' name='salary' type='text' />
        <x-forms.input label='Location' name='location' type='text' />
        <x-forms.select label='Schedule' name='schedule' id="schedule">
            <option class="text-black" value="Full Time">Full Time</option>
            <option class="text-black" value="Part Time">Part Time</option>
        </x-forms.select>
        <x-forms.input label='Url' name='url' type='url' placeholder="https://jobs.ge" />

        <x-forms.divider />

        <x-forms.input label='Tags' name='tags' type='text' placeholder="Frontend, Backend, API" />
        <x-forms.checkbox label='Featured' name='featured' type='checkbox' />

        <button type="submit"
            class="py-2 px-3 rounded-lg bg-blue-500 hover:bg-blue-600 duration-200 transition-all text-white text-base">
            Publish
        </button>

    </x-forms.form>
</x-layout>