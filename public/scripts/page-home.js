addEventListenerToFilterContent()

function addEventListenerToFilterContent() {
    const input = document.getElementById('input')
    const card = document.getElementById

    input.addEventListener('input', (e) => {
        document.querySelectorAll('.filter-data').forEach((h2) => {
            if (input.innerHTML.toLowerCase().search(input.value.toLowerCase()) === 0) {
                input.parentElement.style.display = "block";
            }
            else {
                input.parentElement.style.display = "none";
            }
        })      
    })
}