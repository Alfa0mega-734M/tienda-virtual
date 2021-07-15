@extends('layaouts.principal')
@section('contenido')
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-4 offset-lg-4 margin-top-login">
                <form id="form-iniciar-sesion">
                    @csrf
                    <div class="form-group">
                      <input type="email" name="email" class="form-control" placeholder="Ingrese su correo electrónico">                      
                    </div>
                    <div class="form-group">
                      <input type="password" name="password" class="form-control" placeholder="Ingrese su contraseña">
                    </div>
                    <button id="btn-enviar-formulario" type="button" class="btn btn-primary mt-4">Ingresar</button>
                  </form>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        $('#btn-enviar-formulario').click( function(){
            let formulario = $('#form-iniciar-sesion').serialize();
            
            $.ajax({
                method: 'POST',
                url: '/validacion-login',
                data: formulario,
                success: function (res){
                    console.log(res);
                },
                error: function(error){
                    let errores = error.responseJSON.errors;
                    if (errores.hasOwnProperty('email')){
                        console.log(errores['email'][0]);
                    }else{
                        console.log(errores['password'][0]);
                    }
                    
                }
            });
        });   
    </script>  
@endsection