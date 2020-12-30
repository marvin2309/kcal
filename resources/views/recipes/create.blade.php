<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add Recipe') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @if(session()->has('message'))
                <div class="bg-green-200 border-2 border-green-600 p-2 mb-2">
                    {{ session()->get('message') }}
                </div>
            @endif

            @if ($errors->any())
                <div class="flex flex-col space-y-2 pb-2">
                    @foreach ($errors->all() as $error)
                        <div class="bg-red-200 border-2 border-red-900 p-2">
                            {{ $error }}
                        </div>
                    @endforeach
                </div>
            @endif

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form method="POST" action="{{ route('recipes.store') }}">
                    @csrf
                        <div class="flex flex-col space-y-4">
                            <div class="grid grid-cols-5 gap-4">
                                <!-- Name -->
                                <div class="col-span-4">
                                    <x-inputs.label for="name" :value="__('Name')" />

                                    <x-inputs.input id="name"
                                                    class="block mt-1 w-full"
                                                    type="text"
                                                    name="name"
                                                    :value="old('name')"
                                                    required />
                                </div>

                                <!-- Servings -->
                                <div>
                                    <x-inputs.label for="servings" :value="__('Servings')" />

                                    <x-inputs.input id="servings"
                                                    class="block mt-1 w-full"
                                                    type="number"
                                                    name="servings"
                                                    :value="old('servings')" />
                                </div>
                            </div>

                            <!-- Description -->
                            <div>
                                <x-inputs.label for="description" :value="__('Description')" />

                                <x-inputs.textarea id="description"
                                                   class="block mt-1 w-full"
                                                   name="description"
                                                   :value="old('description')" />
                            </div>
                        </div>

                        <!-- Ingredients -->
                        <h3 class="pt-2 mb-2 font-extrabold">Ingredients</h3>
                        @for($i = 0; $i < 5; $i++)
                            <div class="flex flex-row space-x-4 mb-4">
                                <x-inputs.input type="number"
                                                name="ingredients_amount[]"
                                                step="any"
                                                required />
                                <x-inputs.select name="ingredients_unit[]"
                                                 :options="$ingredient_units">
                                    <option value=""></option>
                                </x-inputs.select>
                                <x-inputs.select name="ingredients[]"
                                                 :options="$ingredients"
                                                 required>
                                    <option value=""></option>
                                </x-inputs.select>
                            </div>
                        @endfor
                        <div class="flex items-center justify-end mt-4">
                            <x-inputs.button class="ml-3">
                                {{ __('Add') }}
                            </x-inputs.button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
