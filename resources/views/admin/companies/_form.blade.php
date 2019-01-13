<form id='form__company'
      action="{{ isset($company)? '/admin/companies/'.$company->id : '/admin/companies' }}"
      method="POST" novalidate>

    @csrf

    @if(isset($company))
    @method('PATCH')
    @endif

    <div class="form-group required">
        <label class="form-col-form-label" for="name">Name</label>
        <input class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
               id="name" name="name" type="text"
               value="{{ old('name',isset($company)? $company->name : '') }}" required>
        <div class="invalid-feedback">{{ $errors->first('name') }}</div>
    </div>

    <h3>Address</h3>

    <div class="form-group">
        <label class="form-col-form-label" for="house_number">House Number</label>
        <input class="form-control{{ $errors->has('house_number') ? ' is-invalid' : '' }}"
               id="house_number" name="house_number" type="text"
               value="{{ old('house_number',isset($company)? $company->house_number : '') }}">
        <div class="invalid-feedback">{{ $errors->first('house_number') }}</div>
    </div>

    <div class="form-group">
        <label class="form-col-form-label" for="zip_code">Zip Code</label>
        <input class="form-control{{ $errors->has('zip_code') ? ' is-invalid' : '' }}"
               id="zip_code" name="zip_code" type="text"
               value="{{ old('zip_code',isset($company)? $company->zip_code : '') }}">
        <div class="invalid-feedback">{{ $errors->first('zip_code') }}</div>
    </div>

    <div class="form-group">
        <label class="form-col-form-label" for="street">Street</label>
        <input class="form-control{{ $errors->has('street') ? ' is-invalid' : '' }}"
               id="street" name="street" type="text"
               value="{{ old('street',isset($company)? $company->street : '') }}">
        <div class="invalid-feedback">{{ $errors->first('street') }}</div>
    </div>

    <div class="form-group required">
        <label for="city_id">City</label>
        <select name="city_id" class="select2 form-control{{ $errors->has('city_id') ? ' is-invalid' : '' }}" id="city_id" required>
            <option value="" selected disabled hidden>Choose City</option>
            @foreach($cities as $key => $name)
            <option value="{{ $key }}"
                    {{  old('city_id') != NULL ? (old('city_id') == $key ? 'selected' : '' ) : (isset($company)? ($company->city_id == $key ? 'selected' : '') :'')   }}        
                    >{{ $name }}</option>
            @endforeach
        </select>
        <div class="invalid-feedback">{{ $errors->first('city_id') }}</div>
    </div>

    <h3>Contact Information</h3>

    <div class="form-group required">
        <label class="form-col-form-label" for="contact_name">Contact Name</label>
        <input class="form-control{{ $errors->has('contact_name') ? ' is-invalid' : '' }}"
               id="contact_name" name="contact_name" type="text"
               value="{{ old('contact_name',isset($company)? $company->user->name : '') }}" required>
        <div class="invalid-feedback">{{ $errors->first('contact_name') }}</div>
    </div>

    <div class="form-group required">
        <label class="form-col-form-label" for="contact_email">Contact Email</label>
        <input class="form-control{{ $errors->has('contact_email') ? ' is-invalid' : '' }}"
               id="contact_email" name="contact_email" type="email"
               value="{{ old('contact_email',isset($company)? $company->user->email : '') }}" required>
        <div class="invalid-feedback">{{ $errors->first('contact_email') }}</div>
    </div>

    <div class="form-group">
        <label class="form-col-form-label" for="contact_phone">Contact Phone</label>
        <input class="form-control{{ $errors->has('contact_phone') ? ' is-invalid' : '' }}"
               id="contact_phone" name="contact_phone" type="text"
               value="{{ old('contact_phone',isset($company)? $company->phone : '') }}">
        <div class="invalid-feedback">{{ $errors->first('contact_phone') }}</div>
    </div>

    <h3>Information</h3>

    <div class="form-group">
        <label for="cities">Operating Cities</label>
        <select name="cities[]" class="select2 form-control{{ $errors->has('cities') ? ' is-invalid' : '' }}" id="cities" multiple>
            @foreach($cities as $key => $name)
            <option value="{{ $key }}"
                    {{  old('cities') != NULL ? ( in_array($key,old('cities')) ? 'selected' : '' ) : (isset($company)? (in_array($key,$company->cities->pluck('id')->toArray()) ? 'selected' : '') :'')   }}        
                    >{{ $name }}</option>
            @endforeach
        </select>
        <div class="invalid-feedback">{{ $errors->first('cities') }}</div>
    </div>

    <div class="form-group">
        <label for="categories">Operating Categories</label>
        <select name="categories[]" class="select2 form-control{{ $errors->has('categories') ? ' is-invalid' : '' }}" id="categories" multiple>
            @foreach($categories as $key => $name)
            <option value="{{ $key }}"
                    {{  old('categories') != NULL ? ( in_array($key,old('categories')) ? 'selected' : '' ) : (isset($company)? (in_array($key,$company->categories->pluck('id')->toArray()) ? 'selected' : '') :'')   }}        
                    >{{ $name }}</option>
            @endforeach
        </select>
        <div class="invalid-feedback">{{ $errors->first('categories') }}</div>
    </div>


</form>







