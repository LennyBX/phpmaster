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

function plusInfoAccueil(el){
    let visibility;
    let opacity;
    if (el.innerText.toLowerCase() === 'cacher'){
        visibility = 'hidden';
        opacity = 0;
        el.innerText = '...';
    }else {
        visibility = "visible";
        opacity = 1;
        el.innerText = 'cacher';
    }
    const p = el.parentNode;
    const content = p.parentNode;
    const info = content.lastElementChild;
    info.style.visibility = visibility;
    info.style.opacity = opacity;
}

