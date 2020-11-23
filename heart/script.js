function createHeart() {
    const heart = document.createElement("div");
    heart.classList.add("heart");

    heart.style.left = Math.random() * 50 + "vw";
    heart.style.animationDuration = Math.random() * 2 +3 + "m";

    heart.innerText = " I love you ❤";

    document.body.appendChild(heart);

    setTimeout(() => {
        heart.remove();
    }, 5000);
}

setInterval(createHeart, 500);
