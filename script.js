console.log('ok');

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
        newLabel.innerHTML='Update Pony Name';

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

