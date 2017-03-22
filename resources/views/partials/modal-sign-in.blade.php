<!-- Sign In Modal -->
<div class="modal fade" id="signInModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
		
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">
				<span aria-hidden="true">&times;</span>
				<span class="sr-only">Close</span>
			</button>
				<h4 class="modal-title" id="myModalLabel" style="font-weight: bold; text-align: center;"> ALREADY A MEMBER? </h4>
		</div>

		<div class="modal-body">

		<!-- FORM -->
		<form class="form-horizontal" role="form" method="post" action="/profile">
			{{ csrf_field()}}

			<div class="form-group">
				<label class="col-sm-2 control-label">Username</label>
				<div class="col-sm-10">
					<input name="userLogIn" type="text" class="form-control" placeholder="Enter username here.."/>
				</div>
			</div>

			<div class="form-group">
				<label class="col-sm-2 control-label">Password</label>
				<div class="col-sm-10">
					<input name="userPassword" type="password" class="form-control" placeholder="Enter password here.."/>
				</div>
			</div>
	
			<div class="form-group">
				<div class="col-sm-offset-2 col-sm-10">
					<button type="submit" class="btn btn-primary">Sign In</button>
				</div>
			</div>
		</form>

		</div>

		<div class="modal-footer">
			<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
		</div>

		</div>
	</div>
</div>
