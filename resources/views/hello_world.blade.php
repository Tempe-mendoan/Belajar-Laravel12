<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello World</title>
    <style>
        /* Reset dan font dasar */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Montserrat', sans-serif;
        }
        
        /* Variabel warna */
        :root {
            --bg-color: #0f0f1e;
            --text-color: #ffffff;
            --accent-1: #e94560;
            --accent-2: #4e00c2;
            --accent-3: #00d0ff;
            --glow-color: rgba(233, 69, 96, 0.6);
        }
        
        body {
            background-color: var(--bg-color);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            overflow: hidden;
            position: relative;
        }
        
        /* Latar belakang beranimasi */
        .bg-animation {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 1;
            opacity: 0.4;
        }
        
        .bg-animation span {
            position: absolute;
            width: 4px;
            height: 4px;
            background: var(--accent-3);
            border-radius: 50%;
            box-shadow: 0 0 10px var(--accent-3), 0 0 20px var(--accent-3);
            animation: animate 15s linear infinite;
        }
        
        .bg-animation span:nth-child(even) {
            background: var(--accent-1);
            box-shadow: 0 0 10px var(--accent-1), 0 0 20px var(--accent-1);
        }
        
        @keyframes animate {
            0% {
                transform: translateY(100vh) scale(0);
            }
            100% {
                transform: translateY(-100vh) scale(1);
            }
        }
        
        /* Container utama */
        .container {
            position: relative;
            z-index: 10;
            text-align: center;
            padding: 2rem;
        }
        
        /* Animasi teks utama */
        .hello-world {
            font-size: 7rem;
            font-weight: 800;
            position: relative;
            color: transparent;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        
        .text-hello, .text-world {
            position: relative;
            display: block;
            text-transform: uppercase;
            letter-spacing: 5px;
        }
        
        .text-hello {
            background: linear-gradient(90deg, var(--accent-2), var(--accent-3));
            background-clip: text;
            -webkit-background-clip: text;
            margin-bottom: 1rem;
            animation: glow-hello 2s ease-in-out infinite alternate;
        }
        
        .text-world {
            background: linear-gradient(90deg, var(--accent-1), var(--accent-2));
            background-clip: text;
            -webkit-background-clip: text;
            animation: glow-world 2s ease-in-out infinite alternate;
        }
        
        @keyframes glow-hello {
            0% {
                text-shadow: 0 0 10px var(--accent-3), 0 0 20px var(--accent-3);
                transform: scale(1);
            }
            100% {
                text-shadow: 0 0 15px var(--accent-3), 0 0 30px var(--accent-3), 0 0 45px var(--accent-3);
                transform: scale(1.05);
            }
        }
        
        @keyframes glow-world {
            0% {
                text-shadow: 0 0 10px var(--accent-1), 0 0 20px var(--accent-1);
                transform: scale(1);
            }
            100% {
                text-shadow: 0 0 15px var(--accent-1), 0 0 30px var(--accent-1), 0 0 45px var(--accent-1);
                transform: scale(1.05);
            }
        }
        
        /* Animasi garis bawah */
        .underline {
            width: 0;
            height: 5px;
            background: linear-gradient(90deg, var(--accent-1), var(--accent-3));
            position: relative;
            margin: 1.5rem auto;
            border-radius: 5px;
            animation: line-anim 2s forwards ease-out;
            box-shadow: 0 0 10px var(--glow-color);
        }
        
        @keyframes line-anim {
            0% {
                width: 0;
            }
            100% {
                width: 100%;
            }
        }
        
        /* Efek partikel */
        .particles {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 5;
            pointer-events: none;
        }
        
        /* Button interaktif */
        .btn-interact {
            background: transparent;
            border: 2px solid var(--accent-3);
            color: var(--text-color);
            padding: 12px 30px;
            font-size: 1.2rem;
            border-radius: 50px;
            cursor: pointer;
            position: relative;
            overflow: hidden;
            transition: all 0.3s ease;
            margin-top: 2rem;
            z-index: 20;
            text-transform: uppercase;
            font-weight: 600;
            letter-spacing: 2px;
        }
        
        .btn-interact:hover {
            background-color: var(--accent-3);
            box-shadow: 0 0 20px var(--accent-3);
            transform: translateY(-5px);
        }
        
        .btn-interact::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
            transition: 0.5s;
        }
        
        .btn-interact:hover::before {
            left: 100%;
        }
        
        /* Dud class for text scramble effect */
        .dud {
            color: var(--accent-3);
        }
        
        /* Responsive design */
        @media screen and (max-width: 768px) {
            .hello-world {
                font-size: 4rem;
            }
        }
        
        @media screen and (max-width: 480px) {
            .hello-world {
                font-size: 3rem;
            }
        }
    </style>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700;800&display=swap" rel="stylesheet">
</head>
<body>
    <!-- Background animation -->
    <div class="bg-animation" id="bg-animation"></div>
    
    <!-- Particle container -->
    <div class="particles" id="particles"></div>
    
    <!-- Main container -->
    <div class="container">
        <div class="hello-world">
            <span class="text-hello" id="text-hello">Hello</span>
            <span class="text-world" id="text-world">World</span>
        </div>
        
        <div class="underline"></div>
        
        <button class="btn-interact" id="btn-interact">Unleash Magic</button>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Create background animation elements
            const bgAnimation = document.getElementById('bg-animation');
            for (let i = 0; i < 50; i++) {
                const span = document.createElement('span');
                
                // Random positioning and timing
                span.style.left = Math.random() * 100 + '%';
                span.style.top = Math.random() * 100 + '%';
                span.style.width = Math.random() * 3 + 2 + 'px';
                span.style.height = span.style.width;
                span.style.animationDelay = Math.random() * 10 + 's';
                span.style.animationDuration = Math.random() * 20 + 10 + 's';
                
                bgAnimation.appendChild(span);
            }
            
            // Interactive button effect
            const btnInteract = document.getElementById('btn-interact');
            const textHello = document.getElementById('text-hello');
            const textWorld = document.getElementById('text-world');
            
            btnInteract.addEventListener('click', function() {
                // Create explosion effect
                createExplosion();
                
                // Change colors
                const colors = [
                    '#e94560', '#4e00c2', '#00d0ff', '#7700ff', 
                    '#ff9900', '#00ff88', '#ff00aa'
                ];
                
                const randomColor1 = colors[Math.floor(Math.random() * colors.length)];
                const randomColor2 = colors[Math.floor(Math.random() * colors.length)];
                
                textHello.style.background = `linear-gradient(90deg, ${randomColor1}, ${randomColor2})`;
                textHello.style.backgroundClip = 'text';
                textHello.style.webkitBackgroundClip = 'text';
                
                const randomColor3 = colors[Math.floor(Math.random() * colors.length)];
                const randomColor4 = colors[Math.floor(Math.random() * colors.length)];
                
                textWorld.style.background = `linear-gradient(90deg, ${randomColor3}, ${randomColor4})`;
                textWorld.style.backgroundClip = 'text';
                textWorld.style.webkitBackgroundClip = 'text';
            });
            
            // Function to create explosion particles
            function createExplosion() {
                const particles = document.getElementById('particles');
                particles.innerHTML = ''; // Clear previous particles
                
                const centerX = window.innerWidth / 2;
                const centerY = window.innerHeight / 2;
                
                // Use fragment to improve performance
                const fragment = document.createDocumentFragment();
                
                for (let i = 0; i < 100; i++) {
                    const particle = document.createElement('div');
                    particle.style.position = 'absolute';
                    particle.style.width = Math.random() * 10 + 5 + 'px';
                    particle.style.height = particle.style.width;
                    particle.style.background = getRandomColor();
                    particle.style.borderRadius = '50%';
                    particle.style.boxShadow = `0 0 10px ${particle.style.background}`;
                    
                    // Set initial position at center
                    particle.style.left = centerX + 'px';
                    particle.style.top = centerY + 'px';
                    
                    // Calculate random direction
                    const angle = Math.random() * Math.PI * 2;
                    const distance = Math.random() * 500 + 100;
                    const speed = Math.random() * 2 + 1;
                    
                    // Animate the particle
                    const animation = particle.animate([
                        { 
                            transform: 'translate(-50%, -50%) scale(0)',
                            opacity: 1
                        },
                        {
                            transform: `translate(
                                calc(-50% + ${Math.cos(angle) * distance}px), 
                                calc(-50% + ${Math.sin(angle) * distance}px)
                            ) scale(1)`,
                            opacity: 0
                        }
                    ], {
                        duration: speed * 1000,
                        easing: 'cubic-bezier(0.1, 0.8, 0.2, 1)'
                    });
                    
                    animation.onfinish = () => {
                        particle.remove();
                    };
                    
                    fragment.appendChild(particle);
                }
                
                particles.appendChild(fragment);
            }
            
            function getRandomColor() {
                const colors = [
                    '#e94560', '#4e00c2', '#00d0ff', '#7700ff', 
                    '#ff9900', '#00ff88', '#ff00aa'
                ];
                return colors[Math.floor(Math.random() * colors.length)];
            }
            
            // Text scramble effect
            class TextScramble {
                constructor(el) {
                    this.el = el;
                    this.chars = '!<>-_\\/[]{}—=+*^?#________';
                    this.update = this.update.bind(this);
                }
                
                setText(newText) {
                    const oldText = this.el.innerText;
                    const length = Math.max(oldText.length, newText.length);
                    const promise = new Promise((resolve) => this.resolve = resolve);
                    this.queue = [];
                    
                    for (let i = 0; i < length; i++) {
                        const from = oldText[i] || '';
                        const to = newText[i] || '';
                        const start = Math.floor(Math.random() * 40);
                        const end = start + Math.floor(Math.random() * 40);
                        this.queue.push({ from, to, start, end });
                    }
                    
                    cancelAnimationFrame(this.frameRequest);
                    this.frame = 0;
                    this.update();
                    return promise;
                }
                
                update() {
                    let output = '';
                    let complete = 0;
                    
                    for (let i = 0, n = this.queue.length; i < n; i++) {
                        let { from, to, start, end, char } = this.queue[i];
                        
                        if (this.frame >= end) {
                            complete++;
                            output += to;
                        } else if (this.frame >= start) {
                            if (!char || Math.random() < 0.28) {
                                char = this.randomChar();
                                this.queue[i].char = char;
                            }
                            output += `<span class="dud">${char}</span>`;
                        } else {
                            output += from;
                        }
                    }
                    
                    this.el.innerHTML = output;
                    
                    if (complete === this.queue.length) {
                        this.resolve();
                    } else {
                        this.frameRequest = requestAnimationFrame(this.update);
                        this.frame++;
                    }
                }
                
                randomChar() {
                    return this.chars[Math.floor(Math.random() * this.chars.length)];
                }
            }
            
            // Initialize text scramble
            const phrases = [
                'HELLO',
                'HOLA',
                'BONJOUR',
                'CIAO',
                'NAMASTE',
                'HELLO'
            ];
            
            const worldPhrases = [
                'WORLD',
                'MUNDO',
                'MONDE',
                'MONDO',
                'VISHWA',
                'WORLD'
            ];
            
            const el = document.getElementById('text-hello');
            const el2 = document.getElementById('text-world');
            const fx = new TextScramble(el);
            const fx2 = new TextScramble(el2);
            
            let counter = 0;
            
            const next = () => {
                fx.setText(phrases[counter]);
                fx2.setText(worldPhrases[counter]);
                counter = (counter + 1) % phrases.length;
                setTimeout(next, 3000);
            };
            
            next();
        });
    </script>
</body>
</html>
