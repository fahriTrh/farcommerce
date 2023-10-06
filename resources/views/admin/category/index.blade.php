<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Category') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            @if (session()->has('success'))
            <div class="p-4 mb-4 text-sm text-primary bg-white drop-shadow rounded-lg" role="alert">
                <span class="font-medium">{{ session('success') }}</span>
            </div>
            @endif
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <a href="{{ route('admin.category.create') }}" class="px-4 py-2 inline-block -translate-y-3 text-white font-roboto text-sm rounded-lg bg-primary">Add Category</a>
                    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                        @if($categories->count())
                        <table class="w-full text-sm text-left text-gray-500 darks:text-gray-400">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50 darks:bg-gray-700 darks:text-gray-400">
                                <tr>
                                    <th scope="col" class="px-6 py-3">
                                        <span>Image</span>
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Category
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Action
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($categories as $category)
                                <tr class="bg-white border-b darks:bg-gray-800 darks:border-gray-700 hover:bg-gray-50 darks:hover:bg-gray-600">
                                    <td class="w-20 p-4 h-20 block">
                                        <img src="{{ asset('/storage/' . $category->photo) }}" class="h-full w-full object-cover rounded-full">
                                    </td>
                                    <td class="px-6 py-4 font-semibold text-gray-900 darks:text-white">
                                        {{ $category->name }}
                                    </td>
                                    <td class="px-6 py-4">
                                        <form action="{{ route('admin.category.destroy', $category->slug) }}" method="POST" class="inline">
                                            @method('delete')
                                            @csrf
                                            <button type="submit" class="font-medium text-red-600 darks:text-red-500 hover:underline mr-2" onclick="return confirm('remove?')">Remove</button>
                                        </form>
                                        <a href="{{ route('admin.category.edit', $category->slug) }}" class="font-medium text-yellow-500 darks:text-red-500 hover:underline">Edit</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        @else
                        <h1 class="text-center font-roboto text-red-500">No Categories found!</h1>
                        @endif
                    </div>
                    <div class="mt-2">
                        {{ $categories->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
