

<div class="form-group {{ $errors->has('first_name') ? 'has-error' : ''}}">
    <label for="first_name" class="control-label">{{ 'first_name' }}</label>
    <input class="form-control" name="first_name" type="text" id="first_name" value="{{ isset($employer->first_name) ? $employer->first_name : ''}}" >
    {!! $errors->first('first_name', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group {{ $errors->has('last_name') ? 'has-error' : ''}}">
    <label for="last_name" class="control-label">{{ 'last_name' }}</label>
    <input class="form-control" name="last_name" type="text" id="last_name" value="{{ isset($employer->last_name) ? $employer->last_name : ''}}" >
    {!! $errors->first('last_name', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group {{ $errors->has('salary') ? 'has-error' : ''}}">
    <label for="salary" class="control-label">{{ 'salary' }}</label>
    <input class="form-control" name="salary" type="text" id="salary" value="{{ isset($employer->salary) ? $employer->salary : ''}}" >
    {!! $errors->first('salary', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group {{ $errors->has('position') ? 'has-error' : ''}}">
    <label for="position" class="control-label">{{ 'position' }}</label>
    <input class="form-control" name="position" type="text" id="position" value="{{ isset($employer->position->position) ? $employer->position->position : ''}}" >
    {!! $errors->first('position', '<p class="help-block">:message</p>') !!}
</div>

<input type='hidden' value='{{ isset($employer->id) ? $employer->id : ''}}' name='employer_id'>




<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
