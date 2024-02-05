const typeWriter = (elem, text, index) => {
    if (index < text.length) {
        elem.innerHTML += text[index];
        index++;
    }
    
    setTimeout(() => {
        typeWriter(elem, text, index);
    }, 70);
}