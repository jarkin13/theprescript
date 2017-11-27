import $ from 'jquery';
import Submit from './../form-fields/submit';

$(function() {
  const submit = new Submit();

  submit.$input.on('click', function(e) {
    e.preventDefault();
  });
});
