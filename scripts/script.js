let updatePonyCollection = document.querySelectorAll('.pony-item');


for (let pony of updatePonyCollection ){

    pony.addEventListener('click', ()=>{
        document.getElementById('updatePony').innerHTML='';

        let ponyId = pony.getAttribute('id');
        let ponyName = pony.getAttribute('data-name');
        console.log(ponyName, ' ', ponyId);

        let newForm = document.createElement('form');
        newForm.setAttribute('id', 'updateForm');
        newForm.setAttribute('method', 'post');

        let newInput =document.createElement('input');
        newInput.setAttribute('name', 'updatePony[]');
        newInput.value=ponyName;
        newInput.setAttribute('id', ponyId);

        let newInputHidden =document.createElement('input');
        newInputHidden.setAttribute('type', 'hidden');
        newInputHidden.value=ponyId;
        newInputHidden.setAttribute('name', 'updatePony[]');


        let newLabel = document.createElement('label');
        newLabel.innerHTML='Update name ';

        let newButton=document.createElement('button');
        newButton.setAttribute('type', 'submit');
        newButton.innerHTML='Update name';

        newForm.appendChild(newLabel);
        newForm.appendChild(newInput);
        newForm.appendChild(newInputHidden);
        newForm.appendChild(newButton);

        document.getElementById('updatePony').appendChild(newForm);

    })

}
const showFirstImage = (selector, parentElement,paragraph) =>{
    let firstPony = document.querySelector(selector);
    let ponyName=firstPony.getAttribute('data-name').toLowerCase();
    let imgSrc = 'img/' + ponyName +'.png'
    document.getElementById(parentElement).setAttribute('src', imgSrc);
    document.getElementById(parentElement).setAttribute('alt', 'No image found');
    document.getElementById(paragraph).innerHTML=ponyName;
}


const displayImg = (selector, parentElement, paragraph) =>{

    let showPonies = document.querySelectorAll(selector);

    for (let pony of showPonies){
        pony.addEventListener('click', ()=>{
            let ponyName=pony.getAttribute('data-name').toLowerCase();
            let imgSrc = 'img/' + ponyName +'.png'
            document.getElementById(parentElement).setAttribute('src', imgSrc);
            document.getElementById(parentElement).setAttribute('alt', 'No image found');
            document.getElementById(paragraph).innerHTML=ponyName;

        })
    }
}

if (document.querySelector('.show-pony') != null){
    showFirstImage('.show-pony', 'get-pony-img', 'get-pony-name');
    displayImg('.show-pony', 'get-pony-img', 'get-pony-name');
}

if (document.querySelector('.find-pony') != null){
    showFirstImage('.find-pony', 'find-pony-img', 'find-pony-name');
    displayImg('.find-pony', 'find-pony-img', 'find-pony-name');
}