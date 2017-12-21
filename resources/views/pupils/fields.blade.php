<!-- Full Name Field -->
<div class="form-group col-sm-12 label-floating is-empty">
    {!! Form::label('full_name', 'Full Name',['class' => 'control-label']) !!}
    {!! Form::text('full_name', null, ['class' => 'form-control']) !!}
</div>

<!-- Class Id Field -->
<div class="form-group col-sm-12  is-empty">
    {!! Form::label('class_id', 'Class',['class' => 'control-label']) !!}
    {{--{!! Form::number('class_id', null, ['class' => 'form-control']) !!}--}}
    <select name="class_id" class="form-control">
        <option value="">select class</option>
        @if(count($classes))
            @foreach($classes as $class)
                <option value="{{ $class->id }}">{{ $class->name }}</option>
                @endforeach
            @endif
    </select>
</div>

<!-- Parent Id Field -->
<div class="form-group col-sm-12  is-empty">
    {!! Form::label('parent_id', 'Parent ',['class' => 'control-label']) !!}
    <select name="parent_id" class="form-control">
        <option value="">select parent</option>
        @if(count($parents))
            @foreach($parents as $parent)
                <option value="{{ $parent->id }}">{{ $parent->full_name }}</option>
            @endforeach
        @endif
    </select>
</div>


