<button
    {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-2 bg-gray-800 white:bg-gray-200 border border-transparent rounded-md font-semibold text-xs text-white white:text-gray-800 uppercase tracking-widest hover:bg-gray-700 white:hover:bg-white focus:bg-gray-700 white:focus:bg-white active:bg-gray-900 white:active:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 white:focus:ring-offset-gray-800 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
