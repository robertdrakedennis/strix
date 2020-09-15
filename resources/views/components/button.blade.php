@if($buttonType === 'link')
    <a
        href="{{ $url }}"
        {{ $attributes }}
        @if($external) target="_blank" @endif
    >
        {{ $slot }}
    </a>
@endif

@if($buttonType === 'button')
    <button
        type="{{ $buttonType }}"
        {{ $attributes }}
    >
        {{ $slot }}
    </button>
@endif

@if($buttonType === 'submit')
    <button
        type="{{ $buttonType }}"
        {{ $attributes }}
    >
        {{ $slot }}
    </button>
@endif
