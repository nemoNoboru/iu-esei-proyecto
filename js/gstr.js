var body = document.getElementsByTagName("body")[0];

body.addEventListener("load", main());

var minimo = 2;
var maximo = 64;

function main() {
    $("#formulario :input").each(function(){
      $(this).blur(function(){ checkValidity($(this)); } ); //<-- Should return all input elements in that specific form.
    });
    $("[name='email']").blur(function(){ checkEmail($(this)); });
    $("[name='pass2']").blur(function(){ checkPass($(this)); });
};

function doSubmit(){
    if(checkALL()){
      $("#formulario").submit();
    }
}

function checkALL(){
  var correction = true;
  $("#formulario :input[type='text']").each( function(){
    if(!checkValidity($(this))){ //que pasa con los emails o las contrase~nas?
      correction = false;
    }
  });
  $("#formulario :input[type='password']").each( function(){
    if(!checkValidity($(this))){ //que pasa con los emails o las contrase~nas?
      correction = false;
    }
  });
  return correction;
}

function checkValidity(e){
  clean(e);
  if(!vacio(e) && !tooShort(e) && !tooLong(e)){
    clean(e);
    return true;
  }
  return false;
}

function checkEmail(e){
  var regex = /[\w-\.]{2,}@[\w-]{2,}\.*[\w-]{2,}\.[\w-]{2,4}/;
  console.log(e.val());
  if(! regex.test(e.val()) ){
    putError(e);
    sayError(e,"email not valid");
  }
}

function vacio(e) {
  var data = e.val();
  if(data == ''){
    putError(e);
    sayError(e,"cannot be empty");
    return true;
  }
  data = data.replace(/ /g,"_");
  e.val(data);
  return false;
}

function tooShort(e){
  var data = e.val();
  if(data.length < minimo && data != '' ){
    putError(e);
    sayError(e,"minumum 2 chars");
    return true;
  }
  return false;
}

function tooLong(e){
  var data = e.val();
  if(data.length > maximo ){
    putError(e);
    sayError(e,"maximum 32 chars");
    return true;
  }
  return false;
}

function checkPass(e){
  var pass1 = $("[name='pass1']");
  var pass2 = $("[name='pass2']");
  if( pass1.val() != pass2.val() ){
    putError(e);
    sayError(e,"pass don't match");
    //sayError($("[name='pass1']"),"pass don't match");
  }
  var hash = CryptoJS.SHA1(e.val());
  pass1.val(hash);
  pass2.val(hash);
  pass1.addClass("crypted");
  pass1.attr("readonly",true);
  pass2.attr("readonly",true);
  pass2.addClass("crypted");
}

function putError(e){
  e.addClass("error");
}

function sayError(e,error){
  var anterior = e.val();
  var temp = "not valid : " + anterior + "";
  //var content = "<div class='error-text'>"+temp + ' ' + error + "</div>";
  //e.after(content);
  e.val('');
  e.attr("placeholder", temp + " " + error );
}

function clean(e){
  e.removeClass("error");
}
