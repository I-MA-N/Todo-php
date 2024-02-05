const modalElem = document.querySelector(".modal");

const showModal = (text) => {
    modalElem.innerHTML = text;
    modalElem.classList.add("modal--shown");
}

const hideModal = () => {
    modalElem.classList.remove("modal--shown");
}