<style>
    .docker{
        display: flex; 
    }
    .alinear {
        display: flex;
        align-items: center;
        justify-content: center;
        }
</style>
<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="id" class="form-label">{{ __('ID de usuario') }}</label>
            <input type="text" name="id" class="form-control @error('id') is-invalid @enderror" value="{{ old('id', Auth::id()) }}" id="id" placeholder="{{Auth::id()}}" style="pointer-events:none; cursor:no-drop">
            <p class="form-label">ID de usuario actual: {{Auth::id()}}</p>
            {!! $errors->first('id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        
        <div class="form-group mb-2 mb20">
            <label for="name" class="form-label">{{ __('Nombre de usuario') }}</label>
            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name', $user?->name) }}" id="name" placeholder="Name">
            {!! $errors->first('name', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="email" class="form-label">{{ __('Email') }}</label>
            <input type="text" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email', $user?->email) }}" id="email" placeholder="Email">
            {!! $errors->first('email', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        
        <div class="form-group mb-2 mb20">
            <label for="telefono" class="form-label">{{ __('Numero de Telefono') }}</label>
            <div class="alinear">

                <select name="extension_telefonica" id="extension_telefonica" required class="form-control" style="width: 90px">
                    <option value="Peru +51" selected>+51</option>
                    <option value="Mexico +52">+52</option>
                    <option value="Cuba +53">+53</option>
                    <option value="Argentina +54">+54</option>
                    <option value="Chile +56">+56</option>
                </select>
                    <input type="text" name="telefono" class="form-control @error('telefono') is-invalid @enderror" value="{{ old('telefono', $user?->telefono) }}" id="telefono" placeholder="Telefono">
                    {!! $errors->first('telefono', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
            </div>
        </div>

        <div class="form-group mb-2 mb20">
            <label for="imagen_perfil" class="form-label">{{ __('Foto de perfil') }}</label>
            <input type="file" name="imagen_perfil" class="form-control @error('imagen_perfil') is-invalid @enderror" value="{{ old('imagen_perfil', $user?->imagen_perfil) }}" id="imagen_perfil" placeholder="file">
            {!! $errors->first('imagen_perfil', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        
    </div>
    <div class="docker">
        <div style="padding-right: 5px">
            <a href="{{ route('users.index') }}" class="btn btn-primary"  data-placement="left" style="font-size: 15px">
                {{ __('Cancelar') }}
            </a>
        </div>
        <div class="padding-left: 5px; padding-right:5px;">
            <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
        </div>
    </div>

</div>