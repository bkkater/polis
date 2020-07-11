addEventListenerToFilterContent()

function addEventListenerToFilterContent() {
    const input = document.getElementById('input')
    const card = document.getElementById('card')

    input.addEventListener('input', (e) => {
        document.querySelectorAll('.filter-data').forEach((h2) => {
            if (input.innerHTML.toLowerCase().search(input.value.toLowerCase()) === 0) {
                card.style.display = "block";
            }
            else {
                card.style.display = "none";
            }
        })      
    })
}