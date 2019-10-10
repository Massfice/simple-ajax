function go(url, form = false) {
  if(form) {
    var data = $('#'+form).serialize();
  } else {
    var data = {};
  }
  var success = function() {};
  $.post(url, data, success, 'json')
  .done(resp => {

    for(var index in resp) {
      if($("#"+index).length) $("#"+index).html(resp[index]);
    }
  });
}

$(window).on('load',function(){
  go('init.php');
});
