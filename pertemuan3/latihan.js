// cara manggil element HTML dengan attribute id yang valuenya adalah title
let title = document.getElementById('title')
// cara manggil element HTML dengan attribute id yang valuenya adalah box
let box = document.getElementById('box')

const showYourName = (e) => {
    title.textContent = 'Your name: ' + e.value
}

const changeColor = (value) => {
    box.style.backgroundColor = value
}