<form action="{{ $action }}" method="POST">
    @csrf

    {{ $slot }}

    <div>
        <button type="submit" class="btn btn-primary">{{ $buttonText ?? 'Submit' }}</button>
    </div>

</form>
