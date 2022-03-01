console.log('vue ok', Vue);

Vue.config.devtools = true;

const app = new Vue({
    el: '#root',
    data: {
        discs: [],
    },

    methods: {
        fetchApi() {
            axios.get('http://localhost/api/dischi').then(res => {
                this.discs = res.data;
            })
        }
    },

    mounted() {
        this.fetchApi();
    }
})