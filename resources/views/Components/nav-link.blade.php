@props(['active' => false, 'version' => 'd', 'type' => 'a'])

@php
    $active_class = 'bg-gray-900 text-white ';
    $inactive_class = 'text-gray-300 hover:bg-gray-700 hover:text-white';
    if ($version == 'd') {
        $add_on = 'rounded-md px-3 py-2 text-sm font-medium';
    } else if ($version == 'm') {
        //$active_class = 'bg-gray-900 text-white';
        //$inactive_class = 'text-gray-300 hover:bg-gray-700 hover:text-white';
        $add_on = 'px-3 py-2 text-base font-medium block rounded-md';
    }
@endphp
<?php  if ($type == 'a'): ?>
<a class="{{ $active ? $active_class : $inactive_class}} {{ $add_on }}" aria-current="{{ $active ? 'page' : 'false'}}"
    {{ $attributes }}>
    {{ $slot }}</a>
<?php else: ?>
<button class="{{ $active ? $active_class : $inactive_class}} {{ $add_on }}"
    aria-current="{{ $active ? 'page' : 'false'}}" {{ $attributes }}>
    {{ $slot }}</button>
<?php endif;?>

<!-- or -->
<!-- blade format -->
{{-- @if ($type == 'a')
<a class="{{ $active ? $active_class : $inactive_class}} {{ $add_on }}" aria-current="{{ $active ? 'page' : 'false'}}"
    {{ $attributes }}>
    {{ $slot }}</a>
@elseif ($type == 'b')
<button class="{{ $active ? $active_class : $inactive_class}} {{ $add_on }}"
    aria-current="{{ $active ? 'page' : 'false'}}" {{ $attributes }}>
    {{ $slot }}</button>
@endif --}}