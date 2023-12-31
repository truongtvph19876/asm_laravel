
(function( $ ) {

	$.fn.webiQuickview = function( initvar ) {

		/**
		 * Create List Layers By JSON Data.
		 */
		this.price = '';
		this.ischanged = false;

		this.work = function(){
			var _this = this;
			
			    if ($(window).width() <= 991) {
			    var html = $("<div class=\"webi-ownstyle webi-quickview\"><a href=\"#\"><svg width=\"18px\" height=\"17px\"><use xlink:href=\"#bquick\"/></svg><span class=\"hidden-xs hidden-sm\">quickview</span></a></div>");
					if ( $('.bquickv').find( '.product-thumb' ).length == 0 ) {
						$('.bquickv').append( html );
					} else {
						$('.bquickv').find( '.product-thumb' ).append( html );
					}
				}
				else{
					$( "body" ).delegate( ".product-thumb", "mouseover", function(){
				if( $('.bquickv').find(".webi-quickview").length > 0 ){

				} else {
					var html = $("<div class=\"webi-ownstyle webi-quickview\"><a href=\"#\"><svg width=\"18px\" height=\"17px\"><use xlink:href=\"#bquick\"/></svg><span class=\"hidden-xs hidden-sm\">quickview</span></a></div>");
					if ( $('.bquickv').find( '.product-thumb' ).length == 0 ) {
						$('.bquickv').append( html );
					} else {
						$('.bquickv').find( '.product-thumb' ).append( html );
					}
				}
			});
				}
			


			$("body").delegate( ".webi-quickview" , "click", function() {
				var tmp = $(this).parents( '.product-thumb' ).find("[onclick]").attr("onclick");
				var id = /\d+/.exec(tmp);
				if( !isNaN(id) ){
				 	_this.open( id );
				}
				return false;
			} );
 		},

 		this.open = function( id ){
 			var url = 'index.php?route=extension/module/webiquickview/show&product_id='+id;
 			$.magnificPopup.open({
			  	items: {
			    	src: url, // can be a HTML string, jQuery object, or CSS selector
			    	type: 'iframe',
			    	width:"80%"
			  	},
		      	callbacks: {
			        afterClose: function() {
			          	setTimeout( function() {
				            // $('html, body' ).animate({ scrollTop: 0 }, 'slow');
				            $('#cart > ul').load('index.php?route=common/cart/info ul li');
			          	}, 200 );
			        }
		      	}
			});
 		}
		//THIS IS VERY IMPORTANT TO KEEP AT THE END
		return this;
	};

 	$(document).ready( function(){
 		$(document).webiQuickview().work();
 	} );
})( jQuery );
/***/