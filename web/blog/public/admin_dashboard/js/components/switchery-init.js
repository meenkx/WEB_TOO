
(function(window, document, $, undefined) {
  "use strict";
    $(function() {
			if ($('.switch-primary').length > 0) {
				var elems = Array.prototype.slice.call($('.switch-primary'));
				elems.forEach(function(html) {
					var switchery = new Switchery(html, {
						color: Suttikan.APP_COLORS.primary,
						secondaryColor: Suttikan.APP_COLORS.grey200
					});
				});
			};
			if ($('.switch-accent').length > 0) {
				var elems = Array.prototype.slice.call($('.switch-accent'));
				elems.forEach(function(html) {
					var switchery = new Switchery(html, {
						color: Suttikan.APP_COLORS.accent,
						secondaryColor: Suttikan.APP_COLORS.grey200
					});
				});
			};
			if ($('.switch-secondary').length > 0) {
				var elems = Array.prototype.slice.call($('.switch-secondary'));
				elems.forEach(function(html) {
					var switchery = new Switchery(html, {
						color: Suttikan.APP_COLORS.secondary,
						secondaryColor: Suttikan.APP_COLORS.grey200
					});
				});
			};
			if ($('.switch-success').length > 0) {
				var elems = Array.prototype.slice.call($('.switch-success'));
				elems.forEach(function(html) {
					var switchery = new Switchery(html, {
						color: Suttikan.APP_COLORS.success,
						secondaryColor: Suttikan.APP_COLORS.grey200
					});
				});
			};

			if ($('.switch-info').length > 0) {
				var elems = Array.prototype.slice.call($('.switch-info'));
				elems.forEach(function(html) {
					var switchery = new Switchery(html, {
						color: Suttikan.APP_COLORS.info,
						secondaryColor: Suttikan.APP_COLORS.grey200
					});
				});
			};
			if ($('.switch-warning').length > 0) {
				var elems = Array.prototype.slice.call($('.switch-warning'));
				elems.forEach(function(html) {
					var switchery = new Switchery(html, {
						color: Suttikan.APP_COLORS.warning,
						secondaryColor: Suttikan.APP_COLORS.grey200
					});
				});
			};
			if ($('.switch-danger').length > 0) {
				var elems = Array.prototype.slice.call($('.switch-danger'));
				elems.forEach(function(html) {
					var switchery = new Switchery(html, {
						color: Suttikan.APP_COLORS.danger,
						secondaryColor: Suttikan.APP_COLORS.grey200
					});
				});
			};
    });

})(window, document, window.jQuery);
