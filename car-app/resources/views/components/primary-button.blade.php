<button {{ $attributes->merge(['type' => 'submit', 'class' => 'btn btn-primary btn-sm inline-flex items-center rounded-md font-semibold text-xs uppercase tracking-widest transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>