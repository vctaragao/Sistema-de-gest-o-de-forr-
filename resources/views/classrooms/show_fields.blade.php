<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{{ $classroom->id }}</p>
</div>

<!-- Branch Id Field -->
<div class="form-group">
    {!! Form::label('branch_id', 'Branch Id:') !!}
    <p>{{ $classroom->branch_id }}</p>
</div>

<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    <p>{{ $classroom->name }}</p>
</div>

<!-- Week Day Field -->
<div class="form-group">
    {!! Form::label('week_day', 'Week Day:') !!}
    <p>{{ $classroom->week_day }}</p>
</div>

<!-- Schedule Field -->
<div class="form-group">
    {!! Form::label('schedule', 'Schedule:') !!}
    <p>{{ $classroom->schedule }}</p>
</div>

<!-- Size Field -->
<div class="form-group">
    {!! Form::label('size', 'Size:') !!}
    <p>{{ $classroom->size }}</p>
</div>

<!-- Isactive Field -->
<div class="form-group">
    {!! Form::label('isActive', 'Isactive:') !!}
    <p>{{ $classroom->isActive }}</p>
</div>

<!-- Isopen Field -->
<div class="form-group">
    {!! Form::label('isOpen', 'Isopen:') !!}
    <p>{{ $classroom->isOpen }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $classroom->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $classroom->updated_at }}</p>
</div>

