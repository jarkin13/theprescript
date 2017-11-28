import $ from 'jquery';
import generalHelpers from './../helpers/general';

export default class Submit {
  constructor(formContainer = '.form') {
    this.formContainer = formContainer;
    this.disabledClass = 'submit--disabled';
    this.$form = $(this.formContainer);
    this.$input = this.$form.find('button[type=submit]');
  }
  escapeString(string) {
    return generalHelpers.escapeString(string);
  }
  getInputById(id) {
    return $(`button[type="submit"]#${id}`);
  }
  getInputNameById(id) {
    return $(`button[type="submit"]#${id}`).attr('name');
  }
  getContainerByInput(id) {
    return this.getInputById(id).closest(this.formContainer);
  }
}

$(function() {
  const submit = new Submit();

  submit.$input.on('click', function(e) {
    e.preventDefault();
  });
});
