
<div style="padding:8px; width:75%; margin:10em;">
        <form method="POST" action="{{ route('chirps.store') }}">
            @csrf
            <textarea
                name="message"
                placeholder="{{ __('What\'s on your mind?') }}"
                
                style="display: inline-block; width: 100%; border-color: gray; "
            >{{ old('message') }}</textarea>
            <input :messages="$errors->get('message')" class="mt-2" />
            <button style="margin-top:8px;">{{ __('Chirp') }}</button>
        </form>
    </div>