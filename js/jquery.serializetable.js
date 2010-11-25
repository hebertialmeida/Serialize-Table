/**
* @description serializeTable get data of table
* @author Heberti Almeida
* @email hebertialmeida@gmail.com
* @version 1.0
* @date 2010-11-24
* @license GNU LGPL (http://www.gnu.org/licenses/lgpl.html)
*/
(function( $ ){
	$.fn.serializeTable = function(opt) {
		var defaults = {
			file: "",
			params: "params",
			data: "#content",
			attr: "rel"
		};
		opt = $.extend(defaults, opt);					
		$("tr", this).live("click", function(){	
			$(this).addClass("clicked");
			var str = "";						
			var arr = "";
			$("td", this).each(function(id) {
				name = $(".clicked td").eq(id).attr(opt.attr);
				str += '"'+name+'":"'+($(this).text()+'').replace(/"/g, '%26quot%3B')+'",';
			});
			$(this).removeClass("clicked");
			if(str) {			
				// Remove last caracterer
				str = "[{"+str.replace(/(\s+)?.$/, "")+"}]";
				// Return ajax
				$.ajax({
					url: opt.file+'?'+opt.params+'='+str,
					success: function(data) {
						$(opt.data).html(data);
					}
				});
			}
		});
	};
})( jQuery );