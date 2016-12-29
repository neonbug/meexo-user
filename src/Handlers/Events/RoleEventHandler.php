<?php namespace Neonbug\User\Handlers\Events;

use App;

class RoleEventHandler
{
	/**
	* Register the listeners for the subscriber.
	*
	* @param  Illuminate\Events\Dispatcher  $events
	* @return void
	*/
	public function subscribe($events)
	{
		$events->listen('Neonbug\\Common\\Events\\AdminAddEditPrepareField', function($event) {
			if ($event->field['type'] != 'user_admin::add_fields.role') return;
			
			$roles = \Neonbug\Common\Models\Role::all();
			$roles_by_key = [];
			foreach ($roles as $role)
			{
				if ($role->id_role == 'admin') continue;
				$roles_by_key[$role->id_role] = $role->name;
			}
			
			$event->field['values'] = $roles_by_key;
			
			$selected_roles = [];
			if ($event->item != null)
			{
				foreach ($event->item->roles as $role)
				{
					$selected_roles[] = $role->id_role;
				}
			}
			$event->field['selected_roles'] = $selected_roles;
		});
	}
}
