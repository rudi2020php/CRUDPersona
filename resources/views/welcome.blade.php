
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <div class="card">
                <div class="card-header"><h1>{{ __('Cargar persona') }}</h1></div>

                <div class="card-body">
                <form action="{{route('persona.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form group m-2">
                <input type="text" name="name" id="">
                @error('name')
                <br>
                    <small class="text-danger">{{$message}}</small>
                @enderror
                </div>
                <input type="text" name="dpto" id="">
                @error('dpto')
                <br>
                    <small class="text-danger">{{$message}}</small>
                @enderror
                </div>
                
                 <button type="submit" class="btn btn-primary">Guardar</button>
                </form>
                </div>
                <div class="card-footer">
                
                </div>
                </div>
        </div>
    </div>
</div>

