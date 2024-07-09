@props(['disabled' => false])

<select {{ $attributes->merge(['class' => 'form-select w-full bg-[#0f172a]/30']) }} {{ $disabled ? 'disabled' : '' }}>
    {{ $slot }}
</select>
