<div x-data="{
    partners: [
        { name: 'Fly.io', logo: 'https://livewire.laravel.com/img/sponsors/fly.svg', url: 'https://fly.io/' },
        { name: 'Tighten Co.', logo: 'https://livewire.laravel.com/img/sponsors/tighten.svg', url: 'https://tighten.com/' },
        { name: 'JetBrains', logo: 'https://livewire.laravel.com/img/sponsors/jetbrains.svg', url: 'https://www.jetbrains.com/' },
        { name: 'Laravel', logo: 'https://livewire.laravel.com/img/sponsors/laravel.svg', url: 'https://laravel.com/' },
        { name: 'DevSquad', logo: 'https://livewire.laravel.com/img/sponsors/devsquad.svg', url: 'https://devsquad.com/' },
        { name: 'Patiently', logo: 'https://livewire.laravel.com/img/sponsors/patiently.svg', url: 'https://patiently.com/' },
        { name: 'Larajobs', logo: 'https://livewire.laravel.com/img/sponsors/larajobs.svg', url: 'https://larajobs.com/' },
        { name: 'Fathom Analytics', logo: 'https://livewire.laravel.com/img/sponsors/fathom.svg', url: 'https://usefathom.com/' },
        { name: 'Getform.io', logo: 'https://livewire.laravel.com/img/sponsors/getform.svg', url: 'https://getform.io/' },
    ],

}" x-init="initializePartnersAnimation" class="py-24 px-4 sm:px-6 lg:px-8 bg-gray-900 relative ">
    <div class="absolute inset-0 opacity-15 magicpattern"></div>
    <div class="max-w-7xl mx-auto relative z-10 ">
        <div x-ref="partnersTitle" class="text-center mb-16">
            <h2 class="text-4xl font-bold text-white sm:text-5xl leading-tight mb-4">
                Partnering with
                <span class="bg-gradient-to-r from-indigo-400 via-purple-500 to-pink-500 text-transparent bg-clip-text">
                    Global Leaders
                </span>
            </h2>
            <p class="mt-4 text-xl text-gray-300 max-w-3xl mx-auto">
                Collaborating with world-class institutions to revolutionize education technology
            </p>
        </div>
        <div x-ref="partnersGrid" class="flex flex-wrap justify-center gap-8 items-center">
            <template x-for="partner in partners" :key="partner.name">
                <div class="partner-logo flex justify-center items-center p-4">
                    <img :src="partner.logo" :alt="partner.name" class="max-h-16 max-w-full object-contain filter grayscale hover:grayscale-0 transition-all duration-300 hover:scale-110">
                </div>
            </template>
        </div>
    </div>
</div>

<script>
    function initializePartnersAnimation() {
        if (window.reducedMotion) return;

        this.$nextTick(() => {
            const partnersTitle = this.$refs.partnersTitle;
            const partnerLogos = this.$refs.partnersGrid.querySelectorAll('.partner-logo');
            const magicPattern = document.querySelector('.magicpattern');

            const tl = gsap.timeline({
                scrollTrigger: {
                    trigger: partnersTitle,
                    start: 'top 80%',
                    end: 'bottom 20%',
                }
            });

            tl.fromTo(partnersTitle,
                { autoAlpha: 0, y: 30 },
                { autoAlpha: 1, y: 0, duration: 0.5, ease: 'power3.out' }
            )
            .fromTo(partnerLogos,
                { opacity: 0, scale: 0.8, y: 20 },
                {
                    opacity: 1,
                    scale: 1,
                    y: 0,
                    duration: 0.4,
                    stagger: {
                        each: 0.03,
                        from: "center",
                        ease: "back.out(2)"
                    }
                },
                "-=0.3"

            )

            .fromTo(magicPattern,
                { opacity: 0 },
                { opacity: 0.15, duration: 0.5, ease: 'power3.out' },
                '-=0.5'
            );
        });
    }
</script>
