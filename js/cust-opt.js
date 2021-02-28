const themeSwitcher = document.getElementById("themeSwitcher");
const themeStyle = document.getElementById("themeStyle");

themeSwitcher.addEventListener("change", function ()
{
    themeStyle.setAttribute("href", "/css/" + this.value + ".css")
});
