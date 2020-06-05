<template>
    <component :is="computedType" :href="url" :to="url" :class="classes" :disabled="disabled" :style="{ backgroundColor: themeColor, height: `calc(${height})`, width: `calc(${width})` }">
        <div v-if="icon" class="button__icon">
            <slot name="icon" />
        </div>

        <span class="button__text">
            <slot />
        </span>
    </component>
</template>

<script>
    export default {
        name: "Button",
        data() {
            return {
                classes: [
                    'button',
                    'button--' + this.size ,
                    'button--' + this.variant,
                    'button--shadow-' + this.shadow,
                    'button--font-' + (this.bold ? 'bold' : 'none'),
                    'button--hover-' + (this.hover ? 'variant' : 'default'),
                    'button--' + (this.disabled ? 'disabled' : 'enabled'),
                    'button--position-' + (this.centered ? 'centered' : 'default'),
                ],
            }
        },
        props: {
            type: {
                type: String,
                default: 'button',
            },
            external: {
                type: Boolean,
                default: false,
            },
            url: {
                type: [String, Object],
                default: null
            },
            size: {
                type: String,
                default: 'medium'
            },
            variant: {
                type: String,
                default: 'primary'
            },
            shadow: {
                type: String,
                default: 'shadow'
            },
            hover: {
                type: Boolean,
                default: true
            },
            disabled: {
                type: Boolean,
                default: false
            },
            bold: {
                type: Boolean,
                default: false
            },
            height: {
              type: String,
            },
            width: {
                type: String,
            },
            buttonType: {
                type: String,
                default: 'submit'
            },
            loading: {
                type: Boolean,
                default: false
            },
            themeColor: {
                type: String,
                default: null
            },
            icon: {
                type: Boolean,
                default: false
            },
            centered: {
                type: Boolean,
                default: false
            }
        },
        created () {
            this.$watch('$props', this.handler, { deep: true })
        },
        methods: {
            handler(props) {
                if (props.loading === true) {
                    this.disabled = true;
                }

                this.classes = [
                    'button',
                    'button--' + this.size ,
                    'button--' + this.variant,
                    'button--shadow-' + this.shadow,
                    'button--font-' + (this.bold ? 'bold' : 'none'),
                    'button--hover-' + (this.hover ? 'variant' : 'default'),
                    'button--' + (this.disabled ? 'disabled' : 'enabled'),
                    'button--position-' + (this.centered ? 'centered' : 'default'),
                ];
            }
        },
        computed: {
            computedType() {
                if (this.type === 'button') {
                    return 'button';
                }

                if (this.type === 'link' && this.external === true) {
                    return 'a';
                }

                if (this.type === 'link' && this.external === false) {
                    return 'nuxt-link'
                }
            }
        },
    }
</script>

<style lang="scss">
    .button {
        width: 5rem;

        @apply relative font-light inline-flex flex-shrink-0 items-center justify-center text-center text-base px-6 rounded select-none cursor-pointer whitespace-no-wrap;

        &:disabled {
            filter: grayscale(1);

            @apply pointer-events-none cursor-not-allowed text-neutral-500 border-neutral-200 bg-neutral-100 #{!important};
        }
    }

    .button--hover-default {
        &:hover {
            transform: translate3d(0, -1px, 0);
        }
    }

    .button--default {
        @apply bg-neutral-500 text-neutral-100 transition-colors duration-300 ease-in-out;

        &:hover {
            @apply bg-neutral-400;
        }
    }

    .button--primary {
        background: linear-gradient(to right, var(--colors-primary-500) 50%, var(--colors-primary-700) 100%);
        background-size: 200%;
        background-position: right 0;

        @apply text-neutral-100 transition-all duration-300 ease-in-out;

        &:hover {
            background-position: 0 0;
        }
    }

    .button--success {
        background: linear-gradient(to right, theme('colors.success.400') 50%, theme('colors.success.600') 100%);
        background-size: 200%;
        background-position: right 0;

        @apply text-white transition-all duration-300 ease-in-out;

        &:hover {
            background-position: 0 0;
        }
    }

    .button--danger {
        background: linear-gradient(to right, theme('colors.danger.400') 50%, theme('colors.danger.600') 100%);
        background-size: 200%;
        background-position: right 0;

        @apply text-white transition-all duration-300 ease-in-out;

        &:hover {
            background-position: 0 0;
        }
    }

    .button--shadow {
        box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.1), 0 1px 2px 0 rgba(0, 0, 0, 0.06);
    }

    .button--small {
        @apply h-6 text-sm;
    }

    .button--medium {
        @apply h-8 text-sm;
    }

    .button--large {
        width: 12.5rem;

        @apply h-10;
    }

    .button--hero {
        @apply h-12;
    }

    .button__text {
        @apply relative z-10;
    }

    .button__icon {
        @apply z-10 h-6 w-6 mr-2;
    }

    .button--position-centered {
        @apply mx-auto;
    }
</style>
