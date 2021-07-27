@extends('adminlte::page')
<div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h2>{{ __('Actualizar Persona') }}</h2>
                </div>

                <div class="card-body">
                    <form action="{{route('persona.update', $persona)}}" method="POST" enctype="multipart/form-data">

                        @csrf
                        @method('put')

                        <div class="form group m-2 ml-5">
                            <div class="mt-2">
                                <input type="text" value="{{$persona->name}}" name="name" id="">
                                <input type="text" value="{{$persona->dpto_id}}" name="dpto">
                                @error('file')
                                <br>
                                <small class="text-danger">{{$message}}</small>
                                @enderror
                                <button type="submit" class="btn btn-primary">Actualizar</button>
                            </div>
                    </form>
                </div>
                <div class="card-footer">

                </div>
            </div>
        </div>
    </div>
</div>