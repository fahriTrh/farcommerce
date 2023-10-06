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
                            <h2 class="mb-4 text-xl font-bold text-gray-900 darks:text-white">Add a new category</h2>
                            <form action="{{ route('admin.category.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                                    <div class="sm:col-span-2">
                                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 darks:text-white">Category Name</label>
                                        <input type="text" name="name" id="name" value="{{ old('name') }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary focus:border-primary block w-full p-2.5 darks:bg-gray-700 darks:border-gray-600 darks:placeholder-gray-400 darks:text-white darks:focus:ring-primary darks:focus:border-primary" placeholder="Type product name" required>
                                        @error('name')
                                         <p class="text-red-500 text-sm translate-y-1">{{ $message }}</p>   
                                        @enderror
                                    </div>
                                    <div class="sm:col-span-2">
                                        <label for="slug" class="block mb-2 text-sm font-medium text-gray-900 darks:text-white">Slug</label>
                                        <input type="text" name="slug" id="slug" value="{{ old('slug') }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary focus:border-primary block w-full p-2.5 darks:bg-gray-700 darks:border-gray-600 darks:placeholder-gray-400 darks:text-white darks:focus:ring-primary darks:focus:border-primary" placeholder="Product slug" required>
                                        @error('slug')
                                         <p class="text-red-500 text-sm translate-y-1">{{ $message }}</p>   
                                        @enderror
                                    </div>
                                    <img src="" id="previewPhoto" class="hidden w-20 h-20 rounded-full bg-primary object-cover overflow-hidden">
                                    <div class="sm:col-span-2">
                                        <label class="block mb-2 text-sm font-medium text-gray-900 darks:text-white" for="file_input">Product photo</label>
                                        <input class="block w-full file:bg-primary file:py-2.5 file:border-none file:text-white file:text-sm text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 darks:text-gray-400 focus:outline-none darks:bg-gray-700 darks:border-gray-600 darks:placeholder-gray-400" id="photo" name="photo" type="file">
                                        @error('photo')
                                         <p class="text-red-500 text-sm translate-y-1">{{ $message }}</p>   
                                        @enderror
                                    </div>
                                </div>
                                <button type="submit" class="inline-flex items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-white bg-primary rounded-lg focus:ring-4 focus:ring-primary darks:focus:ring-primary hover:bg-primary-800">
                                    Add category
                                </button>
                            </form>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
<script>
    const name = document.querySelector('#name');
    const slug = document.querySelector('#slug');
    const photo = document.querySelector('#photo');
    const previewPhoto = document.querySelector('#previewPhoto');
    
    name.onchange = () => {
        fetch('/admin/category/checkSlug?name=' + name.value)
        .then(response => response.json())
        .then(data => slug.value = data.slug)
    }
    
    photo.onchange = () => {
        previewPhoto.classList.remove('hidden');
        const oFReader = new FileReader();
        oFReader.readAsDataURL(photo.files[0]);

        oFReader.onload = function(oFReader) {
            previewPhoto.src = oFReader.target.result;
        }
    }
</script>
