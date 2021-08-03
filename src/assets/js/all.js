$(document).ready(function(){
    $('.btn_read_more').on('click', function(){
        if($(this).hasClass('active')){
            $(this).children('p').text('CLOSE');
            $(this).children('img').css(
                {
                    "transform": "rotate(-90deg)", 
                    "transition": "all 450ms"
                }
            );
            $(this).next('.col_3').slideDown();
            $(this).removeClass("active");
        }else{
            $(this).children('p').text('READ MORE');
            $(this).children('img').css(
                {
                    "transform": "rotate(0deg)", 
                    "transition": "all 450ms"
                }
            );
            $(this).next('.col_3').slideUp();
            $(this).addClass("active");
        }
    });

    $(".accordion_item > a").on("click", function() {
        if ($(this).hasClass("active")) {
            $(this).removeClass("active");
            // $(this).children('span').text('CLOSE');
            $(this).siblings(".content").slideDown();
            $(this).find('.open_txt').text('CLOSE');
            $(this).find('.open_img').attr("src", templateUrl + "/release/image/sect_2/close_arrow.png");

            $('.cont_slider').get(0).slick.setPosition()
            $('.cont_slider').get(1).slick.setPosition()
            $('.cont_slider').get(2).slick.setPosition()
        } else {
            $(this).find('.open_txt').text('OPEN');
            $(this).find('.open_img').attr("src", templateUrl +"/release/image/sect_2/open_arrow.png");
            $(".accordion_item > p").removeClass("active");
            $(this).addClass("active");
            $(this).siblings(".content").slideUp();
        }
    });

    $(".cont_slider").slick({
        arrows: false,
        slidesToShow: 2,
        centerMode: true,
        centerPadding: '0',
        infinite: false,
        dots: true,
        responsive: [
            {
                breakpoint: 750,
                settings: {
                    arrows: false,
                    slidesToShow: 1.3,
                    centerMode: true,
                    centerPadding: '0',
                    infinite: false,
                    dots: true,
                }
            },
            // {
            //     breakpoint: 500,
            //     settings: {
            //         centerPadding: '40px',
            //     }
            // },
            //         {
            //     breakpoint: 371,
            //     settings: {
            //         centerPadding: '30px',
            //     }
            // },  
        ]
        
    });
});

jQuery(window).resize(function() {
    var width = jQuery(window).width();
    if( width > 750 ) {
        $('.content').removeAttr('style');
    }
});


$(document).ready(function(){

    function animate1(){
        // アニメーションさせたいクラス
        var container = $(".txt_head_ani1");
        // アニメーションスピード
        var speed = 80;

        // テキストの間にスペースを入れます
        var content = container.html();
        var text = $.trim(content);
        console.log(text);
        var newHtml = "";

        // スペースで区切ったテキストを、テキストの数だけspanで囲む
        text.split("").forEach(function(v) {
            newHtml += '<span>' + v + '</span>';
        });

        // spanで囲んだテキスト群をHTMLに戻す
        container.html(newHtml);

        // 1文字ずつ表示
        var txtNum = 0;
        container.css({opacity: 1});
        setInterval(function() {
            container.find('span').eq(txtNum).css({opacity: 1});
            txtNum++
        }, speed);
    }

    function animate2(){
        // アニメーションさせたいクラス
        var container = $(".txt_head_ani2");
        // アニメーションスピード
        var speed = 80;

        // テキストの間にスペースを入れます
        var content = container.html();
        var text = $.trim(content);
        console.log(text);
        var newHtml = "";

        // スペースで区切ったテキストを、テキストの数だけspanで囲む
        text.split("").forEach(function(v) {
            newHtml += '<span>' + v + '</span>';
        });

        // spanで囲んだテキスト群をHTMLに戻す
        container.html(newHtml);

        // 1文字ずつ表示
        var txtNum = 0;
        container.css({opacity: 1});
        setInterval(function() {
            container.find('span').eq(txtNum).css({opacity: 1});
            txtNum++
        }, speed);
    }

    function animate3(){
        // アニメーションさせたいクラス
        var container = $(".txt_head_ani3");
        // アニメーションスピード
        var speed = 80;

        // テキストの間にスペースを入れます
        var content = container.html();
        var text = $.trim(content);
        console.log(text);
        var newHtml = "";

        // スペースで区切ったテキストを、テキストの数だけspanで囲む
        text.split("").forEach(function(v) {
            newHtml += '<span>' + v + '</span>';
        });

        // spanで囲んだテキスト群をHTMLに戻す
        container.html(newHtml);

        // 1文字ずつ表示
        var txtNum = 0;
        container.css({opacity: 1});
        setInterval(function() {
            container.find('span').eq(txtNum).css({opacity: 1});
            txtNum++
        }, speed);
    }

    animate1();

    setTimeout( function(){ 
        animate2();
    }  , 1000 );

    setTimeout( function(){ 
        animate3();
    }  , 1800 );


    window.addEventListener('scroll', function() {
        var element = document.querySelector('.animate__animated');
        var position = element.getBoundingClientRect();

        // checking whether fully visible
        if(position.top >= 0 && position.bottom <= window.innerHeight) {
            element.classList.add('animate__shakeX');
        }
    });
})

ScrollReveal().reveal('.heading-title span', {
    interval: 80
});