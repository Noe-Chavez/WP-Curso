!function($){wp.customize("blogname",function(i){i.bind(function(i){$(".site-title a").text(i)})}),wp.customize("blogdescription",function(i){i.bind(function(i){$(".site-description").text(i)})}),wp.customize("revive_hide_title_tagline",function(i){i.bind(function(i){$("#text-title-desc").toggle()})}),wp.customize("revive_branding_below_logo",function(i){i.bind(function(i){1==i?$("#text-title-desc").css({display:"block"}):$("#text-title-desc").css({display:"inline-block"})})}),wp.customize("revive_center_logo",function(i){i.bind(function(i){1==i?($(".site-branding").css("text-align","center"),$("#text-title-desc").css("text-align","center")):($(".site-branding").css("text-align","left"),$("#text-title-desc").css("text-align","left"))})}),wp.customize("revive_site_titlecolor",function(i){i.bind(function(i){$(".site-title a").css("color",i)})}),wp.customize("revive_header_desccolor",function(i){i.bind(function(i){$(".site-description").css("color",i)})}),wp.customize("revive_footer_text",function(i){i.bind(function(i){$(".sep").text(i)})}),wp.customize("revive_fc_line_disable",function(i){i.bind(function(i){$(".credit-line").toggle()})}),wp.customize("revive_disable_footer_menu",function(i){i.bind(function(i){$(".footer-menu").toggle()})}),wp.customize("revive_social_icon_style_set",function(i){i.bind(function(i){var t="social-icon "+i;$("#social-icons a").attr("class",t)})}),wp.customize("revive_social_1",function(i){i.bind(function(i){var t="fab fa-"+i;jQuery("#social-icons").find("i:eq(0)").attr("class",t)})}),wp.customize("revive_social_2",function(i){i.bind(function(i){var t="fab fa-"+i;jQuery("#social-icons").find("i:eq(1)").attr("class",t)})}),wp.customize("revive_social_3",function(i){i.bind(function(i){var t="fab fa-"+i;jQuery("#social-icons").find("i:eq(2)").attr("class",t)})}),wp.customize("revive_social_4",function(i){i.bind(function(i){var t="fab fa-"+i;jQuery("#social-icons").find("i:eq(3)").attr("class",t)})}),wp.customize("revive_social_5",function(i){i.bind(function(i){var t="fab fa-"+i;jQuery("#social-icons").find("i:eq(4)").attr("class",t)})}),wp.customize("revive_social_6",function(i){i.bind(function(i){var t="fab fa-"+i;jQuery("#social-icons").find("i:eq(5)").attr("class",t)})}),wp.customize("revive_box_enable",function(i){i.bind(function(i){$("#featured-area-1").toggle()})}),wp.customize("revive_box_title",function(i){i.bind(function(i){$("#featured-area-1 .section-title").text(i)})}),wp.customize("revive_fa2_enable",function(i){i.bind(function(i){$("#featured-area-2").toggle()})}),wp.customize("revive_fa2_title",function(i){i.bind(function(i){$("#featured-area-2 .section-title").text(i)})}),wp.customize("revive_fposts_slider_enable",function(i){i.bind(function(i){$("#post-slider").toggle()})}),wp.customize("revive_posts_slider_title",function(i){i.bind(function(i){$("#post-slider .section-title").text(i)})}),wp.customize("revive_fm_post_enable",function(i){i.bind(function(i){$("#featured-mega-post").toggle()})}),wp.customize("revive_fm_post_title",function(i){i.bind(function(i){$("#featured-mega-post .section-title").text(i)})})}(jQuery);