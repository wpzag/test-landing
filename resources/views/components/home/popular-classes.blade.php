@php
$popularClasses = [
    [
        'title' => 'Building User Interface',
        'description' => 'Learn how to apply User Experience (UX) principles to your website designs.',
        'image' => 'https://images.unsplash.com/photo-1541462608143-67571c6738dd?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80',
        'rating' => 4.9,
        'reviews' => 16325,
        'students' => 6100,
        'price' => 17.84,
        'instructors' => [
            'https://images.unsplash.com/photo-1599566150163-29194dcaad36?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=687&q=80',
            'https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=880&q=80',
            'https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=687&q=80',
        ],
    ],
    [
        'title' => 'Web Development Fundamentals',
        'description' => 'Master the basics of HTML, CSS, and JavaScript to build responsive websites.',
        'image' => 'https://images.unsplash.com/photo-1498050108023-c5249f4df085?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1472&q=80',
        'rating' => 4.8,
        'reviews' => 12750,
        'students' => 5200,
        'price' => 15.99,
        'instructors' => [
            'https://images.unsplash.com/photo-1607990281513-2c110a25bd8c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1534&q=80',
            'https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80',
        ],
    ],
    [
        'title' => 'Data Science Essentials',
        'description' => 'Explore data analysis, machine learning, and statistical modeling techniques.',
        'image' => 'https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80',
        'rating' => 4.7,
        'reviews' => 9800,
        'students' => 4300,
        'price' => 19.99,
        'instructors' => [
            'https://images.unsplash.com/photo-1573497019940-1c28c88b4f3e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=687&q=80',
            'https://images.unsplash.com/photo-1560250097-0b93528c311a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=687&q=80',
            'https://images.unsplash.com/photo-1618077360395-f3068be8e001?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=880&q=80',
        ],
    ],
];
@endphp

<div x-data x-init="initializePopularClassesAnimations" class="py-24 bg-gray-900">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div x-ref="popularClassesTitle" class="text-center mb-16">
            <h2 class="text-4xl font-bold text-white sm:text-5xl leading-tight mb-4">
                Explore Our
                <span class="bg-gradient-to-r from-indigo-400 via-purple-500 to-pink-500 text-transparent bg-clip-text">
                    Popular Classes
                </span>
            </h2>
            <p class="mt-4 text-xl text-gray-300 max-w-3xl mx-auto">
                Dive into cutting-edge courses designed to elevate your skills and ignite your passion for learning
            </p>
        </div>

        <div x-ref="popularClassesGrid" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach ($popularClasses as $class)
                <div class="popular-class-card bg-gray-800 rounded-xl shadow-lg overflow-hidden transition-all duration-300 hover:shadow-2xl hover:scale-105">
                    <div class="relative">
                        <img src="{{ $class['image'] }}" alt="{{ $class['title'] }}" class="w-full h-48 object-cover">
                        <div class="absolute top-3 left-3 bg-gray-900 bg-opacity-75 backdrop-blur-sm rounded-full px-3 py-1.5 flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-yellow-400" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                            <span class="ml-1 text-sm font-semibold text-white">{{ $class['rating'] }}</span>
                            <span class="ml-1 text-xs text-gray-300">({{ number_format($class['reviews']) }})</span>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-white mb-2">{{ $class['title'] }}</h3>
                        <p class="text-sm text-gray-400 mb-4">{{ $class['description'] }}</p>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center">
                                <div class="flex -space-x-2 overflow-hidden">
                                    @foreach ($class['instructors'] as $instructor)
                                        <img src="{{ $instructor }}" alt="Instructor" class="w-8 h-8 rounded-full object-cover border-2 border-gray-800">
                                    @endforeach
                                </div>
                                <span class="ml-3 text-sm text-gray-400">{{ number_format($class['students']) }}+ students</span>
                            </div>
                            <span class="text-lg font-bold text-indigo-400">${{ number_format($class['price'], 2) }}</span>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>

<script>
    function initializePopularClassesAnimations() {
        if (window.reducedMotion) return;

        this.$nextTick(() => {
            const popularClassesTitle = this.$refs.popularClassesTitle;
            const popularClassCards = this.$refs.popularClassesGrid.querySelectorAll('.popular-class-card');

            gsap.fromTo(popularClassesTitle,
                { autoAlpha: 0, y: 30 },
                {
                    autoAlpha: 1,
                    y: 0,
                    duration: 0.8,
                    ease: 'power3.out',
                    scrollTrigger: {
                        trigger: popularClassesTitle,
                        start: 'top 80%',
                    }
                }
            );

            gsap.fromTo(popularClassCards,
                { autoAlpha: 0, y: 30 },
                {
                    autoAlpha: 1,
                    y: 0,
                    duration: 0.8,
                    stagger: 0.2,
                    ease: 'power3.out',
                    scrollTrigger: {
                        trigger: this.$refs.popularClassesGrid,
                        start: 'top 70%',
                    }
                }
            );
        });
    }
</script>
