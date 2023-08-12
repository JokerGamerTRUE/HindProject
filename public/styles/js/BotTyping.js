function typeText(element, text) {
    var i = 0;
    var interval = 150;

    function loop() {
        if (i < text.length) {
            element.textContent += text.charAt(i);
            i++;
            setTimeout(loop, interval);
        } else {
            element.textContent = "";
            setTimeout(typeText, interval, element, text);
        }
    }

    loop();
}

var element = document.getElementById("element");
var text = "IT senior     ";

typeText(element, text);
