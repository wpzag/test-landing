<div x-data x-init="initializeTestimonialHighlightAnimations" class="relative overflow-x-clip py-40 md:py-32 bg-gray-900">
    <div class="absolute w-[700px] h-[700px] left-[30%] top-[-20%] animate-pulse-slow">
        <img src="https://livewire.laravel.com/img/blur.svg" alt="Background blur" class="w-full h-full object-cover">
    </div>

    <blockquote x-ref="quote" class="mx-auto max-w-4xl px-6 relative z-10">
        <p class="text-center text-3xl font-semibold text-white sm:text-4xl md:text-5xl">
            <span class="text-gray-500">"</span>EduSphere has transformed our teaching methods and student engagement<span class="text-gray-500">"</span>
        </p>

        <div x-ref="author" class="mt-8 flex items-center justify-center gap-6">
            <img class="w-[73px] h-[73px] shrink-0 rounded-full object-cover" src="https://randomuser.me/api/portraits/women/65.jpg" alt="Sarah Johnson">

            <div>
                <cite class="font-medium not-italic text-white">
                    Sarah Johnson
                </cite>

                <p class="mt-1 text-sm text-gray-400">Principal, Westfield High School</p>
            </div>
        </div>
    </blockquote>
</div>

<script>
    function initializeTestimonialHighlightAnimations() {
        if (window.reducedMotion) return;

        this.$nextTick(() => {
            const quote = this.$refs.quote;
            const author = this.$refs.author;

            gsap.registerPlugin(ScrollTrigger);

            const tl = gsap.timeline({
                scrollTrigger: {
                    trigger: quote,
                    start: 'top 80%',
                }
            });

            tl.fromTo(quote,
                { autoAlpha: 0, y: 30 },
                { autoAlpha: 1, y: 0, duration: 0.8, ease: 'power3.out' }
            )
            .fromTo(author,
                { autoAlpha: 0, y: 20 },
                { autoAlpha: 1, y: 0, duration: 0.6, ease: 'power2.out' },
                '-=0.4'
            );
        });
    }
</script>

<style>
    @keyframes pulse-slow {
        0%, 100% {
            opacity: 0.5;
            transform: scale(1);
        }
        50% {
            opacity: 0.7;
            transform: scale(1.05);
        }
    }

    .animate-pulse-slow {
        animation: pulse-slow 5s infinite;
    }
</style>
