<h2>New Group</h2>
	<form class="form-horizontal" action="actions/add_group.php" method="post">
		<div class="control-group">
		<label class="control-label" for="group_name">Group Name</label>
			<div class="controls">
				<?php echo input('group_name','required')?>
			</div>
		</div>
		<div class="form-actions">
  			<button type="submit" class="btn btn-success"><i class="icon-plus-sign icon-white"></i> Add Group</button>
  			<button type="button" class="btn">Cancel</button>
		</div>
	</form>