<template>
    <li class="has-children">
        <a href="/" v-text="heading" ></a>
        <i class="fas fa-angle-down"></i>
        <ul class="dropdown">
            <li v-for="(content, index) in categories" :key="index">
                <a
                    v-text="content.translations[0].name"
                    :href="`${$root.baseUrl}/${content.slug}`"
                    :target="'_self'">
                </a>
            </li>
        </ul>
    </li>
</template>

<script>
    export default {
        props: [
            'heading',
            'categories',
        ],

        data: function () {
            return {
                'languages': false,
                'subCategory': null,
                'rootCategories': true,
            }
        },


        mounted() {
            console.log(this.categories)
        },
        created() {
            console.log('a sdoajfdaosuhdaos~jd')
        }
    }
</script>
