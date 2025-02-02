<template>
    <AdminLayout>
        <Head :title="'Edit ' + client.name " />

        <div class="w-full py-8 flex justify-center">
            <div class="block p-6 rounded-lg shadow-lg bg-white w-2/3">
                <h1 class="font-bold text-xl">Edit {{ client.name }}</h1>

                <form method="POST" @submit.prevent="submitForm(client.id)">
                    <div class="form-group mb-6">
                        <label for="name" class="form-label inline-block mb-2 text-gray-700">
                            Name
                        </label>
                        <input
                            id="name"
                            name="name"
                            type="text"
                            v-model="form.name"
                            placeholder="Enter client name"
                            class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                        >

                        <div v-if="form.errors.name" class="mt-2 font-semibold text-red-500">
                            {{ form.errors.name }}
                        </div>
                    </div>

                    <div>
                        <div class="flex justify-between items-center">
                            <h2 class="text-lg font-semibold">Items</h2>
                            <div>
                                <label for="language" class="block text-sm font-medium text-gray-700">Language</label>
                                <select @change="changeLanguage($event)" id="language" name="language" class="mt-1 block w-full rounded-md border-gray-300 py-2 pl-3 pr-10 text-base focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm">
                                    <option value="en">English</option>
                                    <option value="nl">Dutch</option>
                                    <option value="fr">French</option>
                                </select>
                            </div>
                        </div>
                        <div class="space-y-8">
                            <div v-for="(item, index) in form.items[selectedLanguage]" :key="item.id">
                                <span class="font-semibold">Item {{ index + 1 }}</span>
                                <div class="space-y-4">
                                    <div>
                                        <label :for="selectedLanguage + '-' + index + '-title'"
                                               class="form-label inline-block mb-2 text-gray-700">
                                            Title
                                        </label>
                                        <input
                                            :id="selectedLanguage + '-' + index + '-title'"
                                            name="name"
                                            type="text"
                                            v-model="form.items[selectedLanguage][index].title"
                                            placeholder="Enter title"
                                            class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                        >

                                        <div v-if="errorForItem(index, 'title')" class="mt-2 font-semibold text-red-500">
                                            {{ errorForItem(index, 'title') }}
                                        </div>
                                    </div>
                                    <div>
                                        <label :for="selectedLanguage + '-' + index + '-paragraph'"
                                               class="form-label inline-block mb-2 text-gray-700">
                                            Paragraph
                                        </label>
                                        <textarea
                                            :id="selectedLanguage + '-' + index + '-paragraph'"
                                            name="name"
                                            type="text"
                                            v-model="form.items[selectedLanguage][index].paragraph"
                                            placeholder="Enter title"
                                            class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                        ></textarea>

                                        <div v-if="errorForItem(index, 'paragraph')" class="mt-2 font-semibold text-red-500">
                                            {{ errorForItem(index, 'paragraph') }}
                                        </div>
                                    </div>
                                    <div>
                                        <label :for="selectedLanguage + '-' + index + '-type'"
                                               class="block text-sm font-medium text-gray-700">
                                            Type
                                        </label>
                                        <select
                                            v-model="item.type"
                                            :id="selectedLanguage + '-' + index + '-type'"
                                            name="language"
                                            class="mt-1 block w-full rounded-md border-gray-300 py-2 pl-3 pr-10 text-base focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm"
                                        >
                                            <option :value="ClientItemType.Wisdom">Wisdom</option>
                                            <option :value="ClientItemType.Philosophy">Philosophy</option>
                                            <option :value="ClientItemType.Design">Design</option>
                                        </select>

                                        <div v-if="errorForItem(index, 'type')" class="mt-2 font-semibold text-red-500">
                                            {{ errorForItem(index, 'type') }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="w-full flex mt-4 items-end justify-end space-x-8">
                        <button type="submit" :disabled="form.processing" class="inline-block px-6 py-2 border-2 border-blue-600 bg-blue-600 border-blue-600 text-white leading-tight font-bold rounded hover:bg-blue-500 focus:outline-none focus:ring-0 transition duration-150 ease-in-out">
                            Update Client
                        </button>
                    </div>
                </form>

            </div>
        </div>
    </AdminLayout>
</template>

<script>
    import {useForm} from '@inertiajs/inertia-vue3'
    import AdminLayout from '@/js/Layouts/AdminLayout.vue'
    import { ClientItemType} from "@/js/enums.js"

    export default {
        components: {
            AdminLayout,
        },

        props: {
            client: Object,
        },

        setup(props) {
            const form = useForm({
                name: props.client.name,
                items: props.client.items
            })

            return {form}
        },

        data() {
            return {
                selectedLanguage: 'en',
                ClientItemType: ClientItemType,
            }
        },

        methods: {
            changeLanguage(event) {
                this.selectedLanguage = event.target.value;
            },
            submitForm(id) {
                this.form.put('/admin/clients/' + id, {
                    preserveState: true,
                    preserveScroll: true
                })
            },
            errorForItem(index, field) {
                const key = 'items.' + this.selectedLanguage + '.' + index + '.' + field;

                return this.form.errors[key];
            }
        }
    }
</script>
