<div class="input-container mt-4">
    <select class="input" name={{$inputName}} id={{$inputName}} value='{{$inputValue}}'
        {{$inputRequired ? 'required' : ''}} onkeyup="this.setAttribute('value', this.value);">
        <option value="" hidden></option>
        {{ $slot }}
    </select>
    <label class="label" for={{$inputName}}>
        {{$inputLabel}} {{$inputRequired ? '*' : ''}}
    </label>
</div>
<small class="has-text-danger">
    {{$errors->first($inputName)}}
</small>
