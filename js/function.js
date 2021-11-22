/* a�^�O�̃X�N���[����~&�X���[�X�X�N���[��
----------------------------------------------------------------------*/
$(function () {
	$('a[href^=#]:not(.colorbox)').on('click', function () { // #�Ŏn�܂�A���J�[���N���b�N�����ꍇ�ɏ���
		var w = $(window).width();
		var x = 768;
		var offs = 0;
		if (w <= x) {
			offs = 0;
		}
		var speed = 400; // �X�N���[���̑��x
		var href = $(this).attr('href'); // �A���J�[�̒l�擾
		var target = $(href == "#" || href == "" ? 'html' : href); // �ړ�����擾
		var position = target.offset().top - offs; // �ړ���𐔒l�Ŏ擾
		$('body,html').animate({
			scrollTop: position
		}, speed, 'swing'); // �X���[�X�X�N���[��
		return false;
	});
});

/* �y�[�W�g�b�v
----------------------------------------------------------------------*/
$(function () {
	var topBtn = $('#page_top');
	topBtn.hide();
	$(window).scroll(function () {
		if ($(this).scrollTop() > 100) { //�X�N���[����100�ɒB������{�^���\��
			topBtn.fadeIn();
		} else {
			topBtn.fadeOut();
		}
	});
	topBtn.click(function () { //�X�N���[�����ăg�b�v
		$('body,html').animate({
			scrollTop: 0
		}, 300);
		return false;
	});
});

/* matchHeight
----------------------------------------------------------------------*/
$(window).on('load resize', function () {
	var w = $(window).width();
	var x = 768;
	if (w > x) {
		$('.mh').matchHeight();
	}
});

/* toggle�X�}�z���j���[
----------------------------------------------------------------------*/
$(function () {
	var btn = $('#btn_nav');

	btn.on('click', function () {
		$('#btn_nav,#nav_sp nav').toggleClass('active');
	});
});

/* �A�R�[�f�B�I��
----------------------------------------------------------------------*/
$(function () {
	$(".aco_box").hide();
	$(".aco_btn").click(function () {
		$(this).next().slideToggle();
		$(this).toggleClass('open');
		return false;
	});
});

/* �A�R�[�f�B�I�� ���C���r�W���A��
----------------------------------------------------------------------*/
$(function () {
	$(".search_tgl").hide();
	$(".aco_btn_mv").click(function () {
		$(this).toggleClass('open');
		$(".search_tgl").slideToggle();
		$(".search_tgl").toggleClass('open');
	});
});

/* �A�R�[�f�B�I�� �X�܈ꗗ
----------------------------------------------------------------------*/
$(function () {
	$(".shop_link_list").hide();
	$(".shop_cont .shop_link_list").show();
	$(".shop.aco").click(function () {
		$(this).toggleClass('open');
		$(this).parent().siblings(".shop_link_list").slideToggle();
		$(this).parent().siblings(".shop_link_list").toggleClass('open');
	});
	$(".shop_link_list .txt").hide();
	$(".shop_link_list .ttl").click(function () {
		$(this).toggleClass('open');
		$(this).next().slideToggle();
	});
	$(".shop_link_list .ad_txt").hide();
	$(".shop_link_list .pre_txt").click(function () {
		$(this).toggleClass('open');
		$(this).next().slideToggle();
	});
});

/* �u���E�U�o�b�N���[�_���\��
----------------------------------------------------------------------*/
$(function () {
	history.pushState(null, null, null); //�u���E�U�o�b�N������
	//�u���E�U�o�b�N�{�^��������
	$(window).on("popstate", function (event) {
		$('#browser_back_modal').css('display', 'flex');
	});
});

$(function () {
	$('#browser_back_modal .btn_close').on('click', function () {
		$('#browser_back_modal').css('display', 'none');
	});
});

/*dropdwn
----------------------------------------------------------------------*/
$(function () {
	$('.dropdwn li').hover(function () {
		$("ul:not(:animated)", this).slideDown();
	}, function () {
		$("ul.dropdwn_menu", this).slideUp();
	});
});

/* slick
----------------------------------------------------------------------*/
$(function () {
	$('.slider').slick({
		infinite: true,
		fade: false,
		autoplay: true,
		autoplaySpeed: 3000,
		speed: 700,
		dots: false,
		arrows: true,
		pauseOnHover: false,
		pauseOnFocus: false,
		centerMode: false,
		centerPadding: '10%',
		slidesToShow: 3,
		slidesToScroll: 1,
		responsive: [{
			breakpoint: 768,
			settings: {
				slidesToShow: 2,
				slidesToScroll: 1,
			}
		}, {
			breakpoint: 500,
			settings: {
				slidesToShow: 1,
				slidesToScroll: 1,
			}
		}]
	});
	$('#recommend_slider').slick({
		infinite: true,
		autoplaySpeed: 3000,
		dots: false,
		arrows: true,
		slidesToShow: 1,
		slidesToScroll: 1,
		mobileFirst: true,
		responsive: [
			 {
					breakpoint: 767,
					settings: "unslick"
			 }
		]
	});
});

/* menu toggle
----------------------------------------------------------------------*/
var startPos = 0, winScrollTop = 0;

$(window).on('scroll', function () {
	winScrollTop = $(this).scrollTop();
	if (winScrollTop >= startPos) {
		$('#btn_nav').addClass('hide');
	} else {
		$('#btn_nav').removeClass('hide');
	}
	startPos = winScrollTop;
});

/* search toggle
----------------------------------------------------------------------*/
$(function () {
	const mediaPc = window.matchMedia('(min-width: 768px)')

	if (mediaPc.matches) {
		$('.aco_btn_mv').addClass('open');
		$('.search_tgl').css('display', 'block');
	}
});