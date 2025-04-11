
<x-fund-fairy-layout>
    <x-slot name="title">{{ $title }}</x-slot>
    <h1 class="text-3xl font-bold text-gray-800 text-center mb-4">{{ $title }}</h1>
    <div class="flex justify-center items-center">
        <form class="w-full max-w-lg" method="POST" action="{{ route('comment.update', $comment->id) }}" enctype="multipart/form-data">
            @csrf
            @method("PUT")

                <div class="w-full px-3 mb-6 mt-3 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-comment">
                        Comment
                    </label>
                    <textarea class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white resize-none h-32"
                              id="comment"
                              name="comment"
                              placeholder="edit here">{{ old('comment', $comment->comment) }}</textarea>
                    @error('comment')
                    <div class="text-red-500 mt-2 text-sm">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Edit Button -->
                <div class="w-full px-3 mb-6 md:mb-0 flex justify-center items-center">
                <button type="submit" class="w-full bg-fuchsia-700 hover:bg-fuchsia-950 text-white px-4 py-2 my-3 rounded focus:outline-none">
                    Edit
                </button>
                </div>
            </div>
        </form>
    </div>
</x-fund-fairy-layout>

