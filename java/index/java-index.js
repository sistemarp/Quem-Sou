$(document).ready(() => {
    var button_pagina = document.getElementById("link-home");
    button_pagina.style.color = "#1b5e20";
})

document.querySelectorAll('a')

function getUser(){
    return {user_name: 'Anderson Ramos Padovani', user_contact: '(45) 9 9953-0893', user_email: 'andersonpadovani@protonmail.com'}
    // return {};
}

function populate(){
    return {1: {title: 'Python', describe: 'Programação em python, web-sockets front end back end', img:'./imagen/python.png'},
            2: {title: 'Mysql', describe: 'Programação em python, web-sockets front end back end', img:'./imagen/mysql.png'},
            3: {title: 'Java', describe: 'Programação em python, web-sockets front end back end', img:'./imagen/java.png'},
            4: {title: 'JavaScript', describe: 'Programação em python, web-sockets front end back end', img:'./imagen/javascript.png'}};
    // return {};
}

const html = {
    get(element) {
        return document.querySelector(element);
    }
}

const createSkills = {
    data: populate(),
    divInfos: html.get('.infos'),
    create () {
        this.divInfos.innerHTML = '';

        for (const element in createSkills.data) {
            const cardIcon = document.createElement('div');
            cardIcon.classList.add('card-icon');

            const icon = document.createElement('div');
            icon.classList.add('icon');

            const image = document.createElement('img');
            image.setAttribute("src", createSkills.data[element].img)

            const iconInfo = document.createElement('div');
            iconInfo.classList.add('icon-info');

            const paragraph = document.createElement('p');
            paragraph.innerHTML = createSkills.data[element].title;

            const span = document.createElement('span');
            span.innerHTML = createSkills.data[element].describe;

            const button = document.createElement('button');
            button.innerText = 'More';

            icon.appendChild(image);

            iconInfo.appendChild(paragraph);
            iconInfo.appendChild(span);
            iconInfo.appendChild(button);

            cardIcon.appendChild(icon);
            cardIcon.appendChild(iconInfo); 

            createSkills.divInfos.appendChild(cardIcon);          
        }
    },
    validate(){
        if(Object.keys(createSkills.data).length > 0){
            createSkills.create();
        }else{
            const cardIcon = document.createElement('div');
            cardIcon.classList.add('card-icon');

            const span = document.createElement('span');
            span.innerHTML = 'Nenhuma Skill encontrada!';

            cardIcon.appendChild(span);
            createSkills.divInfos.appendChild(cardIcon);
        }
    }
}

const insertUser = {
    set() {
        const user = getUser();

        const name = html.get('#nome')
        const contato = html.get('#contato');
        const email = html.get('#email');
        name.innerHTML, contato.innerHTML, email.innerHTML = '';

        name.innerHTML = user["user_name"];
        contato.innerHTML = user['user_contact'];
        email.innerHTML = user['user_email'];
    }
}

createSkills.validate();
insertUser.set();