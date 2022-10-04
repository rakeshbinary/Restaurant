<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex m-2 p-2">
                <a href="{{ route("admin.tables.index") }}" class="px-4 py-2 bg-indigo-500 hover:bg-ingigo-700 rounded-lg">Tables Index
                </a>
            </div>

            <div class="m-2 p-2 bg-gray-100 rounded">
                <div class="space-y-8 divide-y divide-gray-200 w-1/2 mt-10">
                    <form method="POST" action="{{ route('admin.tables.update',$table->id) }}">
                        @csrf
                        @method('PUT')
                        <div class="sm:col-span-6">
                            <label for="name" class="block text-sm font-medium text-gray-700"> Name </label>
                            <div class="mt-1">
                                <input type="text" id="name"  name="name" value="{{ $table->name }}"
                                    class="block w-full transition duration-150 ease-in-out appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                            </div>
                            @error('name')
                                <div class="text-sm text-red-400" style="color: red">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="sm:col-span-6">
                            <label for="guest_number" class="block text-sm font-medium text-gray-700"> Guest Number </label>
                            <div class="mt-1">
                                <input type="number" id="guest_number" name="guest_number" value="{{ $table->guest_number }}"
                                    class="block w-full transition duration-150 ease-in-out appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                            </div>
                            @error('guest_number')
                                <div class="text-sm text-red-400" style="color: red">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="sm:col-span-6 pt-5">
                            <label for="body" class="block text-sm font-medium text-gray-700">Status</label>
                            <div class="mt-1">
                               <select name="status" id="status" style="width: 100%">

                                <option value="pending" {{($table->status === 'pending') ? 'Selected' : ''}}>Pending</option>
                                <option value="avaliable" {{($table->status === 'avaliable') ? 'Selected' : ''}}>Avaliable</option>
                                <option value="unavaliable" {{($table->status === 'unavaliable') ? 'Selected' : ''}}>Unavaliable</option>


                               </select>
                            </div>
                            @error('status')
                                <div class="text-sm text-red-400" style="color: red">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="sm:col-span-6 pt-5">
                            <label for="body" class="block text-sm font-medium text-gray-700">Location</label>
                            <div class="mt-1">
                               <select name="location" id="location" style="width: 100%">
                                    <option value="front" {{($table->location === 'front') ? 'Selected' : ''}}>Front</option>
                                    <option value="inside" {{($table->location === 'inside') ? 'Selected' : ''}}>Inside</option>
                                    <option value="outside" {{($table->location === 'outside') ? 'Selected' : ''}}>Outside</option>

                               </select>
                            </div>
                            @error('location')
                                <div class="text-sm text-red-400" style="color: red">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mt-6 p-4">
                            <button type="submit" class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg" style="background-color: gray; color:aliceblue" >Store</button>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>


