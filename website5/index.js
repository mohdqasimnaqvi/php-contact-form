const cl = (x) => console.log(x);
const outputSpan = document.querySelector('#output');
const input = document.querySelector('#text');
input.addEventListener('keyup', showSuggestion)

function showSuggestion(e) {
    const str = e.target.value;
    if (str.length === 0) return outputSpan.innerHTML = '';
    const XMLhttp = new XMLHttpRequest();
    XMLhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("output").innerHTML = this.responseText;
            cl(this.responseText)
        }
    };
    XMLhttp.open("GET", "suggest.php?q=" + str, true);
    XMLhttp.send();
    
}