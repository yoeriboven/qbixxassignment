<template>
    <Head :title="client.name" />

    <div class="min-h-screen bg-[#575F65] font-[Montserrat]">
        <div class="bg-white px-4 py-2 flex justify-between items-center">
            <h1> {{ client.name }}</h1>
            <Dropdown>
                <template #button>
                    <MenuButton class="inline-flex w-full justify-center rounded-lg bg-[#249EEA] px-4 py-2 text-[14px] font-medium text-white shadow-sm hover:bg-sky-700">
                        {{  languageString }}
                        <ChevronDownIcon class="-mr-1 ml-2 h-5 w-5" aria-hidden="true" />
                    </MenuButton>
                </template>
                <template #items>
                    <MenuItem v-slot="{ active }">
                        <button @click="changeLanguage('en')" :class="[active ? 'bg-gray-100 text-gray-900' : 'text-gray-700', 'block w-full px-4 py-2 text-sm']">English</button>
                    </MenuItem>
                    <MenuItem v-slot="{ active }">
                        <button @click="changeLanguage('nl')" :class="[active ? 'bg-gray-100 text-gray-900' : 'text-gray-700', 'block w-full px-4 py-2 text-sm']">Dutch</button>
                    </MenuItem>
                    <MenuItem v-slot="{ active }">
                        <button @click="changeLanguage('fr')" :class="[active ? 'bg-gray-100 text-gray-900' : 'text-gray-700', 'block w-full px-4 py-2 text-sm']">French</button>
                    </MenuItem>
                </template>
            </Dropdown>
        </div>
        <div class="p-4">
            <div class="grid md:grid-cols-3 gap-4">
                <div v-for="item in client.items[selectedLanguage]" :key="item.id" class="py-4 flex flex-col h-full bg-white rounded-lg text-black">
                    <div :class="colorsForType(item.type)" class="flex-initial p-2 text-sm font-semibold uppercase text-center">
                        {{ typeString(item.type) }}
                    </div>

                    <div class="flex-auto p-4">
                        <h3 class="text-2xl md:text-[50px] font-bold leading-none line-clamp-2">
                            {{item.title }}
                        </h3>
                        <p class="mt-4 text-[20px]">{{ item.paragraph }}</p>
                    </div>

                    <button class="flex-initial w-fit mx-4 font-bold text-white text-[16px] bg-[#249EEA] rounded-lg px-2 py-1 hover:bg-sky-600">
                        {{ buttonString }}
                    </button>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import { MenuButton, MenuItem } from '@headlessui/vue'
import { ChevronDownIcon } from '@heroicons/vue/20/solid'
import Dropdown from "@/js/Components/Dropdown";
import { ClientItemType} from "@/js/enums.js"

export default {
        components: {
            MenuButton,
            MenuItem,
            ChevronDownIcon,
            Dropdown
        },

        props: {
            client: Object,
        },

        data() {
            return {
                selectedLanguage: 'en',
            }
        },

        methods: {
            changeLanguage(language) {
                this.selectedLanguage = language
            },
            typeString(type) {
                const types = {
                    [ClientItemType.Wisdom] : {
                        "en": "Wisdom",
                        "nl": "Wijsheid",
                        "fr" : "Sagesse"
                    },
                    [ClientItemType.Philosophy] : {
                        "en": "Philosophy",
                        "nl": "Filosofie",
                        "fr" : "Philosophie"
                    },
                    [ClientItemType.Design] : {
                        "en": "Design",
                        "nl": "Ontwerp",
                        "fr" : "Conception"
                    }
                }

                return types[type][this.selectedLanguage];
            },
            colorsForType(type){
                const colors = {
                    [ClientItemType.Wisdom] : 'bg-sky-400 text-sky-900',
                    [ClientItemType.Philosophy] : 'bg-orange-400 text-orange-900',
                    [ClientItemType.Design] : 'bg-green-400 text-green-900',
                }
                return colors[type];
            }
        },

        computed: {
            languageString() {
                return {
                    'en': 'Language',
                    'nl': 'Taal',
                    'fr': 'Langue'
                }[this.selectedLanguage];
            },

            buttonString() {
                return {
                    'en': 'Just a button',
                    'nl': 'Gewoon een knop',
                    'fr': 'Juste un bouton'
                }[this.selectedLanguage];
            },
          }
    }
</script>
