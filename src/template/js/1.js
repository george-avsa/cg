$( ".task_arrow_down" ).click(function() {
		$(".task_name, .task_clubname_deadline").toggleClass( "border-bottom" );
		$(".task_extra").slideToggle();
	});