<template>
    <Head :title="client.name" />

    <div class="min-h-screen bg-[#575F65] font-[Montserrat]">
        <div class="bg-white px-4 py-2 flex justify-between items-center">
            <h2 class="text-"> {{ client.name }}</h2>
            <Menu as="div" class="relative inline-block text-left">
    <div>
      <MenuButton class="inline-flex w-full justify-center rounded-lg bg-[#249EEA] px-4 py-2 text-[14px] font-medium text-white shadow-sm hover:bg-sky-700">
          {{  languageString }}
        <ChevronDownIcon class="-mr-1 ml-2 h-5 w-5" aria-hidden="true" />
      </MenuButton>
    </div>

    <transition enter-active-class="transition ease-out duration-100" enter-from-class="transform opacity-0 scale-95" enter-to-class="transform opacity-100 scale-100" leave-active-class="transition ease-in duration-75" leave-from-class="transform opacity-100 scale-100" leave-to-class="transform opacity-0 scale-95">
      <MenuItems class="absolute right-0 z-10 mt-2 w-56 origin-top-right rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none">
        <div class="py-1">
          <MenuItem v-slot="{ active }">
            <button @click="changeLanguage('en')" :class="[active ? 'bg-gray-100 text-gray-900' : 'text-gray-700', 'block w-full px-4 py-2 text-sm']">English</button>
          </MenuItem>
          <MenuItem v-slot="{ active }">
            <button @click="changeLanguage('nl')" :class="[active ? 'bg-gray-100 text-gray-900' : 'text-gray-700', 'block w-full px-4 py-2 text-sm']">Dutch</button>
          </MenuItem>
          <MenuItem v-slot="{ active }">
            <button @click="changeLanguage('fr')" :class="[active ? 'bg-gray-100 text-gray-900' : 'text-gray-700', 'block w-full px-4 py-2 text-sm']">French</button>
          </MenuItem>
        </div>
      </MenuItems>
    </transition>
  </Menu>
        </div>
        <div class="p-4">
            <div class="grid grid-cols-3 gap-4">
                <div v-for="item in items[selectedLanguage]" :key="item.id" class="w-full bg-white rounded-lg">
                    <div class="bg-sky-400 text-sky-900 p-2 text-sm font-semibold uppercase mt-8 text-center">
                        {{ item.type }}
                    </div>
                    <div class="p-4 mt-4 text-black space-y-2">
                        <h3 class="text-[50px] font-bold leading-none">{{ item.title}}</h3>
                        <p class="text-[20px]">{{ item.paragraph }}</p>
                        <button class="font-bold text-white text-[16px] bg-[#249EEA] rounded-lg px-2 py-1 hover:bg-sky-600">{{ buttonString }}</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import { Menu, MenuButton, MenuItem, MenuItems } from '@headlessui/vue'
import { ChevronDownIcon } from '@heroicons/vue/20/solid'
    export default {
        components: {
            Menu,
            MenuButton,
            MenuItem,
            MenuItems,
            ChevronDownIcon
        },

        props: {
            client: Object,
            items: Object,
        },

        data() {
            return {
                selectedLanguage: 'en',
            }
        },

        methods: {
            changeLanguage(language) {
                this.selectedLanguage = language
            }
        },

        computed: {
            languageString() {
                if (this.selectedLanguage === 'nl') {
                    return 'Taal';
                }

                if (this.selectedLanguage === 'fr') {
                    return 'Langue';
                }

                return 'Language';
            },

            buttonString() {
                if (this.selectedLanguage === 'nl') {
                    return 'Gewoon een knop';
                }

                if (this.selectedLanguage === 'fr') {
                    return 'Juste un bouton';
                }

                return 'Just a button';
            },
          }
    }
</script>
