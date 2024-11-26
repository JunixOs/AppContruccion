<style>
    .docker{
        display: flex; 
    }
</style>
<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="descripcion" class="form-label">{{ __('Descripcion (max. 255 palabras)') }}</label>
            <input type="text" name="descripcion" class="form-control @error('descripcion') is-invalid @enderror" value="{{ old('descripcion', $prenda?->descripcion) }}" id="descripcion" placeholder="Descripcion">
            {!! $errors->first('descripcion', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="precio" class="form-label">{{ __('Precio') }}</label>
            <input type="number" name="precio" class="form-control @error('precio') is-invalid @enderror" value="{{ old('precio', $prenda?->precio) }}" id="precio" placeholder="0">
            {!! $errors->first('precio', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="tiempo_uso" class="form-label">{{ __('Tiempo de Uso (en dias)') }}</label>
            <input type="text" name="tiempo_uso" class="form-control @error('tiempo_uso') is-invalid @enderror" value="{{ old('tiempo_uso', $prenda?->tiempo_uso) }}" id="tiempo_uso" placeholder="Tiempo de Uso" required>
            {!! $errors->first('tiempo_uso', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <!--user ID-->
        <div class="form-group mb-2 mb20">
            <label for="user_id" class="form-label">{{ __('ID de usuario') }}</label>
            <input type="text" name="user_id" class="form-control @error('user_id') is-invalid @enderror" value="{{ old('user_id', Auth::id()) }}" id="user_id" placeholder="{{Auth::id()}}" style="pointer-events:none; cursor:no-drop">
            <p class="form-label">ID de usuario actual: {{Auth::id()}}</p>
            {!! $errors->first('user_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <!--image-->
        <div class="form-group mb-2 mb20">
            <label for="image" class="form-label">{{ __('Imagen') }}</label>
            <input type="file" name="image" class="form-control @error('image') is-invalid @enderror" value="{{ old('image', $prenda?->image) }}" id="image" placeholder="Imagen" required>
            {!! $errors->first('image', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
            @if(session('image'))
                <img src="{{ session('image') }}" alt="Imagen previa" width="100">
            @endif
        </div>
        </div>
        <div class="docker">
            <div style="padding-right: 5px">
                <a href="{{ route('prendas.index') }}" class="btn btn-primary"  data-placement="left" style="font-size: 15px">
                    {{ __('Cancelar') }}
                </a>
            </div>
            <div style="padding-left: 5px; padding-right:5px">
                <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
            </div>

        </div>
</div>