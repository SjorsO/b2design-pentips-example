<x-layout.templates.guest title="Home">

    <h1 class="text-3xl mt-8 mb-4">Designed for more grip and control</h1>

    <x-layout.button>
        All products
    </x-layout.button>

    <div class="flex justify-between mt-8">

        <x-layout.small-product-block title="PenTips 2"
                                      :href="route('products')"
                                      background-url="https://www.b2design.nl/content/uploads/2022/06/jasper-ai-copywriting-tool-100x100.jpg"
        />

        <x-layout.small-product-block title="PenPad"
                                      :href="route('products')"
                                      background-url="https://www.b2design.nl/content/uploads/2022/06/blog-domeinnaam-types-100x100.jpeg"
        />

        <x-layout.small-product-block title="Artist Bundle"
                                      :href="route('products')"
                                      background-url="https://www.b2design.nl/content/uploads/2022/04/Illustraties_blogs_variabletype_Tekengebied-100x100.webp"
        />

    </div>

</x-layout.templates.guest>
