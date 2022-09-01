<template>
    <Head :title="client.name" />

    <div class="min-h-screen bg-[#575F65] font-[Montserrat]">
        <div class="bg-white px-4 py-2 flex justify-between">
            <h2 class="text-"> {{ client.name }}</h2>
            <div>
                English
            </div>
        </div>
        <div class="p-4">
            <div class="grid grid-cols-3 gap-4">
                <div class="w-full bg-white rounded-lg">
                    <div class="bg-sky-400 text-sky-900 p-2 text-sm font-semibold uppercase mt-8 text-center">
                        type a
                    </div>
                    <div class="p-4 mt-4 text-black space-y-2">
                        <h3 class="text-[50px] font-bold leading-none">Titel (push deze up)</h3>
                        <p class="text-[20px]">Lorem ipsum, Lorem ipsum, Lorem ipsum, Lorem ipsum, Lorem ipsum, Lorem ipsum.</p>
                        <button class="font-bold text-white text-[16px] bg-[#249EEA] rounded-lg px-2 py-1 hover:bg-sky-600">Just a button (push deze down)</button>
                    </div>
                </div>
                <div class="w-full bg-white rounded-lg">
                    <div class="bg-orange-400 text-orange-900 p-2 text-sm font-semibold uppercase mt-8 text-center">
                        type b
                    </div>
                    <div class="p-4 mt-4 text-black space-y-2">
                        <h3 class="text-[50px] font-bold leading-none">Titel (push deze up)Titel (push deze up)</h3>
                        <p class="text-[20px]">Lorem ipsum, Lorem ipsum, Lorem ipsum, Lorem ipsum, Lorem ipsum, Lorem ipsum.Lorem ipsum, Lorem ipsum, Lorem ipsum, Lorem ipsum, Lorem ipsum, Lorem ipsum.</p>
                        <button class="font-bold text-white text-[16px] bg-[#249EEA] rounded-lg px-2 py-1 hover:bg-sky-600">Just a button (push deze down)</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props: {
            client: Object,
        },
    }
</script>
