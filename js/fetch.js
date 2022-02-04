// const params = {
//     idRhum: 1,
//     idSucre: 2
// };
// const options = {
//     method: 'POST',
//     body: JSON.stringify(params)
// };

const response = await fetch('data.php');
const dataJson = await response.json();

dataJson.forEach(element => {

    let section = document.getElementById('panier');
    let blocArticle = document.createElement('article');
    blocArticle.classList.add('article-panier');
    blocArticle.innerText = element.nomProduit;

    let blocDiv = document.createElement('div');
    // blocDiv.style.backgroundColor = 'red';
    // créer un img.

    blocDiv.innerHTML = element.imageProduit;
    blocDiv.style.width = '5vw';
    blocDiv.style.height = '5vh';

    section.appendChild(blocArticle);
    blocArticle.appendChild(blocDiv);
    appelImage();
});
// console.log(dataJson);