//Link to the loginpage
const linkky = 'back/check_login.php';

//Redirect
function linkk(){
    window.location = linkky;
}

let a = 0;
function chage(){
    if(a === 0){
        // document.getElementById('data').classList.remove('hidden');
        document.getElementById('name').removeAttribute('readonly');
        // document.getElementById('name').removeAttribute('value');
        document.getElementById('name').removeAttribute('style');
        document.getElementById('surname').removeAttribute('readonly');
        // document.getElementById('surname').removeAttribute('value');
        document.getElementById('surname').removeAttribute('style');
        document.getElementById('name').classList.remove('cannot_change');
        document.getElementById('surname').classList.remove('cannot_change');
        document.getElementById('save').innerText = 'Сохранить';
        if(document.getElementById('surname').value === 'Not undefined'){
            document.getElementById('surname').value = '';
        }
        if(document.getElementById('name').value === 'Not undefined'){
            document.getElementById('name').value = '';
        }

        a++;
    } else {
        document.getElementById('profform').removeAttribute('action');
        document.getElementById('profform').removeAttribute('onsubmit');
        document.getElementById('profform').setAttribute('action','back/crud.php');
        a = 0;
    }
}


function account() {
    document.getElementById('lmao3').classList.add('nch');
    document.getElementById('lmao2').classList.add('nch');
    document.getElementById('lmao1').classList.remove('nch')
    document.getElementById('account').style.display = 'flex';
    document.getElementById('method').style.display = 'none';
    document.getElementById('theme').style.display = 'none';
}

function hash_method(){
    document.getElementById('lmao1').classList.add('nch');
    document.getElementById('lmao2').classList.remove('nch')
    document.getElementById('lmao3').classList.add('nch');
    document.getElementById('account').style.display = 'none';
    document.getElementById('method').style.display = 'block';
    document.getElementById('theme').style.display = 'none';
}

function theme(){
    document.getElementById('lmao1').classList.add('nch');
    document.getElementById('lmao3').classList.remove('nch')
    document.getElementById('lmao2').classList.add('nch');
    document.getElementById('account').style.display = 'none';
    document.getElementById('method').style.display = 'none';
    document.getElementById('theme').style.display = 'block';
}

