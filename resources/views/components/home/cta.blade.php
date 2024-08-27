<div x-data x-init="initializeCTAAnimations" class="py-24 relative overflow-hidden">
    <div class="absolute w-[800px] h-[800px] right-[-20%] top-[-10%] animate-pulse-slow opacity-30">
        <img src="{{ Vite::asset('resources/assets/purple-circle.svg') }}" alt="Background shape" class="w-full h-full object-cover">
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div x-ref="ctaContent" class="bg-gradient-to-r from-indigo-600 to-purple-600 rounded-3xl p-12 md:p-20 shadow-2xl">
            <h2 class="text-4xl md:text-5xl font-bold text-white mb-6 leading-tight">
                Ready to Transform Your Educational Experience?
            </h2>
            <p class="text-xl text-indigo-100 mb-10 max-w-3xl">
                Join thousands of educators worldwide who are already using EduSphere to revolutionize their teaching methods and enhance student engagement.
            </p>
            <div class="flex flex-col sm:flex-row gap-6">
                <div class="group">
                    <a href="#" class="inline-flex items-center justify-center px-8 py-4 border border-transparent text-lg font-medium rounded-full text-indigo-600 bg-white hover:bg-indigo-50 transition duration-300 ease-in-out transform group-hover:scale-105 group-active:scale-95">
                        Get Started for Free
                    </a>
                </div>
                <div class="group">
                    <a href="#" class="inline-flex items-center justify-center px-8 py-4 border border-transparent text-lg font-medium rounded-full text-white bg-indigo-500 hover:bg-indigo-400 transition duration-300 ease-in-out transform group-hover:scale-105 group-active:scale-95">
                        Request a Demo
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function initializeCTAAnimations() {
        if (window.reducedMotion) return;

        const ctaContent = this.$refs.ctaContent;

        gsap.fromTo(ctaContent,
            { autoAlpha: 0, y: 50 },
            {
                autoAlpha: 1,
                y: 0,
                duration: 1,
                ease: 'power3.out',
                scrollTrigger: {
                    trigger: ctaContent,
                    start: 'top 80%',
                }
            }
        );

        gsap.fromTo(ctaContent.querySelectorAll('.group'),
            { autoAlpha: 0, y: 20 },
            {
                autoAlpha: 1,
                y: 0,
                duration: 0.8,
                stagger: 0.2,
                ease: 'power3.out',
                scrollTrigger: {
                    trigger: ctaContent,
                    start: 'top 70%',
                }
            }
        );
    }
</script>
