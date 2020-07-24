
function filterCards(){
    const inputField = document.getElementById('input-field');

    inputField.addEventListener('input', (e) => {
       const cards = document.querySelectorAll('.card');
       const value = e.target.value.toLowerCase();

       cards.forEach((card)=> {
           const title = card.firstElementChild.innerHTML.toLowerCase();
           let found = false
           const words = title.split(' ');
           words.forEach((word) =>{
                if(word.search(value) === 0){
                    found = true;
                }
           })
           if(found){
               card.style.display = 'block';
           }
           else {
                card.style.display = 'none';
            }
       })
    })
}
