{{-- <a href="/">
    <svg class="w-16 h-16" viewbox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M11.395 44.428C4.557 40.198 0 32.632 0 24 0 10.745 10.745 0 24 0a23.891 23.891 0 0113.997 4.502c-.2 17.907-11.097 33.245-26.602 39.926z" fill="#6875F5"/>
        <path d="M14.134 45.885A23.914 23.914 0 0024 48c13.255 0 24-10.745 24-24 0-3.516-.756-6.856-2.115-9.866-4.659 15.143-16.608 27.092-31.75 31.751z" fill="#6875F5"/>
    </svg>
</a> --}}
<a href="{{ route('home') }}">
    <svg xmlns="http://www.w3.org/2000/svg" width="200" height="200" viewBox="0 0 200 200" {{ $attributes }}>
        <defs>
            <linearGradient id="redGradient" x1="0%" y1="0%" x2="100%" y2="0%">
                <stop offset="0%" style="stop-color:#ff0000;stop-opacity:1" />
                <stop offset="100%" style="stop-color:#ff5733;stop-opacity:1" />
            </linearGradient>
            <linearGradient id="orangeGradient" x1="0%" y1="0%" x2="100%" y2="0%">
                <stop offset="0%" style="stop-color:#ff8700;stop-opacity:1" />
                <stop offset="100%" style="stop-color:#ffcc00;stop-opacity:1" />
            </linearGradient>
        </defs>
        <rect x="20" y="20" width="160" height="160" rx="10" ry="10" fill="url(#redGradient)" />
        <rect x="40" y="40" width="120" height="120" rx="10" ry="10" fill="url(#orangeGradient)" />
        <text x="100" y="140" font-size="125" text-anchor="middle" fill="#ffffff" font-weight="bold">Q</text>
    </svg>
</a>
