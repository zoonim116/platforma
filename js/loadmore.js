jQuery(function($){
	$('#load_more_documents').click(function(e){
    e.preventDefault();
    e.stopPropagation();
		var button = $(this),
		    data = {
  			'action': 'loadmore',
  			'query': loadmore_params.posts, // that's how we get params from wp_localize_script() function
  			'page' : loadmore_params.current_page
  		};
		$.ajax({
			url : loadmore_params.ajaxurl, // AJAX handler
			data : data,
			type : 'POST',
			beforeSend : function ( xhr ) {
				button.text('Loading...'); // change the button text, you can also add a preloader image
			},
			success : function( data ){
				if( data ) {
					button.text( 'More posts' ).prev().before(data); // insert new posts
					loadmore_params.current_page++;

					if ( loadmore_params.current_page == loadmore_params.max_page )
						button.remove(); // if last page, remove the button

          return false;
				} else {
					button.remove(); // if no data, remove the button as well
          return false;
				}
			}

		});
	});

	$('#load_more_news_sidebar').click(function(e){
    e.preventDefault();
    e.stopPropagation();
		var button = $(this),
		    data = {
  			'action': 'loadmore_sidebar_news',
  			'query': loadmore_sidebar_news_params.posts, // that's how we get params from wp_localize_script() function
  			'page' : loadmore_sidebar_news_params.current_page
  		};
		$.ajax({
			url : loadmore_sidebar_news_params.ajaxurl, // AJAX handler
			data : data,
			type : 'POST',
			beforeSend : function ( xhr ) {
				button.text('Loading...'); // change the button text, you can also add a preloader image
			},
			success : function( data ){
				if( data ) {
					button.text( 'More posts' ).prev().before(data); // insert new posts
					loadmore_sidebar_news_params.current_page++;

					if ( loadmore_sidebar_news_params.current_page == loadmore_sidebar_news_params.max_page )
						button.remove(); // if last page, remove the button

          return false;
				} else {
					button.remove(); // if no data, remove the button as well
          return false;
				}
			}

		});
	});

	$('#more_future').click(function(e){
    e.preventDefault();
    e.stopPropagation();
		var button = $(this),
		    data = {
  			'action': 'loadmore_future_events',
  			'query': loadmore_future_events.posts, // that's how we get params from wp_localize_script() function
  			'page' : loadmore_future_events.current_page
  		};
		$.ajax({
			url : loadmore_future_events.ajaxurl, // AJAX handler
			data : data,
			type : 'POST',
			beforeSend : function ( xhr ) {
				button.text('Loading...'); // change the button text, you can also add a preloader image
			},
			success : function( data ){
				if( data ) {
					button.text( 'More posts' ).prev().before(data); // insert new posts
					loadmore_future_events.current_page++;

					if ( loadmore_future_events.current_page == loadmore_future_events.max_page )
						button.remove(); // if last page, remove the button

          return false;
				} else {
					button.remove(); // if no data, remove the button as well
          return false;
				}
			}

		});
	});

	$('#more_post').click(function(e){
    e.preventDefault();
    e.stopPropagation();
		var button = $(this),
		    data = {
  			'action': 'loadmore_past_events',
  			'query': loadmore_past_events.posts, // that's how we get params from wp_localize_script() function
  			'page' : loadmore_past_events.current_page
  		};
		$.ajax({
			url : loadmore_past_events.ajaxurl, // AJAX handler
			data : data,
			type : 'POST',
			beforeSend : function ( xhr ) {
				button.text('Loading...'); // change the button text, you can also add a preloader image
			},
			success : function( data ){
				if( data ) {
					button.text( 'More posts' ).prev().before(data); // insert new posts
					loadmore_past_events.current_page++;

					if ( loadmore_past_events.current_page == loadmore_past_events.max_page )
						button.remove(); // if last page, remove the button

          return false;
				} else {
					button.remove(); // if no data, remove the button as well
          return false;
				}
			}

		});
	});
});
