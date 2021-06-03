let btnAgriculture = document.querySelector('.btn_agriculture')
let btn_elevage = document.querySelector('.btn_elevage')
let statistiques = document.querySelectorAll('.statistique')
let elementsAgriculture = document.querySelector('.listAgriculture')
let elementsElevage = document.querySelector('.listeElevage')
//
let formAgriculture = document.querySelector('.agriculture')
let formElevage = document.querySelector('.elevage')

// button ajouter agriculture
let btnAddAgriculture = document.querySelector('.btn_add_agriculture')
let btnAddElevage = document.querySelector('.btn_add_elevage')
// bu
let buttonAgriculture = document.querySelector('.btn-agricultures')
console.log(buttonAgriculture)
let buttonElevage = document.querySelector('.btn-elevages')
// evenement pour afficher les formulaire et supprimer les buttons ajout
buttonAgriculture.addEventListener('click',(e)=>{
    btnAddAgriculture.classList.remove('activeBack')
    formAgriculture.classList.add('active')
    elementsAgriculture.classList.remove('active')
    console.log('click')
})
buttonElevage.addEventListener('click',(e)=>{
    btnAddElevage.classList.remove('activeBack')
    formElevage.classList.add('active')
    elementsElevage.classList.remove('active')
})
// fin
btnAgriculture.addEventListener('click',(e)=>{
    for(let i = 0; i < statistiques.length; i++){
        statistiques[i].classList.remove('active')
    }
    elementsAgriculture.classList.add('active')
    btnAddAgriculture.classList.add('activeBack')
    elementsElevage.classList.remove('active')
    btnAddElevage.classList.remove('activeBack')
    formElevage.classList.remove('active')
    formAgriculture.classList.remove('active')
})
btn_elevage.addEventListener('click',(e)=>{
    for(let i = 0; i < statistiques.length; i++){
        statistiques[i].classList.remove('active')
    }
    elementsElevage.classList.add('active')
    btnAddElevage.classList.add('activeBack')
    elementsAgriculture.classList.remove('active')
    btnAddAgriculture.classList.remove('activeBack')
    formAgriculture.classList.remove('active')
    formElevage.classList.remove('active')
})
