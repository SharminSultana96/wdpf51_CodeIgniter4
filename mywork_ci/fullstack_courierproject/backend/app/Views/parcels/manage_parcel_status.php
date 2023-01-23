<div class="container-fluid">
	<form action="" id="update_status">
		<!-- <input type="hidden" name="id" value="<?php //echo $_GET['id'] ?>"> -->
		<div class="modal fade" id="uni_modal_right" role="dialog">
			<div class="modal-dialog modal-full-height modal-md" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title"></h5>
					
					</div>

				</div>

			</div>

		</div>
		
	</form>
</div>

<div class="modal-footer display p-0 m-0">
        <button class="btn btn-primary" form="update_status">Update</button>
        <button type="button" class="btn btn-secondary" onclick="uni_modal('Parcel\'s Details','view_parcel.php?id=<?php echo $_GET['id'] ?>','large')">Close</button>
</div>
<style>
	#uni_modal .modal-footer{
		display: none
	}
	#uni_modal .modal-footer.display{
		display: flex
	}
</style>
<script>
	$('#update_status').submit(function(e){
		e.preventDefault()
		start_load()
		$.ajax({
			url:'ajax.php?action=update_parcel',
			method:'POST',
			data:$(this).serialize(),
			error:(err)=>{
				console.log(err)
				alert_toast('An error occured.',"error")
				end_load()
			},
			success:function(resp){
				if(resp==1){
					alert_toast("Parcel's Status successfully updated",'success');
					setTimeout(function(){
						location.reload()
					},750)
				}
			}
		})
	})
</script>