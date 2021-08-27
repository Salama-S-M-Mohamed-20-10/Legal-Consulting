
/* make direction text pased on languge*/
$('input').keyup(function(){
    $this = $(this);
    if($this.val().length == 1)
    {
        var x =  new RegExp("[\x00-\x80]+"); // is ascii

        //alert(x.test($this.val()));

        var isAscii = x.test($this.val());

        if(isAscii)
        {
            $this.css("direction", "ltr");
        }
        else
        {
            $this.css("direction", "rtl");
        }
    }

});




/* to show specific mnate2 from mo7fzat */

function select_city()
{
  var select =$('#city').val();
  if(select=='All'){
    $('#All_mnt2a').show() && $('#cairo').hide() && $('#Geza').hide()
     && $('#alex').hide() && $('#sahel').hide() && $('#qalubia').hide() 
     && $('#gharbia').hide()&& $('#menofia').hide() && $('#fayom').hide() 
     && $('#daqhlia').hide() && $('#sharqia').hide() && $('#bhera').hide()
     && $('#domiat').hide() && $('#matrooh').hide() && $('#asut').hide()
     && $('#ismalia').hide() && $('#ghardaa').hide() && $('#sharm').hide()
     && $('#boursaid').hide() && $('#sues').hide() && $('#suhag').hide()
     && $('#menia').hide() && $('#quafrelshikh').hide() && $('#auxer').hide()
     && $('#quena').hide() && $('#banisuef').hide();
  }
  else if(select=='Cairo')
  {
    $('#All_mnt2a').hide() && $('#cairo').show() && $('#Geza').hide()
     && $('#alex').hide() && $('#sahel').hide() && $('#qalubia').hide() 
     && $('#gharbia').hide()&& $('#menofia').hide() && $('#fayom').hide() 
     && $('#daqhlia').hide() && $('#sharqia').hide() && $('#bhera').hide()
     && $('#domiat').hide() && $('#matrooh').hide() && $('#asut').hide()
     && $('#ismalia').hide() && $('#ghardaa').hide() && $('#sharm').hide()
     && $('#boursaid').hide() && $('#sues').hide() && $('#suhag').hide()
     && $('#menia').hide() && $('#quafrelshikh').hide() && $('#auxer').hide()
     && $('#quena').hide() && $('#banisuef').hide();
  }
  else if(select=='Geza')
  {
    $('#All_mnt2a').hide() && $('#cairo').hide() && $('#Geza').show()
     && $('#alex').hide() && $('#sahel').hide() && $('#qalubia').hide() 
     && $('#gharbia').hide()&& $('#menofia').hide() && $('#fayom').hide() 
     && $('#daqhlia').hide() && $('#sharqia').hide() && $('#bhera').hide()
     && $('#domiat').hide() && $('#matrooh').hide() && $('#asut').hide()
     && $('#ismalia').hide() && $('#ghardaa').hide() && $('#sharm').hide()
     && $('#boursaid').hide() && $('#sues').hide() && $('#suhag').hide()
     && $('#menia').hide() && $('#quafrelshikh').hide() && $('#auxer').hide()
     && $('#quena').hide() && $('#banisuef').hide();
  }
  else if(select=='Alex')
  {
    $('#All_mnt2a').hide() && $('#cairo').hide() && $('#Geza').hide()
     && $('#alex').show() && $('#sahel').hide() && $('#qalubia').hide() 
     && $('#gharbia').hide()&& $('#menofia').hide() && $('#fayom').hide() 
     && $('#daqhlia').hide() && $('#sharqia').hide() && $('#bhera').hide()
     && $('#domiat').hide() && $('#matrooh').hide() && $('#asut').hide()
     && $('#ismalia').hide() && $('#ghardaa').hide() && $('#sharm').hide()
     && $('#boursaid').hide() && $('#sues').hide() && $('#suhag').hide()
     && $('#menia').hide() && $('#quafrelshikh').hide() && $('#auxer').hide()
     && $('#quena').hide() && $('#banisuef').hide();
  }
  else if(select=='Sahel')
  {
    $('#All_mnt2a').hide() && $('#cairo').hide() && $('#Geza').hide()
     && $('#alex').hide() && $('#sahel').show() && $('#qalubia').hide() 
     && $('#gharbia').hide()&& $('#menofia').hide() && $('#fayom').hide() 
     && $('#daqhlia').hide() && $('#sharqia').hide() && $('#bhera').hide()
     && $('#domiat').hide() && $('#matrooh').hide() && $('#asut').hide()
     && $('#ismalia').hide() && $('#ghardaa').hide() && $('#sharm').hide()
     && $('#boursaid').hide() && $('#sues').hide() && $('#suhag').hide()
     && $('#menia').hide() && $('#quafrelshikh').hide() && $('#auxer').hide()
     && $('#quena').hide() && $('#banisuef').hide();
  }
  else if(select=='Qalubia')
  {
    $('#qalubia').show() && $('#All_mnt2a').hide();
  }
  else if(select=='Gharbia')
  {
    $('#gharbia').show() && $('#All_mnt2a').hide();
  }
  else if(select=='Menofia')
  {
    $('#menofia').show() && $('#All_mnt2a').hide();
  }
  else if(select=='Fayom')
  {
    $('#fayom').show() && $('#All_mnt2a').hide();
  }
  else if(select=='Daqhlia')
  {
    $('#daqhlia').show() && $('#All_mnt2a').hide();
  }
  else if(select=='Sharqia')
  {
    $('#sharqia').show() && $('#All_mnt2a').hide();
  }
  else if(select=='Bhera')
  {
    $('#bhera').show() && $('#All_mnt2a').hide();
  }
  else if(select=='Domiat')
  {
    $('#domiat').show() && $('#All_mnt2a').hide();
  }
  else if(select=='Matrooh')
  {
    $('#matrooh').show() && $('#All_mnt2a').hide();
  }
  else if(select=='Asut')
  {
    $('#asut').show() && $('#All_mnt2a').hide();
  }
  else if(select=='Ismalia')
  {
    $('#ismalia').show() && $('#All_mnt2a').hide();
  }
  else if(select=='Ghardaa')
  {
    $('#ghardaa').show() && $('#All_mnt2a').hide();
  }
  else if(select=='Sharm')
  {
    $('#sharm').show() && $('#All_mnt2a').hide();
  }
  else if(select=='Boursaid')
  {
    $('#boursaid').show() && $('#All_mnt2a').hide();
  }
  else if(select=='Sues')
  {
    $('#sues').show() && $('#All_mnt2a').hide();
  }
  else if(select=='Suhag')
  {
    $('#suhag').show() && $('#All_mnt2a').hide();
  }
  else if(select=='Menia')
  {
    $('#menia').show() && $('#All_mnt2a').hide();
  }
  else if(select=='Quafrelshikh')
  {
    $('#quafrelshikh').show() && $('#All_mnt2a').hide();
  }
  else if(select=='Auxer')
  {
    $('#auxer').show() && $('#All_mnt2a').hide();
  }
  else if(select=='Quena')
  {
    $('#quena').show() && $('#All_mnt2a').hide();
  }
  else if(select=='Banisuef')
  {
    $('#banisuef').show() && $('#All_mnt2a').hide();
  }

  
}


/*  forrrrr valdition to userInformation */
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function () {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  var forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
  Array.prototype.slice.call(forms)
    .forEach(function (form) {
      form.addEventListener('submit', function (event) {
        if (!form.checkValidity()) {
          event.preventDefault()
          event.stopPropagation()
        }

        form.classList.add('was-validated')
      }, false)
    })
})()

/* for swiper.js */


var swiper = new Swiper('.swiper-container', {
  slidesPerView: 2,
  spaceBetween: 0,
  slidesPerGroup: 2,
  loop: false,
  loopFillGroupWithBlank: true,
  pagination: {
    el: '.swiper-pagination',
    clickable: true,
  },
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
});
 /* add class active to time حجز */
 $('ul.myList li ').click(function(){
  $('li ').removeClass("current");
  $(this).addClass("current");
});
