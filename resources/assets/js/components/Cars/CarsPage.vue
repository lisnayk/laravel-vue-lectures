<template>
    <section class="content">
        <div class="box box-primary">
            <div class="box-header">
                Cars list
            </div>
            <div class="box-body">
                <table class="table table-bordered">
                    <tbody>
                    <tr>
                        <th style="width: 10px">ID</th>
                        <th>Title</th>
                        <th>Year</th>
                        <th>Model</th>
                        <th>Short text</th>
                    </tr>
                    <tr v-for="item of items">
                        <td>{{ item.id }}</td>
                        <td>{{ item.title }}</td>
                        <td>{{ item.year }}</td>
                        <td>{{ item.model.model_name }}</td>
                        <td>
                            {{ item.short_text }}
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div v-if="loading" class="overlay">
                <i class="fa fa-refresh fa-spin"></i>
            </div>
        </div>

    </section>
</template>

<script>
    import config from "../config"

    export default {
        name: "CarsPage",
        data() {
            return {
                config: config,
                items: [],
                loading: true
            }
        },
        mounted() {
            this.featchData();
        },
        methods: {
            featchData() {
                this.loading = true;
                axios.get(this.config.cars.endpoint)
                    .then((response) => {
                        this.loading = false
                        this.items = response.data.data.data;
                        console.log(response)
                    })
                    .catch((data) => {
                        this.loading = false
                        console.log(data)
                    })
            }
        }

    }
</script>

<style scoped>

</style>
