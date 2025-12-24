@extends('layouts.app')

@section('content')
    <!-- Hero Section -->
    <section id="home" class="relative bg-navy-900/10 text-slate-300 min-h-screen flex items-center pt-20 overflow-hidden">
        <!-- Background accents -->
        <div class="absolute top-0 right-0 w-1/3 h-1/3 bg-gold-600/10 rounded-full blur-[100px] pointer-events-none"></div>
        <div class="absolute bottom-0 left-0 w-1/4 h-1/4 bg-blue-900/10 rounded-full blur-[100px] pointer-events-none"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 w-full">
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div data-aos="fade-right">
                    <p class="text-gold-500 font-mono text-lg mb-4 tracking-wide">Hi, my name is</p>
                    <h1 class="text-5xl md:text-7xl font-bold text-slate-100 leading-tight mb-4 tracking-tight">
                        Nasokha.<br>
                        <span class="text-slate-400">I build things for the web.</span>
                    </h1>
                    <p class="text-xl text-slate-400 mb-8 max-w-lg leading-relaxed">
                        I'm a software engineer specializing in building (and occasionally designing) exceptional digital experiences.
                    </p>
                    <div class="flex flex-wrap gap-4">
                        <a href="#experience" class="px-8 py-4 bg-transparent border border-gold-500 text-gold-500 rounded font-mono text-sm hover:bg-gold-500/10 transition-all duration-300">Check out my work!</a>
                        <a href="#contact" class="px-8 py-4 bg-gold-500 text-navy-900 rounded font-bold text-sm hover:bg-gold-400 transition-all duration-300 shadow-[0_0_20px_rgba(212,175,55,0.3)]">Contact Me</a>
                    </div>
                </div>

                <div class="hidden md:block relative" data-aos="fade-left">
                     <div class="relative w-full aspect-square max-w-md mx-auto">
                        <div class="absolute inset-0 border-2 border-slate-700/50 rounded-full animate-[spin_10s_linear_infinite]"></div>
                        <div class="absolute inset-4 border border-gold-500/30 rounded-full animate-[spin_15s_linear_infinite_reverse]"></div>
                        <div class="absolute inset-8 rounded-full overflow-hidden border-4 border-navy-800 shadow-2xl group">
                             <img src="images/profile.jpg" alt="Profile" class="w-full h-full object-cover opacity-80 group-hover:opacity-100 transition-opacity duration-500 grayscale group-hover:grayscale-0">
                        </div>
                     </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-24 bg-navy-800/20 text-slate-300">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-slate-100 mr-4" data-aos="fade-up"><span class="text-gold-500 font-mono text-2xl mr-2">01.</span>About Me</h2>
                <div class="h-px bg-slate-700 grow max-w-xs" data-aos="fade-up" data-aos-delay="100"></div>
            </div>

            <div class="grid md:grid-cols-3 gap-12">
                <div class="md:col-span-2 text-lg leading-relaxed space-y-6" data-aos="fade-up">
                    <p>
                    Hello! My name is Nasokha, and I like creating things on the internet. My interest in web development began in 2023 when I decided to delve deeper into it. Up to now,
                    </p>
                    <p>Here are a few technologies I've been working with recently:</p>
                    <ul class="grid grid-cols-2 gap-2 font-mono text-sm mt-4">
                        <li class="flex items-center"><span class="text-gold-500 mr-2">▹</span> Laravel</li>
                        <li class="flex items-center"><span class="text-gold-500 mr-2">▹</span> Python</li>
                        <li class="flex items-center"><span class="text-gold-500 mr-2">▹</span> JavaScript</li>
                        <li class="flex items-center"><span class="text-gold-500 mr-2">▹</span> Tailwind CSS</li>
                        <li class="flex items-center"><span class="text-gold-500 mr-2">▹</span> Figma</li>
                        <li class="flex items-center"><span class="text-gold-500 mr-2">▹</span> MySQL</li>
                    </ul>
                </div>
                <div data-aos="fade-left">
                    <div class="relative group max-w-xs mx-auto md:mx-0">
                        <div class="absolute inset-0 border-2 border-gold-500 rounded translate-x-4 translate-y-4 transition-transform duration-300 group-hover:translate-x-2 group-hover:translate-y-2"></div>
                        <div class="relative rounded bg-gold-500 overflow-hidden">
                             <img src="{{ asset('images/profile_selected.jpg') }}" alt="Selected Profile" class="w-full h-full object-cover hover:scale-110 transition-transform duration-500">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Experience Section -->
    <section id="experience" class="py-24 bg-navy-900/20 text-slate-300">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center mb-16">
                 <h2 class="text-3xl md:text-4xl font-bold text-slate-100 mr-4" data-aos="fade-up"><span class="text-gold-500 font-mono text-2xl mr-2">02.</span>Where I've Worked</h2>
                 <div class="h-px bg-slate-700 grow max-w-xs" data-aos="fade-up" data-aos-delay="100"></div>
            </div>

            <div class="space-y-12">
                @forelse($experiences as $experience)
                    <div class="relative pl-8 md:pl-0 border-l-2 border-slate-700 md:border-l-0" data-aos="fade-up">
                        <div class="md:flex items-start gap-4">
                             <!-- Timeline dot (Desktop) -->
                             <div class="hidden md:flex flex-col items-center mt-1.5 mr-6">
                                 <div class="w-3 h-3 bg-gold-500 rounded-full shadow-[0_0_10px_rgba(212,175,55,0.5)]"></div>
                                 <div class="w-0.5 h-full bg-slate-800 my-2"></div>
                             </div>

                             <div class="flex-1">
                                 <h3 class="text-xl font-bold text-slate-100 flex flex-wrap items-center gap-2">
                                     {{ $experience->title }} <span class="text-gold-500">@ {{ $experience->company }}</span>
                                 </h3>
                                 <p class="font-mono text-sm text-slate-400 mb-4 mt-1">
                                    {{ $experience->start_date }} — {{ $experience->end_date ?: 'Present' }}
                                 </p>
                                 <div class="prose prose-invert max-w-none text-slate-400">
                                     {{ $experience->description }}
                                 </div>
                             </div>
                        </div>
                    </div>
                @empty
                    <!-- Placeholder Data if no experiences -->
                    <div class="relative pl-8 md:pl-0 border-l-2 border-slate-700 md:border-l-0" data-aos="fade-up">
                        <div class="md:flex items-start gap-4">
                             <div class="hidden md:flex flex-col items-center mt-1.5 mr-6">
                                 <div class="w-3 h-3 bg-gold-500 rounded-full shadow-[0_0_10px_rgba(212,175,55,0.5)]"></div>
                             </div>
                             <div class="flex-1">
                                 <h3 class="text-xl font-bold text-slate-100 flex flex-wrap items-center gap-2">
                                     Waiter<span class="text-gold-500">Pizza Hut</span>
                                 </h3>
                                 <p class="font-mono text-sm text-slate-400 mb-4 mt-1">1 Maret 2025 — 31 Juli 2025</p>
                             </div>
                        </div>
                    </div>
                @endforelse
            </div>
        </div>
    </section>

    <!-- Skills Section -->
    <section id="skills" class="py-24 bg-navy-800/20 text-slate-300">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
             <div class="flex items-center mb-16 justify-end">
                 <div class="h-px bg-slate-700 grow max-w-xs mr-4" data-aos="fade-up" data-aos-delay="100"></div>
                 <h2 class="text-3xl md:text-4xl font-bold text-slate-100" data-aos="fade-up"><span class="text-gold-500 font-mono text-2xl mr-2">03.</span>Skills</h2>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                 @forelse($skills as $skill)
                    <div class="bg-navy-700 p-6 rounded hover:-translate-y-2 transition-transform duration-300 border border-transparent hover:border-gold-500/30 group relative overflow-hidden" data-aos="fade-up">
                        <div class="absolute top-0 right-0 p-2 opacity-10 group-hover:opacity-20 transition-opacity">
                            <svg class="w-16 h-16 text-gold-500" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2L2 7l10 5 10-5-10-5zm0 9l2.5-1.25L12 8.5l-2.5 1.25L12 11zm0 2.5l-5-2.5-5 2.5L12 22l10-8.5-5-2.5-5 2.5z"/></svg>
                        </div>
                        <div class="flex justify-between items-end mb-4 relative z-10">
                            <h3 class="text-xl font-bold text-slate-100 group-hover:text-gold-500 transition-colors">{{ $skill->name }}</h3>
                            <span class="font-mono text-gold-500">{{ $skill->level }}%</span>
                        </div>
                        <div class="w-full bg-navy-900 h-1 mt-2 rounded-full overflow-hidden relative z-10">
                            <div class="bg-gold-500 h-full" style="width: {{ $skill->level }}%"></div>
                        </div>
                    </div>
                 @empty
                    @php
                        $dummySkills = [
                            ['name'=>'Laravel', 'level'=>90, 'icon'=>'fab fa-laravel', 'color'=>'#FF2D20'],
                            ['name'=>'Python', 'level'=>85, 'icon'=>'fab fa-python', 'color'=>'#3776AB'],
                            ['name'=>'Flask', 'level'=>95, 'icon'=>'fas fa-flask', 'color'=>'#FFFFFF'],
                            ['name'=>'Tailwind CSS', 'level'=>65, 'icon'=>'fab fa-css3-alt', 'color'=>'#38B2AC'],
                            ['name'=>'Figma', 'level'=>70, 'icon'=>'fab fa-figma', 'color'=>'#F24E1E'],
                            ['name'=>'MySQL', 'level'=>80, 'icon'=>'fas fa-database', 'color'=>'#4479A1']
                        ];
                    @endphp
                    @foreach($dummySkills as $skill)
                         <div class="bg-navy-700 p-6 rounded-xl hover:-translate-y-2 transition-transform duration-300 border border-transparent hover:border-gold-500/30 group relative overflow-hidden" data-aos="fade-up">

                             <div class="flex justify-between items-end mb-4 relative z-10">
                                 <div class="flex items-center gap-3">
                                     <div class="text-2xl" style="color: {{ $skill['color'] }}">
                                         <i class="{{ $skill['icon'] }}"></i>
                                     </div>
                                     <h3 class="text-xl font-bold text-slate-100 group-hover:text-gold-500 transition-colors">{{ $skill['name'] }}</h3>
                                 </div>
                                 <span class="font-mono text-gold-500 text-sm">{{ $skill['level'] }}%</span>
                             </div>
                             <div class="w-full bg-navy-900 h-1.5 mt-2 rounded-full overflow-hidden relative z-10">
                                 <div class="bg-gold-500 h-full rounded-full" style="width: {{ $skill['level'] }}%"></div>
                             </div>
                         </div>
                    @endforeach
                 @endforelse
            </div>
        </div>
    </section>

    <!-- Certificates Section -->
    <section id="certificates" class="py-24 bg-navy-800/20 text-slate-300">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center mb-16">
                 <h2 class="text-3xl md:text-4xl font-bold text-slate-100 mr-4" data-aos="fade-up"><span class="text-gold-500 font-mono text-2xl mr-2">04.</span>Certifications</h2>
                 <div class="h-px bg-slate-700 grow max-w-xs" data-aos="fade-up" data-aos-delay="100"></div>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- AWS Certificate -->
                <div class="group relative bg-navy-700 p-8 rounded-xl border border-transparent hover:border-gold-500/30 transition-all duration-300 hover:-translate-y-2 overflow-hidden" data-aos="fade-up">

                    <div class="relative z-10">
                        <div class="flex items-center justify-between mb-6">
                            <div class="text-gold-500 text-4xl">
                                <i class="fab fa-aws"></i>
                            </div>
                            <a href="#" class="text-slate-400 hover:text-gold-500 transition-colors"><i class="fas fa-external-link-alt"></i></a>
                        </div>
                        <h3 class="text-xl font-bold text-slate-100 mb-2 group-hover:text-gold-500 transition-colors leading-tight">Machine Learning Essentials for Business and Technical Decision Makers (Bahasa Indonesia)</h3>
                        <p class="text-gold-500/80 text-sm mb-4 font-mono">Amazon Web Services</p>
                        <div class="flex items-center text-slate-500 text-xs font-mono mt-auto">
                        </div>
                    </div>
                </div>

                <div class="group relative bg-navy-700 p-8 rounded-xl border border-transparent hover:border-gold-500/30 transition-all duration-300 hover:-translate-y-2 overflow-hidden" data-aos="fade-up">

                    <div class="relative z-10">
                        <div class="flex items-center justify-between mb-6">
                            <div class="text-gold-500 text-4xl">
                                <i class="fab fa-aws"></i>
                            </div>
                            <a href="#" class="text-slate-400 hover:text-gold-500 transition-colors"><i class="fas fa-external-link-alt"></i></a>
                        </div>
                        <h3 class="text-xl font-bold text-slate-100 mb-2 group-hover:text-gold-500 transition-colors leading-tight">Machine Learning Terminology and Process (Bahasa Indonesia)</h3>
                        <p class="text-gold-500/80 text-sm mb-4 font-mono">Amazon Web Services</p>
                        <div class="flex items-center text-slate-500 text-xs font-mono mt-auto">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-24 bg-navy-900/10 text-slate-300">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center mb-16 justify-center text-center flex-col">
                <p class="text-gold-500 font-mono text-lg mb-4" data-aos="fade-up">04. What's Next?</p>
                <h2 class="text-4xl md:text-5xl font-bold text-slate-100 mb-6" data-aos="fade-up" data-aos-delay="100">Contact Me</h2>
                <div class="h-px bg-slate-700 w-24 mx-auto mb-8" data-aos="fade-up" data-aos-delay="150"></div>
                <p class="text-lg text-slate-400 max-w-xl mx-auto mb-12" data-aos="fade-up" data-aos-delay="200">
                    I'm currently looking for new opportunities. Whether you have a question, a project proposal, or just want to say hi, I'll try my best to get back to you!
                </p>

                <div class="grid md:grid-cols-2 gap-6 w-full max-w-2xl mx-auto" data-aos="fade-up" data-aos-delay="300">
                    <!-- WhatsApp -->
                    <a href="https://wa.me/08xxxxxxxxx" target="_blank" class="group relative bg-navy-800 p-8 rounded-xl border border-transparent hover:border-gold-500/30 transition-all duration-300 hover:-translate-y-2 overflow-hidden">

                        <div class="relative z-10 flex flex-col items-center">
                            <div class="w-16 h-16 bg-navy-900 rounded-full flex items-center justify-center mb-4 shadow-lg group-hover:scale-110 transition-transform duration-300 border border-gold-500/20">
                                <i class="fab fa-whatsapp text-3xl" style="color: #25D366;"></i>
                            </div>
                            <h3 class="text-xl font-bold text-slate-100 mb-1">WhatsApp</h3>
                             <p class="font-mono text-sm text-gold-500">Chat Now</p>
                            <p class="text-sm text-slate-400 mt-2 hover:text-white transition-colors">+62 8xx-xxxx-xxx</p>
                        </div>
                    </a>

                     <!-- Gmail -->
                    <a href="mailto:yourname@example.com" class="group relative bg-navy-800 p-8 rounded-xl border border-transparent hover:border-gold-500/30 transition-all duration-300 hover:-translate-y-2 overflow-hidden">

                        <div class="relative z-10 flex flex-col items-center">
                             <div class="w-16 h-16 bg-navy-900 rounded-full flex items-center justify-center mb-4 shadow-lg group-hover:scale-110 transition-transform duration-300 border border-gold-500/20">
                                <i class="far fa-envelope text-3xl" style="color: #EA4335;"></i>
                             </div>
                            <h3 class="text-xl font-bold text-slate-100 mb-1">Email</h3>
                             <p class="font-mono text-sm text-gold-500">Send a Message</p>
                            <p class="text-sm text-slate-400 mt-2 hover:text-white transition-colors">yourname@example.com</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection
