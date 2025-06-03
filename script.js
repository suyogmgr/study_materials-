
function slideOut(){
    document.getElementById('sidebar').classList.remove('show');
    document.getElementById('sidebar').classList.add('close');
}

function slideIn(){
    document.getElementById('sidebar').classList.remove('close');
    document.getElementById('sidebar').classList.add('show');
}


function list(element){
    document.querySelectorAll('.dropdown.show').forEach(drop =>{
        if(!element.contains(drop)){
            drop.classList.remove('show');
        }
    });

    const dropdown = element.querySelector('.dropdown');

    if(dropdown){
        dropdown.classList.toggle('show');
    }
}