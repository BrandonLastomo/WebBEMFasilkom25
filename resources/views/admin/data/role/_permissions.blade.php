<div class="row">
	@foreach($permissions as $perm)
		<?php
			$per_found = null;

			if( isset($role) ) {
				$per_found = $role->hasPermissionTo($perm->name);
			}

			if( isset($user)) {
				$per_found = $user->hasDirectPermission($perm->name);
			}

			$labelName = Str::of($perm->name)->replace('_', ' ');
		?>
		<div class="col-sm-3">
			<div class="form-check">
				{!! Form::checkbox("permissions[]", $perm->name, $per_found, [$disabled ?? '']) !!}
        {!! Form::label($perm->id, $labelName, ['class' => 'form-check-label ' . (Str::contains($perm->name, 'Hapus') ? 'text-danger' : '')]) !!}
			</div>
		</div>
	@endforeach
</div>