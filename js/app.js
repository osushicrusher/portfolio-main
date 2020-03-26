
window.onload = function() {

  // スクロール時エフェクト
  const scroll_effect = () => {
    $('.effect-fade').each(function() {
      const elemPos = $(this).offset().top;
      const scroll = $(window).scrollTop();
      const windowHeight = $(window).height();
  
      if(scroll > elemPos - windowHeight) {
        $(this).addClass('effect-scroll');
      }
    });
  }

  scroll_effect();

  $(window).scroll(function() {
    scroll_effect();
  });

}

/*-----ハンバーガーメニュー-----*/

// nav開閉のフラグを設定。0=closed, 1=open
let navToggleFlag = 0;

// バーガーメニューのライン
const line1 = document.getElementById('js-line1');
const line2 = document.getElementById('js-line2');
const line3 = document.getElementById('js-line3');

// hamburger, nav, list
const hamburger = document.getElementById('js-hamburger');
const nav = document.getElementById('js-nav');
const navLists = document.querySelectorAll('.header__list');

// nav開閉の関数を定義
const navToggle = () => {
  // navが閉じている時
  if (navToggleFlag == 0) {
    nav.classList.toggle('open');
    line1.classList.toggle('tgl-line1');
    line2.classList.toggle('tgl-line2');
    line3.classList.toggle('tgl-line3');
    hamburger.classList.toggle('tgl-burger');
    // 指定のwidth内に条件を指定
    if (matchMedia('(max-width: 768px)').matches) {
      navLists.forEach(function(list, index) {
        list.style.animation = `navListFade .8s ease forwards ${index / 6}s`;
      })
    }
    navToggleFlag = 1;
  } else { // navが開いているとき
    nav.classList.toggle('open');
    line1.classList.toggle('tgl-line1');
    line2.classList.toggle('tgl-line2');
    line3.classList.toggle('tgl-line3');
    hamburger.classList.toggle('tgl-burger');
    // 指定のwidth内に条件を指定
    if (matchMedia('(max-width: 768px)').matches) {
      navLists.forEach(function(list) {
        list.style.animation = '';
      })
    }
    navToggleFlag = 0;
    }
}

// hamburger, navをクリックでtoggleする
hamburger.addEventListener('click', navToggle); 
nav.addEventListener('click', navToggle);


/*------流体アニメーション-----*/

// 流体の色
const fluidColor = ["#E47B7A", "#F1AD87", "#6E84FA", "#E8EC74", "#123456", "#5A5A5A", "#233A66", "#11AB7B", "#662523", "#313131", "rgb(144, 20, 218)"]; // 流体の色

// fluidColor配列からランダムに色を抽出して値を返す
const selectColor = () => {
  const randomNumber = Math.floor(Math.random() * fluidColor.length);
  return fluidColor[randomNumber];
}

// 振れ幅、しきい値を指定
const randomness = 700;
const threshold = 200;

// fluidMedium関数の定義
const fluidMedium = () => {
    selectColor();
    $('.fluid--medium').css("background-color", selectColor());
    // animate関数を使用
    $('.fluid--medium').animate({
    backgroundColor: selectColor(),
    borderTopLeftRadius: String(Math.round((Math.random()*randomness + threshold)) + 'px'),
    borderTopRightRadius:  String(Math.round((Math.random()*randomness + threshold)) + 'px'),
    borderBottomLeftRadius:  String(Math.round((Math.random()*randomness + threshold)) + 'px'),
    borderBottomRightRadius:  String(Math.round((Math.random()*randomness + threshold)) + 'px'),
    }, {
    duration: 3000,
    complete: fluidMedium
    });
}

  // fluidMediumアニメーション関数を実行
fluidMedium();

// fluidSmall関数の定義
const fluidSmall = () => {
  selectColor();
  $('.fluid--small').css("background-color", selectColor());
  // animate関数を使用
  $('.fluid--small').animate({
  backgroundColor: selectColor(),
  borderTopLeftRadius: String(Math.round((Math.random()*randomness + threshold)) + 'px'),
  borderTopRightRadius:  String(Math.round((Math.random()*randomness + threshold)) + 'px'),
  borderBottomLeftRadius:  String(Math.round((Math.random()*randomness + threshold)) + 'px'),
  borderBottomRightRadius:  String(Math.round((Math.random()*randomness + threshold)) + 'px'),
  }, {
  duration: 3000,
  complete: fluidSmall
  });
}

// fluidLargeアニメーション関数の実行
fluidSmall();

