@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {{ $attributes->merge([
    'type' => 'checkbox',
    'class' => 'rounded border-gray-300 dark:bg-gray-900 dark:border-gray-800 text-primary-600 shadow-sm focus:border-primary-300 dark:focus:border-gray-600 focus:ring focus:ring-primary-200 dark:focus:ring-gray-900 focus:ring-opacity-50 dark:focus:ring-offset-gray-900'
]) }}>
