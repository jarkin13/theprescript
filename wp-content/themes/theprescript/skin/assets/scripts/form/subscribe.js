import $ from 'jquery';
import Submit from './../form-fields/submit';
import Validate from './../form-fields/validate';

$(function() {
  const submit = new Submit();
  const validate = new Validate();

  submit.$input.on('click', () => {
    const error = validate.$input.map((i, el) => {
      const invalid = $(el).is(':invalid');
      if (invalid) {
        return true;
      }
    });

    if (error.length > 0) return;

    const first = validate.getInputValue('first');
    const last = validate.getInputValue('last');
    const email = validate.getInputValue('email');
    const data = {
      first,
      last,
      email,
      action: 'prescript_subscribe',
      mailchimpKeys: themeLocalization.mailchimpkeys
    };

    $.ajax({
      url: themeLocalization.ajaxurl,
      type: 'GET',
      contentType: 'JSON',
      data: data,
      success: (result) => {
        const response = $.parseJSON(result);
        if (response.error.length <= 0) {
          validate.$form.hide();
          $('.success').html("<p>Thanks, we can't wait to help you navigate the tricky world of relationships. Expect a launch email soon!</p>");
          return;
        }
        if (response.error.user) {
          validate.$form.find('.error .error--user').html(response.error.user);
        }
        if (response.error.mailchimp) {
          validate.$form.find('.error .error-mailchimp').append(response.error.mailchimp);
        }
      }
    });
  });
});
