<?php

include 'forms.php';

function showContactContent($data)
{
  showFormStart();
  showFormFieldSetStart('Personal');
  showFormField('name', 'Name', 'name', $data);
  showFormField('email', 'Email', 'email', $data);
  showFormField('phone', 'Phone', 'phone', $data);
  showFormField(
    'salutation',
    'How can we address you?',
    'select',
    $data,
    false,
    SALUTATIONS
  );
  showFormFieldSetEnd();
  showFormFieldSetStart('Preferred contact option *');
  showFormField('contactOption', 'How can we reach you?', 'radio', $data, true, COM_PREFS);
  showFormFieldSetEnd();

  showFormFieldSetStart('How can I help you?');
  showFormField('message', 'Message', 'textarea', $data);
  showFormFieldSetEnd();
  showFormEnd('Submit', 'contact');
}

function showContent($data)
{
  if ($data['valid'] === true) {
    include('thanks.php');
    showThankYouContent($data);
  } else {
    showContactContent($data);
  }
}
