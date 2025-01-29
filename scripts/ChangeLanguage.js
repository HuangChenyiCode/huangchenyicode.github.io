function ChangeLanguage() {
    var language_selection = document.getElementById("language-select");
    location.href = "../" + language_selection.options[language_selection.selectedIndex].value;
}
