$ = require 'jquery'

do fill = (item = 'The Autumn Collection 2015') ->
  $('.tagline').append "#{item}"
fill