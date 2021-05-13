<x-layout>
    <div class="container mx-auto px-4 pt-16">
        <div class="movie-info border-b border-gray-800">
            <div class="container mx-auto px-4 py-16 flex">
                <img class="w-80" src="{{url('/images/parasite.jpg')}}" alt="" >
                <div class="ml-24">
                    <h2 class="text-4xl font-semibold">Parasite</h2>
                    <div class="flex items-center text-gray-400 text-xs">
                        <span>star</span>
                        <span class="ml-1">85%</span>
                        <span class="mx-2">|</span>
                        <span>Feb20, 2020</span>
                        <span class="mx-2">|</span>
                        <span>Action, Thriller, Comedy</span>
                    </div>
                    <p class="text-gray-300 mt-8">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad aut eum, eveniet illum rem voluptatum?
                        Assumenda dignissimos quod voluptate! Earum explicabo illo magni natus obcaecati provident quia soluta
                        suscipit voluptates.
                    </p>
                    <div class="mt-12">
                        <h4 class="text-white font-semibold">Featured Cast</h4>
                        <div class="flex mt-4">
                            <div>
                                <div>Bong Joon-ho</div>
                                <div class="text-sm text-gray-400">Screenplay, Director, Story</div>
                            </div>
                            <div class="ml-8">
                                <div>Han Jin-won</div>
                                <div class="text-sm text-gray-400">Screenplay</div>
                            </div>
                        </div>
                    </div>

                    <div class="mt-12">
                        <button class="flex items-center bg-red-600 text-white rounded font-semibold px-4 py-3 hover:bg-red-400 transition ease-in-out duration 150">
                            Trailer
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End movie info-->
    <div class="movie-cast border-b border-gray-800">
        <div class="container mx-auto px4 py-16">
            <h2 class="text-4xl font-semibold">Cast</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap 8">
                <div class="mt-8">
                    <a href="#">
                        <img src="{{url('/images/parasite.jpg')}}" alt="Parasite" class="hover:opacity-75 transition ease-in-out duration-150">
                    </a>
                    <div class="mt-2">
                        <a href="#" class="text-lg mt-2 hover:text-gray-300">Parasite</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>
