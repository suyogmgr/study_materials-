function show(element){
    element.querySelector('.dropdown').classList.add('show');
}

function hide(element){
    element.querySelector('.dropdown').classList.remove('show');
}

function slideOut(){
    document.getElementById('sidebar').classList.remove('show');
    document.getElementById('sidebar').classList.add('close');
}

function slideIn(){
    document.getElementById('sidebar').classList.remove('close');
    document.getElementById('sidebar').classList.add('show');
}