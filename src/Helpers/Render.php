<?php namespace Neonbug\ContactForm\Helpers;

use App;

class Render {
	
	const PACKAGE_NAME  = 'contact_form';
	const CONFIG_PREFIX = 'neonbug.contact_form';
	
	public function partial($id_contact_form)
	{
		$model = config(static::CONFIG_PREFIX . '.model');
		$item = $model::find($id_contact_form);
		if ($item == null)
		{
			return null;
		}
		
		$config_key = $item->config;
		
		$language = App::make('Language');
		App::make('ResourceRepository')->inflateObjectWithValues($item, $language->id_language);
		
		$form_config      = config(static::CONFIG_PREFIX . '.frontend.' . $config_key);
		$recaptcha_config = config(static::CONFIG_PREFIX . '.recaptcha');
		
		return App::make('\Neonbug\Common\Helpers\CommonHelper')
			->loadView(static::PACKAGE_NAME, 'render-partial', [ 'item' => $item, 'form_config' => $form_config, 
				'recaptcha_config' => $recaptcha_config ]);
	}
}
