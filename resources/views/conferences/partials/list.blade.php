<div>
    <h2>{{ $conference['title']}}</h2>
    <p>{{ $conference['content']}}</p>
    <p>{{ $conference['address']}}</p>
    <p>{{ $conference['datetime']}}</p>
    @auth
    <a href="{{ route('conferences.edit', ['conference' => $conference['id']]) }}"><button type="button">{{ trans('app.edit_btn') }}</button></a>
    <form action="{{ route('conferences.destroy', ['conference' => $conference['id']]) }}" method="POST">
        @csrf
        @method('DELETE')
        <button class="btn btn-dark" type="submit">{{ trans('app.delete_btn') }}</button>
    </form>
    <br>
    @endauth
</div>
