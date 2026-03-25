function analyzeText() {
    var text = document.getElementById("inputText").value;

    var character = text.length;

    var word = 0;
    var text2 = text.trim();

    if (text2 != "") {
        var arr = text2.split(" ");
        for (var i = 0; i < arr.length; i++) {
            if (arr[i] != "") {
                word++;
            }
        }
    }

    var reverse = "";
    for (var j = text.length - 1; j >= 0; j--) {
        reverse = reverse + text[j];
    }

    document.getElementById("charCount").innerHTML = character;
    document.getElementById("wordCount").innerHTML = word;
    document.getElementById("reversedText").innerHTML = reverse;
}