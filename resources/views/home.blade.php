<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Experiment Lab • Next Generation Research Platform</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700;900&family=Exo+2:wght@300;400;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary-glow: #ff0080;
            --secondary-glow: #00ffff;
            --tertiary-glow: #ffeb3b;
        }

        * {
            box-sizing: border-box;
        }

        body {
            font-family: 'Exo 2', sans-serif;
            background: radial-gradient(ellipse at bottom, #0d1b2a 0%, #000000 100%);
            min-height: 100vh;
            overflow-x: hidden;
            color: #ffffff;
        }

        .cyber-border {
            position: relative;
            background: rgba(13, 27, 42, 0.95);
            border: 1px solid transparent;
            border-radius: 15px;
            background-clip: padding-box;
        }

        .cyber-border::before {
            content: '';
            position: absolute;
            top: -2px; left: -2px;
            right: -2px; bottom: -2px;
            background: linear-gradient(45deg, var(--primary-glow), var(--secondary-glow), var(--tertiary-glow), var(--primary-glow));
            border-radius: 17px;
            z-index: -1;
            animation: borderGlow 3s linear infinite;
            background-size: 400%;
        }

        .cyber-border::after {
            content: '';
            position: absolute;
            top: -2px; left: -2px;
            right: -2px; bottom: -2px;
            background: linear-gradient(45deg, var(--primary-glow), var(--secondary-glow), var(--tertiary-glow), var(--primary-glow));
            border-radius: 17px;
            z-index: -2;
            filter: blur(20px);
            opacity: 0.7;
            animation: borderGlow 3s linear infinite;
            background-size: 400%;
        }

        @keyframes borderGlow {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }

        .hologram-effect {
            background: linear-gradient(125deg, rgba(255,0,128,0.1) 0%, rgba(0,255,255,0.1) 50%, rgba(255,235,59,0.1) 100%);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255,255,255,0.1);
        }

        .neon-text {
            text-shadow: 0 0 10px var(--primary-glow), 0 0 20px var(--primary-glow), 0 0 30px var(--primary-glow);
        }

        .cyber-title {
            font-family: 'Orbitron', monospace;
            font-weight: 900;
            background: linear-gradient(45deg, var(--primary-glow), var(--secondary-glow));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            text-transform: uppercase;
            letter-spacing: 3px;
        }

        .particle {
            position: absolute;
            width: 4px;
            height: 4px;
            background: var(--secondary-glow);
            border-radius: 50%;
            animation: float 6s infinite linear;
        }

        @keyframes float {
            0% { transform: translateY(0) translateX(0); opacity: 0; }
            10% { opacity: 1; }
            90% { opacity: 1; }
            100% { transform: translateY(-100vh) translateX(100px); opacity: 0; }
        }

        .cyber-button {
            background: linear-gradient(45deg, transparent 5%, var(--primary-glow) 5%);
            border: 0;
            padding: 12px 30px;
            color: white;
            font-family: 'Orbitron', monospace;
            letter-spacing: 3px;
            box-shadow: 6px 0px 0px var(--secondary-glow);
            outline: transparent;
            position: relative;
            cursor: pointer;
            transition: all 0.3s ease;
            text-transform: uppercase;
        }

        .cyber-button:hover {
            transform: translateY(-3px);
            box-shadow: 9px 3px 0px var(--secondary-glow);
        }

        .cyber-input {
            background: rgba(0, 0, 0, 0.7);
            border: 2px solid transparent;
            border-image: linear-gradient(45deg, var(--primary-glow), var(--secondary-glow)) 1;
            color: white;
            padding: 15px;
            font-family: 'Exo 2', sans-serif;
            transition: all 0.3s ease;
        }

        .cyber-input:focus {
            outline: none;
            box-shadow: 0 0 15px var(--primary-glow);
        }

        .toggle-switch {
            position: relative;
            display: inline-block;
            width: 120px;
            height: 50px;
        }

        .toggle-switch input {
            opacity: 0;
            width: 0;
            height: 0;
        }

        .slider {
            position: absolute;
            cursor: pointer;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(45deg, #1a1a2e, #16213e);
            transition: .4s;
            border-radius: 34px;
            border: 2px solid var(--primary-glow);
        }

        .slider:before {
            position: absolute;
            content: "";
            height: 40px;
            width: 40px;
            left: 4px;
            bottom: 4px;
            background: linear-gradient(45deg, var(--primary-glow), var(--secondary-glow));
            transition: .4s;
            border-radius: 50%;
        }

        input:checked + .slider {
            background: linear-gradient(45deg, #16213e, #1a1a2e);
        }

        input:checked + .slider:before {
            transform: translateX(70px);
        }

        .flip-card {
            perspective: 1000px;
        }

        .flip-card-inner {
            position: relative;
            width: 100%;
            height: 100%;
            text-align: center;
            transition: transform 0.8s;
            transform-style: preserve-3d;
        }

        .flip-card.flipped .flip-card-inner {
            transform: rotateY(180deg);
        }

        .flip-card-front, .flip-card-back {
            position: absolute;
            width: 100%;
            height: 100%;
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
        }

        .flip-card-back {
            transform: rotateY(180deg);
        }

        .experiment-card {
            background: linear-gradient(135deg, rgba(255,0,128,0.1) 0%, rgba(0,255,255,0.1) 100%);
            border: 1px solid rgba(255,255,255,0.1);
            backdrop-filter: blur(10px);
            transition: all 0.3s ease;
        }

        .experiment-card:hover {
            transform: translateY(-10px) scale(1.02);
            box-shadow: 0 20px 40px rgba(0,255,255,0.3);
        }

        .pulse-glow {
            animation: pulseGlow 2s infinite;
        }

        @keyframes pulseGlow {
            0% { box-shadow: 0 0 5px var(--primary-glow); }
            50% { box-shadow: 0 0 20px var(--primary-glow), 0 0 30px var(--secondary-glow); }
            100% { box-shadow: 0 0 5px var(--primary-glow); }
        }

        .matrix-bg {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            z-index: -1;
            opacity: 0.1;
        }
    </style>
</head>
<body class="relative overflow-x-hidden">
    <!-- Animated Background Particles -->
    <div class="matrix-bg" id="matrixBg"></div>

    <!-- Navigation -->
    <nav class="relative z-10">
        <div class="container mx-auto px-4 py-6 flex justify-between items-center">
            <div class="flex items-center space-x-3">
                <div class="cyber-border p-3 rounded-full">
                    <i class="fas fa-atom text-2xl" style="color: var(--secondary-glow);"></i>
                </div>
                <h1 class="cyber-title text-3xl">Experiment<span style="color: var(--primary-glow);">Lab</span></h1>
            </div>
            @auth
            <div class="flex items-center space-x-6">
                <div class="text-neon flex items-center space-x-2">
                    <i class="fas fa-user-astronaut" style="color: var(--tertiary-glow);"></i>
                    <span class="font-mono">Welcome, {{ auth()->user()->name }}</span>
                </div>
                <form action="/logout" method="post">
                    @csrf
                    <button type="submit" class="cyber-button text-sm">
                        <i class="fas fa-power-off mr-2"></i>Logout
                    </button>
                </form>
            </div>
            @endauth
        </div>
    </nav>

    <!-- Main Content -->
    <main class="relative z-10">
        @auth
        <!-- Dashboard for Authenticated Users -->
        <div class="container mx-auto px-4 py-8">
            <!-- Header -->
            <div class="text-center mb-16">
                <h1 class="cyber-title text-5xl mb-4">Experiment <span style="color: var(--primary-glow);">Dashboard</span></h1>
                <p class="text-xl text-gray-300 max-w-3xl mx-auto">Monitor, analyze, and control your research experiments in real-time</p>
            </div>

            <!-- Add Experiment Section -->
            <div class="cyber-border p-8 mb-12">
                <div class="flex items-center mb-6">
                    <div class="cyber-border p-3 rounded-full mr-4">
                        <i class="fas fa-plus" style="color: var(--primary-glow);"></i>
                    </div>
                    <h2 class="cyber-title text-2xl">Create New Experiment</h2>
                </div>

                <form action="/add-expirement" method="post" class="space-y-6">
                    @csrf
                    <div>
                        <label class="block text-lg mb-3 font-mono">Experiment Title</label>
                        <input type="text" name="title" placeholder="Enter experiment title"
                               class="cyber-input w-full p-4 text-lg">
                    </div>

                    <div>
                        <label class="block text-lg mb-3 font-mono">Description</label>
                        <textarea name="description" rows="4" placeholder="Describe your experiment in detail"
                                  class="cyber-input w-full p-4 text-lg"></textarea>
                    </div>

                    <button type="submit" name="create-expirement"
                            class="cyber-button text-lg pulse-glow">
                        <i class="fas fa-rocket mr-2"></i>Launch Experiment
                    </button>
                </form>
            </div>

            <!-- Experiments Grid -->
            <div class="cyber-border p-8">
                <div class="flex items-center mb-8">
                    <div class="cyber-border p-3 rounded-full mr-4">
                        <i class="fas fa-vial" style="color: var(--secondary-glow);"></i>
                    </div>
                    <h2 class="cyber-title text-2xl">Active Experiments</h2>
                    <span class="ml-4 px-3 py-1 bg-gradient-to-r from-purple-500 to-pink-500 rounded-full text-sm font-mono">
                        {{ $expirements->count() }} Active
                    </span>
                </div>

                @if($expirements->count() > 0)
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    @foreach($expirements as $expirement)
                    <div class="experiment-card rounded-xl p-6">
                        <div class="flex justify-between items-start mb-4">
                            <div class="w-12 h-12 bg-gradient-to-br from-cyan-500 to-blue-500 rounded-lg flex items-center justify-center">
                                <i class="fas fa-flask text-white"></i>
                            </div>
                            <span class="px-2 py-1 bg-black bg-opacity-50 rounded text-xs font-mono">
                                #{{ $loop->iteration }}
                            </span>
                        </div>

                        <h3 class="text-xl font-bold mb-3 neon-text"><span>[ <span>Owner</span> ]</span> : <span>{{$expirement->user->name}}</span> </h3>
                        <h3 class="text-xl font-bold mb-3 neon-text"><span>[ <span> Title </span> ] : </span>{{ $expirement->title }}</h3>
                        <p class="text-gray-300 mb-6">{{ $expirement->description }}</p>

                        <div class="flex justify-between items-center text-sm">
                            <span class="text-cyan-300 font-mono">
                                <i class="far fa-clock mr-1"></i> {{ $expirement->created_at->diffForHumans() }}
                            </span>
                            <div class="flex space-x-2">
                                <button class="w-8 h-8 rounded-full bg-gradient-to-r from-blue-500 to-cyan-500 flex items-center justify-center">
                                    <a href="/edit/{{$expirement->id}}"><i class="fas fa-edit text-xs"></i></a>
                                </button>
                                <form  action="/delete/{{$expirement->id}}" method="post">
                                  @csrf
                                  @method('DELETE')
                                  <button class="w-8 h-8 rounded-full bg-gradient-to-r from-red-500 to-pink-500 flex items-center justify-center">
                                    <i class="fas fa-trash text-xs"></i>
                                  </button>
                                </form>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                @else
                <div class="text-center py-16">
                    <div class="cyber-border inline-block p-8 rounded-full mb-6">
                        <i class="fas fa-vial-virus text-6xl" style="color: var(--primary-glow);"></i>
                    </div>
                    <h3 class="text-2xl font-bold mb-2">No Active Experiments</h3>
                    <p class="text-gray-400">Create your first experiment to begin your research journey</p>
                </div>
                @endif
            </div>
        </div>

        @else
        <!-- Guest Landing Page with Toggle Auth -->
        <div class="min-h-screen flex items-center justify-center px-4">
            <div class="w-full max-w-4xl">
                <!-- Hero Section -->
                <div class="text-center mb-12">
                    <h1 class="cyber-title text-6xl mb-6">Experiment<span style="color: var(--primary-glow);">Lab</span></h1>
                    <p class="text-xl text-gray-300 mb-8">Next-generation platform for scientific research and experimentation</p>

                    <!-- Toggle Switch -->
                    <div class="flex items-center justify-center space-x-4 mb-8">
                        <span class="font-mono text-lg">LOGIN</span>
                        <label class="toggle-switch">
                            <input type="checkbox" id="authToggle">
                            <span class="slider"></span>
                        </label>
                        <span class="font-mono text-lg">REGISTER</span>
                    </div>
                </div>

                <!-- Flip Card Container -->
                <div class="flip-card w-full max-w-md mx-auto" id="authCard">
                    <div class="flip-card-inner">
                        <!-- Login Side (Front) -->
                        <div class="flip-card-front cyber-border p-8 rounded-xl">
                            <div class="text-center mb-8">
                                <div class="cyber-border inline-block p-4 rounded-full mb-4">
                                    <i class="fas fa-user-secret text-3xl" style="color: var(--secondary-glow);"></i>
                                </div>
                                <h2 class="cyber-title text-2xl">Access Terminal</h2>
                                <p class="text-gray-400 mt-2">Enter your credentials to continue</p>
                            </div>

                            <form action="/login" method="post" class="space-y-6">
                                @csrf
                                <div>
                                    <label class="block text-sm font-mono mb-2">Username</label>
                                    <input type="text" name="loginname" placeholder="Enter your username"
                                           class="cyber-input w-full p-4">
                                </div>

                                <div>
                                    <label class="block text-sm font-mono mb-2">Password</label>
                                    <input type="password" name="loginpassword" placeholder="Enter your password"
                                           class="cyber-input w-full p-4">
                                </div>

                                <button type="submit" name="login"
                                        class="cyber-button w-full pulse-glow">
                                    <i class="fas fa-sign-in-alt mr-2"></i>Login
                                </button>
                            </form>

                            <div class="mt-6 text-center">
                                <button class="text-cyan-300 font-mono text-sm hover:text-cyan-100 transition-colors" id="switchToRegister">
                                    <i class="fas fa-user-plus mr-1"></i>Create new account
                                </button>
                            </div>
                        </div>

                        <!-- Register Side (Back) -->
                        <div class="flip-card-back cyber-border p-8 rounded-xl">
                            <div class="text-center mb-8">
                                <div class="cyber-border inline-block p-4 rounded-full mb-4">
                                    <i class="fas fa-user-plus text-3xl" style="color: var(--primary-glow);"></i>
                                </div>
                                <h2 class="cyber-title text-2xl">New User Registration</h2>
                                <p class="text-gray-400 mt-2">Join our research community</p>
                            </div>

                            <form action="/register" method="post" class="space-y-6">
                                @csrf
                                <div>
                                    <label class="block text-sm font-mono mb-2">Username</label>
                                    <input type="text" name="name" placeholder="Choose a username"
                                           class="cyber-input w-full p-4">
                                </div>

                                <div>
                                    <label class="block text-sm font-mono mb-2">Email</label>
                                    <input type="email" name="email" placeholder="Your email address"
                                           class="cyber-input w-full p-4">
                                </div>

                                <div>
                                    <label class="block text-sm font-mono mb-2">Password</label>
                                    <input type="password" name="password" placeholder="Create a password"
                                           class="cyber-input w-full p-4">
                                </div>

                                <button type="submit" name="register"
                                        class="cyber-button w-full pulse-glow">
                                    <i class="fas fa-user-plus mr-2"></i>Create Account
                                </button>
                            </form>

                            <div class="mt-6 text-center">
                                <button class="text-cyan-300 font-mono text-sm hover:text-cyan-100 transition-colors" id="switchToLogin">
                                    <i class="fas fa-sign-in-alt mr-1"></i>Already have an account?
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Features Grid -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-16" style="margin-top:130vh">
                    <div class="hologram-effect rounded-xl p-6 text-center">
                        <div class="cyber-border inline-block p-3 rounded-full mb-4">
                            <i class="fas fa-brain text-2xl" style="color: var(--primary-glow);"></i>
                        </div>
                        <h3 class="text-xl font-bold mb-2">AI-Powered Analysis</h3>
                        <p class="text-gray-300">Advanced machine learning algorithms analyze your experiment data</p>
                    </div>

                    <div class="hologram-effect rounded-xl p-6 text-center">
                        <div class="cyber-border inline-block p-3 rounded-full mb-4">
                            <i class="fas fa-shield-alt text-2xl" style="color: var(--secondary-glow);"></i>
                        </div>
                        <h3 class="text-xl font-bold mb-2">Military-Grade Security</h3>
                        <p class="text-gray-300">Your research data is protected with blockchain-level encryption</p>
                    </div>

                    <div class="hologram-effect rounded-xl p-6 text-center">
                        <div class="cyber-border inline-block p-3 rounded-full mb-4">
                            <i class="fas fa-rocket text-2xl" style="color: var(--tertiary-glow);"></i>
                        </div>
                        <h3 class="text-xl font-bold mb-2">Real-Time Collaboration</h3>
                        <p class="text-gray-300">Work with researchers worldwide in our virtual lab environment</p>
                    </div>
                </div>
            </div>
        </div>
        @endauth
    </main>

    <!-- Footer -->
    <footer class="relative z-10 border-t border-gray-800 mt-20 py-8">
        <div class="container mx-auto px-4 text-center">
            <div class="cyber-title text-2xl mb-4">Experiment<span style="color: var(--primary-glow);">Lab</span></div>
            <p class="text-gray-400 mb-4">Pushing the boundaries of scientific discovery</p>
            <div class="flex justify-center space-x-6">
                <a href="#" class="text-gray-400 hover:text-cyan-300 transition-colors">
                    <i class="fab fa-github text-xl"></i>
                </a>
                <a href="#" class="text-gray-400 hover:text-cyan-300 transition-colors">
                    <i class="fab fa-twitter text-xl"></i>
                </a>
                <a href="#" class="text-gray-400 hover:text-cyan-300 transition-colors">
                    <i class="fab fa-linkedin text-xl"></i>
                </a>
            </div>
            <p class="text-gray-600 mt-6 text-sm">© 2024 ExperimentLab. All systems operational.</p>
        </div>
    </footer>

    <script>
        // Toggle between login and register
        const authToggle = document.getElementById('authToggle');
        const authCard = document.getElementById('authCard');
        const switchToRegister = document.getElementById('switchToRegister');
        const switchToLogin = document.getElementById('switchToLogin');

        authToggle.addEventListener('change', function() {
            authCard.classList.toggle('flipped', this.checked);
        });

        switchToRegister.addEventListener('click', function() {
            authToggle.checked = true;
            authCard.classList.add('flipped');
        });

        switchToLogin.addEventListener('click', function() {
            authToggle.checked = false;
            authCard.classList.remove('flipped');
        });

        // Create animated background particles
        function createParticles() {
            const bg = document.getElementById('matrixBg');
            const particles = 50;

            for (let i = 0; i < particles; i++) {
                const particle = document.createElement('div');
                particle.classList.add('particle');
                particle.style.left = Math.random() * 100 + 'vw';
                particle.style.animationDelay = Math.random() * 6 + 's';
                particle.style.animationDuration = (3 + Math.random() * 3) + 's';
                bg.appendChild(particle);
            }
        }

        // Matrix background effect
        function createMatrixEffect() {
            const chars = "01010101010101010101010101010101";
            const bg = document.getElementById('matrixBg');
            const columns = Math.floor(window.innerWidth / 20);

            for (let i = 0; i < columns; i++) {
                const column = document.createElement('div');
                column.style.position = 'absolute';
                column.style.top = '-100px';
                column.style.left = (i * 20) + 'px';
                column.style.width = '2px';
                column.style.height = '100px';
                column.style.background = 'linear-gradient(to bottom, transparent, #00ffff)';
                column.style.animation = `matrixRain ${2 + Math.random() * 3}s linear infinite`;
                column.style.animationDelay = Math.random() * 5 + 's';

                const style = document.createElement('style');
                style.textContent = `
                    @keyframes matrixRain {
                        0% { top: -100px; opacity: 1; }
                        80% { opacity: 1; }
                        100% { top: 100vh; opacity: 0; }
                    }
                `;
                document.head.appendChild(style);

                bg.appendChild(column);
            }
        }

        // Initialize effects
        document.addEventListener('DOMContentLoaded', function() {
            createParticles();
            createMatrixEffect();

            // Add interactive cursor effect
            document.addEventListener('mousemove', function(e) {
                const cursor = document.createElement('div');
                cursor.style.position = 'fixed';
                cursor.style.left = e.clientX + 'px';
                cursor.style.top = e.clientY + 'px';
                cursor.style.width = '4px';
                cursor.style.height = '4px';
                cursor.style.background = 'var(--primary-glow)';
                cursor.style.borderRadius = '50%';
                cursor.style.pointerEvents = 'none';
                cursor.style.zIndex = '9999';
                cursor.style.boxShadow = '0 0 10px var(--primary-glow), 0 0 20px var(--primary-glow)';
                document.body.appendChild(cursor);

                setTimeout(() => {
                    cursor.remove();
                }, 300);
            });
        });
    </script>
</body>
</html>
