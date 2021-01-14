$('select#category_type').on('change', function() {
	window.location.href = location.protocol + '//' + location.host + location.pathname + "?type=" + this.value;
});