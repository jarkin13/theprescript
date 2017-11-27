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

  // On page load set
  validate.$input.each(function() {
    const id = $(this).attr('id');
    validate.init(id);
  });
  validate.$input.bind('input', function(e) {
    console.log('hey');
  });

});
