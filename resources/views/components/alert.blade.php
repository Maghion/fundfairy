@props(['type', 'message'])

@if(session()->has('success') || session()-> has('warning') | session()->has('error'))
    <div
        x-data="{ show: true }"
        x-init="setTimeout(() => show = false, 5000)"
        x-show="show"
        class="p-4 mb-4 text-sm text-white {{ $type === 'success' ? 'bg-green-500' : ($type === 'warning' ? 'bg-yellow-500' : 'bg-red-500') }} rounded">
        {{ $message }}
    </div>
@endif
