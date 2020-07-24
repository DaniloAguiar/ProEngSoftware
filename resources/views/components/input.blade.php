<div class="input-container mt-4">
    <input class="input " name={{$inputName}} id={{$inputName}} type={{$inputType}} value='{{$inputValue}}'
        {{$inputRequired ? 'required' : ''}} onkeyup="this.setAttribute('value', this.value);">
    <label class="label" for={{$inputName}}>
        {{$inputLabel}} {{$inputRequired ? '*' : ''}}
    </label>
</div>
<small class="has-text-danger">
    {{$errors->first($inputName)}}
</small>
