const show404 = () => {
    document.body.innerHTML = "";

    // Generating circles with random positions & sizes
    let circleStr = "";

    for (let i = 0; i < 10; i++) {
        const topNum = Math.round(Math.random() * 100);
        const rightNum = Math.round(Math.random() * 100);
        const circleSize = Math.round(Math.random() * 2) + 1;
        const newCircleElem =  `<span class="circle-${circleSize}" style="top: ${topNum}%; right: ${rightNum}%;"></span>`;
     
        circleStr += newCircleElem;
    }

    const errorElem = `
    <div class="error">
        <h1>
            ارور 404
        </h1>
        <h2>
            صفحه مورد نظر یافت نشد! ⊙﹏⊙
        </h2>
        ${
            circleStr
        }
    </div>
    `

    document.body.insertAdjacentHTML("afterbegin", errorElem);
}