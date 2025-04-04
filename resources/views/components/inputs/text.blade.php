@props([
//    make it similar to edit.blade.php
//so add value attributes
    'id',
     'name',
     'label' => null,
     'type' => 'text',
      'value' => '',
      'placeholder' => ''])

<div class="mb-4">
    @if($label)
        <label class="block text-gray-700 @error($name) text-red-500 @enderror" for="{{ $id }}">{{ $label }}</label>
    @endif
    <input
        id="{{ $id }}"
        type="{{ $type }}"
        name="{{ $name }}"
        {{--        refer to the existing value just type in--}}
        value="{{ old($name, $value) }}"
        class="w-full px-4 py-2 border rounded focus:outline-none @error($name) border-red-500 @enderror"
        placeholder="{{ $placeholder }}"
    />
    @error($name)
    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
    @enderror
</div>
