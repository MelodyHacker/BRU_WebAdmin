
var form = $('.form');
var btn = $('#submit');
var topbar = $('.topbar');
var input_id = $('#id')
var input_pass= $('#password');
var article =$('.article');
var tries = 0;
/*var pass*/
var h = input_pass.height();
$('.spanColor').height(h+23);
/*var id*/
var h = input_pass.height();
$('.spanColor').height(h+23);

input_pass.on('focus',function(){
  topbar.removeClass('error success');
  input_pass.text('');
});
input_id.on('focus',function(){
  topbar.removeClass('error success');
  input_id.text('');
});




btn.on('click',function(){
  if(tries<=2){
    var pass = $('#password').val();
    console.log(pass);

    var id = $('#id').val();
    console.log(id);


    if(pass=='bru' && id=='007'){
    setTimeout(function(){
      btn.text('Login Success!');
    },250);
    topbar.addClass('success');
    form.addClass('goAway');
    article.addClass('active');
    tries=0;
  }
    else{
      topbar.addClass('error');
      tries++;
      switch(tries){
        case 0:
          btn.text('Login');
          break;
        case 1:
          setTimeout(function(){
          btn.text('You have 2 tries left');
          },300);
          break;
        case 2:
          setTimeout(function(){
          btn.text('Only 1 more');
          },300);
          break;
        case 3:
          setTimeout(function(){
          btn.text('Fail password?');
          },300);
          input_pass.prop('disabled',true);
          topbar.removeClass('error');
          input_pass.addClass('disabled');
          btn.addClass('recover');
          break;
         defaut:
          btn.text('Login');
          break;
      }
    } 
  }
  else{
    topbar.addClass('disabled');
  }
  
});

$('.form').keypress(function(e){
   if(e.keyCode==13)
   submit.click();
});
input_pass.keypress(function(){
  topbar.removeClass('success error');
});