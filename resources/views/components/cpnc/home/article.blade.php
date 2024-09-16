<div class=" mt-8 md:mt-28 px-4 md:px-16 w-full flex flex-col ">

    <div class="-mt8 mb-8 flex flex-col md:flex-row items-center gap-4">
        <h1 class="text-4xl font-bold mb-4 ">Latest Articles and Events</h1>
        <x-secondary-button class="text-4xl mt-0  font-extrabold">College</x-secondary-button>
        <x-secondary-button class="text-4xl   font-extrabold">Basiced</x-secondary-button>
        <x-secondary-button class="text-4xl   font-extrabold">Kinder</x-secondary-button>


        <form action="/" method="POST" class="flex justify-center items-center mt-4 md:mt-0">
            @csrf
            <div class="flex  items-center gap-2 md:ml-64">
                <label for="query" class="block text-gray-700 text-sm font-bold mb-2">Search:</label>
                <input type="text" name="query" id="query"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    placeholder="Enter search term">
                <div>
                    <button type="submit"
                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Search</button>
                </div>
            </div>
        </form>

    </div>
    <div class="flex gap-4  md:flex-row flex-wrap items-center justify-center">
        <div class="w-full h-44 md:w-96 bg-slate-400 ">Colleg Graduation</div>
        <div class="w-full h-44 md:w-96 bg-slate-400 ">card</div>
        <div class="w-full h-44 md:w-96 bg-slate-400 ">card</div>
        <div class="w-full h-44 md:w-96 bg-slate-400 ">card</div>
        <div class="w-full h-44 md:w-96 bg-slate-400 ">card</div>
        <div class="w-full h-44 md:w-96 bg-slate-400 ">card</div>
    </div>

</div>
