function toggleLanguage() {
  const toggleSwitch = document.getElementById('language-toggle');
  const form = document.getElementById('language-form');

  if (toggleSwitch.checked) {
    form.action = "/Healwave/language/change/" + 'np';

  } else {
    form.action = "/Healwave/language/change/" + 'en';
  }

  form.submit();
}