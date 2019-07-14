

<div class="form-group {{ $errors->has('company_category') ? 'has-error' : ''}}">
    <label for="company_category" class="control-label">{{ 'Company Category' }}</label>
    <input class="form-control" name="company_category" type="text" id="company_category" value="{{ isset($company->company_category) ? $company->company_category : ''}}" >
    {!! $errors->first('company_category', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('company_description') ? 'has-error' : ''}}">
    <label for="company_description" class="control-label">{{ 'Company Description' }}</label>
    <textarea class="form-control" rows="5" name="company_description" type="textarea" id="company_description" >{{ isset($company->company_description) ? $company->company_description : ''}}</textarea>
    {!! $errors->first('company_description', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group {{ $errors->has('image') ? 'has-error' : ''}}">
    <label for="image" class="control-label">{{ 'Image' }}</label>
    <input class="form-control" name="image" type="file" id="image" value="{{ isset($company->image) ? $company->image : ''}}" >
    {!! $errors->first('image', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
