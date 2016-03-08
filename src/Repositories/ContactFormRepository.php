<?php namespace Neonbug\ContactForm\Repositories;

class ContactFormRepository {
	
	const CONFIG_PREFIX = 'neonbug.contact_form';
	
	protected $latest_items_limit = 20;
	protected $model;
	
	public function __construct()
	{
		$this->model = config(static::CONFIG_PREFIX . '.model');
	}
	
	public function getLatest()
	{
		$model = $this->model;
		return $model::orderBy('updated_at', 'DESC')
			->limit($this->latest_items_limit)
			->get();
	}
	
	public function getForAdminList()
	{
		$model = $this->model;
		return $model::all();
	}
	
	public function structuredItemsForConfigDropdown()
	{
		$form_configs = config(static::CONFIG_PREFIX . '.frontend');
		$values = [];
		foreach ($form_configs as $key=>$val)
		{
			$trans_key = 'contact_form::admin.add.config.' . $key;
			$trans_val = trans($trans_key);
			if ($trans_val == $trans_key) //no translation available
			{
				$trans_val = $key;
			}
			
			$values[$key] = $trans_val;
		}
		
		return $values;
	}
	
}
