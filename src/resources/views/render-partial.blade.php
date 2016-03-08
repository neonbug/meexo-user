<div class="contact-form" data-id-contact-form="{{ $item->id_contact_form }}">
	<div class="contact-form-description">{!! $item->description !!}</div>
	
	<form>
		@foreach ($form_config['fields'] as $form_field)
			@include('contact_form::item-' . $form_field['type'], [ 'form_field' => $form_field ])
		@endforeach
		
		@if ($form_config['show_recaptcha'])
			<div class="g-recaptcha" data-sitekey="{{ $recaptcha_config['site_key'] }}"></div>
		@endif
		
		<button type="submit">{{ trans($form_config['submit_title']) }}</button>
	</form>
	
	<script type="template" class="success-message">
		{!! $item->thank_you_message !!}
	</script>
</div>
