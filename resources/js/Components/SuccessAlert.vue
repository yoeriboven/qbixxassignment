<template>
    <div class="rounded-md bg-green-50 p-4 border border-green-500 mt-2">
        <div class="flex">
            <div class="flex-shrink-0">
                <CheckCircleIcon class="h-5 w-5 text-green-400" aria-hidden="true" />
            </div>
            <div class="ml-3">
                <h3 class="text-sm font-medium text-green-800">
                    <slot name="title"></slot>
                </h3>
            </div>
        </div>
    </div>
</template>

<script setup>
import {CheckCircleIcon} from '@heroicons/vue/24/solid';
</script>
