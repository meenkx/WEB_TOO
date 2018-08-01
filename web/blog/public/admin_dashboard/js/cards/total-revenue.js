// -----------------------------------------------------------------------------
// Title: Total Revenue
// ID: #total-revenue
// Location: dashboard.financials.html
// Dependency File(s):
// assets/vendor/css/c3.css
// assets/vendor/c3/c3.min.js
// assets/vendor/d3/dist/c3.min.js
// Docs: http://c3js.org/
// -----------------------------------------------------------------------------

(function(window, document, $, undefined) {
	  "use strict";
	$(function() {
		var chart = c3.generate({
			bindto: "#total-revenue",
			data: {
				columns: [
					["New", 25],
					["Other", 10],
					["Referrals", 25],
					["Returning", 40]
				],

				type: "donut",
				onclick: function(d, i) {
					console.log("onclick", d, i);
				},
				onmouseover: function(d, i) {
					console.log("onmouseover", d, i);
				},
				onmouseout: function(d, i) {
					console.log("onmouseout", d, i);
				}
			},
			donut: {
				label: {
					show: false
				},
				title: "Total Revenue",
				width: 25
			},

			legend: {
				hide: true
			},
			color: {
				pattern: [
                    	Suttikan.APP_COLORS.info,
                    Suttikan.APP_COLORS.grey100,


                    Suttikan.APP_COLORS.accent,
                    	Suttikan.APP_COLORS.primary
				]
			}
		});

	});
})(window, document, window.jQuery);
