function suppTuteur(){
    const a = document.querySelectorAll(".supprimer");
    a.forEach(element => element.addEventListener('click', function (){
        const td = this.parentNode;
        const tr = td.parentNode;
        const tuteur = tr.firstElementChild.innerText;
        console.log(tuteur);
        if(confirm("Voulez-vous supprimer le tuteur : " + tuteur))
            tr.remove();
        return 0;
    }));
}

suppTuteur();