import Typewriter from 'typewriter-effect'

var typewriter = new Typewriter('#typewriter-text', {
    loop: false,
    delay: 75,
});

typewriter
    .pauseFor(1000)
    .typeString('<span class="color-scheme-bright">Welcome to Sam Itman\'s Website!</span>')
    .pauseFor(500)
    .start();