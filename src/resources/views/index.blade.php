<h1>User</h1>

@foreach ($items as $item)
	<div>
		<h2><a href="{{ route('user::slug::' . $item->slug) }}">{{ $item->{$item->getKeyName()} }}</a></h2>
		<strong>{{ date('d.m.Y', strtotime($item->updated_at)) }}</strong>
	</div>
@endforeach
