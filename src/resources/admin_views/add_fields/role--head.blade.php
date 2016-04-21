<script type="text/javascript">
var trans = {
};

var config = {
};

$(document).ready(function() {
	$('.role-administrator-check > .ui.checkbox').checkbox({
		fireOnInit: true, 
		onChange: function() {
			var $checkbox = $(this).parent();
			var $dropdown_container = $('[name="' + $checkbox.data('name') + '"]').parent();
			
			$dropdown_container.toggleClass('disabled', $checkbox.checkbox('is checked'));
		}
	});
});
</script>
