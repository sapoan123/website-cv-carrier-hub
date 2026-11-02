<x-frontend-layout :seo="$seo ?? null">
    @include('frontend.navbar')
    @include('frontend.beranda')
    @include('frontend.keunggulan')
    @include('frontend.template-cv')
    @include('frontend.cara-buat-cv')
    @include('frontend.testimoni')
    @include('frontend.faq')
    @include('frontend.tentang-kami')
    @include('frontend.kontak')
    @include('frontend.footer')
</x-frontend-layout>
