<div class="card col-md-10 mx-auto m-2 p-2">
    <div class="card-body">
        <h5 class="card-title">{{ $conference['title']}}</h5>
        <h6 class="card-subtitle mb-2 text-muted">{{ $conference['datetime']}}</h6>

        <div class="btn-toolbar mt-3" role="toolbar" aria-label="Toolbar with button groups">
            <div class="d-inline-flex">
                <a href="{{ route('conferences.show', ['conference' => $conference['id']]) }}">
                    <button class="card-link btn btn-dark" type="button">{{ trans('app.view_btn') }}</button>
                </a>
                <div class="mx-2"></div>
            </div>
            @auth
            <div class="d-inline-flex">
                <a href="{{ route('conferences.edit', ['conference' => $conference['id']]) }}">
                    <button class="card-link btn btn-dark" type="button">{{ trans('app.edit_btn') }}</button>
                </a>
                <div class="mx-2"></div>
            </div>
            <div class="d-inline-flex">
                <form action="{{ route('conferences.destroy', ['conference' => $conference['id']]) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="card-link btn btn-dark" type="submit">{{ trans('app.delete_btn') }}</button>
                </form>
            </div>
            @endauth
        </div>
    </div>
</div>
