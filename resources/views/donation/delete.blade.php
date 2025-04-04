<form
    method="POST"
    action="{{ route('donation.destroy', $donation->id) }}"
    onsubmit="return confirm('Are you sure you want to delete this donation?');"
>
    @csrf @method('DELETE')
    <button
        type="submit"
        class="px-4 py-2 bg-red-500 hover:bg-red-600 text-white rounded"
    >
        Delete
    </button>
</form>
