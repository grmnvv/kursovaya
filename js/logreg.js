const re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
const error = document.getElementById('error');
const input = document.querySelector('input');
const logo = document.getElementById('logo');
const vie = document.getElementById('vie');
const hid = document.getElementById('hidden');
const change = document.getElementById('change');


//ПЕРЕХОД НА ДРУГУЮ СТРАНИЦУ
function log2reg(){
    if(re.test(input.value)) {
        let fast = input.value;
        vie.style.display = 'none';
        hid.style.display = 'block';
        change.innerText = fast;
    } else {
        error.style.display = 'block';
        logo.style.margin = '0 0 45px 0';
    }
}
