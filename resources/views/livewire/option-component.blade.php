<div class="option">
    <h4>{{ $option->option_name }}</h4>
    @foreach ($option->optionValues as $key => $opValue)
        <label class="btn btn-secondary" for="option__{{ $opValue->id }}">{{ $opValue->option_value_name }}</label>
        <input {{ $key == 0 ? 'checked' : '' }} type="radio" name="option_{{ $option->id }}"
            id="option__{{ $opValue->id }}" value="{{ $opValue->id }}" />
    @endforeach
</div>
