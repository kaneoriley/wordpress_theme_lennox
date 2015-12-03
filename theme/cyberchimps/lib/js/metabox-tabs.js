jQuery(document).ready(function (b) {
	var c = jQuery('[name="cyberchimps_featured_post_category_toggle"]').val();
	if (c == 0) {
		jQuery(".cyberchimps_featured_post_category").hide()
	}
	jQuery('[name="cyberchimps_featured_post_category_toggle"]').change(function () {
		var d = jQuery('[name="cyberchimps_featured_post_category_toggle"]').val();
		if (d == 0) {
			jQuery(".cyberchimps_featured_post_category").hide()
		} else {
			if (d == 1) {
				jQuery(".cyberchimps_featured_post_category").show()
			}
		}
	});
	jQuery(".metabox-tabs li a").each(function (d) {
		var e = jQuery(this).parent().attr("class").replace(/active /, "");
		if ("active" != jQuery(this).attr("class")) {
			jQuery("div." + e).hide()
		}
		jQuery("div." + e).addClass("tab-content");
		jQuery(this).click(function () {
			jQuery(this).parent().parent().parent().children("div").hide();
			jQuery(this).parent().parent("ul").find("li.active").removeClass("active");
			jQuery(this).parent().parent().parent().find("div." + e).show();
			jQuery(this).parent().parent().parent().find("li." + e).addClass("active")
		})
	});
	jQuery(".heading").hide();
	jQuery(".metabox-tabs").show();
	jQuery(".subsection-items").hide();
	jQuery("#subsection-Boxes-Element .subsection-items").show();
	b(".subsection > h4").click(function () {
		var d = b(this);
		d.find("span.minus").removeClass("minus");
		if (d.siblings("div").is(":visible")) {
			d.siblings("div").fadeOut()
		} else {
			d.siblings("div").fadeIn();
			d.find("span").addClass("minus")
		}
	});
	b("#subsection-Boxes-Lite-Element").children(".subsection-items").show();
	b("#subsection-Custom-Slide-Options > h4").click();
	b("#subsection-Page-Options > h4").click();
	var a = {page_slider: "subsection-iFeature-Slider-Options", page_nivoslider: "subsection-iFeature-Pro-NivoSlider-Options", callout_section: "subsection-Callout-Options", html_box: "subsection-HTML-Box-Options", custom_html_element: "subsection-Custom-HTML", product_element: "subsection-Product-Options", twitterbar_section: "subsection-Twitter-Options", magazine: "subsection-Magazine-Layout-Options", recent_posts: "subsection-Recent-Posts-Options", boxes: "subsection-Boxes-Options"};
	b(".section-order-tracker").change(function () {
		var d = b(this).val().split(",");
		b.each(a, function (e, f) {
			if (b.inArray(e, d) != -1) {
				b("#" + f).show()
			} else {
				b("#" + f).hide()
			}
		})
	}).change();
	b(".image_select").each(function () {
		b(this).find("img").click(function () {
			if (b(this).hasClass("selected")) {
				return
			}
			b(this).siblings("img").removeClass("selected");
			b(this).addClass("selected");
			b(this).siblings("input").val(b(this).data("key"))
		});
		if (b(this).find("img.selected").length) {
			b(this).find("input").val(b(this).find("img.selected").data("key"))
		}
	});
	b(".checkbox").after(function () {
		if (b(this).is(":checked")) {
			return"<a href='#' class='toggle checked' ref='" + b(this).attr("id") + "'></a>"
		} else {
			return"<a href='#' class='toggle' ref='" + b(this).attr("id") + "'></a>"
		}
	});
	b(".toggle").click(function (f) {
		var g = b(this).attr("ref");
		var d = b("#" + g);
		if (d.is(":checked")) {
			d.removeAttr("checked").change()
		} else {
			d.attr("checked", "checked").change()
		}
		b(this).toggleClass("checked");
		f.preventDefault()
	});
	b("#showCheckboxes").click(function (d) {
		b(".checkbox").toggle();
		d.preventDefault()
	});
	b("#checkbox-extra_callout_options").change(function () {
		var d = b("tr.callout_image, tr.custom_callout_color, tr.custom_callout_title_color, tr.custom_callout_text_color, tr.custom_callout_button_color, tr.custom_callout_button_text_color");
		if (b(this).is(":checked")) {
			d.show()
		} else {
			d.hide()
		}
		b("#checkbox-disable_callout_button").trigger("change")
	}).trigger("change");
	b("#checkbox-disable_callout_button").change(function () {
		var d = b("tr.callout_button_text, tr.callout_url");
		if (b(this).is(":checked")) {
			d.show()
		} else {
			d.hide()
		}
	}).trigger("change");
	b("#checkbox-cyberchimps_recent_posts_title_toggle").change(function () {
		var d = b("tr.cyberchimps_recent_posts_title");
		if (b(this).is(":checked")) {
			d.show()
		} else {
			d.hide()
		}
	}).trigger("change");
	b("#checkbox-product_link_toggle").change(function () {
		var d = b("tr.product_link_url, tr.product_link_text");
		if (b(this).is(":checked")) {
			d.show()
		} else {
			d.hide()
		}
	}).trigger("change");
	b("#checkbox-cyberchimps_magazine_wide_post_toggle").change(function () {
		var d = b("tr.cyberchimps_magazine_no_of_wide_posts");
		if (b(this).is(":checked")) {
			d.show()
		} else {
			d.hide()
		}
	}).trigger("change");
	b("#checkbox-profile_twitter").change(function () {
		var d = b("tr.profile_twitter_url");
		if (b(this).is(":checked")) {
			d.show()
		} else {
			d.hide()
		}
	}).trigger("change");
	b("#checkbox-profile_facebook").change(function () {
		var d = b("tr.profile_facebook_url");
		if (b(this).is(":checked")) {
			d.show()
		} else {
			d.hide()
		}
	}).trigger("change");
	b("#checkbox-profile_google").change(function () {
		var d = b("tr.profile_google_url");
		if (b(this).is(":checked")) {
			d.show()
		} else {
			d.hide()
		}
	}).trigger("change");
	b("#checkbox-profile_flickr").change(function () {
		var d = b("tr.profile_flickr_url");
		if (b(this).is(":checked")) {
			d.show()
		} else {
			d.hide()
		}
	}).trigger("change");
	b("#checkbox-profile_pinterest").change(function () {
		var d = b("tr.profile_pinterest_url");
		if (b(this).is(":checked")) {
			d.show()
		} else {
			d.hide()
		}
	}).trigger("change");
	b("#checkbox-profile_linkedin").change(function () {
		var d = b("tr.profile_linkedin_url");
		if (b(this).is(":checked")) {
			d.show()
		} else {
			d.hide()
		}
	}).trigger("change");
	b("#checkbox-profile_youtube").change(function () {
		var d = b("tr.profile_youtube_url");
		if (b(this).is(":checked")) {
			d.show()
		} else {
			d.hide()
		}
	}).trigger("change");
	b("#checkbox-profile_rss").change(function () {
		var d = b("tr.profile_rss_url");
		if (b(this).is(":checked")) {
			d.show()
		} else {
			d.hide()
		}
	}).trigger("change");
	b("#checkbox-profile_email_id").change(function () {
		var d = b("tr.profile_email_id_url");
		if (b(this).is(":checked")) {
			d.show()
		} else {
			d.hide()
		}
	}).trigger("change");
	b("#checkbox-profile_googlemaps").change(function () {
		var d = b("tr.profile_googlemaps_url");
		if (b(this).is(":checked")) {
			d.show()
		} else {
			d.hide()
		}
	}).trigger("change");
	b("#checkbox-cyberchimps_twitter_page_options_toggle").change(function () {
		var d = b("tr.cyberchimps_twitter_handle");
		if (b(this).is(":checked")) {
			d.hide()
		} else {
			d.show()
		}
	}).trigger("change")
});