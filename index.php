<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>OceanExplorers</title>

  <!-- Tailwind CSS (CDN) -->
  <script src="https://cdn.tailwindcss.com"></script>

  <!-- Font for playful, rounded feel -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@400;500;600;700&display=swap" rel="stylesheet">

  <style>
    /* Ensure the playful font feels consistent across UI elements */
    .ocean-font { font-family: 'Fredoka', ui-sans-serif, system-ui, -apple-system, Segoe UI, Roboto, Helvetica, Arial, 'Apple Color Emoji','Segoe UI Emoji'; }

    /* Subtle shimmer for gamified surfaces */
    .shimmer {
      background-size: 200% 100%;
      background-image: linear-gradient(90deg, rgba(255,255,255,.06), rgba(255,255,255,.18), rgba(255,255,255,.06));
      animation: shimmer 3.2s linear infinite;
    }
    @keyframes shimmer {
      0% { background-position: 0% 0; }
      100% { background-position: 200% 0; }
    }

    /* Nice animated glow pulse for selected tabs */
    .pulse-glow {
      animation: pulseGlow 1.8s ease-in-out infinite;
    }
    @keyframes pulseGlow {
      0%, 100% { filter: drop-shadow(0 0 0 rgba(34,211,238,.35)); }
      50% { filter: drop-shadow(0 0 18px rgba(34,211,238,.55)); }
    }
  </style>

  <script>
    tailwind.config = {
      theme: {
        extend: {
          boxShadow: {
            'deep': '0 18px 50px rgba(0,0,0,.55)'
          }
        }
      }
    }
  </script>
</head>
<body class="min-h-screen ocean-font bg-slate-950 text-white">
  <!-- Background effects -->
  <div aria-hidden="true" class="pointer-events-none fixed inset-0 -z-10">
    <div class="absolute -top-48 left-1/2 h-[40rem] w-[40rem] -translate-x-1/2 rounded-full bg-cyan-500/20 blur-3xl"></div>
    <div class="absolute top-24 -left-24 h-72 w-72 rounded-full bg-blue-600/20 blur-3xl"></div>
    <div class="absolute bottom-0 right-0 h-[26rem] w-[26rem] rounded-full bg-emerald-500/10 blur-3xl"></div>

    <!-- Tiny floating bubbles -->
    <svg class="absolute inset-0 opacity-30" width="100%" height="100%" viewBox="0 0 800 600" preserveAspectRatio="none">
      <defs>
        <linearGradient id="g" x1="0" y1="0" x2="0" y2="1">
          <stop offset="0" stop-color="#22d3ee" stop-opacity="0.6"/>
          <stop offset="1" stop-color="#60a5fa" stop-opacity="0.0"/>
        </linearGradient>
      </defs>
      <circle cx="120" cy="520" r="4" fill="url(#g)">
        <animate attributeName="cy" from="540" to="380" dur="6s" repeatCount="indefinite"/>
        <animate attributeName="cx" from="120" to="160" dur="6s" repeatCount="indefinite"/>
      </circle>
      <circle cx="220" cy="540" r="3" fill="#22d3ee" opacity="0.8">
        <animate attributeName="cy" from="560" to="420" dur="7s" repeatCount="indefinite"/>
      </circle>
      <circle cx="620" cy="520" r="5" fill="#38bdf8" opacity="0.7">
        <animate attributeName="cy" from="540" to="330" dur="8s" repeatCount="indefinite"/>
        <animate attributeName="cx" from="620" to="590" dur="8s" repeatCount="indefinite"/>
      </circle>
      <circle cx="520" cy="560" r="3" fill="#34d399" opacity="0.7">
        <animate attributeName="cy" from="580" to="420" dur="6.5s" repeatCount="indefinite"/>
      </circle>
      <circle cx="330" cy="520" r="4" fill="#60a5fa" opacity="0.6">
        <animate attributeName="cy" from="540" to="360" dur="7.5s" repeatCount="indefinite"/>
      </circle>
    </svg>
  </div>

  <!-- GLOBAL NAVIGATION BAR (Top) -->
  <header class="sticky top-0 z-50">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 pt-4">
      <div class="flex items-center justify-between gap-4 rounded-2xl bg-slate-950/35 backdrop-blur-md border border-white/10 px-4 sm:px-6 py-3 shadow-[0_16px_60px_rgba(0,0,0,.35)]">
        <!-- Left brand -->
        <div class="flex items-center gap-3">
          <div class="text-2xl">🐋</div>
          <div class="text-xl sm:text-2xl font-extrabold tracking-tight">
            OceanExplorers
          </div>
        </div>

        <!-- Center nav + search -->
        <div class="hidden md:flex items-center gap-4">
          <nav class="flex items-center gap-4 text-sm md:text-base text-white/90">
            <a href="#zones" class="hover:text-cyan-200 transition-colors">Explore Zones</a>
            <a href="#trivia" class="hover:text-cyan-200 transition-colors">Live Trivia</a>
            <a href="#badges" class="hover:text-cyan-200 transition-colors">Ocean Badges</a>
          </nav>

          <div class="flex items-center">
            <div class="rounded-3xl bg-white/5 border border-white/10 px-4 py-2 backdrop-blur-md flex items-center gap-2">
              <span class="text-cyan-200">🔎</span>
              <input
                type="search"
                placeholder="Search sea missions..."
                class="w-40 sm:w-52 bg-transparent outline-none placeholder:text-white/50 text-white/90"
                aria-label="Search sea missions"
              />
            </div>
          </div>
        </div>

        <!-- Right login button -->
        <div class="flex items-center justify-end">
          <a
            href="login.php"
            class="ocean-font inline-flex items-center justify-center text-sm sm:text-base font-extrabold rounded-2xl bg-yellow-400 text-slate-900 px-5 py-2.5 border-b-4 border-yellow-600 active:border-b-0 active:translate-y-px transition-all shadow-[0_14px_30px_rgba(250,204,21,.25)] hover:brightness-105"
          >
            Log In
          </a>
        </div>
      </div>
    </div>
  </header>

  <main>
    <!-- TWO-COLUMN HERO FOLD -->
    <section class="mt-6 bg-gradient-to-b from-cyan-500 via-blue-600 to-slate-950">
      <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 py-14">
        <div class="grid md:grid-cols-2 gap-8 items-center">
          <!-- Left: Text & Funnel -->
          <div>
            <div class="inline-flex items-center gap-2 rounded-full bg-white/10 border border-white/15 px-4 py-2 backdrop-blur-md">
              <span class="text-cyan-100">⚡</span>
              <span class="text-white/90 text-sm">Gamified learning for curious minds</span>
            </div>

            <h1 class="mt-5 text-3xl sm:text-4xl lg:text-5xl font-extrabold leading-tight">
              One Destination for Complete Marine Exploration
            </h1>

            <div class="mt-4 flex flex-wrap items-center gap-3">
              <div class="text-white/90 font-semibold">
                <span class="mr-2">Kids path:</span>
              </div>
              <div class="inline-flex items-center gap-2 rounded-full bg-white/10 border border-white/15 px-4 py-2">
                <span class="text-emerald-200">Learn</span>
                <span class="opacity-80">➔</span>
                <span class="text-sky-200">Practice</span>
                <span class="opacity-80">➔</span>
                <span class="text-lime-200">Improve</span>
                <span class="opacity-80">➔</span>
                <span class="text-yellow-200">Succeed</span>
              </div>
            </div>

            <div class="mt-7">
              <a
                href="login.php"
                class="inline-flex items-center justify-center gap-3 w-full sm:w-auto px-7 py-4 rounded-2xl bg-emerald-400 text-slate-900 font-extrabold shadow-[0_18px_50px_rgba(16,185,129,.35)] border border-emerald-300 hover:bg-emerald-300 transition-colors"
              >
                <span class="text-2xl">🚀</span>
                <span class="text-lg">Get Started For Free</span>
                <span class="text-lg">➜</span>
              </a>
              <p class="mt-3 text-white/80 text-sm">
                No downloads. Instant marine missions.
              </p>
            </div>

            <div class="mt-6 grid grid-cols-3 gap-3">
              <div class="rounded-2xl bg-white/10 border border-white/15 p-3 backdrop-blur-md">
                <div class="text-xl">🧠</div>
                <div class="text-xs text-white/80 mt-1">Brainy quizzes</div>
              </div>
              <div class="rounded-2xl bg-white/10 border border-white/15 p-3 backdrop-blur-md">
                <div class="text-xl">🏅</div>
                <div class="text-xs text-white/80 mt-1">Badges</div>
              </div>
              <div class="rounded-2xl bg-white/10 border border-white/15 p-3 backdrop-blur-md">
                <div class="text-xl">🌊</div>
                <div class="text-xs text-white/80 mt-1">Deep-sea zones</div>
              </div>
            </div>
          </div>

          <!-- Right: Visual container placeholder window -->
          <div>
            <div class="relative">
              <div class="absolute -inset-3 rounded-[2.2rem] bg-cyan-400/10 blur-2xl"></div>

              <div class="relative backdrop-blur-md bg-white/10 rounded-3xl border border-white/20 p-8 shadow-deep">
                <!-- Submarine deck vibes -->
                <div class="absolute -top-4 left-6 h-2 w-24 rounded-full bg-yellow-300/70 blur" aria-hidden="true"></div>

                <div class="flex items-center justify-between">
                  <div class="text-sm text-white/85 font-bold inline-flex items-center gap-2">
                    <span class="text-cyan-200">📡</span>
                    Live Deep-Sea Stream
                  </div>
                  <div class="text-sm text-white/80">
                    Depth: <span class="text-cyan-200 font-bold">12,450m</span>
                  </div>
                </div>

                <div class="mt-6 grid grid-cols-3 gap-4">
                  <!-- Left panel -->
                  <div class="col-span-1 rounded-3xl bg-slate-950/35 border border-white/15 p-4">
                    <div class="flex items-center gap-2">
                      <span class="text-2xl">🧭</span>
                      <div class="font-extrabold">Nav</div>
                    </div>
                    <div class="mt-3 space-y-2">
                      <div class="h-2 rounded-full bg-white/10 overflow-hidden">
                        <div class="h-full w-[65%] bg-cyan-300/90 shimmer rounded-full"></div>
                      </div>
                      <div class="h-2 rounded-full bg-white/10 overflow-hidden">
                        <div class="h-full w-[42%] bg-emerald-300/90 shimmer rounded-full"></div>
                      </div>
                      <div class="h-2 rounded-full bg-white/10 overflow-hidden">
                        <div class="h-full w-[78%] bg-sky-300/90 shimmer rounded-full"></div>
                      </div>
                    </div>
                    <div class="mt-4 text-xs text-white/70">
                      Signal Strength: <span class="text-white/90 font-bold">Strong</span>
                    </div>
                  </div>

                  <!-- Center screen -->
                  <div class="col-span-2 rounded-3xl bg-slate-950/25 border border-white/15 p-4 relative overflow-hidden">
                    <div class="absolute inset-0 bg-gradient-to-b from-cyan-400/20 via-blue-500/10 to-transparent"></div>
                    <div class="relative">
                      <div class="flex items-center justify-between">
                        <div class="font-extrabold">Submarine Window</div>
                        <div class="inline-flex items-center gap-2">
                          <span class="h-2 w-2 rounded-full bg-emerald-300 pulse-glow"></span>
                          <span class="text-xs text-white/80">Exploring</span>
                        </div>
                      </div>

                      <div class="mt-4 rounded-2xl border border-white/10 bg-black/20 p-4">
                        <div class="grid grid-cols-2 gap-3">
                          <div class="rounded-2xl bg-white/5 border border-white/10 p-3">
                            <div class="text-sm text-white/80">Currents</div>
                            <div class="text-xl font-extrabold text-cyan-200">→→→</div>
                          </div>
                          <div class="rounded-2xl bg-white/5 border border-white/10 p-3">
                            <div class="text-sm text-white/80">Temp</div>
                            <div class="text-xl font-extrabold text-emerald-200">6°C</div>
                          </div>
                        </div>

                        <div class="mt-3 rounded-2xl bg-white/5 border border-white/10 p-3">
                          <div class="flex items-center justify-between">
                            <div class="text-sm text-white/80">Depth Map</div>
                            <div class="text-sm text-white/85 font-bold">Zone: Abyss Glow</div>
                          </div>
                          <div class="mt-2 h-24 rounded-xl bg-gradient-to-r from-cyan-400/20 via-blue-500/25 to-emerald-400/20 border border-white/10 relative overflow-hidden">
                            <div class="absolute inset-0 opacity-90">
                              <svg viewBox="0 0 600 120" class="w-full h-full">
                                <path d="M0 80 C 80 40, 140 120, 220 70 S 360 30, 450 65 S 540 110, 600 55" fill="none" stroke="rgba(34,211,238,0.7)" stroke-width="3"/>
                                <path d="M0 95 C 70 60, 150 135, 230 90 S 370 50, 460 80 S 550 120, 600 75" fill="none" stroke="rgba(52,211,153,0.55)" stroke-width="3"/>
                                <circle cx="410" cy="55" r="6" fill="rgba(250,204,21,0.85)"/>
                                <circle cx="230" cy="90" r="4" fill="rgba(96,165,250,0.8)"/>
                              </svg>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="mt-4 flex flex-wrap gap-2">
                        <span class="rounded-full bg-white/10 border border-white/15 px-3 py-1 text-xs text-white/85">🫧 Bubble Trails</span>
                        <span class="rounded-full bg-white/10 border border-white/15 px-3 py-1 text-xs text-white/85">🐙 Octo Signals</span>
                        <span class="rounded-full bg-white/10 border border-white/15 px-3 py-1 text-xs text-white/85">🧡 Friendly Quests</span>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="mt-6 rounded-2xl border border-white/15 bg-white/5 p-4">
                  <div class="flex items-center justify-between">
                    <div class="text-sm text-white/85 font-bold">Next Mission</div>
                    <div class="text-xs text-white/70">Complete 3 zones to unlock badges</div>
                  </div>
                  <div class="mt-3 flex items-center gap-3">
                    <div class="h-10 w-10 rounded-2xl bg-yellow-400/20 border border-yellow-300/30 flex items-center justify-center">🦈</div>
                    <div>
                      <div class="font-extrabold">Build Your Mini Ocean</div>
                      <div class="text-sm text-white/75">Answer trivia + collect gems</div>
                    </div>
                    <div class="ml-auto">
                      <a href="login.php" class="rounded-2xl bg-cyan-300/90 hover:bg-cyan-200 text-slate-900 font-extrabold px-4 py-2 text-sm transition-colors">Start Now</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <p class="mt-3 text-sm text-white/70">
              (Dynamic scene placeholder — plug in your animation later.)
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- PERFORMANCE STATS MATRIX -->
    <section class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 -mt-10 relative">
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
        <!-- Card 1 -->
        <div class="group rounded-3xl bg-white/95 text-slate-900 shadow-xl border border-black/5 hover:-translate-y-1 transition-transform duration-200">
          <div class="p-6">
            <div class="flex items-center justify-between">
              <div class="inline-flex items-center justify-center h-12 w-12 rounded-2xl bg-cyan-100 text-cyan-700 shadow-sm group-hover:shadow-md transition-shadow">
                🐠
              </div>
              <div class="text-xs font-bold text-slate-500">Today</div>
            </div>
            <div class="mt-3 text-4xl font-extrabold tracking-tight">8.7+ Crores</div>
            <div class="mt-2 text-sm font-semibold text-slate-700">Registered Explorers</div>
          </div>
        </div>

        <!-- Card 2 -->
        <div class="group rounded-3xl bg-white/95 text-slate-900 shadow-xl border border-black/5 hover:-translate-y-1 transition-transform duration-200">
          <div class="p-6">
            <div class="flex items-center justify-between">
              <div class="inline-flex items-center justify-center h-12 w-12 rounded-2xl bg-emerald-100 text-emerald-700 shadow-sm group-hover:shadow-md transition-shadow">
                🗺️
              </div>
              <div class="text-xs font-bold text-slate-500">Popular</div>
            </div>
            <div class="mt-3 text-4xl font-extrabold tracking-tight">4+ Lakhs</div>
            <div class="mt-2 text-sm font-semibold text-slate-700">Deep Sea Selections</div>
          </div>
        </div>

        <!-- Card 3 -->
        <div class="group rounded-3xl bg-white/95 text-slate-900 shadow-xl border border-black/5 hover:-translate-y-1 transition-transform duration-200">
          <div class="p-6">
            <div class="flex items-center justify-between">
              <div class="inline-flex items-center justify-center h-12 w-12 rounded-2xl bg-indigo-100 text-indigo-700 shadow-sm group-hover:shadow-md transition-shadow">
                🧩
              </div>
              <div class="text-xs font-bold text-slate-500">Live</div>
            </div>
            <div class="mt-3 text-4xl font-extrabold tracking-tight">242+ Crores</div>
            <div class="mt-2 text-sm font-semibold text-slate-700">Quizzes Attempted</div>
          </div>
        </div>

        <!-- Card 4 -->
        <div class="group rounded-3xl bg-white/95 text-slate-900 shadow-xl border border-black/5 hover:-translate-y-1 transition-transform duration-200">
          <div class="p-6">
            <div class="flex items-center justify-between">
              <div class="inline-flex items-center justify-center h-12 w-12 rounded-2xl bg-yellow-100 text-yellow-800 shadow-sm group-hover:shadow-md transition-shadow">
                ⏱️
              </div>
              <div class="text-xs font-bold text-slate-500">Boost</div>
            </div>
            <div class="mt-3 text-4xl font-extrabold tracking-tight">5.5+ Crores</div>
            <div class="mt-2 text-sm font-semibold text-slate-700">Submarine Hours</div>
          </div>
        </div>
      </div>
    </section>

    <!-- CATEGORY TAB SELECTION GRID (Below Fold) -->
    <section id="zones" class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 py-14">
      <div class="text-center">
        <h2 class="text-2xl sm:text-3xl font-extrabold">Explore Popular Deep Sea Zones</h2>
        <p class="mt-2 text-white/70">Pick a zone tag to preview what kids can play next.</p>
      </div>

      <div class="mt-8">
        <div class="flex flex-wrap justify-center gap-3" role="tablist" aria-label="Deep sea zone filters">
          <!-- Buttons (JS will set active state) -->
          <button type="button" data-zone="all" class="zone-tab px-4 sm:px-5 py-3 rounded-2xl bg-white/10 border border-white/15 text-white/90 hover:bg-white/15 hover:border-white/25 transition-all duration-150 active:translate-y-px">
            🌌 All Zones
          </button>
          <button type="button" data-zone="coral" class="zone-tab px-4 sm:px-5 py-3 rounded-2xl bg-white/10 border border-white/15 text-white/90 hover:bg-white/15 hover:border-white/25 transition-all duration-150 active:translate-y-px">
            🪸 Coral Reef
          </button>
          <button type="button" data-zone="abyss" class="zone-tab px-4 sm:px-5 py-3 rounded-2xl bg-white/10 border border-white/15 text-white/90 hover:bg-white/15 hover:border-white/25 transition-all duration-150 active:translate-y-px">
            🕳️ Abyss Glow
          </button>
          <button type="button" data-zone="kelp" class="zone-tab px-4 sm:px-5 py-3 rounded-2xl bg-white/10 border border-white/15 text-white/90 hover:bg-white/15 hover:border-white/25 transition-all duration-150 active:translate-y-px">
            🌿 Kelp Forest
          </button>
          <button type="button" data-zone="wreck" class="zone-tab px-4 sm:px-5 py-3 rounded-2xl bg-white/10 border border-white/15 text-white/90 hover:bg-white/15 hover:border-white/25 transition-all duration-150 active:translate-y-px">
            ⚙️ Shipwreck Lab
          </button>
          <button type="button" data-zone="ice" class="zone-tab px-4 sm:px-5 py-3 rounded-2xl bg-white/10 border border-white/15 text-white/90 hover:bg-white/15 hover:border-white/25 transition-all duration-150 active:translate-y-px">
            ❄️ Arctic Trench
          </button>
        </div>

        <!-- Preview panel -->
        <div id="zonePreview" class="mt-6 rounded-3xl border border-white/15 bg-white/5 backdrop-blur-md p-6">
          <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
            <div>
              <div class="inline-flex items-center gap-2 rounded-full bg-white/10 border border-white/15 px-3 py-1 text-sm text-white/85">
                <span class="text-cyan-200">🎮</span>
                <span class="font-bold" id="previewTitle">All Zones</span>
              </div>
              <p class="mt-2 text-white/75" id="previewDesc">
                Learn ocean facts, practice mini-games, and unlock badges across the whole map.
              </p>
            </div>

            <div class="flex items-center gap-3">
              <div class="rounded-2xl bg-cyan-300/15 border border-cyan-300/25 px-4 py-3">
                <div class="text-xs text-white/70">Recommended</div>
                <div class="text-lg font-extrabold text-cyan-200" id="previewRec">3 quick missions</div>
              </div>
              <a href="login.php" class="rounded-2xl bg-emerald-300 hover:bg-emerald-200 text-slate-900 font-extrabold px-5 py-3 shadow-[0_18px_45px_rgba(52,211,153,.25)] transition-colors">
                Play Now
              </a>
            </div>
          </div>

          <div class="mt-5 grid grid-cols-1 sm:grid-cols-3 gap-4">
            <div class="rounded-3xl border border-white/10 bg-slate-950/20 p-4">
              <div class="text-xl">🧠</div>
              <div class="mt-2 font-extrabold">Quick Quiz</div>
              <div class="text-sm text-white/70">10 questions • instant score</div>
            </div>
            <div class="rounded-3xl border border-white/10 bg-slate-950/20 p-4">
              <div class="text-xl">🧩</div>
              <div class="mt-2 font-extrabold">Match & Learn</div>
              <div class="text-sm text-white/70">Drag • boost memory</div>
            </div>
            <div class="rounded-3xl border border-white/10 bg-slate-950/20 p-4">
              <div class="text-xl">🏅</div>
              <div class="mt-2 font-extrabold">Badge Builder</div>
              <div class="text-sm text-white/70">Earn gems • collect badges</div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Small anchors for top links -->
    <section id="trivia" class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 pb-16">
      <div class="rounded-3xl border border-white/10 bg-white/5 backdrop-blur-md p-8">
        <div class="flex items-start gap-4">
          <div class="text-4xl">🧡</div>
          <div>
            <h3 class="text-2xl font-extrabold">Live Trivia (Preview)</h3>
            <p class="mt-2 text-white/70">Race through ocean questions and climb your crew leaderboard.</p>
          </div>
        </div>
      </div>
    </section>

    <section id="badges" class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 pb-20">
      <div class="rounded-3xl border border-white/10 bg-white/5 backdrop-blur-md p-8">
        <div class="flex items-start gap-4">
          <div class="text-4xl">🏅</div>
          <div>
            <h3 class="text-2xl font-extrabold">Ocean Badges (Preview)</h3>
            <p class="mt-2 text-white/70">Collect trophies for zones, quizzes, and submarine hours. Turn practice into power!</p>
          </div>
        </div>
      </div>
    </section>
  </main>

  <footer class="border-t border-white/10 bg-slate-950/40">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 py-10">
      <div class="flex flex-col md:flex-row items-center justify-between gap-4">
        <div class="text-white/70">© <?php echo date('Y'); ?> OceanExplorers • Built for curious kids</div>
        <div class="text-white/60 text-sm">Tip: swap the scene placeholder with your deep-sea animation later.</div>
      </div>
    </div>
  </footer>

  <script>
    (function () {
      const tabs = Array.from(document.querySelectorAll('.zone-tab'));
      const previewTitle = document.getElementById('previewTitle');
      const previewDesc = document.getElementById('previewDesc');
      const previewRec = document.getElementById('previewRec');

      const copy = {
        all: { title: 'All Zones', desc: 'Learn ocean facts, practice mini-games, and unlock badges across the whole map.', rec: '3 quick missions' },
        coral: { title: 'Coral Reef', desc: 'Explore colorful coral facts and build reef-safe knowledge through playful quizzes.', rec: '2 quiz raids' },
        abyss: { title: 'Abyss Glow', desc: 'Dive into glowing deep-sea riddles and speed-run badge challenges.', rec: '4 badge boosts' },
        kelp: { title: 'Kelp Forest', desc: 'Train your attention with kelp swirls and pattern games—learn, then improve!', rec: '3 practice rounds' },
        wreck: { title: 'Shipwreck Lab', desc: 'Solve mystery questions and find hidden learning gems in the shipwreck deck.', rec: '1 puzzle spree' },
        ice: { title: 'Arctic Trench', desc: 'Discover cold-water creatures and complete mission maps from the frozen zone.', rec: '2 mission quests' }
      };

      function setActive(zone) {
        tabs.forEach(btn => {
          const isActive = btn.dataset.zone === zone;
          btn.classList.toggle('bg-cyan-400/20', isActive);
          btn.classList.toggle('border-cyan-200/40', isActive);
          btn.classList.toggle('text-cyan-100', isActive);

          btn.classList.toggle('bg-white/10', !isActive);
          btn.classList.toggle('border-white/15', !isActive);
          btn.classList.toggle('text-white/90', !isActive);

          btn.setAttribute('aria-selected', String(isActive));
        });

        const c = copy[zone] || copy.all;
        previewTitle.textContent = c.title;
        previewDesc.textContent = c.desc;
        previewRec.textContent = c.rec;
      }

      tabs.forEach(btn => {
        btn.addEventListener('click', () => {
          setActive(btn.dataset.zone);
        });
      });

      // Initialize active state
      setActive('all');
    })();
  </script>
</body>
</html>

