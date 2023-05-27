<x-guest-layout>
    <div class="container mx-auto py-10">
        <h2 class="text-center text-2xl mb-4">A Farm lakói</h2>
        <div class="grid grid-cols-4 gap-4">
            <div class="border border-1 border-black dynamic-height"></div>
            <div class="border border-1 border-black dynamic-height"></div>
            <div class="border border-1 border-black dynamic-height"></div>
            <div class="border border-1 border-black dynamic-height"></div>
            <div class="border border-1 border-black dynamic-height"></div>
            <div class="border border-1 border-black dynamic-height"></div>
            <div class="border border-1 border-black dynamic-height"></div>
            <div class="border border-1 border-black dynamic-height"></div>
        </div>
    </div>

    <script>
        function setDynamicHeight() {
            const dynamicDivs = document.querySelectorAll('.dynamic-height');
            dynamicDivs.forEach((div) => {
                const width = div.offsetWidth;
                div.style.height = `${width}px`;
            });
        }

        setDynamicHeight();
        window.addEventListener('resize', setDynamicHeight);
    </script>
</x-guest-layout>