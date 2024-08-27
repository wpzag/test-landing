<div x-data="{
    testimonials: [
        {
            avatar: 'https://i.pravatar.cc/150?img=32',
            name: 'Dr. Emily Chen',
            role: 'University Professor, Stanford',
            quote: 'EduSphere\'s AI-driven analytics have revolutionized how I understand and support my students\' learning journeys. The personalized insights have led to a 30% improvement in student performance.',
            rating: 5,
            subject: 'Data Science'
        },
        {
            avatar: 'https://i.pravatar.cc/150?img=47',
            name: 'Mark Thompson',
            role: 'High School Principal, Westfield Academy',
            quote: 'The collaborative tools in EduSphere have fostered an unprecedented level of engagement among our faculty and students. We\'ve seen a 50% increase in cross-departmental projects.',
            rating: 5,
            subject: 'Educational Leadership'
        },
        {
            avatar: 'https://i.pravatar.cc/150?img=23',
            name: 'Sarah Patel',
            role: 'EdTech Coordinator, Global Learning Initiative',
            quote: 'Implementing EduSphere was seamless. The platform\'s intuitive design has made technology integration a breeze for our teachers, reducing onboarding time by 40%.',
            rating: 4,
            subject: 'Technology Integration'
        },
        {
            avatar: 'https://i.pravatar.cc/150?img=56',
            name: 'Dr. James Wilson',
            role: 'Research Scientist, EdTech Institute',
            quote: 'EduSphere\'s data analytics capabilities have opened up new avenues for educational research. We\'ve been able to identify learning patterns that were previously invisible to us.',
            rating: 5,
            subject: 'Educational Research'
        },
        {
            avatar: 'https://i.pravatar.cc/150?img=60',
            name: 'Lisa Rodriguez',
            role: 'Elementary School Teacher',
            quote: 'The gamification elements in EduSphere have transformed my classroom. My students are more engaged than ever, and their retention of material has improved significantly.',
            rating: 5,
            subject: 'Elementary Education'
        },
        {
            avatar: 'https://i.pravatar.cc/150?img=53',
            name: 'Michael Chang',
            role: 'Director of Online Learning, Virtual Academy',
            quote: 'EduSphere\'s virtual classroom features are top-notch. We\'ve seen a 25% increase in student participation and a 35% improvement in assignment completion rates.',
            rating: 4,
            subject: 'Online Education'
        }
    ]
}" x-init="initializeSpotlightTestimonials" class="py-24 relative ">
    <div class="absolute w-[700px] h-[700px] left-[30%] -top-[20%] " >
        <img src="{{ Vite::asset('resources/assets/blue-circle.svg') }}" alt="Background blur"
            class="w-full h-full object-cover">
    </div>
     {{-- <div class="absolute w-[700px] h-[700px] left-[10%] top-[-30%] animate-pulse-slow opacity-75">
        <img src="{{ Vite::asset('resources/assets/blur.svg') }}" alt="Background blur"
            class="w-full h-full object-cover">
    </div> --}}

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div x-ref="spotlightTitle" class="text-center mb-16">
            <h2 class="text-4xl font-bold text-white sm:text-5xl leading-tight mb-4">
                Voices of
                <span class="bg-gradient-to-r from-indigo-400 via-purple-500 to-pink-500 text-transparent bg-clip-text">
                    Educational Excellence
                </span>
            </h2>
            <p class="mt-4 text-xl text-gray-300 max-w-3xl mx-auto">
                Hear from educators who are reshaping the future of learning with EduSphere
            </p>
        </div>

        <div x-ref="spotlightCards" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <template x-for="(testimonial, index) in testimonials" :key="index">
                <div class="spotlight-card">
                    <div class=" bg-gray-800 bg-opacity-50 backdrop-filter backdrop-blur-lg rounded-xl p-6 shadow-lg transition-all duration-300 hover:shadow-xl relative overflow-hidden h-full flex flex-col"
                        style="box-shadow: inset 0px -1px 0px rgba(0, 0, 0, 0.5), inset 0px 1px 0px rgba(255, 255, 255, 0.1)">
                    <div class="flex items-center gap-4 mb-6">
                        <img :src="testimonial.avatar" :alt="testimonial.name"
                            class="h-16 w-16 rounded-full border-2 border-indigo-500 object-cover">
                        <div>
                            <cite class="not-italic text-lg font-semibold text-white" x-text="testimonial.name"></cite>
                            <p class="text-sm text-indigo-400" x-text="testimonial.role"></p>
                            <p class="text-xs text-gray-400 mt-1" x-text="'Expertise: ' + testimonial.subject"></p>
                        </div>
                    </div>
                    <div class="relative px-4 py-2 flex-grow">
                        <p class="text-gray-300 italic mb-4 relative z-10" x-text="testimonial.quote"></p>
                    </div>
                    <div class="flex items-center justify-between mt-6">
                        <div class="flex items-center">
                            <template x-for="star in testimonial.rating">
                                <svg class="w-5 h-5 text-yellow-400 fill-current" viewBox="0 0 20 20">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                            </template>
                        </div>
                        <span class="text-sm text-gray-400">Verified EduSphere User</span>
                    </div>
                </div>
            </template>
        </div>
    </div>
</div>

<script>
    function initializeSpotlightTestimonials() {
        if (window.reducedMotion) return;

        const self = this;
        self.$nextTick(() => {
            const spotlightTitle = self.$refs.spotlightTitle;
            const spotlightCards = self.$refs.spotlightCards.querySelectorAll('.spotlight-card');

            gsap.fromTo(spotlightTitle,
                { autoAlpha: 0, y: 30 },
                {
                    autoAlpha: 1,
                    y: 0,
                    duration: 0.8,
                    ease: 'power3.out',
                    scrollTrigger: {
                        trigger: spotlightTitle,
                        start: 'top 80%',
                    }
                }
            );

            gsap.fromTo(spotlightCards,
                { autoAlpha: 0, y: 50 },
                {
                    autoAlpha: 1,
                    y: 0,
                    duration: .5,
                    stagger: 0.1,
                    ease: 'power2.out',
                    scrollTrigger: {
                        trigger: self.$refs.spotlightCards,
                        start: 'top 90%',
                        end: 'bottom 70%',
                    }
                }
            );
        });
    }
</script>

<style>
    @keyframes pulse-slow {

        0%,
        100% {
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
