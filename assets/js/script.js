$(document).ready(function(){
  var data = [];
  var temp = '';
  $('.digit').on('click', function(){
    var val = $(this).val();
    $('#results').append(val);
    //console.log(val);
    temp += val;
    
  });
  var operator = '';
  $('.operator').on('click', function(){
    data.push(temp);
    operator = $(this).val();
    data.push(operator);
    temp = '';
    $('#results').html('');
  });
  $('#enter').on('click', function(){
    data.push(temp);
    temp='';
    
    var dataJson = JSON.stringify(data);
    
    $.ajax({
      url: 'index.php?controller=calcul&action=add',
      method: 'POST',
      dataType: 'json',
      data: {'data' : dataJson},
      success: function(data){
          
          //var result = jQuery.parseJSON(data);
          var result = data;
          
          $('#results').html(result);
      }
    });
    data = [];
  });
  $('#clear').on('click' , function() {
    data = [];
    temp = '';
    $('#results').html('');
  });
});