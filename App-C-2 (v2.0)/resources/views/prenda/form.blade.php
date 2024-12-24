<style>
    .docker{
        display: flex; 
    }

    .circulo{
        background-size: cover;
        border-radius: 50%;
        margin: 0 auto;
        padding-top: 30px;
    }
    .centrar{
        display: grid;
        align-content: center;
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
            <label for="precio" class="form-label">{{ __('Precio (min. 0 - max. 9999.99)') }}</label>
            <input type="number" name="precio" class="form-control @error('precio') is-invalid @enderror" value="{{ old('precio', $prenda?->precio) }}" id="precio" placeholder="0" step="0.01">
            {!! $errors->first('precio', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="tiempo_uso" class="form-label">{{ __('Tiempo de Uso (en dias)') }}</label>
            <input type="text" name="tiempo_uso" class="form-control @error('tiempo_uso') is-invalid @enderror" value="{{ old('tiempo_uso', $prenda?->tiempo_uso) }}" id="tiempo_uso" placeholder="Tiempo de Uso" required>
            {!! $errors->first('tiempo_uso', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <!--Talla-->
        <div class="form-group mb-2 mb20">
            <label for="talla" class="form-label">{{ __('Talla (0 - 50)') }}</label>
            <input type="number" name="talla" class="form-control @error('talla') is-invalid @enderror" value="{{ old('talla', $prenda?->talla) }}" id="talla" placeholder="0">
            {!! $errors->first('talla', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <!--user ID-->
        <div class="form-group mb-2 mb20">
            <label for="user_id" class="form-label">{{ __('ID de usuario') }}</label>
            <input type="text" name="user_id" class="form-control @error('user_id') is-invalid @enderror" value="{{ old('user_id', Auth::id()) }}" id="user_id" placeholder="{{Auth::id()}}" style="pointer-events:none; cursor:no-drop" readonly>
            <p class="form-label">ID de usuario actual: {{Auth::id()}}</p>
            {!! $errors->first('user_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <!--Nombre de usuario-->
        <div class="form-group mb-2 mb20">
            <label for="user_name" class="form-label">{{ __('Nombre de usuario') }}</label>
            <input type="text" name="user_name" class="form-control @error('user_name') is-invalid @enderror" value="{{ old('user_name', Auth::user()->name) }}" id="user_name" placeholder="{{Auth::user()->name}}" style="pointer-events:none; cursor:no-drop" readonly>
            <p class="form-label">Nombre usuario actual: {{Auth::user()->name}}</p>
            {!! $errors->first('user_name', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <!--image-->
        @if ($prenda->id==null) <!--Si la prenda se esta creando muestra esto de aqui-->
        <div class="form-group mb-2 mb20">
            <label for="image" class="form-label">{{ __('Imagen') }}</label>
            <input type="file" name="image" class="form-control @error('image') is-invalid @enderror" value="{{ old('image', $prenda?->image) }}" id="image" required>
            {!! $errors->first('image', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        @else <!--Si la prenda se esta editando, muestra esto-->
        <div class="form-group mb-2 mb20">
            <label for="image" class="form-label">{{ __('Imagen') }}</label>
            <input type="file" name="image" class="form-control @error('image') is-invalid @enderror" value="{{ old('image', $prenda?->image) }}" id="image">
            {!! $errors->first('image', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
            @if($prenda->image)
                <p style="padding-top: 15px"><center>Vista anterior imagen</center></p>
                <div class="centrar">
                    <img src="{{ url('image-prenda/'. $prenda->id) }}" alt="Imagen previa" style="max-width: 50%; height: auto;" class="circulo">
                </div>
            @endif
        </div>
        @endif
    </div>
        <div class="docker">
            <div style="padding-right: 5px;">
                <a href="{{ route('prendas.index') }}" class="btn btn-primary"  data-placement="left" style="font-size: 15px">
                    {{ __('Cancelar') }}
                </a>
            </div>
            <div style="padding-left: 5px; padding-right:5px;">
                <button type="submit" class="btn btn-primary">{{ __('Listo') }}</button>
            </div>
        </div>
</div>