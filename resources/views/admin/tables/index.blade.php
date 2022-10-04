<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex justify-end m-2 p-2">
                <a href="{{ route('admin.tables.create') }}"
                    class="px-4 py-2 bg-indigo-500 hover:bg-ingigo-700 rounded-lg p-3 mb-2 bg-primary text-white">New Tables</a>
            </div>
            <div class="overflow-x-auto relative shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="py-3 px-6">
                                Name
                            </th>
                            <th scope="col" class="py-3 px-6">
                                Guest_Number
                            </th>
                            <th scope="col" class="py-3 px-6">
                                status
                            </th>
                            <th scope="col" class="py-3 px-6">
                                Location
                            </th>
                            <th scope="col" class="py-3 px-6" style="padding-left: 70px">
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($tables as $table)
                        <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                            <td scope="row"
                                class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                               {{ $table->name }}
                            </td>
                           <td scope="row"
                                class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                               {{ $table->guest_number }}
                            </td>
                            <td scope="row"
                                class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                               {{ $table->status }}
                            </td>
                            <td scope="row"
                                class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                               {{ $table->location }}
                            </td>
                              <td scope="row"
                                class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                               <div class="flex space-x-2">
                                <a href="{{ route('admin.tables.edit', $table->id) }}"
                                    class="px-4 py-2 bg-green-500 hover:bg-green-700 rounded-lg  text-white" style="background-color: green">Edit</a>
                                <form
                                    class="px-4 py-2 bg-red-500 hover:bg-red-700 rounded-lg text-white" style="background-color: red; margin-left: 12px"
                                    method="POST"
                                    action="{{ route('admin.tables.destroy', $table->id) }}"
                                    onsubmit="return confirm('Are you sure?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit">Delete</button>
                                </form>
                               </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</x-admin-layout>
