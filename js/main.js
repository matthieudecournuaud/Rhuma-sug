// const moins = document.getElementById("moins");
// const nombre = document.getElementById("nombre");
// const plus = document.getElementById("plus");

// let valeur = nombre.valeur;

// nombre.valeur = 1;

// add.addEventListener('click', function () {
//     nombre.valeur++
// })

let add = document.querySelector(".ajout-panier");
// console.log(add);
add.addEventListener("click", function () {
    // console.log(this.dataset.id);
    // console.log("ok");
    localStorage.setItem("toto", this.dataset.id);
    add.style.transform = "translateY(3px)";

    setTimeout(function () {
        add.style.transform = "translateY(-3px)";
    }, 100);
});