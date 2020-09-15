<a {{ $attributes->merge(['class' => "$active"]) }} href="{{ $url }}" @if($external) target="_blank" @endif>
    {{ $slot }}
</a>
