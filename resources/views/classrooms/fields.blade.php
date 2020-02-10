<!-- Branch Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('branch_id', 'Branch Id:') !!}
    {!! Form::select('branch_id', ['id' => 'Branch'], null, ['class' => 'form-control']) !!}
</div>

<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Week Day Field -->
<div class="form-group col-sm-6">
    {!! Form::label('week_day', 'Week Day:') !!}
    {!! Form::text('week_day', null, ['class' => 'form-control']) !!}
</div>

<!-- Schedule Field -->
<div class="form-group col-sm-6">
    {!! Form::label('schedule', 'Schedule:') !!}
    {!! Form::text('schedule', null, ['class' => 'form-control']) !!}
</div>

<!-- Size Field -->
<div class="form-group col-sm-6">
    {!! Form::label('size', 'Size:') !!}
    {!! Form::text('size', null, ['class' => 'form-control']) !!}
</div>

<!-- Isactive Field -->
<div class="form-group col-sm-6">
    {!! Form::label('isActive', 'Isactive:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('isActive', 0) !!}
        {!! Form::checkbox('isActive', '1', null) !!}
    </label>
</div>


<!-- Isopen Field -->
<div class="form-group col-sm-6">
    {!! Form::label('isOpen', 'Isopen:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('isOpen', 0) !!}
        {!! Form::checkbox('isOpen', '1', null) !!}
    </label>
</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('classrooms.index') }}" class="btn btn-default">Cancel</a>
</div>
