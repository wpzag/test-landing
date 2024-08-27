<x-layouts.base>
    <div x-data="{ showContent: false }" x-init="initializePageAnimations"
        class="relative bg-gray-900 text-white min-h-screen overflow-hidden opacity-0">
        <div class="relative container mx-auto px-4 py-16">
            <x-home.header />
            <x-home.hero />
            <x-home.features />
            <x-home.featured-partners />
            <x-home.testimonials />
            <x-home.testimonial-highlight />
            <x-home.cta /> <!-- Add this line -->
            {{-- <x-home.popular-classes /> --}}
            <x-home.footer />
        </div>
    </div>
</x-layouts.base>

<script>
    function initializePageAnimations() {
        if (reducedMotion) return;

        gsap.to(this.$el, {
            duration: 1.5,
            opacity: 1,
            ease: 'power3.inOut',
            onComplete: () => {
                gsap.to('.bg-gradient', {
                    duration: 20,
                    rotation: 360,
                    repeat: -1,
                    ease: 'none'
                });
            }
        });
    }
</script>

<style>
    @keyframes floating {
        0%, 100% {
            transform: translateY(0) rotate(0deg);
        }
        25% {
            transform: translateY(-10px) rotate(-2deg);
        }
        75% {
            transform: translateY(10px) rotate(2deg);
        }
    }

    .animate-floating {
        animation: floating 8s ease-in-out infinite;
    }

    @keyframes glow {
        0%, 100% {
            filter: drop-shadow(0 0 5px rgba(99, 102, 241, 0.7));
        }
        50% {
            filter: drop-shadow(0 0 20px rgba(99, 102, 241, 0.9));
        }
    }

    .animate-glow {
        animation: glow 4s ease-in-out infinite;
    }
</style>
