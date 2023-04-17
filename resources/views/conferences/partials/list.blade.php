<div>
    <h2>{{ $conference['title']}}</h2>
    <p>{{ $conference['content']}}</p>
    <p>{{ $conference['datetime']}}</p>
    @auth
    <a href="{{ route('conferences.edit', ['conference' => $conference['id']]) }}"><button type="button">Edit</button></a>
    <form action="{{ route('conferences.destroy', ['conference' => $conference['id']]) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
    </form>
    <br>
    @endauth
</div>
