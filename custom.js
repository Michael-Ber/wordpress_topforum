/*AJAX*/

var page = 2;
jQuery(function($){
	$(document).ready(function(){
		$('body').on('click', '#more_posts', function() {
			var template = $(this).data('template');
			var data = {
				'action': 'load_posts_by_ajax',
				'page': page,
				'security': blog.security,
				'template': template
			};
			$.post(blog.ajaxurl, data, function(response) {
				// console.log(response);
				if($.trim(response) != '') {
					$('#row_append').append(response);
					page++;
				} else {
					$('#more_posts').hide();
				}
			});
		});
	});
});
/*AJAX*/