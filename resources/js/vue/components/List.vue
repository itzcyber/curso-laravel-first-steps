<template>
    <div>
        <h1>Listado de Posts</h1>
        
            <o-table :loading="isLoading" :data="posts.current_page && posts.data.length == 0 ? [] : posts">
                <o-table-column field="id" label="ID" numeric v-slot="p">
                    {{ p.row.id }}
                </o-table-column>
                <o-table-column field="title" label="Titulo" v-slot="p">
                    {{ p.row.title }}
                </o-table-column>
                <o-table-column field="posted" label="Posted" v-slot="p">
                    {{ p.row.posted }}
                </o-table-column>
                <o-table-column field="created_at" label="Fecha" v-slot="p">
                    {{ p.row.created_at }}
                </o-table-column>
                <o-table-column field="category" label="Categoría" v-slot="p">
                    {{ p.row.category.title }}
                </o-table-column>
            </o-table>
        
    <br>
<pre>{{ posts }}</pre>
        <o-pagination 
            v-if="posts.current_page && posts.data.length > 0"
                :total="posts.total" 
                :v-model:current="posts.current_page" 
                :range-before="3"
                :range-after="3" 
                order="centered" 
                size="small" 
                :simple="false" 
                :rounded="true"
                :per-page="posts.per_Page"  
            >
        </o-pagination> 
    </div>
</template>

<script>

    export default {

        data() {
            return {
                posts: [],
                isLoading: true,
            }
        },

    async mounted() {
        this.$axios.get('/api/post').then((res) => {
            this.posts = res.data.data;
            console.log(this.posts);
            this.isLoading = false;
            })
        }
    };

</script>