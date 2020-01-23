
//読み込んだらfadeout
/*$(window).load(function() {
  $('.loading').delay(3000).fadeOut(600);
});*/

window.onload = function() {
  scroll_effect();

  $(window).scroll(function() {
    scroll_effect();
  });

  function scroll_effect() {
    $('.effect-fade').each(function() {
      const elemPos = $(this).offset().top;
      const scroll = $(window).scrollTop();
      const windowHeight = $(window).height();

      if(scroll > elemPos - windowHeight) {
        $(this).addClass('effect-scroll');
      }
    });
  }
}


/*-----ハンバーガーメニュー-----*/

let navToggleFlag = 0; //0のときnavは閉じている, 1のときnavは開いている
const line1 = document.getElementById('js-line1');
const line2 = document.getElementById('js-line2');
const line3 = document.getElementById('js-line3');
const hamburger = document.getElementById('js-hamburger');
const nav = document.getElementById('js-nav');
const navLists = document.querySelectorAll('.header__list');

hamburger.addEventListener('click', navToggle); //ハンバーガーメニューを押すとnavが開閉する。

nav.addEventListener('click', navToggle)//navが展開されているときには、リンク以外の箇所をクリックしてもnavが閉じるようにする。




function navToggle() {  //navの開閉の関数を定義
  if (navToggleFlag == 0) {
    nav.classList.toggle('open');
    line1.classList.toggle('tgl-line1');
    line2.classList.toggle('tgl-line2');
    line3.classList.toggle('tgl-line3');
    hamburger.classList.toggle('tgl-burger');
    if (matchMedia('(max-width: 768px)').matches) {
      navLists.forEach(function(list, index) {
        list.style.animation = `navListFade .8s ease forwards ${index / 6}s`;
      })
    }
    navToggleFlag = 1;
  } else {
    nav.classList.toggle('open');
    line1.classList.toggle('tgl-line1');
    line2.classList.toggle('tgl-line2');
    line3.classList.toggle('tgl-line3');
    hamburger.classList.toggle('tgl-burger');
    if (matchMedia('(max-width: 768px)').matches) {
      navLists.forEach(function(list) {
        list.style.animation = '';
      })
    }
    navToggleFlag = 0;
    }
  }


/*------流体アニメーション-----*/

// fluidColor配列からランダムに色を抽出して値を返す

const fluidColor = ["#E47B7A", "#F1AD87", "#6E84FA", "#E8EC74", "#123456", "#5A5A5A", "#233A66", "#11AB7B", "#662523"]; // 流体の色

const colorSelect = function() {
  const randomNumber = Math.floor(Math.random() * fluidColor.length);
  return fluidColor[randomNumber];
}

const randomness = 700; // 振れ幅
const threshold = 200; // しきい値

// fluidMedium関数の定義
const fluidMedium = function(){
    colorSelect();
    $('.fluid--medium').css("background-color", colorSelect());
    // animate関数を使用
    $('.fluid--medium').animate({
    backgroundColor: colorSelect(),
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
const fluidSmall = function(){
  colorSelect();
  $('.fluid--small').css("background-color", colorSelect());
  // animate関数を使用
  $('.fluid--small').animate({
  backgroundColor: colorSelect(),
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

/*-----フォーム-----*/

//メールアドレス
const mailAddressText = document.getElementById('js-mail');

mailAddressText.addEventListener('blur', function() { //focusが外れると判定する
  const warningMailMessage = document.getElementById('js-warningMail');
  const mailAddress = this.value; //入力されたメールアドレス
  const mailAddressRegexp = /^[A-Za-z0-9]{1}[A-Za-z0-9_.-]*@{1}[A-Za-z0-9_.-]{1,}\.[A-Za-z0-9]{1,}$/;

  if (mailAddressRegexp.test(mailAddress) === false) {
    warningMailMessage.innerHTML = 'メールアドレスを正しく入力してください';
  } else {
    warningMailMessage.innerHTML = '';
  }
})


// 電話番号
const phoneNumberText = document.getElementById('js-phone');

phoneNumberText.addEventListener('blur', function() { //focusが外れるたびに内容のチェックをする
  const warningPhoneMessage = document.getElementById('js-warningPhone');
  const phoneNumber = this.value; // 入力された電話番号
  const trimmedPhoneNumber = phoneNumber.replace(/-/g, ''); //電話番号に「-」が含まれていたら「''」(空文字)に置き換える

  if (/^[0][0-9]{9,10}$/.test(trimmedPhoneNumber) === false) {
    warningPhoneMessage.innerHTML = '電話番号を正しく入力してください';
  } else {
    warningPhoneMessage.innerHTML = '';
  }
})
