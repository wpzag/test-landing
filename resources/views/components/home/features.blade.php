<div x-data="{ featuresVisible: false, features: [
    {
        icon: 'M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z',
        title: 'AI-Powered Paths',
        description: 'Create engaging and personalized learning experiences with our intelligent assistant.',
        color: 'indigo'
    },
    {
        icon: 'M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z',
        title: 'Interactive Collaboration',
        description: 'Foster teamwork and peer-to-peer learning with our advanced collaboration tools.',
        color: 'purple'
    },
    {
        icon: 'M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01',
        title: 'Comprehensive Analytics',
        description: 'Track student progress and identify areas for improvement with our real-time analytics dashboard.',
        color: 'pink'
    },
    {
        icon: 'M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4',
        title: 'Adaptive Learning Paths',
        description: 'Personalize learning journeys with AI-driven content recommendations and adaptive assessments.',
        color: 'green'
    },
    {
        icon: 'M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z',
        title: 'Virtual Classroom',
        description: 'Conduct immersive online classes with integrated video conferencing and interactive whiteboards.',
        color: 'yellow'
    },
    {
        icon: 'M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z',
        title: 'Advanced Security',
        description: 'Ensure data privacy and protection with state-of-the-art encryption and compliance measures.',
        color: 'blue'
    }
] }" x-init="initializeFeaturesAnimations" class="py-24 relative">
    <div class="container mx-auto px-4">
        <h2 x-ref="featuresTitle" class="text-5xl font-bold mb-8 text-center relative">
            <span class="bg-gradient-to-r from-indigo-400 via-purple-500 to-pink-500 text-transparent bg-clip-text">
                Cutting-Edge Features
            </span>
        </h2>
        <div x-ref="featuresDivider" class="w-24 h-1 bg-indigo-500 mx-auto mb-16 rounded-full"></div>

        <div class="relative">
            <div x-ref="featuresGrid" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-12 relative z-10">
                <template x-for="(feature, index) in features" :key="index">
                    <div class="feature-card">
                    <div class="bg-gray-800 cursor-pointer h-full rounded-lg p-8 relative overflow-hidden  flex flex-col items-center text-center hover:bg-gray-700 hover:scale-105 transition-all duration-300 group">
                        <svg class="w-12 h-12 mb-6" :class="'text-' + feature.color + '-500 group-hover:text-' + feature.color + '-400'" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" :d="feature.icon" />
                        </svg>
                        <h3 class="text-2xl font-semibold mb-4 group-hover:text-white" x-text="feature.title"></h3>
                        <p class="text-gray-300 group-hover:text-gray-100" x-text="feature.description"></p>
                    </div>
                    </div>
                </template>
            </div>
        </div>
    </div>
</div>

<script>
    function initializeFeaturesAnimations() {
        if (window.reducedMotion) return;

        // Wait for Alpine to finish rendering
        this.$nextTick(() => {
            const featuresTitle = this.$refs.featuresTitle;
            const featuresDivider = this.$refs.featuresDivider;
            const featureCards = this.$refs.featuresGrid.querySelectorAll('.feature-card');



            const tl = gsap.timeline({
                scrollTrigger: {
                    trigger: featuresTitle,
                    start: 'top 80%',
                    end: 'bottom 20%',
                    // toggleActions: 'play none none reverse'
                }
            });

            tl.fromTo(featuresTitle,
                { autoAlpha: 0, y: 30 },
                { autoAlpha: 1, y: 0, duration: 0.5, ease: 'power3.out' }
            )
            .fromTo(featuresDivider,
                { scaleX: 0 },
                { scaleX: 1, duration: 0.6, ease: 'power2.out' },
                '-=0.4'
            )
            .fromTo(featureCards,
                { opacity: 0, y: -10 },
                {
                    opacity: 1,
                    y: 0,
                    duration: 0.8,
                    stagger: {
                        each: 0.1,
                        from: "start",
                        ease: "power2.inOut"
                    }
                },
                '-=0.4'
            );
        });
    }
</script>
