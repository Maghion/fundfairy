
<x-fund-fairy-layout>
    <h2 class='text-xl font-semibold mt-6'>Comments</h2>
    <div class="mt-4 pl-5 border-l-4 border-fuchsia-300 bg-fuchsia-50 rounded-md">
        <ul class='space-y-4'>
            <li class="p-4 border rounded-lg shadow-sm bg-white">

                <p class='font-semibold text-fuchsia-800'>{{ $comment->user->first_name }} {{ $comment->user->last_name }}</p>
                <p class='pl-3 italic text-gray-600'>"{{ $comment->comment }}"</p>
                <p class='text-sm text-fuchsia-950 font-bold'>Posted on {{ $comment->created_at->format('M d, Y') }}</p>

                {{--@can('update', $comment)--}}
                <div class="flex space-x-3 ml-2 py-2">

                    <a href="{{ route('comment.edit', $comment->id) }}"
                       class="px-4 py-2 bg-fuchsia-700 hover:bg-fuchsia-800 text-white rounded hover:no-underline hover:text-white">Edit</a>

                    <!-- Delete Form -->
                    <form method="POST" action="{{route('comment.destroy', $comment->id)}}" onsubmit="return confirm('Are you sure that you want to delete this comment?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit"
                                class="px-4 py-2 bg-yellow-500 hover:bg-yellow-700 text-white rounded">Delete
                        </button>
                    </form>
                    <!-- End Delete Form -->
                {{--@endcan--}}
            </li>
        </ul>
    </div>
</x-fund-fairy-layout>

