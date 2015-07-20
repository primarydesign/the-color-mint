var fill;

(fill = function(item) {
  return $('.tagline').append("" + item);
})('The Autumn Collection 2015');

fill;

$(function() {
  var Mustache = require('mustache');

  $.getJSON('js/data.json', function(data) {
    var template = $('#speakerstpl').html();
    var html = Mustache.to_html(template, data);
    $('#speakers').html(html);    
  }); //getJSON
  
}); //function