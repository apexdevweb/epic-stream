//selectionne de la nav
const ctnr = document.querySelector(".nav__primary");
//on creer une div pour contenir les 3 barres du menu mobile
const barretsCtnr = document.createElement("div");
//on lui colle un attribut "class" avec le nom de la class
barretsCtnr.setAttribute("class", "barrets__container");
//on le place dans le conatainer parent
ctnr.appendChild(barretsCtnr);
//selection du menu
const list = document.querySelector(".item__list--primary");
// je fait une boucle for pour creer automatiquement 3 autres div qui vont servir
// d'icône pour le menu mobile
for (let i = 0; i < 3; i++) {
  // création des 3 barres
  const barrets = document.createElement("div");
  barrets.setAttribute("class", "barre");
  barretsCtnr.appendChild(barrets);
  // on ajoute un écouteur d'évènement au click pour déclencher la mécanique
  barretsCtnr.addEventListener("click", () => {
    //utilisation du toggle plus simple et plus rapide
    list.classList.toggle("listview");
    //je selectionne toutes les barres
    const allBarr = document.querySelectorAll(".barre");
    //je fait une condition pour vérifier si la list contient biens la class CSS: "listview"
    if (list.classList.contains("listview")) {
      //si c'est le cas alors on ajoute la constante allBarr avec un foreach pour récupéré les 3 barres d'un coup
      // et on ajoute la classe CSS
      allBarr.forEach((barre) => barre.classList.add("open__barre"));
    } else {
      //si ce n'est pas le cas on remove la class CSS
      allBarr.forEach((barre) => barre.classList.remove("open__barre"));
    }
  });
}
