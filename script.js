$(document).ready(function(){
  $("#query").focus()
  var url='http://slu.edu/peoplefinder/json/json_index.php?q=';
  var query;
    $('form').submit(function(){
      $("#results-list #header").siblings().remove();
      query=$("#query").val();
      var xhr = new XMLHttpRequest();
      xhr.open("get", "http://www.nczonline.net/some_resource/", true);
      $.getJSON(url+query, null, function(json){
        $("#header").show();
        $.each(json.resultSet.result,function(i,person){
          if (i % 2 == 0){
            $('#results-list > tbody:last').append('<tr class="even"><td id="name-cell">' + person.fullname + '</td><td id="affiliation-cell">' + person.affiliation + '</td><td id="email-cell"><a href="mailto:' + person.email + '" target="_blank">' + person.email + '</a></td></tr>');
          } else {
            $('#results-list > tbody:last').append('<tr class="odd"><td id="name-cell">' + person.fullname + '</td><td id="affiliation-cell">' + person.affiliation + '</td><td id="email-cell"><a href="mailto:"' + person.email + ' target="_blank">' + person.email + '</a></td></tr>');
          }
        });
      });
      $(this).find('#query').val('');
      $(this).find('#query').focus();
      return false;
    });
    
});