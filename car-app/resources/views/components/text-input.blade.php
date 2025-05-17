<!-- filepath: /home/nanorocks/Documents/mycar.nankov.mk/car-app/resources/views/components/text-input.blade.php -->
@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge([
    'class' =>
        'input w-full',
]) !!}>
