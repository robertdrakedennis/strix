<template>
    <label :for="id" :class="['input', invalid === true ? 'input--invalid' : 'none', 'input--' + size]">
        <input
            class="input__content"
            :id="id"
            :type="type"
            :name="name"
            :required="required"
            v-on:input="updateValue($event.target.value)"
            :value="value"
            @focus="input_focused = true"
            @focusout="input_focused = false"
            :placeholder="placeholder">

        <span :class="['input__label', input_focused === true ? 'input--focused' : 'input--unfocused']">
            <slot />
        </span>
    </label>
</template>

<script>
    export default {
        name: "Input",
        data() {
            return {
                input_focused: null,
                classes: null
            }
        },
        props: {
            id: {
                type: String,
                required: true
            },
            name: {
                type: String,
                required: true
            },
            type: {
                type: String,
                required: true
            },
            required: {
                type: Boolean,
                required: true
            },
            placeholder: {
                type: String,
                required: false
            },
            value: {
                type: String
            },
            disabled: {
                type: Boolean,
                default: false
            },
            invalid: {
                type: Boolean,
                default: false
            },
            size: {
                type: String,
                default: 'medium',
            }
        },
        methods: {
            updateValue: function (value) {
                this.$emit('input', value)
            }
        },
    }
</script>

<style lang="scss">
    .input {
        @apply relative flex flex-row items-center justify-between flex-grow flex-shrink-0;
    }

    .input__content {
        @apply h-full w-full bg-transparent appearance-none border-0 border-b border-neutral-200 rounded-none text-neutral-100 leading-tight transition-all duration-300 ease-in-out;

        &:focus {
            @apply outline-none border-primary-500;
        }
    }

    .input--medium {
        @apply h-12;
    }

    .input__label {
        @apply absolute pointer-events-none text-neutral-200 origin-top-left transition-all duration-300;

        transform: translate(0, 0) scale(1);
    }

    .input--focused {
        @apply origin-top-left;

        transform: translate(0, -28px) scale(0.75);
    }

    .input__content:not(:placeholder-shown) + .input__label {
        transform: translate(0, -28px) scale(0.75);
    }
</style>
