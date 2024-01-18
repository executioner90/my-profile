const canvas = document.getElementById('myCanvas');
const ctx = canvas.getContext('2d');

canvas.width = window.innerWidth;
canvas.height = window.innerHeight;

const particleArray = [];
const numberOfParticles = 100;
const maxRadius = 5;
const minRadius = 1;
const particleColor = 'rgba(255, 255, 255, 0.5)';
const lineColor = 'rgba(255, 255, 255, 0.1)';

class Particle {
    constructor() {
        this.x = Math.random() * canvas.width;
        this.y = Math.random() * canvas.height;
        this.radius = Math.random() * (maxRadius - minRadius) + minRadius;
        this.velocityX = (Math.random() - 0.5) * 3;
        this.velocityY = (Math.random() - 0.5) * 3;
    }

    draw() {
        ctx.beginPath();
        ctx.arc(this.x, this.y, this.radius, 0, Math.PI * 2, false);
        ctx.fillStyle = particleColor;
        ctx.fill();
        ctx.closePath();
    }

    update() {
        this.x += this.velocityX;
        this.y += this.velocityY;

        if (this.x - this.radius < 0 || this.x + this.radius > canvas.width) {
            this.velocityX = -this.velocityX;
        }

        if (this.y - this.radius < 0 || this.y + this.radius > canvas.height) {
            this.velocityY = -this.velocityY;
        }

        this.draw();
    }

    connect(particle) {
        const dx = this.x - particle.x;
        const dy = this.y - particle.y;
        const distance = Math.sqrt(dx * dx + dy * dy);

        if (distance < 100) {
            ctx.beginPath();
            ctx.strokeStyle = lineColor;
            ctx.lineWidth = 0.5;
            ctx.moveTo(this.x, this.y);
            ctx.lineTo(particle.x, particle.y);
            ctx.stroke();
            ctx.closePath();
        }
    }
}


function init() {
    for (let i = 0; i < numberOfParticles; i++) {
        particleArray.push(new Particle());
    }

    animate();
}

function animate() {
    ctx.clearRect(0, 0, canvas.width, canvas.height);

    for (let i = 0; i < particleArray.length; i++) {
        particleArray[i].update();

        for (let j = 0; j < particleArray.length; j++) {
            if (i !== j) {
                particleArray[i].connect(particleArray[j]);
            }
        }
    }

    requestAnimationFrame(animate);
}


init();


window.addEventListener('resize', () => {
    canvas.width = window.innerWidth;
    canvas.height = window.innerHeight;
});
