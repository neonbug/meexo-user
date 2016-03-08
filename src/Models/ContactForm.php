<?php namespace Neonbug\ContactForm\Models;

class ContactForm extends \Neonbug\Common\Models\BaseModel {
	
	public function getRecepients()
	{
		$recepients = [];
		
		$arr = explode(',', $this->recepients);
		foreach ($arr as $item)
		{
			$recepients[] = trim($item);
		}
		
		return $recepients;
	}
	
}
