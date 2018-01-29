@extends('layouts.app')

@section('title')
@endsection

@section('titlecontent')
    Alertas.
@endsection

@section('content')

		<!-- Modal -->
		<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h5 class="modal-title" id="exampleModalLabel">Buscar @yield('TitleModal') </h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      <div class="modal-body">
		        LISTA DE CLIENTES
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
		        <!--button type="button" class="btn btn-primary"></button-->
		      </div>
		    </div>
		  </div>
		</div>
	    <!--/modal -->

	<div>
		Generar Alertas
	</div>

	<div class="col-md-10 col-offset-2" style="margin-top: 100px;">
		<div class="form-group">
			<div class="col-lg-4">
				<label for="client">Nombre de Cliente:</label>
				<div class="input-group">
					<input type="text" class="form-control" aria-describedby="basic-addon1" id="namecli">
					<span class="input-group-btn">
						<!--button class="btn btn-info" type="button">+</button-->
						<!-- Button trigger modal -->
					    <button type="button" class="btn btn-info" data-toggle="modal" data-target="#exampleModal">
					    	@section('Tilemodal')
					    	@endsection
					      +
					    </button>
					    <!-- /button trigger modal -->
					</span>
				</div>
			</div>
			<div class="col-lg-4">
				<label for="number">Numero Cliente:</label>
					<div class="input-group">
					<input type="text" class="form-control" aria-describedby="basic-addon1" id="number">
					<span class="input-group-btn">
						<button class="btn btn-secondary" onclick="sendSms($('#number').val(), $('#namecli').val());">Enviar SMS</button>
					</span>
				</div>
			</div>			
		</div>
	</div>


@endsection

@section('scripts')
	<script type="text/javascript">
		$('#myModal').on('shown.bs.modal', function () {
  			$('#myInput').focus()
		})

		$.ajaxSetup({
        	headers: {
	 	       'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	        }
	    });


		function sendSms(phone, namecli){
			
			var parameters = {
				'phone'	: phone,
				'namecli' : namecli
			};
		    $.ajax({
			    // aqui va la ubicación de la página PHP
		      	type: 'POST',
		    	url: '/alertas',
		    	data: parameters,

		    	//data: { condicion: "ejecutarFuncion"},
		    	success:function(resultado){
		       // imprime "resultado Funcion"
		    		alert(resultado);
		    	}
			});
		  console.log('logrado');
		}
	</script>
@endsection