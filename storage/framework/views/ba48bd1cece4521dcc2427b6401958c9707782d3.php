<div class="modal fade" id="newBlogModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">
				<span aria-hidden="true">&times;</span>
				<span class="sr-only">Close</span>
			</button>
				<h4 class="modal-title" id="myModalLabel" style="font-weight: bold; text-align: center;"> SHARE YOUR THOUGHTS! </h4>
		</div>

		<div class="modal-body">

		<form class="form-horizontal" role="form" method="post" action="/post/<?php echo e($user->id); ?>">
			<?php echo e(csrf_field()); ?>


			<div class="form-group">
				<div class="col-sm-10">
					<input name="id" type="hidden" class="form-control" value="<?php echo e($user->id); ?>"/>
				</div>
			</div>

			<div class="form-group">
				<label class="col-sm-2 control-label">Subject</label>
				<div class="col-sm-10">
					<input name="subject" type="text" class="form-control" placeholder="Enter subject here.."/>
				</div>
			</div>

			<div class="form-group">
				<label class="col-sm-2 control-label">Body</label>
				<div class="col-sm-10">
					<textarea name="body" class="form-control" rows="15" placeholder="Enter body here.." style="resize: none;"></textarea>
					</div>
			</div>

			<div class="form-group" style="text-align: right;">
				<div class="col-sm-offset-2 col-sm-10">
					<button type="submit" class="btn btn-primary"> iPOST NOW! </button>
				</div>
			</div>
		</form>
		
		</div>
		</div>
	</div>
</div>
