<div>{{ $title }}</div>

<table>
	@foreach ($data as $key=>$item)
	<tr>
		<th>{{ $key }}</th>
		<td>{{ $item }}</td>
	</tr>
	@endforeach
</table>
