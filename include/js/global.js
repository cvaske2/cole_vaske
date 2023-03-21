window.addEventListener('load', function() {
    const color_codes = {
        green: '#132300',
        brown: '#432300',
        purple: '#35004a'
    };
    let bg_color = this.localStorage.getItem("color");

    if (bg_color !== null) {
        document.body.style.backgroundColor = color_codes[bg_color];
    }
});