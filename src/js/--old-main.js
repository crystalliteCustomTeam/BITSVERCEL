const carAnimationFunction=()=>{$(window).on("scroll",function(){if($(window).scrollTop()>=$(".what--we").offset().top+$(".what--we").outerHeight()-window.innerHeight){let s=$(window).width();$(".what--we .animate--bg").animate({left:"95%"},1e3),s<1400?($(".what--we .animate--car").animate({left:"84%"},1e3),$(".what--we .animate--bg").animate({left:"100%"},1e3).fadeOut()):$(".what--we .animate--car").animate({left:"88%"},1e3),$(".what--we .animate--border").animate({width:"93%"},1e3)}})};$(".nav--tabs li:first-child").addClass("active"),$(".tabs--content .tab--body").hide(),$(".tabs--content .tab--body:first").show(),$(".nav--tabs li").click(function(){$(".nav--tabs li").removeClass("active"),$(this).addClass("active"),$(".tabs--content .tab--body").hide();var s=$(this).find("a").attr("href");return $(s).fadeIn(),!1}),992>$(window).width()&&$(".what--we--slider").slick({dots:!0,infinite:!0,arrows:!1,speed:1e3,autoplay:!1,slidesToShow:1,slidesToScroll:1,adaptiveHeight:!0}),992>$(window).width()&&$(".benefits--slider").slick({dots:!0,infinite:!0,arrows:!1,speed:1e3,autoplay:!1,slidesToShow:1,slidesToScroll:1}),1200>$(window).width()&&$(".partners--logo").slick({dots:!0,infinite:!0,arrows:!1,speed:1e3,autoplay:!1,slidesToShow:4,slidesToScroll:4,responsive:[{breakpoint:992,settings:{slidesToShow:3,slidesToScroll:3}},{breakpoint:768,settings:{slidesToShow:2,slidesToScroll:2}},{breakpoint:576,settings:{slidesToShow:1,slidesToScroll:1}},]}),992>$(window).width()&&$(".why--choose--slider").slick({dots:!0,infinite:!0,arrows:!1,speed:1e3,autoplay:!1,slidesToShow:1,slidesToScroll:1}),992>$(window).width()&&$(".web--proccess--slider").slick({dots:!0,infinite:!0,arrows:!1,speed:1e3,autoplay:!1,slidesToShow:2,slidesToScroll:1,responsive:[{breakpoint:768,settings:{slidesToShow:1,slidesToScroll:1}},]}),992>$(window).width()&&$(".works--proccess--slider").slick({dots:!0,infinite:!0,arrows:!1,speed:1e3,autoplay:!1,slidesToShow:1,slidesToScroll:1}),1200>$(window).width()&&$(".steps--slider").slick({dots:!0,infinite:!0,arrows:!1,speed:1e3,autoplay:!1,slidesToShow:2,slidesToScroll:1,responsive:[{breakpoint:992,settings:{slidesToShow:1,slidesToScroll:1}},]}),$(".logos--slider").slick({dots:!1,infinite:!0,speed:1e3,autoplay:!0,slidesToShow:6,slidesToScroll:2,responsive:[{breakpoint:1024,settings:{slidesToShow:2,slidesToScroll:3}},{breakpoint:600,settings:{slidesToShow:2,slidesToScroll:1}},{breakpoint:480,settings:{slidesToShow:2,slidesToScroll:1}},]}),1200>$(window).width()&&$(".industries--slider").slick({dots:!1,infinite:!0,arrows:!0,speed:1e3,autoplay:!1,slidesToShow:4,slidesToScroll:1,responsive:[{breakpoint:992,settings:{slidesToShow:3,slidesToScroll:1}},{breakpoint:768,settings:{slidesToShow:2,slidesToScroll:1}},{breakpoint:576,settings:{slidesToShow:1,slidesToScroll:1}},]}),$(".working--with--slider").slick({dots:!1,infinite:!0,speed:1e3,autoplay:!0,slidesToShow:5,slidesToScroll:2,responsive:[{breakpoint:1024,settings:{slidesToShow:4,slidesToScroll:3}},{breakpoint:600,settings:{slidesToShow:3,slidesToScroll:1}},{breakpoint:480,settings:{slidesToShow:2,slidesToScroll:1}},]});const progressTabsFunction=()=>{var s;$(".tabs--nav .next").click(function(){$(".tabs--container .tabs--items").each(function(){$(this).hasClass("active")&&(s=$(this),$(this).not(":last-child").removeClass("active"))}),$(s).next().addClass("active"),$(".tabs--progress--line button").each(function(){$(this).hasClass("active")&&(s=$(this))}),$(s).next().addClass("active")}),$(".tabs--nav .prev").click(function(){$(".tabs--container .tabs--items").each(function(){$(this).hasClass("active")&&(s=$(this),$(this).not(":first-child").removeClass("active"))}),$(s).prev().addClass("active"),$(".tabs--progress--line button").each(function(){$(this).hasClass("active")&&(s=$(this),$(this).not(":first-child").removeClass("active")),$(s).prev().addClass("active")})})};progressTabsFunction(),1300>$(window).width()&&$(".clients--slider").slick({dots:!1,infinite:!0,arrows:!0,speed:1e3,autoplay:!1,slidesToShow:5,slidesToScroll:1,responsive:[{breakpoint:1024,settings:{slidesToShow:3,slidesToScroll:1}},{breakpoint:600,settings:{slidesToShow:2,slidesToScroll:1}},{breakpoint:480,settings:{slidesToShow:2,slidesToScroll:1}},]}),$(".feedback--slider").slick({dots:!0,infinite:!0,arrows:!1,speed:1e3,autoplay:!1,slidesToShow:1,slidesToScroll:1,responsive:[{breakpoint:1024,settings:{slidesToShow:1,slidesToScroll:1}},{breakpoint:600,settings:{slidesToShow:1,slidesToScroll:1}},{breakpoint:480,settings:{slidesToShow:1,slidesToScroll:1}},]}),$(".locations--slider").slick({dots:!1,infinite:!0,arrows:!0,speed:1e3,autoplay:!1,slidesToShow:3,slidesToScroll:1,responsive:[{breakpoint:1200,settings:{slidesToShow:3,slidesToScroll:1}},{breakpoint:1024,settings:{slidesToShow:2,slidesToScroll:1}},{breakpoint:600,settings:{slidesToShow:1,slidesToScroll:1,dots:!0}},{breakpoint:480,settings:{slidesToShow:1,slidesToScroll:1,dots:!0}},]});$(document).ready(function(){$(".counter").each(function(){$(this).prop("Counter",0).animate({Counter:$(this).text()},{duration:4e3,easing:"swing",step:function(t){$(this).text(Math.ceil(t))}})})});