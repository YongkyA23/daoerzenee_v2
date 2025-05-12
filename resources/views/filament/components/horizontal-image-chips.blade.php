<div class="flex flex-wrap gap-2">
    @foreach ($getRecord()->images as $index => $image)
        <div x-data="{
            open: false,
            imageUrl: '{{ asset('storage/' . $image->pathFoto) }}',
            altText: '{{ $getRecord()->namaProduk }}'
        }">
            <button type="button" @click="open = true"
                class="inline-flex items-center justify-center bg-primary-500 hover:bg-primary-600 transition-colors rounded-full text-white text-xs px-2 py-1 cursor-pointer">
                Image #{{ $index + 1 }}
            </button>

            <!-- Modal -->
            <div x-show="open" x-transition x-cloak
                class="fixed inset-0 z-50 flex items-center justify-center bg-black/50" @click.self="open = false">
                <div class="bg-white rounded-lg shadow-xl max-w-3xl max-h-[90vh] overflow-auto p-4">
                    <div class="flex justify-between mb-2">
                        <h3 class="text-lg font-medium">Product Image</h3>
                        <button type="button" @click="open = false" class="text-gray-400 hover:text-gray-500">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </button>
                    </div>
                    <div class="p-2 flex justify-center">
                        <img :src="imageUrl" :alt="altText" class="max-h-96 rounded-lg shadow-lg" />
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>

<style>
    [x-cloak] {
        display: none !important;
    }
</style>
