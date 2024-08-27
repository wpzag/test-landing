<div x-data x-ref="heroContent" x-init="initializeHeroAnimations" class="text-center mb-18 relative min-h-[80vh] flex flex-col justify-center items-center">
    <div class="absolute inset-0  opacity-50"></div>

    <div class="relative z-10 px-4">
        <div class="inline-block px-4 py-2 rounded-full bg-gray-800 text-sm mb-6">
            Empowering Educators Worldwide
        </div>
        <h1 class="text-7xl font-bold mb-8 relative">
            <span class="absolute inset-0 bg-gradient-to-r from-indigo-400 via-purple-500 to-pink-500 opacity-30 blur-3xl rounded-[40%_60%_70%_30%/50%_60%_30%_60%] transform -translate-x-1/2 -translate-y-1/2 left-1/2 top-1/2 w-[500px] h-[500px] animate-subtle-pulse"></span>
            Transform Your Teaching with
            <span class="bg-gradient-to-r from-indigo-400 via-purple-500 to-pink-500 text-transparent bg-clip-text relative z-10">
                EduSphere
            </span>
        </h1>
        <p class="text-2xl text-gray-300 mb-12 max-w-3xl mx-auto">
            Innovative tools and resources for modern educators, designed to elevate your teaching experience and inspire
            your students in the digital age.
        </p>
        <div class="flex justify-center space-x-6 pt-10">
            <a x-ref="getStartedButton" href="#" class="group relative block">
                <div
                    class="flex items-center justify-center gap-3 rounded-br-3xl rounded-tl-3xl bg-purple-600 px-10 py-5 text-lg transition duration-200 will-change-transform group-hover:-translate-x-0.5 group-hover:-translate-y-0.5 motion-reduce:transition-none">
                    <div>Get Started</div>
                    <div
                        class="transition duration-300 will-change-transform group-hover:scale-105 motion-reduce:transition-none">
                        <svg class="w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 10V3L4 14h7v7l9-11h-7z" />
                        </svg>
                        <div class="absolute inset-0 bg-gradient-to-r from-indigo-400 via-purple-500 to-pink-500 opacity-20 blur-lg rounded-full"></div>
                    </div>
                </div>
                <div
                    class="absolute inset-0 -z-10 h-full w-full translate-x-1.5 translate-y-1.5 rounded-br-3xl rounded-tl-3xl bg-purple-400 transition duration-300 will-change-transform group-hover:translate-x-2 group-hover:translate-y-2 group-hover:bg-purple-300 motion-reduce:transition-none">
                </div>
            </a>
            <a x-ref="watchDemoButton" href="#" class="group relative block">
                <div
                    class="flex items-center justify-center gap-3 rounded-br-3xl rounded-tl-3xl bg-gray-700 px-10 py-5 text-lg transition duration-200 will-change-transform group-hover:-translate-x-0.5 group-hover:-translate-y-0.5 motion-reduce:transition-none">
                    <div>Watch Demo</div>
                    <svg class="w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
                <div
                    class="absolute inset-0 -z-10 h-full w-full translate-x-1.5 translate-y-1.5 rounded-br-3xl rounded-tl-3xl bg-gray-500 transition duration-300 will-change-transform group-hover:translate-x-2 group-hover:translate-y-2 group-hover:bg-gray-400 motion-reduce:transition-none">
                </div>
            </a>
        </div>
    </div>

    <div class="absolute bottom-0 left-0 right-0 h-24 bg-gradient-to-t from-gray-900 to-transparent"></div>
</div>

<script>
    function initializeHeroAnimations() {
        if (reducedMotion) return;

        const tl = gsap.timeline();

        tl.fromTo(this.$refs.heroContent,
            { autoAlpha: 0, y: 50 },
            { autoAlpha: 1, y: 0, duration: 1, ease: 'power3.out' }
        )
        .fromTo(this.$refs.heroContent.querySelector('h1'),
            { scale: 0.8, opacity: 0 },
            { scale: 1, opacity: 1, duration: 0.7, ease: 'back.out(1.7)' },
            '-=0.5'
        )
        .fromTo(this.$refs.heroContent.querySelector('p'),
            { y: 20, opacity: 0 },
            { y: 0, opacity: 1, duration: 0.5, ease: 'power2.out' },
            '-=0.3'
        )
        .fromTo([this.$refs.getStartedButton, this.$refs.watchDemoButton],
            { autoAlpha: 0, scale: 0.8 },
            { autoAlpha: 1, scale: 1, duration: 0.7, ease: 'elastic.out(1, 0.5)', stagger: 0.1 },
            '-=0.2'
        );

        // Subtle parallax effect on scroll
        gsap.to(this.$refs.heroContent.querySelector('h1'), {
            y: -30,
            ease: 'none',
            scrollTrigger: {
                trigger: this.$refs.heroContent,
                scrub: true,
                start: 'top top',
                end: 'bottom top'
            }
        });
    }
</script>
