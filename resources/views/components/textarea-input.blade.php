@props(['disabled' => false])

<textarea @disabled($disabled) {{ $attributes->merge(['class' => 'border-gray-300 focus:border-sky-700 focus:ring-sky-700 rounded-md shadow-sm px-2 py-1']) }}>{{ $slot }}</textarea>
