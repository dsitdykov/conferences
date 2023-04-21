<div class="form-group py-1">
    <label for="title-input">{{ trans('app.title_label') }}</label>
    <input class="form-control" type="text" id="title-input" name="title" value="{{ old('title', optional($conference ?? null)->title) }}">
    @error('title')
    <small class="form-text text-muted">{{ $message }}</small>
    @enderror
</div>
<div class="form-group py-1">
    <label for="content-input">{{ trans('app.content_label') }}</label>
    <textarea class="form-control" id="content-input" name="content">{{ old('content', optional($conference ?? null)->content) }}</textarea>
    @error('content')
    <small class="form-text text-muted">{{ $message }}</small>
    @enderror
</div>
<div class="form-group py-1">
    <label for="address-input">{{ trans('app.address_label') }}</label>
    <input class="form-control" type="text" id="address-input" name="address" value="{{ old('address', optional($conference ?? null)->address) }}">
    @error('address')
    <small class="form-text text-muted">{{ $message }}</small>
    @enderror
</div>
<div class="form-group py-1">
    <label for="datetimepicker">{{ trans('app.datetime_label') }}</label>
    <input class="form-control" type="datetime-local" name="datetime" class="form-control datetimepicker-input" id="datetimepicker"
           value="{{ old('datetime', optional($conference ?? null)->datetime) }}">
    @error('datetime')
    <small class="form-text text-muted">{{ $message }}</small>
    @enderror
</div>


