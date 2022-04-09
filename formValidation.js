
function StrindgValidation() {
    var element= document.getElementById("name");
    var ExpREg= /^[a-zA-Z\S]+$/;
    if (!ExpREg.test.value(element.name)) {
        alert("enter a string please");
        return false;
    }
}