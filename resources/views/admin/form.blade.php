<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Create New Category
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <section class="bg-white darks:bg-gray-900">
                        <div class="py-8 px-4 mx-auto max-w-2xl lg:py-16">
                            <h2 class="mb-4 text-xl font-bold text-gray-900 darks:text-white">Add a new product</h2>
                            <form action="#">
                                <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                                    <div class="sm:col-span-2">
                                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 darks:text-white">Product Name</label>
                                        <input type="text" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary focus:border-primary block w-full p-2.5 darks:bg-gray-700 darks:border-gray-600 darks:placeholder-gray-400 darks:text-white darks:focus:ring-primary darks:focus:border-primary" placeholder="Type product name" required="">
                                    </div>
                                    <div class="w-full">
                                        <label for="brand" class="block mb-2 text-sm font-medium text-gray-900 darks:text-white">Brand</label>
                                        <input type="text" name="brand" id="brand" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary focus:border-primary block w-full p-2.5 darks:bg-gray-700 darks:border-gray-600 darks:placeholder-gray-400 darks:text-white darks:focus:ring-primary darks:focus:border-primary" placeholder="Product brand" required="">
                                    </div>
                                    <div class="w-full">
                                        <label for="price" class="block mb-2 text-sm font-medium text-gray-900 darks:text-white">Price</label>
                                        <input type="number" name="price" id="price" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary focus:border-primary block w-full p-2.5 darks:bg-gray-700 darks:border-gray-600 darks:placeholder-gray-400 darks:text-white darks:focus:ring-primary darks:focus:border-primary" placeholder="$2999" required="">
                                    </div>
                                    <div>
                                        <label for="category" class="block mb-2 text-sm font-medium text-gray-900 darks:text-white">Category</label>
                                        <select id="category" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary focus:border-primary block w-full p-2.5 darks:bg-gray-700 darks:border-gray-600 darks:placeholder-gray-400 darks:text-white darks:focus:ring-primary darks:focus:border-primary">
                                            <option selected="">Select category</option>
                                            <option value="TV">TV/Monitors</option>
                                            <option value="PC">PC</option>
                                            <option value="GA">Gaming/Console</option>
                                            <option value="PH">Phones</option>
                                        </select>
                                    </div>
                                    <div>
                                        <label for="item-weight" class="block mb-2 text-sm font-medium text-gray-900 darks:text-white">Item Weight (kg)</label>
                                        <input type="number" name="item-weight" id="item-weight" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary focus:border-primary block w-full p-2.5 darks:bg-gray-700 darks:border-gray-600 darks:placeholder-gray-400 darks:text-white darks:focus:ring-primary darks:focus:border-primary" placeholder="12" required="">
                                    </div> 
                                    <div class="sm:col-span-2">
                                        <label for="description" class="block mb-2 text-sm font-medium text-gray-900 darks:text-white">Description</label>
                                        <textarea id="description" rows="8" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary focus:border-primary darks:bg-gray-700 darks:border-gray-600 darks:placeholder-gray-400 darks:text-white darks:focus:ring-primary darks:focus:border-primary" placeholder="Your description here"></textarea>
                                    </div>
                                </div>
                                <button type="submit" class="inline-flex items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-white bg-primary rounded-lg focus:ring-4 focus:ring-primary darks:focus:ring-primary hover:bg-primary-800">
                                    Add product
                                </button>
                            </form>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
