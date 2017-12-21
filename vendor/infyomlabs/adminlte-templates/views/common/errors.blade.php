@if(!empty($errors))
    @if($errors->any())
        <div class="alert alert-danger ">
            <button type="button" aria-hidden="true" class="close">
                <i class="material-icons">close</i>
            </button>
        <ul class="">
            @foreach($errors->all() as $error)
                <li>{!! $error !!}</li>
            @endforeach
        </ul>
        </div>
    @endif
@endif
