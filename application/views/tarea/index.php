<div class="container">
	<h3>Lista de tareas</h3>
	<div class="alert alert-success" style="display: none;">
		
	</div>
	<button id="btnAdd" class="btn btn-success">Add New</button>
	<table class="table table-bordered table-responsive" style="margin-top: 20px;">
		<thead>
			<tr>
				<td>ID</td>
				<td>Nombre de tarea</td>
				<td>Emplado</td>
				<td>Cantidad de horas</td>
				<td>Horas por día</td>
				<td>Creado en</td>
	 			<td>Acción</td>
			</tr>
		</thead>
		<tbody id="showdata">
			
		</tbody>
	</table>
</div>

<div id="myModal" class="modal fade" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Modal title</h4>
      </div>
      <div class="modal-body">
        	<form id="myForm" action="" method="post" class="form-horizontal">
        		<input type="hidden" name="txtId" value="0">
        		<div class="form-group">
        			<label for="nombre" class="label-control col-md-4">Nombre de tarea</label>
        			<div class="col-md-8">
        				<input type="text" name="txtNombre" class="form-control">
        			</div>
        		</div>
        		<div class="form-group">
        			<label for="cant_horas" class="label-control col-md-4">Cantidad Horas</label>
        			<div class="col-md-8">
        				<input type="text" class="form-control" name="txtCant_horas">
        			</div>
				</div>
				<div class="form-group">
        			<label for="cant_h_x_d" class="label-control col-md-4">Horas por día</label>
        			<div class="col-md-8">
        				<input type="text" name="txtCant_h_x_d" class="form-control">
        			</div>
				</div>
				<div class="form-group">
        			<label for="id_employee" class="label-control col-md-4">ID Empleado</label>
        			<div class="col-md-8">
        				<input type="text" name="txtIDEmpleado" class="form-control">
        			</div>
				</div>
			</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" id="btnSave" class="btn btn-primary">Save changes</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div id="deleteModal" class="modal fade" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Confirm Delete</h4>
      </div>
      <div class="modal-body">
        	Do you want to delete this record?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" id="btnDelete" class="btn btn-danger">Delete</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<script>
	$(function(){
		showAllTarea();

		//Add New
		$('#btnAdd').click(function(){
			$('#myModal').modal('show');
			$('#myModal').find('.modal-title').text('Add New Tarea');
			// $('#myForm').attr('action', '<?php echo base_url() ?>tarea/addTarea');
			$('#myForm').attr('action', 'http://localhost/CIAjaxCRUD/index.php/tarea/addTarea');
		});


		$('#btnSave').click(function(){
			var url = $('#myForm').attr('action');
			var data = $('#myForm').serialize();
			//validate form
			var tareaNombre = $('input[name=txtNombre]');
			var cant_horas = $('input[name=txtCant_horas]');
			var cant_h_x_d = $('input[name=txtCant_h_x_d]');
			var result = '';
			if(tareaNombre.val()==''){
				tareaNombre.parent().parent().addClass('has-error');
			}else{
				tareaNombre.parent().parent().removeClass('has-error');
				result +='1';
			}
			if(cant_horas.val()==''){
				cant_horas.parent().parent().addClass('has-error');
			}else{
				cant_horas.parent().parent().removeClass('has-error');
				result +='2';
			}
			if(cant_h_x_d.val()==''){
				cant_h_x_d.parent().parent().addClass('has-error');
			}else{
				cant_h_x_d.parent().parent().removeClass('has-error');
				result +='3';
			}
			
			var id_employee = $('input[name=txtIDEmpleado]');

			//////////////   No funciona
			// $.ajax({
			// 	type: 'ajax',
			// 	// method: 'get',
			// 	url: http://localhost/CIAjaxCRUD/index.php/employee/showAllEmployee',
			// 	async: false,
			// 	dataType: 'json',
			// 	success: function(data){

			// 		if(data){
            //                     alert(data)
            //                 }
            //                 else{
            //                     alert("error")
			// 				}
							
			// 	//	$('input[name=txtIDEmpleado]').val(data.id);
			// 	// console.log(data);
			// 	//   var html = '';
			// 	//  	var i;
			// 	//  	for(i=0; i<data.length; i++){
					
			// 	//  		html +='<tr>'+
			// 	//  					'<td>'+data[i].id+'</td>'+
			// 	//  					'<td>'+data[i].employee_name+'</td>'+
			// 	// 					'<td>'+data[i].id_employee+'</td>'+
			// 	// 					'<td>'+data[i].cant_horas+'</td>'+
			// 	// 					'<td>'+data[i].cant_h_x_d+'</td>'+
			// 	// 					'<td>'+data[i].creada_en+'</td>'+
			// 	 					'<td>'+
			// 	// 						'<a href="javascript:;" class="btn btn-info item-edit" data="'+data[i].id_tarea+'">Edit</a>'+
			// 	// 						'<a href="javascript:;" class="btn btn-danger item-delete" data="'+data[i].id_tarea+'">Delete</a>'+
			// 	// 					'</td>'+
			// 	// 			    '</tr>';
			// 	 	}
			// 	// 	$('#showdata').html(html);
			// 	},
			// 	error: function(){
			// 		alert('Could not get Data from Database');

			// 	}
			// });

			// console.log(data);
			
			if(result=='123'){
				$.ajax({
					type: 'ajax',
					method: 'post',
					url: url,
					data: data,
					async: false,
					dataType: 'json',
					success: function(response){
						if(response.success){
							$('#myModal').modal('hide');
							$('#myForm')[0].reset();
							if(response.type=='add'){
								var type = 'added'
							}else if(response.type=='update'){
								var type ="updated"
							}
							$('.alert-success').html('Tarea '+type+' successfully').fadeIn().delay(4000).fadeOut('slow');
							showAllTarea();
						}else{
							alert('Error');
						}
					},
					error: function(){
						alert('Could not add data');
					}
				});
			}
		});

		//edit
		$('#showdata').on('click', '.item-edit', function(){
			var id = $(this).attr('data');
			$('#myModal').modal('show');
			$('#myModal').find('.modal-title').text('Edit Tarea');
			// $('#myForm').attr('action', '<?php echo base_url() ?>tarea/updateTarea');
			$('#myForm').attr('action', 'http://localhost/CIAjaxCRUD/index.php/tarea/updateTarea');
			$.ajax({
				type: 'ajax',
				method: 'get',
				// url: '<?php echo base_url() ?>tarea/editTarea',
				url: 'http://localhost/CIAjaxCRUD/index.php/tarea/editTarea',
				data: {id_tarea: id},
				async: false,
				dataType: 'json',
				success: function(data){
					$('input[name=txtNombre]').val(data.nombre);
					$('input[name=txtCant_horas]').val(data.cant_horas);
					$('input[name=txtCant_h_x_d]').val(data.cant_h_x_d);
					$('input[name=txtId]').val(data.id_tarea);
				},
				error: function(){
					alert('Could not Edit Data');
				}
			});
		});

		//delete- 
		$('#showdata').on('click', '.item-delete', function(){
			var id = $(this).attr('data');
			$('#deleteModal').modal('show');
			//prevent previous handler - unbind()
			$('#btnDelete').unbind().click(function(){
				$.ajax({
					type: 'ajax',
					method: 'get',
					async: false,
					url: '<?php echo base_url() ?>tarea/deleteTarea',
					// url: 'http://localhost/CIAjaxCRUD/index.php/tarea/deleteTarea',
					data:{id_tarea: id},
					dataType: 'json',
					success: function(response){
						if(response.success){
							$('#deleteModal').modal('hide');
							$('.alert-success').html('Tarea Deleted successfully').fadeIn().delay(4000).fadeOut('slow');
							showAllTarea();
						}else{
							alert('Error');
						}
					},
					error: function(){
						alert('Error deleting');
					}
				});
			});
		});




		//function
		function showAllTarea(){
			$.ajax({
				type: 'ajax',
				// url: '<?php echo base_url() ?>Tarea/showAllTarea',
				url: 'http://localhost/CIAjaxCRUD/index.php/tarea/showalltarea',
				async: false,
				dataType: 'json',
				success: function(data){
 //console.log(data);
					var html = '';
					var i;
					for(i=0; i<data.length; i++){
					
						html +='<tr>'+
									'<td>'+data[i].id_tarea+'</td>'+
									'<td>'+data[i].nombre+'</td>'+
									'<td>'+data[i].id_employee+'</td>'+
									'<td>'+data[i].cant_horas+'</td>'+
									'<td>'+data[i].cant_h_x_d+'</td>'+
									'<td>'+data[i].creada_en+'</td>'+
									'<td>'+
										'<a href="javascript:;" class="btn btn-info item-edit" data="'+data[i].id_tarea+'">Edit</a>'+
										'<a href="javascript:;" class="btn btn-danger item-delete" data="'+data[i].id_tarea+'">Delete</a>'+
									'</td>'+
							    '</tr>';
					}
					$('#showdata').html(html);
				},
				error: function(){
					alert('Could not get Data from Database');
				}
			});
		}
	});
</script>