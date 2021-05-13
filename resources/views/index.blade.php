<x-layout>
    <div class="container mx-auto px-4 pt-16">
        <div class="popular-movies">
            <h2 class="uppercase tracking-wider text-yellow-500 text-lg font-semibold">Popular Movies</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap 8">
                <div class="mt-8">
                    <a href="#">
                        <img src="{{url('/images/parasite.jpg')}}" alt="Parasite" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="mt-2">
                        <a href="#" class="text-lg mt-2 hover:text-gray-300">Parasite</a>
                        <div class="flex items-center text-gray-400 text-xs">
                            <span>star</span>
                            <span class="ml-1">85%</span>
                            <span class="mx-2">|</span>
                            <span>Feb20, 2020</span>
                        </div>
                        <div class="text-gray-400 text-xs">
                            Action, Thriller, Comedy
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</x-layout>
