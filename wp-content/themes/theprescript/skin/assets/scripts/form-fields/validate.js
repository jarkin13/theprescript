import $ from 'jquery';
import generalHelpers from './../helpers/general';

export default class Validate {
  constructor(formContainer = '.form') {
    this.formContainer = formContainer;
    this.initalInvalidClass = 'field--invalid-initial';
    this.$form = $(this.formContainer);
    this.$input = this.$form.find('.field');
    this.$required = this.$form.find('[required]');
    this.$email = this.$form.find('input[type=email]');
  }
  escapeString(string) {
    return generalHelpers.escapeString(string);
  }
  getInputById(id) {
    return $(`#${id}`);
  }
  getInputNameById(id) {
    return $(`#${id}`).attr('name');
  }
  setInitalInvalidClass(id) {
    this.getContainerByInput(id).addClass(this.initalInvalidClass);
  }
  getContainerByInput(id) {
    return this.getInputById(id);
  }
  getInputValue(id) {
    return this.getContainerByInput(id)[0].value;
  }
  init(id) {
    const escapedID = this.escapeString(id);
    const $input = this.getInputById(escapedID);

    if ($input.prop('required')) {
      this.setInitalInvalidClass(escapedID);
    }
  }
}

$(function() {
  const validate = new Validate();

  validate.$input.map((i, el) => {
    const id = $(el).attr('id');
    return validate.init(id);
  });

  validate.$input.bind('keyup', (e) => {
    const error = validate.$input.map((i, el) => {
      const invalid = $(el).is(':invalid');
      if (invalid) {
        return true;
      }
    });

    if (error.length > 0) {
      validate.$form.find('button[type=submit]').prop('disabled', true);
    } else {
      validate.$form.find('button[type=submit]').prop('disabled', false);
    }
  });
});
