<template>
    <div>
        <div :class="['editor', `editor--editable-${editable}`, editor_focused === true ? 'focus' : 'none']">
            <editor-menu-bar v-show="editable" :editor="editor" v-slot="{ commands, isActive }">
                <div class="menubar">

                    <button
                        type="button"
                        :class="['menubar__button', 'menubar__button-' + (isActive.bold() ? 'active' : 'none')]"
                        @click="commands.bold">
                        <i class="fal fa-bold fa-fw"></i>
                    </button>

                    <button
                        type="button"
                        :class="['menubar__button', 'menubar__button-' + (isActive.italic() ? 'active' : 'none')]"
                        @click="commands.italic">
                        <i class="fal fa-italic fa-fw"></i>
                    </button>

                    <button
                        type="button"
                        :class="['menubar__button', 'menubar__button-' + (isActive.strike() ? 'active' : 'none')]"
                        @click="commands.strike">
                        <i class="fal fa-strikethrough fa-fw"></i>
                    </button>

                    <button
                        type="button"
                        :class="['menubar__button', 'menubar__button-' + (isActive.underline() ? 'active' : 'none')]"
                        @click="commands.underline">
                        <i class="fal fa-underline fa-fw"></i>
                    </button>

                    <button
                        type="button"
                        :class="['menubar__button', 'menubar__button-' + (isActive.code() ? 'active' : 'none')]"
                        @click="commands.code">
                        <i class="fal fa-code fa-fw"></i>
                    </button>

                    <button
                        type="button"
                        class="menubar__button hover:text-primary-500"
                        :class="{ 'text-primary-500': isActive.paragraph() }"
                        @click="commands.paragraph">
                        <i class="fal fa-paragraph fa-fw"></i>
                    </button>

                    <button
                        type="button"
                        :class="['menubar__button', 'menubar__button-' + (isActive.heading({ level: 1 }) ? 'active' : 'none')]"
                        @click="commands.heading({ level: 1 })">
                        <i class="fal fa-h1 fa-fw"></i>
                    </button>

                    <button
                        type="button"
                        :class="['menubar__button', 'menubar__button-' + (isActive.heading({ level: 2 }) ? 'active' : 'none')]"
                        @click="commands.heading({ level: 2 })">
                        <i class="fal fa-h2 fa-fw"></i>
                    </button>

                    <button
                        type="button"
                        :class="['menubar__button', 'menubar__button-' + (isActive.heading({ level: 3 }) ? 'active' : 'none')]"
                        @click="commands.heading({ level: 3 })">
                        <i class="fal fa-h3 fa-fw"></i>
                    </button>

                    <button
                        type="button"
                        :class="['menubar__button', 'menubar__button-' + (isActive.bullet_list() ? 'active' : 'none')]"
                        @click="commands.bullet_list">
                        <i class="fal fa-list-ul fa-fw"></i>
                    </button>

                    <button
                        type="button"
                        :class="['menubar__button', 'menubar__button-' + (isActive.bullet_list() ? 'active' : 'none')]"
                        @click="commands.ordered_list">
                        <i class="fal fa-list-ol fa-fw"></i>
                    </button>

                    <button
                        type="button"
                        :class="['menubar__button', 'menubar__button-' + (isActive.blockquote() ? 'active' : 'none')]"
                        @click="commands.blockquote">
                        <i class="fal fa-quote-right fa-fw"></i>
                    </button>

                    <button
                        type="button"
                        :class="['menubar__button', 'menubar__button-' + (isActive.code_block() ? 'active' : 'none')]"
                        @click="commands.code_block">
                        <i class="fal fa-code fa-fw"></i>
                    </button>

                    <button
                        type="button"
                        :class="['menubar__button', 'menubar__button-' + (isActive.link() ? 'active' : 'none')]"
                        @click="commands.link">
                        <i class="fal fa-link fa-fw"></i>
                    </button>

                    <button
                        type="button"
                        :class="['menubar__button', 'menubar__button-' + (isActive.image() ? 'active' : 'none')]"
                        @click="commands.image">
                        <i class="fal fa-image fa-fw"></i>
                    </button>

                    <button
                        type="button"
                        class="'menubar__button'"
                        @click="commands.horizontal_rule">
                        <i class="fal fa-horizontal-rule fa-fw"></i>
                    </button>

                    <button
                        type="button"
                        class="'menubar__button'"
                        @click="commands.undo">
                        <i class="fal fa-undo fa-fw"></i>
                    </button>

                    <button
                        type="button"
                        class="'menubar__button'"
                        @click="commands.redo">
                        <i class="fal fa-redo fa-fw"></i>
                    </button>

                </div>
            </editor-menu-bar>

            <editor-content :editor="editor" />
        </div>
    </div>

</template>

<script>
    import { Editor, EditorContent, EditorMenuBar } from 'tiptap';
    import {
        Blockquote,
        CodeBlock,
        HardBreak,
        Heading,
        HorizontalRule,
        OrderedList,
        BulletList,
        ListItem,
        TodoItem,
        TodoList,
        Bold,
        Code,
        // CodeBlockHighlight,
        Italic,
        Link,
        Strike,
        Underline,
        History,
        Image,
    } from 'tiptap-extensions';

    const extensions = [
        new Blockquote(),
        new BulletList(),
        new CodeBlock(),
        // new CodeBlockHighlight({
        //     languages: {
        //         javascript,
        //         css,
        //         php
        //     },
        // }),
        new HardBreak(),
        new Heading({ levels: [1, 2, 3] }),
        new HorizontalRule(),
        new ListItem(),
        new OrderedList(),
        new TodoItem(),
        new TodoList(),
        new Link(),
        new Bold(),
        new Code(),
        new Italic(),
        new Strike(),
        new Underline(),
        new History(),
        new Image(),
    ];

    export default {
        name: "Editor",
        props: {
            value: {},
            content: {
                type: [Object, String],
            },
            editable: {
                type: Boolean,
                default: true
            }
        },
        components: { EditorContent, EditorMenuBar },
        data() {
            return {
                editor: new Editor({
                    editable: this.editable,
                    onUpdate: ({ getJSON }) => {
                        const state = JSON.stringify(getJSON())
                        this.$emit('input', state);
                    },
                    onFocus: () => {
                        this.editor_focused = true;
                    },
                    onBlur: () => {
                        this.editor_focused = false;
                    },
                    extensions: extensions
                }),
                editor_focused: false,
            }
        },
        mounted() {
            if (this.content != null){
                this.editor.setContent(JSON.parse(this.content));
                this.json = this.content;
            }
        },
        beforeDestroy() {
            this.editor.destroy()
        },
    }
</script>

<style>
    .editor {
        @apply border border-primary-200 flex flex-col flex-1 overflow-hidden rounded shadow-none outline-none max-h-full rounded transition-all ease-in-out duration-200 text-black text-left;
    }

    .editor:hover {
        @apply border-black;
    }

    .editor:focus {
        @apply border-black;
    }

    .editor--editable-false {
        @apply border-none border-transparent !important;
    }

    .menubar {
        @apply flex flex-row overflow-hidden flex-shrink-0 bg-primary-100;
    }

    @media(max-width: theme('screens.sm')) {
        .menubar {
            @apply overflow-x-auto;
        }
    }

    .menubar__button {
        @apply inline-flex px-2 py-4 items-center justify-center text-primary-500 transition-all ease-in-out duration-200;
    }

    .menubar__button:hover {
        @apply text-black;
    }

    .focus {
        @apply border-black;
    }

    .ProseMirror[contenteditable="true"] {
        @apply shadow-none outline-none p-4;
    }

    .ProseMirror[contenteditable="true"] h1, h2, h3 {
        @apply flex font-bold mt-6 items-center;
    }

    .ProseMirror[contenteditable="true"] h1 {
        @apply text-2xl;
    }

    .ProseMirror[contenteditable="true"] h2 {
        @apply text-xl;
    }

    .ProseMirror[contenteditable="true"] h3 {
        @apply text-lg;
    }

    .ProseMirror[contenteditable="true"] ul li {
        @apply ml-4 relative list-disc mb-2;
    }

    .ProseMirror[contenteditable="true"] code, pre {
        @apply p-2 bg-black text-white rounded;
    }
</style>
