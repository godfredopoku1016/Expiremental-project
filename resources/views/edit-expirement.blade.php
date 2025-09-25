<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Experiment • ExperimentLab</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700;900&family=Exo+2:wght@300;400;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary-glow: #ff0080;
            --secondary-glow: #00ffff;
            --tertiary-glow: #ffeb3b;
        }

        body {
            font-family: 'Exo 2', sans-serif;
            background: radial-gradient(ellipse at bottom, #0d1b2a 0%, #000000 100%);
            min-height: 100vh;
            color: #ffffff;
            margin: 0;
            padding: 0;
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

        .cyber-title {
            font-family: 'Orbitron', monospace;
            font-weight: 900;
            background: linear-gradient(45deg, var(--primary-glow), var(--secondary-glow));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            text-transform: uppercase;
            letter-spacing: 3px;
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
            width: 100%;
        }

        .cyber-input:focus {
            outline: none;
            box-shadow: 0 0 15px var(--primary-glow);
            transform: translateY(-2px);
        }

        .cyber-textarea {
            background: rgba(0, 0, 0, 0.7);
            border: 2px solid transparent;
            border-image: linear-gradient(45deg, var(--primary-glow), var(--secondary-glow)) 1;
            color: white;
            padding: 15px;
            font-family: 'Exo 2', sans-serif;
            transition: all 0.3s ease;
            width: 100%;
            min-height: 150px;
            resize: vertical;
        }

        .cyber-textarea:focus {
            outline: none;
            box-shadow: 0 0 15px var(--primary-glow);
            transform: translateY(-2px);
        }

        .pulse-glow {
            animation: pulseGlow 2s infinite;
        }

        @keyframes pulseGlow {
            0% { box-shadow: 0 0 5px var(--primary-glow); }
            50% { box-shadow: 0 0 20px var(--primary-glow), 0 0 30px var(--secondary-glow); }
            100% { box-shadow: 0 0 5px var(--primary-glow); }
        }

        .hologram-effect {
            background: linear-gradient(125deg, rgba(255,0,128,0.1) 0%, rgba(0,255,255,0.1) 50%, rgba(255,235,59,0.1) 100%);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255,255,255,0.1);
        }

        .neon-text {
            text-shadow: 0 0 10px var(--primary-glow), 0 0 20px var(--primary-glow), 0 0 30px var(--primary-glow);
        }

        .back-button {
            background: linear-gradient(45deg, transparent 5%, #6b7280 5%);
            border: 0;
            padding: 10px 20px;
            color: white;
            font-family: 'Orbitron', monospace;
            letter-spacing: 2px;
            box-shadow: 4px 0px 0px #9ca3af;
            transition: all 0.3s ease;
        }

        .back-button:hover {
            transform: translateY(-2px);
            box-shadow: 6px 2px 0px #9ca3af;
        }

        .status-indicator {
            width: 12px;
            height: 12px;
            border-radius: 50%;
            background: var(--secondary-glow);
            box-shadow: 0 0 10px var(--secondary-glow);
            animation: pulse 2s infinite;
        }

        @keyframes pulse {
            0% { opacity: 1; }
            50% { opacity: 0.5; }
            100% { opacity: 1; }
        }

        .experiment-preview {
            background: linear-gradient(135deg, rgba(255,0,128,0.1) 0%, rgba(0,255,255,0.1) 100%);
            border: 1px solid rgba(255,255,255,0.1);
            backdrop-filter: blur(10px);
            transition: all 0.3s ease;
        }
    </style>
</head>
<body class="min-h-screen flex items-center justify-center p-4">
    <!-- Navigation Back -->
    <div class="absolute top-6 left-6">
        <a href="/" class="back-button text-sm">
            <i class="fas fa-arrow-left mr-2"></i>BACK TO LAB
        </a>
    </div>

    <!-- Main Edit Container -->
    <div class="w-full max-w-4xl">
        <!-- Header -->
        <div class="text-center mb-8">
            <div class="cyber-border inline-block p-4 rounded-full mb-4">
                <i class="fas fa-edit text-3xl" style="color: var(--secondary-glow);"></i>
            </div>
            <h1 class="cyber-title text-4xl mb-2">EDIT EXPERIMENT</h1>
            <p class="text-gray-300">Modify experiment parameters and configuration</p>
            <div class="flex items-center justify-center space-x-2 mt-4">
                <div class="status-indicator"></div>
                <span class="text-sm font-mono text-cyan-300">EDIT MODE ACTIVE</span>
            </div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
            <!-- Edit Form -->
            <div class="cyber-border p-8">
                <div class="flex items-center mb-6">
                    <div class="w-10 h-10 bg-gradient-to-br from-purple-500 to-pink-500 rounded-lg flex items-center justify-center mr-4">
                        <i class="fas fa-sliders-h text-white"></i>
                    </div>
                    <h2 class="cyber-title text-xl">EXPERIMENT PARAMETERS</h2>
                </div>

                <form action="/edit/{{$expirement->id}}" method="post" class="space-y-6">
                    @csrf
                    @method('PUT')

                    <div>
                        <label class="block text-lg mb-3 font-mono">
                            <i class="fas fa-heading mr-2 text-cyan-300"></i>EXPERIMENT TITLE
                        </label>
                        <input type="text" name="title" value="{{$expirement->title}}"
                               class="cyber-input p-4 text-lg" placeholder="Enter experiment title">
                    </div>

                    <div>
                        <label class="block text-lg mb-3 font-mono">
                            <i class="fas fa-align-left mr-2 text-cyan-300"></i>DESCRIPTION
                        </label>
                        <textarea name="description"
                                  class="cyber-textarea p-4 text-lg"
                                  placeholder="Describe your experiment in detail">{{$expirement->description}}</textarea>
                    </div>

                    <div class="grid grid-cols-2 gap-4 pt-4">
                        <button type="submit" name="save"
                                class="cyber-button pulse-glow text-lg">
                            <i class="fas fa-save mr-2"></i>SAVE CHANGES
                        </button>
                        <a href="/" class="back-button text-lg text-center">
                            <i class="fas fa-times mr-2"></i>CANCEL
                        </a>
                    </div>
                </form>
            </div>

            <!-- Preview Panel -->
            <div class="cyber-border p-8">
                <div class="flex items-center mb-6">
                    <div class="w-10 h-10 bg-gradient-to-br from-green-500 to-emerald-500 rounded-lg flex items-center justify-center mr-4">
                        <i class="fas fa-eye text-white"></i>
                    </div>
                    <h2 class="cyber-title text-xl">LIVE PREVIEW</h2>
                </div>

                <div class="experiment-preview rounded-xl p-6 mb-6">
                    <div class="flex justify-between items-start mb-4">
                        <div class="w-12 h-12 bg-gradient-to-br from-cyan-500 to-blue-500 rounded-lg flex items-center justify-center">
                            <i class="fas fa-flask text-white"></i>
                        </div>
                        <span class="px-2 py-1 bg-black bg-opacity-50 rounded text-xs font-mono">
                            EDITING
                        </span>
                    </div>

                    <h3 id="previewTitle" class="text-xl font-bold mb-3 neon-text">{{$expirement->title}}</h3>
                    <p id="previewDescription" class="text-gray-300">{{$expirement->description}}</p>

                    <div class="flex justify-between items-center text-sm mt-4">
                        <span class="text-cyan-300 font-mono">
                            <i class="fas fa-edit mr-1"></i> PREVIEW MODE
                        </span>
                        <span class="text-yellow-300 font-mono">
                            <i class="fas fa-exclamation-triangle mr-1"></i> UNSAVED
                        </span>
                    </div>
                </div>

                <!-- Experiment Stats -->
                <div class="hologram-effect rounded-xl p-6">
                    <h3 class="font-mono text-lg mb-4">EXPERIMENT METADATA</h3>
                    <div class="space-y-3">
                        <div class="flex justify-between items-center">
                            <span class="text-gray-400">Created:</span>
                            <span class="font-mono text-cyan-300">{{ $expirement->created_at->format('M d, Y') }}</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="text-gray-400">Last Updated:</span>
                            <span class="font-mono text-cyan-300">{{ $expirement->updated_at->format('M d, Y H:i') }}</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="text-gray-400">Character Count:</span>
                            <span class="font-mono text-cyan-300">
                                <span id="charCount">{{ strlen($expirement->description) }}</span> chars
                            </span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="text-gray-400">Status:</span>
                            <span class="font-mono text-green-400">ACTIVE</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Quick Actions -->
        <div class="cyber-border p-6 mt-8">
            <h3 class="cyber-title text-lg mb-4 text-center">QUICK ACTIONS</h3>
            <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
                <button class="hologram-effect p-4 rounded-lg text-center transition-all hover:scale-105">
                    <i class="fas fa-copy text-2xl mb-2 text-cyan-300"></i>
                    <div class="font-mono text-sm">DUPLICATE</div>
                </button>
                <button class="hologram-effect p-4 rounded-lg text-center transition-all hover:scale-105">
                    <i class="fas fa-archive text-2xl mb-2 text-yellow-300"></i>
                    <div class="font-mono text-sm">ARCHIVE</div>
                </button>
                <button class="hologram-effect p-4 rounded-lg text-center transition-all hover:scale-105">
                    <i class="fas fa-share-alt text-2xl mb-2 text-green-300"></i>
                    <div class="font-mono text-sm">SHARE</div>
                </button>
                <button class="hologram-effect p-4 rounded-lg text-center transition-all hover:scale-105">
                    <i class="fas fa-chart-bar text-2xl mb-2 text-purple-300"></i>
                    <div class="font-mono text-sm">ANALYTICS</div>
                </button>
            </div>
        </div>
    </div>

    <script>
        // Real-time preview update
        const titleInput = document.querySelector('input[name="title"]');
        const descriptionInput = document.querySelector('textarea[name="description"]');
        const previewTitle = document.getElementById('previewTitle');
        const previewDescription = document.getElementById('previewDescription');
        const charCount = document.getElementById('charCount');

        titleInput.addEventListener('input', function() {
            previewTitle.textContent = this.value || 'Experiment Title';
        });

        descriptionInput.addEventListener('input', function() {
            previewDescription.textContent = this.value || 'Experiment description will appear here...';
            charCount.textContent = this.value.length;
        });

        // Add typing effect for fun
        document.addEventListener('DOMContentLoaded', function() {
            const elements = document.querySelectorAll('.cyber-title');
            elements.forEach(el => {
                const text = el.textContent;
                el.textContent = '';
                let i = 0;
                const timer = setInterval(() => {
                    if (i < text.length) {
                        el.textContent += text.charAt(i);
                        i++;
                    } else {
                        clearInterval(timer);
                    }
                }, 50);
            });
        });

        // Add confirmation for navigation away without saving
        window.addEventListener('beforeunload', function (e) {
            const originalTitle = '{{$expirement->title}}';
            const originalDescription = '{{$expirement->description}}';

            if (titleInput.value !== originalTitle || descriptionInput.value !== originalDescription) {
                e.preventDefault();
                e.returnValue = 'You have unsaved changes. Are you sure you want to leave?';
            }
        });
    </script>
</body>
</html>
