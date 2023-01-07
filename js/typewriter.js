const typewriterDom = document.getElementById('typewriter-text');
const typewriter = new typewriter(typewriterDom, {
    loop: false,
    delay: 75,
});

typewriter
    .pauseFor(1000)
    .typeString('<span class="color-scheme-bright">Welcome to Sam Itman\'s Website!</span>')
    .pauseFor(500)
    .start();